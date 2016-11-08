<?php



	require_once('../config.php');
	//require_once('auth.php');
require_once("dompdf/dompdf_config.inc.php");
	//require_once('auth-slavecam.php');
	$companyid = $_GET["complaint_id"];
	

	
$html ="<html><head> <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<style>
font-family: 'Dosis'; 
sans-serif;
</style>
</head><body> <div><div>'";   
$result = mysql_query("SELECT * FROM complaints where complaint_id='$companyid'");

$row = mysql_fetch_assoc($result);


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
  



$html.='<fieldset class="fBlock" id="Corporate_Details" style=" margin-top:10px;">
<legend style="padding:2px;background:#1d7bae ;color: #fff;font-size: 120%;text-shadow: #000 0px 0px 2px;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;line-height: normal !important;border: 1px solid #347235;width:auto;">'.$row['ticket'].'</legend>
<table border="0" width="100%" style="margin-bottom:5px;margin-top:15px;background:#E6E6E6;">
<tr ><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Name</td><td>'.$row["Name_emp"].'</td></tr><tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Location<td>'.$row["location"].'</td></tr><tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Personal Email ID</td><td>'.$row["emp_mail"].'</td></tr><tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Complaint Category</td><td>'.$row2["category"].'</td></tr>
<tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Complaint Department</td><td>'.$row["complaint_department"].'</td></tr>
<tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Created Date</td><td>'.$row["created_on"].'</td></tr><tr><td style="color:#FE642E;padding-top:10px;padding-bottom:10px;padding-left:5px;">Status</td><td>'.$status.'</td></tr></table><hr style="height:-1px;" />';




//$wrap=$row["detail"];
//$read_wrap=wordwrap($wrap,70,"<br>\n");
$word_wrap='<div style="background-color:#EFF5FA;margin:10px;">'.$row["detail"].'</div>';




$html.='<h3 style="margin:5px 0px 5px 5px;">Detail Report</h3><div style="clear:both;border:2px solid #A9A9F5;background-color:#EFF5FA;">'.$word_wrap.'</div>';

 

  
  
  
  
  
  
  
  







  
 $filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
 









'</div></div></body></html>';
 //echo $html; 

$dompdf = new DOMPDF();

$dompdf->load_html($html);

$dompdf->render();

$dompdf->stream($filename);
  ?>