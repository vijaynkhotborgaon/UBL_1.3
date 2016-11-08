<script src="jquery-1.11.3.js"></script>
    <script src="jquery.bpopup.min.js"></script>
<script>
     // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#my-button').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

               $('#element_to_pop_up').bPopup({
	    easing: 'linear', //uses jQuery easing plugin
            speed: 450,
            transition: 'slideDown'
        });
                

            });

$('#close').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

               $('#element_to_pop_up').bPopup().close();
                

            });

        });

    })(jQuery);
</script>


<script type="text/javascript">
function showPopUp(el) {
var cvr = document.getElementById("cover")
var dlg = document.getElementById(el)
cvr.style.display = "block"
dlg.style.display = "block"
if (document.body.style.overflow = "hidden") {
	cvr.style.width = "1024"
	cvr.style.height = "100&#37;"
	}
}
function closePopUp(el) {
var cvr = document.getElementById("cover")
var dlg = document.getElementById(el)
cvr.style.display = "none"
dlg.style.display = "none"
document.body.style.overflowY = "scroll"
}
</script>

<style type="text/css">
#cover {
display:none;
position:absolute;
left:0px;
top:0px;
width:100%;
height:100%;
background:#848484;
filter:alpha(Opacity=50);
opacity:0.7;
-moz-opacity:0.7;
-khtml-opacity:0.7
}
#dialog {
display:none;
left:200px;
top:200px;
width:300px;
height:300px;
position:absolute;
z-index:100;
background:white;
padding:2px;
font:10pt tahoma;
border:1px solid gray
}
</style>




<div id="cover" style="z-index:2;"></div>










<div id="element_to_pop_up" class="ontop" style="background-color:White;padding:10px;width:500px;box-shadow: 5px 5px 5px #888888;position:absolute;z-index:3;left:40%;top:30%;"> 
<h3 style="color:blue;">Technical Support</h3>
<hr style="color: #123455;height:2px;">
<h4>For any technical issues please write to <span style="color:#B40431;">support@thehrmpractitioners.com<span></h4>
<center><h4>OR</h4></center>
<h4>Call us at +91 98867 43402 / +91 99001 21225</h4>
<a  onClick="closePopUp('element_to_pop_up');"><image src="<?php echo $mainurl; ?>/images/closeIcon.gif" id="close" style="top:0px;right:0px;position:absolute;cursor:pointer"/></a>



</div>








<?php
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(isset($_SESSION['SESS_SPOC_ID']) || (trim($_SESSION['SESS_SPOC_ID']) != '')) {
     header("location: ".$mainurl."spoc/".$_GET['companyurl']."/dashboard");
exit();
}
?>






<!-- MAIN CONTENT -->
   










<div  class=" container container_1" style="background-color:#D2EEFA;" >
<!-- SLOGAN-->


<?php include("left_div_company.php");?>
<div style="float:left;margin-left:10%;">
<form action="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/loginprocess" method="post" class="form-horizontal">




<center><h1 style="font-size: 250%;color:#FF862A;position:relative;top:120px;"><b>UBL WB MANAGER LOGIN PAGE</b></h1></center> 
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
?>
<div id="system-message" style="position:absolute;top:10px;width:40%;">
<div class="alert alert-message">
<?php
foreach($_SESSION['ERRMSG_ARR'] as $msg) { 
echo '<p>',$msg,'</p>'; 
}
?>
</div>
</div>	
<?php
unset($_SESSION['ERRMSG_ARR']);
}
?>


<div style="background-color:#00394D;width:100%;padding-top:10px;padding-bottom:10px;border-radius: 10px;margin-top:35%;"><label style="float:left;width:100px;margin:4px;text-align:right;"><strong style="color:#FFFFFF;margin-right:10px;">USER NAME</strong></label><input style="width:70%;"type="text" name="username" id="username" value="" class="username"> </div> </br>	

<div style="background-color:#00394D;width:100%;padding-top:10px;padding-bottom:10px;border-radius: 10px; "><label style="float:left;width:100px;margin:4px;text-align:right;"><strong style="color:#FFFFFF;margin-right:10px;">PASSWORD</strong></label><input style="width:70%;" type="password" name="password" id="password" value="" class="password"> </div> 	





<br>
<!--<center><button type="submit" value=""><img  src="<?php echo $mainurl; ?>/images/report.png" alt="" width="200" height="200" ></button></center></br>-->
<center><input style="color:#000000;font-size:130%;margin-top:15px;padding:15px;padding-left:40px;padding-right:40px;font: 20px, arial, sans-serif;" name="Continue" type="submit" class="fSubmit_1" id="fSubmit1" value="VIEW REPORT" ></center>
<center><a title="Click here" id="my-button" onclick="showPopUp('element_to_pop_up');" rel="alternate"><input style="color:#000000;font-size:110%;margin-top:15px;padding:15px;padding-left:10px;padding-right:10px;font: 20px, arial, sans-serif;" name="Continue" type="submit" class="fSubmit_1" id="fSubmit1" value="TECH SUPPORT" ></a></center>




<!--<a href="<?php //echo $mainurl; ?>company/<?php //echo $_GET['companyurl']; ?>"> <button class="cancel" type="button">Cancel</button></a>-->


</form>



</span></p>
<p style="text-align: center;">&nbsp;</p>



<!-- //SLOGAN -->







</div>
</div>









































<!-- //MAIN CONTENT -->


