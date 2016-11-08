<?php
require_once('../config.php');
require_once('auth.php');//============================================================+
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 9);
$pdf->AddPage();
// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
/*$html = <<<EOD
<h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
<i>This is the first example of TCPDF library.</i>
<p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
<p>Please check the source code documentation and other examples for further information.</p>
<p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
EOD;*/

$companyid = $_GET["companyid"];
$category=$_GET["category"];
$year = $_GET['year'];
$month = $_GET['month'];

if($month != '')
{
  if($month == '01')
  {
     $month_word='January';
  }
  elseif($month == '02')
  {
    $month_word='February'; 
  }
  elseif($month == '03')
  {
    $month_word='March'; 
  }
  elseif($month == '04')
  {
    $month_word='April'; 
  }
  elseif($month == '05')
  {
    $month_word='May'; 
  }
  elseif($month == '06')
  {
    $month_word='June'; 
  }
  elseif($month == '07')
  {
    $month_word='July'; 
  }
  elseif($month == '08')
  {
    $month_word='August'; 
  }
  elseif($month == '09')
  {
    $month_word='September'; 
  }
  elseif($month == '10')
  {
    $month_word='October'; 
  }
  elseif($month == '11')
  {
    $month_word='November'; 
  }
  elseif($month == '12')
  {
    $month_word='December'; 
  }


}



$result = mysql_query("SELECT * FROM company where company_id=".$_GET["companyid"]);
$row = mysql_fetch_assoc($result);
$result1 = mysql_query("SELECT * FROM company_lead where lead_id=".$row["lead_id"]);
$row1 = mysql_fetch_assoc($result1);
$result3 = mysql_query("SELECT * FROM company_contract where lead_id=".$row["lead_id"]);
$row3 = mysql_fetch_assoc($result3);

$html='<div>
<table cellpadding="2px">
<tr><td style="text-align: center;"><h4 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>United Breweries Ltd</strong></h4></td></tr>
<tr><td style="text-align: center;"><h5 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>Case Logged In Report</strong></h5></td></tr>
<tr><td style="text-align: center;"><h5 style="margin-bottom:2px;margin-top:0px;color:#E48310;">(For the month of '.$month_word.')</h5></td></tr>
</table>';


//echo "SELECT * FROM complaints where company_id=$companyid ORDER BY complaint_id DESC";

if(($year=='')&&($month=='')){
$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND status=0 ORDER BY complaint_id DESC");

} elseif(($year!='')&&($month=='')){

$start=$year."-01-01";
$end=$year."-12-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' status=0 ORDER BY complaint_id DESC");

}
 elseif(($year!='')&&($month!='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=0 ORDER BY complaint_id DESC");

}
 elseif(($year=='')&&($month!='')){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=0 ORDER BY complaint_id DESC");

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
$comp_id=$row["complaint_id"];
$result_reply= mysql_query("SELECT * FROM complaints_reply where complaint_id=".$row['complaint_id']);

  
$html.='


<div style="margin-top:5px;width:100%;background-color:#00B0F0;color:#FFFFFF;">Case Information</div>';
 $some_date=$row['created_on'];
		$date = new DateTime($some_date);
	$result_time = $date->format('d/m/Y H:i:s');


$html.='<table border="0" width="100%" style="margin-bottom:5px;" cellpadding="2px;">
<tr class="border_bottom" style="border_top:1px solid red;"><td style="color:#FE642E;">Case ID</td><td>'.$row["ticket"].'</td><td style="color:#FE642E;">Case Status</td><td>'.$status.'</td></tr>
<tr><td style="color:#FE642E;">Department which case pertains</td><td>'.$row["complaint_department"].'</td><td style="color:#FE642E;">Case Category</td><td>'.$row2["category"].'</td></tr>
<tr><td style="color:#FE642E;">Log In Date</td><td>'.$result_time.'</td></tr>
</table>
<table border="0" width="100%" style="margin-bottom:5px;" cellpadding="2px;">';

if($row["upload"] != '')
{


$html.='<tr><td style="color:#FE642E;width:25%;padding-bottom:3px;">Case details attachments</td><td style="width:75%;padding-bottom:3px;">'.$row["upload"].'</td></tr>';

}
else{

$html.='<tr><td style="color:#FE642E;width:25%;padding-bottom:3px;">Case details attachments</td><td style="width:75%;padding-bottom:3px;">-</td></tr>';

}


$html.='</table>
<div style="width:100%;height:auto;background-color:#00B0F0;color:#FFFFFF;">Case Details</div><br>
<table border="1" cellpadding="5px;"><tr><td>'.$row["detail"].'</td></tr></table></div>';


	while($row_reply = mysql_fetch_assoc($result_reply))
	  { 
	 $html.='<div style="width:30%;height:auto;background-color:#6E6E6E;color:#FFFFFF;">HRM SPOC</div>';
	 
	 $some_date=$row_reply['created_on'];
		$date = new DateTime($some_date);
	$result_time = $date->format('d/m/Y H:i:s');
	 
	 $html.='<table border="0" width="100%" style="margin-bottom:5px;" cellpadding="2px;">
<tr class="border_bottom" style="border_top:1px solid red;"><td style="color:#FE642E;width:25%;">Comment Date</td><td>'.$result_time.'</td></tr>';

if($row_reply['status']==0){
$status="Opened";
} elseif($row_reply['status']==1){
$status="More Details Required";
} elseif($row_reply['status']==2){
$status="Closed";
}


$html.='<tr><td style="color:#FE642E;width:25%;">Status</td><td>'.$status.'</td></tr>';

if($row_reply['msg']==''){
$html.='<tr><td style="color:#FE642E;width:25%;">Comments</td><td>No Comments</td></tr>';
} else {

$html.='<tr><td style="color:#FE642E;width:25%;">Comments</td><td>'.$row_reply['msg'].'</td></tr>
</table>
	 
	 
	 
	 ';
	 }

	
	}
	$html.='<br pagebreak="true"/>';
}






$pdf->writeHTML($html, true, false, false, false, '');
  
  
  
 /* $html.='<div id="complaint_pdf" style="width:auto;height:auto;padding:10px; border-radius:5px;margin-bottom:10px; ">
<div style="margin-top:5px;width:100%;background-color:#00B0F0;color:#FFFFFF;">Complaint Information</div><hr style="height:-1px;" />




<table border="0" width="100%" style="margin-bottom:5px;">
<tr class="border_bottom" style="border_top:1px solid red;"><td style="color:#FE642E;">Complaint ID</td><td>'.$row["ticket"].'</td><td style="color:#FE642E;">Department</td><td>'.$row["complaint_department"].'</td></tr>
<tr><td style="color:#FE642E;">Complaint Status</td><td>'.$status.'</td><td style="color:#FE642E;">Complaint Category</td><td>'.$row2["category"].'</td></tr>
<tr><td style="color:#FE642E;">Complaint Create Date</td><td>'.$row["created_on"].'</td></tr>
</table><hr style="height:-1px;" />









<div style="margin-bottom:10px;width:100%;height:auto;background-color:#00B0F0;color:#FFFFFF;">Complaint Details</div><div style="margin-top:-5px;margin-bottom:-5px;width:100%;height:auto;border:1px solid #6E6E6E;background-color:#EFF5FA;padding:50px;">'.$row["detail"].'</div></div>';

 } 
 $filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
 









'</div></div></div>';*/



// Print text using writeHTMLCell()
//$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_end_clean();
$pdf->Output($filename, 'I');

