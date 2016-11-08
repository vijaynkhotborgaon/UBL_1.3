



<div id="t3-mainbody" class="container t3-mainbody ">
<div class="row">
<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content span12">
<?php
$guidlines_doc=$mainurl."company/doc/default/Employee-Guidelines.pdf";
//$terms_doc=$mainurl."company/doc/default/Terms-of-Use.pdf";
//$privacy_doc=$mainurl."company/doc/default/Privacy-Policy.pdf";
$terms_doc=$mainurl."company/doc/default/terms-of-Use-UBL.pdf";
$privacy_doc=$mainurl."company/doc/default/privacy-Policy-UBL.pdf";
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
<div id="formWrapper">
<form action="log-report-form" method="post" enctype="multipart/form-data">
<fieldset class="fBlock" id="User_Guidelines">
<legend>User Guidelines</legend>
<p style="text-align: center;line-height: 15px;margin: 0 !important;"><span style="text-decoration: underline; color: #000000;"><strong>GUIDELINES TO EMPLOYEES RELATING TO THE USE OF </strong></span><br><span style="text-decoration: underline; color: #000000;"><strong>THE "DISCLOSE WITHOUT FEAR" PORTAL (THE DWF PORTAL)</strong></span>&nbsp;</p>
<p style="text-align: justify;line-height: 15px;margin: 0 !important;"><span style="color: #000000;">This portal is made exclusively available to the employees of</span>&nbsp;<span style="color: #ff0000; font-weight:bold;"><?php echo $maincompanyurl; ?></span><span style="color: #000000;"> to report complaints related to FRAUD/ GRIEVANCES/ WRONGDOINGS specifically at the workplace.</span></p>
<p style="text-align: justify;line-height: 10px;margin: 0 !important;"><span style="color: #000000;">This Portal does not support any reporting on any other organizational topic/ issue.</span></p>
<p style="text-align: justify;line-height: 15px;margin: 0 !important;"><span style="color: #000000;"><strong>The DWF Portal is not an emergency 'helpline'</strong> and is <strong>NOT</strong> to be used to request for help and response wherever there is <strong>IMMEDIATE AND DIRECT</strong> threat to life and property or any other personal emergencies or exigencies. We recommend that for such kind of help and support you contact your company HR representative or the local Police, Fire, Medical, Government or any other appropriate authorities for immediate help and support.</span></p>
<p style="text-align: justify;line-height: 15px;margin: 0 !important;"><span style="color: #000000;">Please read the following Guideline and Terms &amp; Conditions before accessing the DWF portal and submitting a report :-&nbsp;</span></p>
<ul style="list-style-type: square; text-align: justify;">
<li><strong><a title="Employee Guidelines for use of DWF Portal" href="<?php echo $guidlines_doc; ?>" target="_blank">DETAILED GUIDELINES TO EMPLOYEES RELATING TO THE USE OF THE "DISCLOSE WITHOUT FEAR" PORTAL (THE DWF PORTAL)</a></strong></li>
<li><strong><a title="DWF Portal - Terms of Use" href="<?php echo $terms_doc; ?>" target="_blank">TERMS OF USE</a></strong></li>
<li><strong><a title="DWF Portal - Privacy Policy" href="<?php echo $privacy_doc; ?>" target="_blank">PRIVACY POLICY</a></strong></li>
</ul>
<p></p>
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

<center><p style="background-color: rgb(239, 245, 250); background-position: initial initial; background-repeat: initial initial;margin-top:-30px;">
<input class="ff_elem" type="checkbox" name="Agreement" value="accept" id="Agreement" onclick="AcceptAgreement(this)" style="margin-right:6px;"> I have read the above documents and agree to the contents </p></center>

</fieldset>
<?php 
$result111 = mysql_query("SELECT * FROM company where lead_id=".$lead_id);
$row111 = mysql_fetch_assoc($result111);

?>
<a href="<?php echo $mainurl; ?>company/<?php echo $row111['unique_url']; ?>" style="float:left; display:block;"><input name="back" type="button" class="fSubmit" id="back" value="Back to Home" ></a>
<input name="Continue" type="submit" class="fSubmit" id="fSubmit" value="Continue" style="display:none;"><input name="Continue" type="button" class="fSubmit" id="fSubmit1" value="Continue" onclick="alert('Please read the agreement and accept it')">
</form>
</div>
<!-- bfPage end -->
</article>
</div>
</div>







</div>