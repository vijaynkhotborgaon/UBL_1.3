<?php
require_once('../config.php');
require_once('auth.php');
//require_once('auth-slavecam.php');
$ticketid=$_GET['ticketid'];
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>View Company Details</title>
<link rel="stylesheet" href="../css/css-be258.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>
</head>
<body>
<?php
include('header.php');
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
<?php
$result = mysql_query("SELECT * FROM complaints where ticket='".$ticketid."' AND ts_id=".$sesstsid);
$row = mysql_fetch_assoc($result);
$countauth = mysql_num_rows($result);
if($countauth==''){ ?>
<article>
<form action="view-update-complaints.php" method="get" enctype="application/x-www-form-urlencoded"><input name="ticketid" type="text"><input name="search" type="submit" value="search Ticket"></form>
</article>
<?php
} else { ?>
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
$result = mysql_query("SELECT * FROM complaints where ticket='".$ticketid."'");
$row = mysql_fetch_assoc($result);
?>
<div id="formWrapper">
<form action="update-complaint-process.php" method="post" enctype="multipart/form-data">
<fieldset class="fBlock" id="Corporate_Details">
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
<strong><?php echo $row3['department']; ?></strong>
</p>
<p>
<label>Complaint Detail</label>
<strong><?php echo $row['detail']; ?></strong>
</p>
<p>
<label>Attachment</label>
<?php if($row['upload']!=''){ ?>
<a href="<?php echo $mainurl; ?>/company/doc/<?php echo $row['upload']; ?>" target="_blank" style="width: 52%; word-wrap: break-word;display: block;float: left;"><?php echo $mainurl; ?>/company/doc/<?php echo $row['upload']; ?></a>
<?php } ?>
</p>
<p>
<label>Created Date</label>
<strong><?php echo $row['created_on']; ?></strong>
</p>
<?php if($row['status']==2){ ?>
<p>
<label>Status</label>
<strong>Closed</strong>
</p>
<?php } else {	
	?>
<p>
<label>Status</label>
<select name="status">
<option value="0"<?php if($row['status']==0){?> selected<?php } ?>>Opened</option>
<option value="1"<?php if($row['status']==1){?> selected<?php } ?>>More Details Required</option>
<option value="2"<?php if($row['status']==2){?> selected<?php } ?>>Closed</option>
</select>
</p>
<p>
<label>Comments</label>
<textarea name="comments" cols="" rows=""></textarea>
</p>
</fieldset>
<input name="complaint_id" type="hidden" value="<?php echo $row['complaint_id']; ?>">
<input name="ticketid" type="hidden" value="<?php echo $ticketid; ?>">
<input name="Submit" type="submit" class="fSubmit">
<?php } ?>
</form>
<h3>Discussions</h3>
<?php
$result12 = mysql_query("SELECT * FROM complaints_reply where complaint_id=".$row['complaint_id']);
while($row12 = mysql_fetch_array($result12)){
if($row12['user_id']!=0){
$replay="Employee";
} elseif($row12['cam_id']!=0){
$resultcam = mysql_query("SELECT * FROM camdetails where cam_id=".$row12['cam_id']);
$rowcam = mysql_fetch_assoc($resultcam);
$replay=$rowcam['name']." (CAM)";
} elseif($row12['ts_id']!=0){
$resultts = mysql_query("SELECT * FROM tsdetails where ts_id=".$row12['ts_id']);
$rowts = mysql_fetch_assoc($resultts);
$replay=$rowts['name']." (TS)";
} elseif($row12['spoc_id']!=0){
$resultspoc = mysql_query("SELECT * FROM company_spoc where spoc_id=".$row12['spoc_id']);
$rowspoc = mysql_fetch_assoc($resultspoc);
$replay=$rowspoc['name']." (SPOC)";
}
?>
<fieldset class="fBlock" id="Corporate_Details">
<legend><?php echo $replay; ?></legend>
<p>
<label>Replay Date</label>
<strong><?php echo $row12['created_on']; ?></strong>
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
<strong><?php echo $row12['msg']; ?></strong>
<?php } ?>
</p>
</fieldset>
<?php } ?>
</div>
</article>
<?php } ?>
<!-- //Article -->
</div>
</div>
<!-- //MAIN CONTENT -->
</div>	

<?php
include('footer.php');
?>
<!-- //FOOTER -->    

  </body></html>