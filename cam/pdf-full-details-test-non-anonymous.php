<?php



	require_once('../config.php');
	require_once('auth.php');
require_once("dompdf/dompdf_config.inc.php");
	//require_once('auth-slavecam.php');
	$companyid = $_GET["companyid"];
$year = $_GET['year'];
$month = $_GET['month'];

$html ='<html><head></head><body> <div><div>';   

$result = mysql_query("SELECT * FROM company where company_id=".$_GET["companyid"]);
$row = mysql_fetch_assoc($result);
$result1 = mysql_query("SELECT * FROM company_lead where lead_id=".$row["lead_id"]);
$row1 = mysql_fetch_assoc($result1);
$result3 = mysql_query("SELECT * FROM company_contract where lead_id=".$row["lead_id"]);
$row3 = mysql_fetch_assoc($result3);

$html.='<div id="formWrapper" ><table border="0" width="100%"><tbody><tr><td width="20%"><h2>'.$row1["cname"].'</h2></td><td width="60%">&nbsp;</td><td width="20%"><img src="../'.$row["clogo"].'" alt="'.$row1["cname"].'" /></td></tr></tbody></table>
<h4 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>COMPLAINT REPORT</strong></h4>';


//echo "SELECT * FROM complaints where company_id=$companyid ORDER BY complaint_id DESC";

if(($year=='')&&($month=='')){
$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND Name_emp !='Anonymous' AND location != 'Anonymous' AND emp_mail != 'Anonymous' ORDER BY complaint_id DESC");
} elseif(($year!='')&&($month=='')){

$start=$year."-01-01";
$end=$year."-12-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp != 'Anonymous' AND location != 'Anonymous' AND emp_mail != 'Anonymous' ORDER BY complaint_id DESC");

}
 elseif(($year!='')&&($month!='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp != 'Anonymous' AND location != 'Anonymous' AND emp_mail != 'Anonymous' ORDER BY complaint_id DESC");

}
 elseif(($year=='')&&($month!='')){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND Name_emp != 'Anonymous' AND location != 'Anonymous' AND emp_mail!= 'Anonymous' ORDER BY complaint_id DESC");

}
while($row = mysql_fetch_array($result))
  { 

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
  
  
  
  
  
  $html.='<div id="complaint_pdf" style="width:auto;height:auto;padding:10px; border-radius:5px;margin-bottom:10px; ">
<div style="margin-bottom:10px;width:100%;height:auto;background-color:#00B0F0"><p style="margin-bottom:2px;margin-top:2px;color:#FFFFFF;">Complaint Information</p></div><hr style="height:-1px;" />




<table border="0" width="100%" style="margin-bottom:5px;">
<tr class="border_bottom" style="border_top:1px solid red;"><td style="color:#FE642E;">Employee Name</td><td>'.$row["Name_emp"].'</td><td style="color:#FE642E;">Complaint ID<td>'.$row["ticket"].'</td></tr><tr><td style="color:#FE642E;">Department</td><td>'.$row["complaint_department"].'</td><td style="color:#FE642E;">Complaint Status</td><td>'.$status.'</td></tr>
<tr><td style="color:#FE642E;">Location</td><td>'.$row["location"].'</td><td style="color:#FE642E;">Complaint Create Date</td><td>'.$row["created_on"].'</td></tr>
<tr><td style="color:#FE642E;">Email ID</td><td>'.$row["emp_mail"].'</td><td style="color:#FE642E;">Complaint Category</td><td>'.$row2["category"].'</td></tr></table><hr style="height:-1px;" />';









$html.='<div style="margin-bottom:10px;width:100%;height:auto;background-color:#00B0F0"><p style="margin-bottom:2px;margin-top:2px;color:#FFFFFF;">Complaint Details</p></div><div style="margin-top:-5px;margin-bottom:-5px;width:100%;height:auto;border:1px solid #6E6E6E;background-color:#EFF5FA;"><div style="background-color:#EFF5FA;margin:10px;">'.$row["detail"].'</div></div></div>';

 } 
 $filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
 









'</div></div></div></body></html>';
 //echo $html; 

$dompdf = new DOMPDF();

$dompdf->load_html($html);

$dompdf->render();

$dompdf->stream($filename);
  ?>