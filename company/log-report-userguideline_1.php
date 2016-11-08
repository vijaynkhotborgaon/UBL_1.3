<?php
// Start the session
session_start();
$sess=$_SESSION["company_secure_web"];
if(!isset($_SESSION["company_secure_web"]) || ($_SESSION["company_secure_web"] == '')) {
//header("location:/dwf_new_UB_1/error_1.php");
header("location: ".$mainurl."error_1.php");
}







?>



<!-- code for right click disabled-->
<script language ="javascript" >
 window.oncontextmenu = function () {
 alert("right click is disabled for security reason");
   return false;
}
	  </script >


<!-- code for disable selection text -->
<style>
body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>



<div  class=" container container_1" style="background-color:#D2EEFA;" >
<!-- SLOGAN-->



<!--<div class="left_div" >

	<div class="speak_up_logo">
	<img  src="<?php //echo $mainurl; ?>/images/Speak-up-1.png" alt="" width="200" height="200" style="margin:auto;">
	
	</div>
	
	<div class="whistle_logo">
	<img  src="<?php //echo $mainurl; ?>/images/DWF.png" alt="" width="230" height="230" style="margin:auto;">
	
	</div>



</div>-->

<?php include("left_div_company.php");?>


<!-- MAIN CONTENT -->

<?php
$guidlines_doc=$mainurl."company/doc/default/doc_new/User Guidelines.pdf";
//$terms_doc=$mainurl."company/doc/default/Terms-of-Use.pdf";
//$privacy_doc=$mainurl."company/doc/default/Privacy-Policy.pdf";
$terms_doc=$mainurl."company/doc/default/doc_new/Terms of Use.pdf";
$privacy_doc=$mainurl."company/doc/default/doc_new/Privacy Policy.pdf";
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
<form action="log-report-form" method="post" enctype="multipart/form-data">
<center><h2 style="color:#FD7829;font-family:verdana;margin-bottom:15px;margin-top:30px;"><strong>IMPORTANT USER GUIDELINES</strong></h2></center>
<div style="float:right;width:70%;height:60%;">
<p style="text-align: justify;margin-left:35px;margin-right:45px;line-height:130%;margin-bottom:15px; font-size:14px; font-family: 'Roboto',sans-serif;"><span style="color:#000000;">This portal is made exclusively available to the employees of <?php echo $maincompanyurl; ?> to report cases related to any misconduct / actual or potential violations of the UBL code of conduct / any unethical, unlawful or improper practices, acts or activities within the company. This Portal does not support any reporting on any other organizational topic / issue.</span></p>

<p style="text-align: justify;margin-left:35px;margin-right:45px;line-height:130%;margin-bottom:25px; font-size:14px; font-family: 'Roboto',sans-serif;"><span style="color:#000000;"><strong style="color:#ff0000;">This Portal is not an emergency 'helpline'</strong> and is <strong>NOT</strong> to be used to request for help and response wherever there is <strong>IMMEDIATE AND DIRECT</strong> threat to life and property or any other personal emergencies or exigencies. We recommend that for such kind of help and support you contact your company HR representative or the local Police, Fire, Medical, Government or any other appropriate authorities for immediate help and support.</span></p>

<p style="text-align: justify; margin-left:35px;margin-right:45px;line-height:130%;margin-bottom:15px; font-size:14px; font-family: 'Roboto',sans-serif;"><span style="color:#000000;">Please read the following carefully before accessing the portal and submitting a case.</span></p>

<ul style="list-style: none; margin-left:35px;margin-right:45px;">
<li><strong style="color:#FD7829;"><img  src="<?php echo $mainurl; ?>/images/box.png" alt="" style="margin-right:4px;" height="7" width="7"><a style="color:#FD7829;font-size:13px; font-family: 'Roboto',sans-serif;text-decoration: underline;" title="Employee Guidelines for use of DWF Portal" href="<?php echo $guidlines_doc; ?>" target="_blank"><font size="2">GUIDELINES TO EMPLOYEES RELATING TO USE OF THE PORTAL</font></a></strong></li>
<li><strong style="color:#FD7829;"><img  src="<?php echo $mainurl; ?>/images/box.png" alt="" style="margin-right:4px;" height="7" width="7"><a style="color:#FD7829;font-size:13px; font-family: 'Roboto',sans-serif;text-decoration: underline;" title="DWF Portal - Terms of Use" href="<?php echo $terms_doc; ?>" target="_blank"><font size="2">TERMS OF USE</font></a></strong></li>
<li><strong style="color:#FD7829;"><img  src="<?php echo $mainurl; ?>/images/box.png" alt="" style="margin-right:4px;" height="7" width="7"><a style="color:#FD7829;font-size:13px; font-family: 'Roboto',sans-serif;text-decoration: underline;" title="DWF Portal - Privacy Policy" href="<?php echo $privacy_doc; ?>" target="_blank"><font size="2">PRIVACY POLICY</font></a></strong></li>
</ul>
</br>

<p></p>




<center>
<input class="ff_elem" type="checkbox" name="Agreement" value="accept" id="Agreement" onclick="AcceptAgreement(this)" style="margin-right:6px;"> <strong style="color:#000000; font-size:13px; font-family: 'Roboto',sans-serif;">I HAVE READ THE ABOVE DOCUMENTS AND AGREE TO THE CONTENTS </strong></center>
</br>
<?php 
$result111 = mysql_query("SELECT * FROM company where lead_id=".$lead_id);
$row111 = mysql_fetch_assoc($result111);

?>
<div style="margin-top:0px;padding-top:-10px;">
<center><input name="Continue" type="submit" class="fSubmit_1" id="fSubmit" value="CONTINUE LOG IN" style="display:none;color:#fff; font-weight:800; font-size:100%;top:0px;position:static;"></center><center><input style="color:#000;font-size:100%; font-weight:800;" name="Continue" type="button" class="fSubmit_1" id="fSubmit1" value="CONTINUE LOG IN" onclick="alert('Please read the agreement and accept it')"></center>
<!--<center><a href="<?php //echo $mainurl; ?>company/<?php //echo $row111['unique_url']; ?>/<?php //echo $row111['unique_url']; ?>/<?php //echo $row111['unique_url']; ?>" ><input style="color:#000000;" name="back" type="button" class="fSubmit_1" id="back" value="BACK TO HOME" ></a></br></center>-->
</div>
</form>
</div>

<script type="text/javascript">
$(window).load(function() {
    $('form').get(0).reset(); //clear form data on page load
});
function AcceptAgreement(val)
{
var sbmt = document.getElementById("fSubmit");
var sbmt1 = document.getElementById("fSubmit1");
var back = document.getElementById("back");
if (val.checked == true)
{
sbmt.style.display = "block";
sbmt1.style.display = "none";
back.style.display="block";
}
else
{
sbmt1.style.display = "block";
sbmt.style.display = "none";
back.style.display="block";
}
}         
</script>



















</div>
<!-- bfPage end -->
</article>

</div>







