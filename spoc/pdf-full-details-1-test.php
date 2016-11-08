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

$html ='<html><head></head><body> <div><div>';   

$result = mysql_query("SELECT * FROM company where company_id=".$_GET["companyid"]);
$row = mysql_fetch_assoc($result);
$result1 = mysql_query("SELECT * FROM company_lead where lead_id=".$row["lead_id"]);
$row1 = mysql_fetch_assoc($result1);
$result3 = mysql_query("SELECT * FROM company_contract where lead_id=".$row["lead_id"]);
$row3 = mysql_fetch_assoc($result3);

$html.='<div>
<table cellpadding="2px">
<tr><td style="text-align: center;"><h4 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>United Breweries Ltd</strong></h4></td></tr>
<tr><td style="text-align: center;"><h5 style="margin-bottom:2px;margin-top:0px;color:#E48310;"><strong>Case Logged In Report</strong></h5></td></tr>
<tr><td style="text-align: center;"><h5 style="margin-bottom:2px;margin-top:0px;color:#E48310;">(For a month)</h5></td></tr>
</table>';


//echo "SELECT * FROM complaints where company_id=$companyid ORDER BY complaint_id DESC";

if(($year=='')&&($month=='')){
$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND status=2 ORDER BY complaint_id DESC");

} elseif(($year!='')&&($month=='')){

$start=$year."-01-01";
$end=$year."-12-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' status=2 ORDER BY complaint_id DESC");

}
 elseif(($year!='')&&($month!='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=2 ORDER BY complaint_id DESC");

}
 elseif(($year=='')&&($month!='')){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=2 ORDER BY complaint_id DESC");

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

  
  
  
  
  
  $html.='<div style="margin-top:5px;width:100%;background-color:#00B0F0;color:#FFFFFF;">Case Information</div>



<table border="0" width="100%" style="margin-bottom:5px;">
<tr class="border_bottom" style="border_top:1px solid red;"><td style="color:#FE642E;">Case ID</td><td>'.$row["ticket"].'</td><td style="color:#FE642E;">Department to which this case pertains</td><td>'.$row["complaint_department"].'</td></tr>
<tr><td style="color:#FE642E;">Case Status</td><td>'.$status.'</td><td style="color:#FE642E;">Case Category</td><td>'.$row2["category"].'</td></tr>
<tr><td style="color:#FE642E;">Log In Date</td><td>'.$row["created_on"].'</td><td style="color:#FE642E;">Case details attachments</td><td>'.$mainurl.'/company/doc/'.$row["upload"].'</td></tr>
</table>
<div style="width:100%;height:auto;background-color:#00B0F0;color:#FFFFFF;">Case Details</div><br>
<table border="1" cellpadding="5px;"><tr><td>'.$row["detail"].'</td></tr></table></div>';
 } 
 $filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
 









'</div></div></div></body></html>';
 //echo $html; 

$pdf->writeHTML($html, true, false, false, false, '');
$filename="Report_".date('d')."_".date('m')."_".date('y').".pdf";
ob_end_clean();
$pdf->Output($filename, 'I');