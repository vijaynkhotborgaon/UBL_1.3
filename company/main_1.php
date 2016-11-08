<?php
session_start();
$sess=$_SESSION["company_secure_web"];
if(!isset($_SESSION["company_secure_web"]) || ($_SESSION["company_secure_web"] == '')) {
//header("location:/dwf_new_UB_1/error_1.php");
header("location: ".$mainurl."error_1.php");
}


include("cnt/cnt.php"); cnt("log/index.txt"); include("cnt/showcnt.php");






?>




<?php gfxcnt("log/index.txt"); ?>






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

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script> 
$(document).ready(function(){
     $(".flip").click(function(){
	 
	$(".panel_1").hide();
	$(".panel_2").hide();
	$(".panel_3").hide();
	$(".panel_4").hide();
	$(".panel_5").hide();
	
         $(".panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".flip_1").click(function(){
	
	$(".panel").hide();
	$(".panel_2").hide();
	$(".panel_3").hide();
	$(".panel_4").hide();
	$(".panel_5").hide();
	
	
        $(".panel_1").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".flip_2").click(function(){
	
	$(".panel_1").hide();
	$(".panel").hide();
	$(".panel_3").hide();
	$(".panel_4").hide();
	$(".panel_5").hide();
	
	
        $(".panel_2").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".flip_3").click(function(){
	
	$(".panel_1").hide();
	$(".panel_2").hide();
	$(".panel").hide();
	$(".panel_4").hide();
	$(".panel_5").hide();
	
	
        $(".panel_3").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".flip_4").click(function(){
	
	$(".panel_1").hide();
	$(".panel_2").hide();
	$(".panel_3").hide();
	$(".panel").hide();
	$(".panel_5").hide();
	
	
        $(".panel_4").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".flip_5").click(function(){
	
	$(".panel_1").hide();
	$(".panel_2").hide();
	$(".panel_3").hide();
	$(".panel_4").hide();
	$(".panel").hide();
	
	
        $(".panel_5").slideToggle("slow");
    });
});
</script>

<style> 
.panel, .flip {
   
}

.panel {

    
    display: none;
}

.panel_1, .flip_1 {
   
}

.panel_1 {

    
    display: none;
}

.panel_2, .flip_2{
   
}

.panel_2 {

    
    display: none;
}

.panel_3, .flip_3 {
   
}

.panel_3 {

    
    display: none;
}

.panel_4, .flip_4 {
   
}

.panel_4 {

    
    display: none;
}

.panel_5, .flip_5{
   
}

.panel_5 {

    
    display: none;
}
</style>








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
left:160px;
top:0px;
width:100%;
height:100%;
background:#DADADA;
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
border:1px solid gray;

}
</style>




<div id="cover" style="z-index:2;"></div>






































	















<?php
//$link_1=$mainurl."company/doc/default/doc_new/what can I report here.pdf";
//$terms_doc=$mainurl."company/doc/default/Terms-of-Use.pdf";
//$privacy_doc=$mainurl."company/doc/default/Privacy-Policy.pdf";
$link_2=$mainurl."company/doc/default/doc_new/what can I report here.pdf";
$link_3=$mainurl."company/doc/default/doc_new/How does it work.pdf";
$link_4=$mainurl."company/doc/default/doc_new/How is my Confidentiality Maintained.pdf";
$link_5=$mainurl."company/doc/default/doc_new/What happens to the submitted information.pdf";
$link_6=$mainurl."company/doc/default/doc_new/What is responsible reporting.pdf";
?>

<div id="element_to_pop_up" class="ontop" style="background-color:White;padding:10px;width:500px;box-shadow: 5px 5px 5px #888888;position:absolute;z-index:3;left:40%;top:30%;"> 
<h3 style="color:blue;">Technical Support</h3>
<hr style="color: #123455;height:2px;">
<h4>For any technical issues please write to <span style="color:#B40431;">support@thehrmpractitioners.com<span></h4>
<center><h4>OR</h4></center>
<h4>Call us at +91 98867 43402 / +91 99001 21225</h4>
<a  onClick="closePopUp('element_to_pop_up');"><image src="<?php echo $mainurl; ?>/images/closeIcon.gif" id="close" style="top:0px;right:0px;position:absolute;cursor:pointer"/></a>



</div>





<div  class=" container container_1" style="background-color:#D2EEFA;z-index:2;" >

<!-- SLOGAN-->


<!--<div class="left_div" style="background-color:#D2EEFA;" >

	<div class="speak_up_logo">
	<img  src="<?php //echo $mainurl; ?>/images/Speak-up-1.png" alt="" width="200" height="200" style="margin:auto;">
	
	</div>
	
	<div class="whistle_logo">
	<img  src="<?php //echo $mainurl; ?>/images/DWF.png" alt="" width="230" height="230" style="margin:auto;">
	
	</div>



</div>-->

<?php include("left_div_company.php");?>


<div style="background-color:#D2EEFA;float:right;margin-right:7%;height:80%;">
<!-- hitwebcounter Code START -->


                       
					   
<!--Counter for website

<img src="http://hitwebcounter.com/counter/counter.php?page=6225270&style=0006&nbdigits=6&type=page&initCount=0" title="URL counter"  border="0" 
style="float:right;position:relative;margin-right:0px;">
</a>                                        <br/>
                                        <a href="http://www.hitwebcounter.com" title="Fast Counters" 
                                        target="_blank" style="font-family: sans-serif, Arial, Helvetica; 
                                        font-size: 9px; color: #9F9F97; text-decoration: none ;">                                     
                                        </a>   -->
										
										
										
                            


<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-disclose-without-fear" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-1.png" alt="" width="400" height="30"></a></p>-->
<!--<center><img style="margin-top:35px;margin-bottom:35px;" src="<?php //echo $mainurl; ?>/images/Welcom.png" alt="" width="400" height="200"></center>-->
</br></br><center><h3 style="font-weight: bold;color:#003B4D;line-height:20px;margin-top:5px;">WELCOME TO</h3></center>
<center><h1 style="font-weight: bolder;color:#FD7829;line-height:20px;"><b>SPEAK UP@UBL</b></h1></center>
<center><P style="font-weight: 900;color:#003B4D;">HOSTED BY THE HRM PRACTITIONERS, LLP</P></center>

<center><P style="font-size: 14px;margin-bottom:10px;margin-top:25px;"><b>PLEASE READ THE FOLLOWING ASPECTS BEFORE YOU LOG IN A CASE</b></P></center>
<!--<center><img style="margin-bottom:0px;" src="<?php //echo $mainurl; ?>/images/Read-the-following.png" alt="" width="500" height="300" ></center>-->


<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-disclose-without-fear" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-1.png" alt="" width="400" height="30"></a></p>-->
<!--<center><p style="margin-bottom:0px;" class="flip"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-1.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel" >The “Disclose Without Fear” (DWF) portal is a managed services initiative to promote safe and secure corporate whistleblowing by The HRM Practitioners LLP. <span><a title="Click here" href="<?php //echo $link_1; ?>" target="_blank"> <b>Read More...</b></a></span></p></center>-->


<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-can-i-report-here" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-2.png" alt="" width="400" height="64"></a></p>-->
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $link_2; ?>" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-2.png" alt="" width="550px" height="150px"></a></p>-->
<center><p style="margin-bottom:0px;" class="flip_1"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-2.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel_1" >You can report any violation of the company‟s code of business conduct and corporate compliance guidelines.  <span><a title="Click here" href="<?php echo $link_2; ?>" target="_blank"> ...Read More</a></span></p></center>




<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-does-it-work" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-3.png" alt="" width="400" height="64"></a></p>-->
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $link_3; ?>" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-3.png" alt="" width="550px" height="150px"></a></p>-->

<center><p style="margin-bottom:0px;" class="flip_2"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-3.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel_2" >This
portal serves as a secure and confidential communication conduit between employees who want 
to report any violation of the company’s code of business ethics  <span><a title="Click here" href="<?php echo $link_3; ?>" target="_blank"> ...Read More</a></span></p></center>




<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/how-is-my-confidentiality-maintained" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-4.png" alt="" width="400" height="64"></a></p>-->
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $link_4; ?>" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-4.png" alt="" width="550px" height="150px"></a></p>-->


<center><p style="margin-bottom:0px;" class="flip_3"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-4.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel_3" >The basic purpose of this 
portal is to empower employees in every organization, big or small, 
with the right to disclose   <span><a title="Click here" href="<?php echo $link_4; ?>" target="_blank"> ...Read More</a></span></p></center>



<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-happens-to-the-information" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-5.png" alt="" width="400" height="64"></a></p>-->
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $link_5; ?>" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-5.png" alt="" width="550px" height="150px"></a></p>-->


<center><p style="margin-bottom:0px;" class="flip_4"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-5.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel_4" >All reports/ incidents submitted by you on the portal are sent to your organization for further processing  <span><a title="Click here" href="<?php echo $link_5; ?>" target="_blank"> ...Read More</a></span></p></center>



<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-responsible-reporting" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-6.png" alt="" width="400" height="64"></a></p>-->
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $link_6; ?>" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-6.png" alt="" width="550px" height="150px"></a></p>-->


<center><p style="margin-bottom:0px;" class="flip_5"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-6.png" alt="" width="550px" height="150px"></p></center>

<center><p style="margin-bottom:0px;width:550px;background-color:#FFFFFF;height:45px;text-align: justify;padding:3px;border-radius:5px;position:absolute;" class="panel_5" >Please use the portal RESPONSIBLY. This Portal should NOT be used for submitting complaints or grievances which the provider  <span><a title="Click here" href="<?php echo $link_6; ?>" target="_blank"> ...Read More</a></span></p></center>


<!--<p style="margin-top:7px;margin-left:15%;">-->
<center><a title="Click here" href="<?php echo $_GET['companyurl']; ?>/log-report-userguideline_1" rel="alternate"><input style="color:#000;font-size:14px;margin-top:20px;padding:15px;padding-left:20px;padding-right:20px;padding-bottom:6px;padding-top:6px;font: 20px;font-weight:800; font-family: 'Roboto',sans-serif;" name="Continue" type="submit" class="fSubmit_1" id="fSubmit1" value="LOG CASE" ></a></center>


<!--<span><button id="my-button" style="width:120;height:45px;margin-top:3px;color:red;"><b>Technical Support</b></button></span>-->
<center><a title="Click here" class="btn1"  onclick="showPopUp('element_to_pop_up');" rel="alternate"><input style="color:#000;font-size:12px;margin-top:0px;padding:15px;padding-left:20px;padding-right:20px;padding-bottom:4px;padding-top:4px;font: 15px; font-weight:800; font-family: 'Roboto',sans-serif;" name="Continue" type="submit" class="fSubmit_1" id="fSubmit1" value="CONTACT SUPPORT" ></a></center>








<!--<td>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/how-is-my-confidentiality-maintained" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/confidentiality.png" alt="" width="200" height="64"></a></p>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-happens-to-the-information" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/what_happens.png" alt="" width="200" height="64"></a></p>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-responsible-reporting" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/what_is_responsible.png" alt="" width="200" height="64"></a></p>
</td>-->





<!--<div style="width:auto;height:75px;margin-left:-38px;margin-right:-38px; margin-top:10px;padding-top:13px;padding-bottom:3px;position:relative;">
<p style="position:absolute;right:165px;top:78px;"><font size="5"><b>Powered By</b></font></p><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Logo-hrm.png" alt="" width="150" height="150" align="right"></div>-->

 

<!--<a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/ticket-dasboard"><img src="<?php //echo $mainurl; ?>/images/track.png" alt="" width="200" height="64"></a>-->

</span></p>
<p style="text-align: center;">&nbsp;</p>

</div>



<!-- //SLOGAN -->







</div>

  
   
