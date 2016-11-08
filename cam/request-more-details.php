<?php











	require_once('../config.php');











	require_once('auth.php');
	
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
if(isset($_SESSION['MAILTOEMP']) && $_SESSION['MAILTOEMP'] == 1 ) {
?>
<div id="system-message">
<div class="alert alert-message">
<p>Mail Sent Successfully</p>
</div>
</div>	
<?php
unset($_SESSION['MAILTOEMP']);
}
?>



















<?php











$result = mysql_query("SELECT * FROM complaints where complaint_id=".$complaint_id);
$row = mysql_fetch_assoc($result);















?>











	<article>
	


<form action="mail-to-emp-process.php" method="post">


<strong>To:</strong> <?php echo $row['Name_emp']; ?><br>


<strong>Email:</strong> <?php echo $row['emp_mail']; ?><br>





<textarea name="mailspoc" cols="" rows="10" style="border:solid 2px #A9BCF5;width:90%;"  placeholder="The link automatically send with this mail to submit more details to Employee">Hi <?php echo $row['Name_emp']; ?> [ Edit Your Mail Here ]</textarea>





<input name="tomail" type="hidden" value="<?php echo $row['emp_mail']; ?>">

<?php
$result22 = mysql_query("SELECT * FROM company where company_id=".$row['company_id']);
$row22 = mysql_fetch_assoc($result22);

$result11 = mysql_query("SELECT * FROM company_lead where lead_id=".$row22['lead_id']);
$row11 = mysql_fetch_assoc($result11);

$result33 = mysql_query("SELECT * FROM camdetails where cam_id=".$row11['cam_id']);
$row33 = mysql_fetch_assoc($result33);




?>

<input name="frommail" type="hidden" value="<?php echo $row33['email']; ?>">



<input name="cam_id" type="hidden" value="<?php echo $row11['cam_id'] ?>">
<input name="cid" type="hidden" value="<?php echo $_GET['complaint_id']; ?>">


<input name="submit" type="submit" value="Send Mail">


</form>


<script>


	$('.jqte-test').jqte();


</script>


</article>











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