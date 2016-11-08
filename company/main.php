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








<div id="element_to_pop_up" style="background-color:White;padding:10px;width:500px;box-shadow: 5px 5px 5px #888888;position:relative;"> 
<h3 style="color:blue;">Technical Support</h3>
<hr style="color: #123455;height:2px;">
<h4>For any technical issues please write to <span style="color:#B40431;">support@thehrmpractitioners.com<span></h4>
<image src="closeIcon.gif" id="close" style="top:0px;right:0px;position:absolute;cursor:pointer"/>


</div>


<?php
$link_1=$mainurl."company/doc/default/1_tab.pdf";
//$terms_doc=$mainurl."company/doc/default/Terms-of-Use.pdf";
//$privacy_doc=$mainurl."company/doc/default/Privacy-Policy.pdf";
$link_2=$mainurl."company/doc/default/2_tab.pdf";
$link_3=$mainurl."company/doc/default/3_tab.pdf";
$link_4=$mainurl."company/doc/default/4_tab.pdf";
$link_5=$mainurl."company/doc/default/5_tab.pdf";
$link_6=$mainurl."company/doc/default/6_tab.pdf";
?>


<div id="ja-content-mass-top" class="ja-content-mass-top container" >
<div style="width:auto;height:53px;margin-left:-38px;margin-right:-38px; margin-top:10px;background-color:#940000;padding-top:13px;padding-bottom:3px;position:relative;">

<center><p style="margin:0em;"><font size="6" color="#F7F3EB" ><b style="margin-top:7px;">WELCOME TO DISCLOSE WITHOUT FEAR</b></p></center>
<center><p style="margin:0em;font-family: Arial, Helvetica, sans-serif;"><font size="4" color="#F7F3EB" >THE WHISTLE-BLOWING MANAGED SERVICES FOR CORPORATES</p></center>

</div>
<center><p style="margin-top:7px;margin-bottom:7px;font-family: Arial, Helvetica, sans-serif;"><font size="3" color="#F7F3EB" >Please read the following aspects of the Disclose Without Fear portal before you login a report. </p></center>
<!-- SLOGAN-->
<div class="ja-slogan"  >
<div class="row" >
<div class="span12 " >
<div class="custom" >
<table  style="margin-left: auto; margin-right: auto;" id="SearchTable">
<tbody>
<tr style="padding-top:0px;padding-bottom:0px;">
<td style="padding-top:0px;padding-bottom:0px;">
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-disclose-without-fear" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-1.png" alt="" width="400" height="30"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_1; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-1.png" alt="" width="400" height="30"></a></p>

</td>
<td rowspan="5">
<p style="margin-bottom:0px;"><img style="margin-left: 40px;" src="<?php echo $mainurl; ?>/images/1.png" alt="" width="400" height="100"></p>
</td>
</tr>

<tr style="padding-top:0px;padding-bottom:0px;">
<td >
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-can-i-report-here" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-2.png" alt="" width="400" height="64"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_2; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-2.png" alt="" width="400" height="30"></a></p>

</td>
</tr>

<tr style="padding-top:0px;padding-bottom:0px;">
<td>
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-does-it-work" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-3.png" alt="" width="400" height="64"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_3; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-3.png" alt="" width="400" height="30"></a></p>

</td>
</tr>

<tr style="padding-top:0px;padding-bottom:0px;">
<td>
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/how-is-my-confidentiality-maintained" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-4.png" alt="" width="400" height="64"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_4; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-4.png" alt="" width="400" height="30"></a></p>

</td>
</tr>

<tr style="padding-top:0px;padding-bottom:0px;">
<td>
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-happens-to-the-information" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-5.png" alt="" width="400" height="64"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_5; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-5.png" alt="" width="400" height="30"></a></p>

</td>


</tr>

<tr >
<td>
<!--<p style="margin-bottom:0px;"><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-responsible-reporting" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Q-6.png" alt="" width="400" height="64"></a></p>-->
<p style="margin-bottom:0px;"><a title="Click here" href="<?php echo $link_6; ?>" target="_blank"><img style="margin: 5px;" src="<?php echo $mainurl; ?>/images/Q-6.png" alt="" width="400" height="30"></a></p>

</td>
<td>
<!--<p style="margin-top:7px;margin-left:15%;">-->
<span style="font-size: 12pt;"> <a title="Click here" href="<?php echo $_GET['companyurl']; ?>/log-report-userguideline" rel="alternate"><img src="<?php echo $mainurl; ?>/images/Log-report.png" alt="" width="230" height="45" style="margin-top:5px;"></a>
<span><button id="my-button" style="width:120;height:45px;margin-top:3px;color:red;"><b>Technical Support</b></button></span>
</td>


</tr>








<!--<td>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/how-is-my-confidentiality-maintained" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/confidentiality.png" alt="" width="200" height="64"></a></p>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-happens-to-the-information" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/what_happens.png" alt="" width="200" height="64"></a></p>
<p><a title="Click here" href="<?php //echo $_GET['companyurl']; ?>/what-is-responsible-reporting" target="_blank"><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/what_is_responsible.png" alt="" width="200" height="64"></a></p>
</td>-->




</tbody>
</table>
<!--<div style="width:auto;height:75px;margin-left:-38px;margin-right:-38px; margin-top:10px;padding-top:13px;padding-bottom:3px;position:relative;">
<p style="position:absolute;right:165px;top:78px;"><font size="5"><b>Powered By</b></font></p><img style="margin: 5px;" src="<?php //echo $mainurl; ?>/images/Logo-hrm.png" alt="" width="150" height="150" align="right"></div>-->

 

<!--<a title="Click here" href="<?php echo $_GET['companyurl']; ?>/ticket-dasboard"><img src="<?php echo $mainurl; ?>/images/track.png" alt="" width="200" height="64"></a>-->

</span></p>
<p style="text-align: center;">&nbsp;</p></div>
</div>
</div>
</div>
<!-- //SLOGAN -->







</div>