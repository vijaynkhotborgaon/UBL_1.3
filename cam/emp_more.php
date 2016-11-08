<?php






session_start();




	require_once('../config.php');











	//require_once('auth.php');
	
	$complaint_id=$_GET['complaint_id'];
	
	?>











<!DOCTYPE html>











<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">











  <title>View Company Details</title>











  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">











<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">











<link type="text/css" rel="stylesheet" href="../css/jquery-te-1.4.0.css">





<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>


<script type="text/javascript" src="../js/jquery-te-1.4.0.js" charset="utf-8"></script>








</head>











<body>
























<div id="t3-mainbody" class="container t3-mainbody ">

<div class="row">
<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content span12">
<?php    
session_start();

?>
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
<p>Complaint Sent Successfully</p>
</div>
</div>	
<?php
unset($_SESSION['COMRPLYMSG']);
}
?>
<?php
//$result = mysql_query("SELECT * FROM complaints where ticket='".$_GET['complaint-id']."'");
//$row = mysql_fetch_assoc($result);
?>

<div id="formWrapper" style="height:325px;">


<h3>Reply From Here</h3>


<form action="emp-complaint-replay-process.php" method="post" enctype="multipart/form-data">
<fieldset class="fBlock" id="Corporate_Details">
<textarea name="comments" cols="" rows="5" style="width:98%;"></textarea>
<p><label>Attachment</label><input name="attachment" type="file" /></p>
<input name="complaint_id" type="hidden" value="<?php echo $_GET['complaint_id'];?>">
<!--<input name="complaint_ticket" type="hidden" value="<?php //echo $_GET['complaint-id']; ?>">-->
<center><input name="submit" type="submit" value="Reply" class="fSubmit" style="margin-bottom:5px;"/></center>
</fieldset>
</form>
<?php //} ?>
</div>
</article>
<?php

?>
</div>
</div>







</div>

</body>
<html>