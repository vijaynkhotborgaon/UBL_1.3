<?php
require_once('spoc-auth.php');

$id=$_GET['id'];
$result = mysql_query("SELECT * FROM complaints where ticket='".$id."'");
$row = mysql_fetch_assoc($result);

$result2 = mysql_query("SELECT * FROM company_spoc where spoc_id=".$sessspocid." AND company_id=".$row['company_id']);
$countauth = mysql_num_rows($result2);
if($countauth==''){
     header("location: ".$mainurl."spoc/".$_GET['companyurl']."/dashboard");
}
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
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>
<div id="system-message">
<div class="alert alert-message">
<?php
echo '<p>',$msg,'</p>'; 
}
?>
</div>
</div>	
<?php
unset($_SESSION['ERRMSG_ARR']);
}
?>
<?php
if(isset($_SESSION['COMRPLYMSG']) && $_SESSION['COMRPLYMSG']==1 ) {
?>
<div id="system-message">
<div class="alert alert-message">
<p>Complaint Updated Successfully</p>
</div>
</div>	
<?php
unset($_SESSION['COMRPLYMSG']);
}
?>
<?php
$result = mysql_query("SELECT * FROM complaints where ticket='".$id."'");
$row = mysql_fetch_assoc($result);
?>
<div id="formWrapper">
<div class="logo-image-1">
<h1>
<a href="<?php echo $mainurl; ?>spoc/pdf-single-report.php?complaint_id=<?php echo $row['complaint_id']; ?>" title="Download Report">

</a>
</h1>
</div><span style="float:left;color:#08088A;"><font size="4"><b>Download Report</b></font></span>
<form action="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/update-complaint-process" method="post" enctype="multipart/form-data">
<fieldset class="fBlock" id="Corporate_Details" style="clear:both;">
<legend><?php echo $row['ticket']; ?></legend>
<p>
<label>Complaint Category</label>
<?php
$result2 = mysql_query("SELECT * FROM complaint_category where cat_id=".$row['cat_id']);
$row2 = mysql_fetch_assoc($result2);

?>
<strong><?php echo $row2['category']; ?></strong>
</p>
<p>
<label>Complaint Department</label>
<?php
$result3 = mysql_query("SELECT * FROM complaint_department where dep_id=".$row['dep_id']);
$row3 = mysql_fetch_assoc($result3);
?>
<strong><?php echo $row['complaint_department']; ?></strong>
</p>
<p>
<label>Complaint Detail</label>
<div style="margin-top:18%;background-color:#EFF5FA;margin-bottom:10px;"><?php echo $row['detail']; ?></div>







<!--<strong><?php //echo $row['detail']; ?></strong>-->

<p>
<label>Attachment</label>
<?php if($row['upload']!=''){ ?>
<a href="<?php echo $mainurl; ?>/company/doc/<?php echo $row['upload']; ?>" target="_blank" style="width: 52%; word-wrap: break-word;display: block;float: left;"><?php echo $mainurl; ?>/company/doc/<?php echo $row['upload']; ?></a>
<?php } ?>
</p>
<p>
<label>Created Date</label>
<strong><?php 
$some_date=$row['created_on'];
$date = new DateTime($some_date);
$result = $date->format('d/m/Y H:i:s');
echo $result  ?></strong>
</p>
<?php if($row['status']==2){?>
<p>
<label>Status</label>
<strong>Closed</strong>
</p>
<?php } else { ?>
<p>
<label>Status</label>
<select name="status">
<option value="0"<?php if($row['status']==0){?> selected<?php } ?>>Opened</option>
<option value="1"<?php if($row['status']==1){?> selected<?php } ?>>More Details Required</option>
<option value="2"<?php if($row['status']==2){?> selected<?php } ?>>Closed</option>
<option value="3"<?php if($row['status']==3){?> selected<?php } ?>>Spam</option>
</select>
</p>
<p>
<label>Required details</label>
<!--<textarea name="comments" cols="" rows="" style="height:100px;"></textarea>-->
<textarea spellcheck="true" wrap="hard" cols="200" rows="3" name="comments" id="Detailed_Complaint" class="Detailed_Complaint" style="border-color:#A9BCF5;width:600px;"></textarea></p>

</p>
</fieldset>
<input name="complaint_id" type="hidden" value="<?php echo $row['complaint_id']; ?>">
<input name="complaint_ticket" type="hidden" value="<?php echo $_GET['id']; ?>">
<center><input name="Submit" type="submit" class="fSubmit" style="margin-bottom:5px;" value="Submit"></center>
<?php } ?>
</form>

<?php
$spoc_id_value=100;
$result12 = mysql_query("SELECT * FROM complaints_reply where complaint_id=".$row['complaint_id']." AND spoc_id = 96 ");
while($row12 = mysql_fetch_array($result12)){
if($row12['spoc_id']!=0){
$resultspoc = mysql_query("SELECT * FROM company_spoc where spoc_id=".$row12['spoc_id']);
$rowspoc = mysql_fetch_assoc($resultspoc);
//$replay=$rowspoc['name']." (SPOC)";
$replay="HRM_SPOC(SPOC)";
}
?>
<fieldset class="fBlock" id="Corporate_Details">
<legend><?php echo $replay; ?></legend>
<p>
<label>Comment Date</label>
<strong><?php 
$some_date=$row12['created_on'];
$date = new DateTime($some_date);
$result = $date->format('d/m/Y H:i:s');
echo $result;

?></strong>
</p>
<?php if($row12['status']!=6){ ?>
<p>
<label>Status</label>
<?php
if($row12['status']==0){
$status="Opened";
} elseif($row12['status']==1){
$status="More Details Required";
} elseif($row12['status']==2){
$status="Closed";
}
?>
<strong><?php echo $status; ?></strong>
</p>
<?php } ?>
<?php if($row12['attachment']!=''){ ?>
<p>
<label>Attachment</label>
<a href="<?php echo $mainurl; ?>company/doc/<?php echo $row12['attachment']; ?>" target="_blank"><?php echo $mainurl; ?>company/doc/<?php echo $row12['attachment']; ?></a>
</p>
<?php } ?>
<p>
<label>Comments</label>
<?php if($row12['msg']==''){ ?>
<strong>No Comments</strong>
<?php } else { ?>
<div style="margin-top:18%;clear:both;background-color:#EFF5FA;"><?php echo  $row12['msg']; ?></div>

<?php } ?>

</fieldset>
<?php } ?>
</div>
</article>
<!-- //Article -->
</div>
</div>
<!-- //MAIN CONTENT -->
</div>