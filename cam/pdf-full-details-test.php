<?php



	require_once('../config.php');
	require_once('auth.php');
require_once("dompdf/dompdf_config.inc.php");
	//require_once('auth-slavecam.php');
	$companyid = $_GET["companyid"];
$year = $_GET['year'];
$month = $_GET['month'];

$html ='<html><body> <div><div>';   

$result = mysql_query("SELECT * FROM company where company_id=".$_GET["companyid"]);
$row = mysql_fetch_assoc($result);
$result1 = mysql_query("SELECT * FROM company_lead where lead_id=".$row["lead_id"]);
$row1 = mysql_fetch_assoc($result1);
$result3 = mysql_query("SELECT * FROM company_contract where lead_id=".$row["lead_id"]);
$row3 = mysql_fetch_assoc($result3);

$html.='<div id="formWrapper"><table border="0" width="100%"><tbody><tr><td width="20%"><h2>'.$row1["cname"].'</h2></td><td width="60%">&nbsp;</td><td width="20%"><img src="../'.$row["clogo"].'" alt="'.$row1["cname"].'" /></td></tr></tbody></table>
<h4 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>COMPLAINT REPORT</strong></h4>';


//echo "SELECT * FROM complaints where company_id=$companyid ORDER BY complaint_id DESC";

if(($year=='')&&($month=='')){
$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND Name_emp='Anonymous' AND location='Anonymous' AND emp_mail='Anonymous' ORDER BY complaint_id DESC");
} elseif(($year!='')&&($month=='')){

$start=$year."-01-01";
$end=$year."-12-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp='Anonymous' AND location='Anonymous' AND emp_mail='Anonymous' ORDER BY complaint_id DESC");

}
 elseif(($year!='')&&($month!='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp='Anonymous' AND location='Anonymous' AND emp_mail='Anonymous' ORDER BY complaint_id DESC");

}
 elseif(($year=='')&&($month!='')){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp='Anonymous' AND location='Anonymous' AND emp_mail='Anonymous' ORDER BY complaint_id DESC");

}
while($row = mysql_fetch_array($result))
  { 

$html.='<div id="complaint_pdf" style="width:auto;height:auto;padding:10px;background-color:#CEF6CE;border:2px solid #04B404; border-radius:5px;margin-bottom:10px; "><table border="1" width="100%">
<tbody><tr style="text-align: center;"><td style="text-align: center;"><strong>Complaint ID</strong></td><td><strong>Name</strong></td><td><strong>Department</strong><td><strong>Complaint Category</strong></td></td><td><strong>Location</strong></td><td><strong>Email ID</strong></td><td><strong>Status</strong></td><td><strong>Created Date</strong></td></tr>
<tr style="text-align: center;"><td>'.$row["ticket"].'</td>';

//$result2 = mysql_query("SELECT * FROM complaint_category where cat_id=".$row["cat_id"]);
//$row2 = mysql_fetch_assoc($result2);

//$html.='<td>'.$row2["category"].'</td>';

//$result3 = mysql_query("SELECT * FROM complaint_department where dep_id=".$row["dep_id"]);
//$row3 = mysql_fetch_assoc($result3);

//$html.='<td>'.$row3["department"].'</td>';

if($row["status"]==0){
$status="Opened";
} elseif($row["status"]==1){
$status="On hold";
} elseif($row["status"]==2){
$status="closed";
} elseif($row["status"]==3){
$status="Processing";
} elseif($row["status"]==4){
$status="Actioned";
}
$result2 = mysql_query("SELECT * FROM complaint_category where cat_id=".$row['cat_id']);
$row2 = mysql_fetch_assoc($result2);

$html.='<td>'.$row["Name_emp"].'</td><td>'.$row["complaint_department"].'</td><td>'.$row2["category"].'</td><td>'.$row["location"].'</td><td>'.$row["emp_mail"].'</td>';
$html.='<td>'.$status.'</td><td>'.$row["created_on"].'</td></tr>';
/*$result2 = mysql_query("SELECT * FROM complaint_category where cat_id=".$row['cat_id']);
$row2 = mysql_fetch_assoc($result2);*/
//$result3 = mysql_query("SELECT * FROM complaint_department where dep_id=".$row['dep_id']);
//$row3 = mysql_fetch_assoc($result3);

$html.='</tbody></table> <h4 style=" margin:3px;color:#6E6E6E;">Complaint Details<h4><div style="margin-top:-15px;margin-bottom:-20px;width:100%;height:auto;border:2px solid #6E6E6E;"><pre style="margin-left:5px;margin-right:5px;">'.$row["detail"].'</pre></div></div>';

 } 
 $filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
 









'</div></div></div></body></html>';
 //echo $html; 

$dompdf = new DOMPDF();

$dompdf->load_html($html);

$dompdf->render();

$dompdf->stream($filename);
  ?>