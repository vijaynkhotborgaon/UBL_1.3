<?php
require_once('spoc-auth.php');
$year = $_POST['year'];
$month = $_POST['month'];
$category=$_POST['category'];
?>
<div id="t3-mainbody" class="container t3-mainbody minHeight">
<div class="row">
<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content span3">     
<?php
include('topsection.php');
?>
</div>
<div id="t3-content" class="t3-content span9">     
<article>
<!--<a href="<?php //echo $mainurl; ?>spoc/pdf-full-details-1-test.php?companyurl=<?php //echo $_GET['companyurl']; ?>&companyid=<?php //echo $companyid; ?>&year=<?php //echo $year; ?>&month=<?php //echo $month; ?>" style="display:block; margin-bottom:10px; float:left"><img src="icon_acrobat.jpg" alt="pdf" />Download Report </a>-->
<!--<div class="logo-image-1">
<h1>
<a href="<?php echo $mainurl; ?>spoc/pdf-full-details-1-test.php?companyurl=<?php //echo $_GET['companyurl']; ?>&companyid=<?php //echo $companyid; ?>&year=<?php //echo $year; ?>&month=<?php //echo $month; ?>" title="Download Report">

</a>
</h1>
</div><span style="float:left;color:#08088A;"><font size="4"><b>Download Report</b></font></span>-->
<table border="1" width="100%" style="clear:both;margin-top:50px;" >
<tbody>
<tr>
<td colspan="7"><h4 style="float:left;"><strong>Complaint List</strong></h4>
<span style="float:right">
<form action="spam-complaints" method="post" class="filter">
<input name="companyid" type="hidden" value="<?php echo $companyid; ?>">
<select name="category">
<option value="">Select category</option>
<?php 
$result = mysql_query("SELECT * FROM complaint_category");
while($row = mysql_fetch_array($result))  {
?>
<option value="<?php echo $row['cat_id']; ?>"<?php if($category==$row['cat_id']){ ?> selected<?php } ?>><?php echo $row['category']; ?></option>
<?php 
} 
?>
</select>


<select name="year">
<option value="">Select the Year</option>
<?php for($i=2014;$i<=date('Y');$i++) { ?>
<option value="<?php echo $i; ?>"<?php if($year==$i){ ?> selected<?php } ?>><?php echo $i; ?></option>
<?php } ?>
</select>
<select name="month">
<option value="">Select the Month</option>
<option value="01"<?php if($month=='01'){ ?> selected<?php } ?>>January</option>
<option value="02"<?php if($month=='02'){ ?> selected<?php } ?>>February</option>
<option value="03"<?php if($month=='03'){ ?> selected<?php } ?>>March</option>
<option value="04"<?php if($month=='04'){ ?> selected<?php } ?>>April</option>
<option value="05"<?php if($month=='05'){ ?> selected<?php } ?>>May</option>
<option value="06"<?php if($month=='06'){ ?> selected<?php } ?>>June</option>
<option value="07"<?php if($month=='07'){ ?> selected<?php } ?>>July</option>
<option value="08"<?php if($month=='08'){ ?> selected<?php } ?>>Augest</option>
<option value="09"<?php if($month=='09'){ ?> selected<?php } ?>>Septemper</option>
<option value="10"<?php if($month=='10'){ ?> selected<?php } ?>>October</option>
<option value="11"<?php if($month=='11'){ ?> selected<?php } ?>>November</option>
<option value="12"<?php if($month=='12'){ ?> selected<?php } ?>>December</option>
</select>
<input name="filter" type="submit" value="Search" style="margin-top:-7px;">
</form></span></td>
</tr>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>Complaint ID</strong></td>
<td><strong>Complaint Category</strong></td>
<td><strong>Complaint Department</strong></td>
<td><strong>Status</strong></td>
<td><strong>Created Date</strong></td>
<td><strong>More Details</strong></td>
</tr>
<?php
//$result = mysql_query("SELECT * FROM complaints where company_id=$companyid ORDER BY complaint_id DESC");
if(($year=='')&&($month=='') && ($category=='') ){
$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND status=3 ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }

} elseif(($year!='')&&($month=='') && ($category=='')){

$start=$year."-01-01";
$end=$year."-12-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}
 elseif(($year!='')&&($month!='') &&($category=='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}
 
 elseif(($year!='')&&($month!='') &&($category!='')){

$start=$year."-".$month."-01";
$end=$year."-".$month."-31";
$cat=$category;

$result_cat = mysql_query("SELECT * FROM complaint_category where cat_id=$cat");
$row_cat = mysql_fetch_assoc($result_cat);
$row_cat_res=$row_cat['category'];


$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 AND cat_id=$cat ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}

 elseif(($year=='')&&($month=='') &&($category!='')){


$cat=$category;

$result_cat = mysql_query("SELECT * FROM complaint_category where cat_id=$cat");
$row_cat = mysql_fetch_assoc($result_cat);
$row_cat_res=$row_cat['category'];


$result = mysql_query("SELECT * FROM complaints where company_id=$companyid  AND status=3 AND cat_id=$cat ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}

elseif(($year!='')&&($month=='') &&($category!='')){

$start=$year."-01-01";
$end=$year."-12-31";
$cat=$category;

$result_cat = mysql_query("SELECT * FROM complaint_category where cat_id=$cat");
$row_cat = mysql_fetch_assoc($result_cat);
$row_cat_res=$row_cat['category'];


$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 AND cat_id=$cat ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}
 
 elseif(($year=='')&&($month!='') &&($category!='') ){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";
$cat=$category;

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 AND cat_id=$cat ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}
 
 
 
 
 
 
 
 elseif(($year=='')&&($month!='') &&($category=='') ){

$start=date('Y')."-".$month."-01";
$end=date('Y')."-".$month."-31";

$result = mysql_query("SELECT * FROM complaints where company_id=$companyid AND created_on>='$start' AND created_on<='$end' AND status=3 ORDER BY complaint_id DESC");
if(mysql_num_rows($result)==0)
	{?>
      </br></br><div id="system-message">
<div class="alert alert-message">
<p>Data Not Found</p>
</div>
</div>	
	<?php }
}
while($row = mysql_fetch_array($result))
{ 
?>
<tr style="text-align: center;">
<td><?php echo $row['ticket']; ?></td>
<?php
$result2 = mysql_query("SELECT * FROM complaint_category where cat_id=".$row['cat_id']);
$row2 = mysql_fetch_assoc($result2);
?>
<td><?php echo $row2['category']; ?></td>
<?php
$result3 = mysql_query("SELECT * FROM complaint_department where dep_id=".$row['dep_id']);
$row3 = mysql_fetch_assoc($result3);
?>
<td><?php echo $row['complaint_department']; ?></td>
<?php
if($row['status']==0){
$status="Opened";
} elseif($row['status']==1){
$status="More Details Required";
} elseif($row['status']==2){
$status="Closed";
}elseif($row['status']==3){
$status="spam";
}

?>
<td><?php echo $status; ?></td>
<td><?php echo $row['created_on']; ?></td>
<td><a href="view-complaint-details/<?php echo $row['ticket']; ?>">View Full Details</a></td>
</tr>
<?php } ?>
</tbody>
</table>
<!--<a href="<?php //echo $mainurl; ?>spoc/pdf-full-details-1.php?companyurl=<?php //echo $_GET['companyurl']; ?>&companyid=<?php //echo $companyid; ?>&year=<?php //echo $year; ?>&month=<?php //echo $month; ?>" style="display:block; margin-bottom:20px; float:left">Download Report</a>-->
</article>
<!-- //Article -->
</div>
</div>
<!-- //MAIN CONTENT -->
</div>