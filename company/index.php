<?php

require_once('../config.php');
require_once('auth.php');
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: post-check=0, pre-check=0",false);
session_cache_limiter();
$result = mysql_query("SELECT * FROM company where unique_url='".$_GET['companyurl']."'");	
$row = mysql_fetch_assoc($result);
$_GET['companyurl']. "</br>";
$_GET['q']. "</br>";
$_GET['page']. "</br>";
$_SESSION["decrypt"]=$_GET['decrypt']. "</br>";
$m=$_SESSION["decrypt"];
$_GET['current'];
$u=preg_replace('/[^A-Za-z0-9\-]/', '', $m);

?>
<script type="text/javascript">

var carnr;
carnr="<?php print($u);?>";

var conf_url;
conf_url="<?php print($mainurl);?>";

//document.write("</br></br>");
var myParam = location.search.split('u=')[1];

//var string = 'VGh1IEF1ZyAwNiAyMDE1IDEzOjQ5OjIxIEdNVCswNTMwIChJbmRpYSBTdGFuZGFyZCBUaW1lKQ==';
//var string = getQueryVariable("u");
//var string1 = <?php echo "vijay khot"; ?>;
//var string = Url.get.u;
//document.write(string1);
// Encode the String

//var encodedString = window.btoa(string);
//document.write(encodedString); // Outputs: "SGVsbG8gV29ybGQh"

// Decode the String
var decodedString = window.atob(carnr);
var date_encoded="decrypted value :" +decodedString;
//document.write(date_encoded); // Outputs: "Hello World!"
//document.write("</br>");
var today_is=Date();
//document.write("Todays_date :" +today_is);
//document.write("</br>");
var today = "<?php $today=Date();?>";
var decodedString_1 = window.btoa(today);

var my_split= decodedString.split(":");

var hr_split=my_split[0];
var split_hr= hr_split.split(" ");
//document.write(split_hr[4]);

var min_split=my_split[1];
//document.write(min_split);

var sec_split=my_split[2];
var split_sec= sec_split.split(" ");
//document.write(split_sec[0]);
//document.write("</br>");




var my_split= today_is.split(":");

var hr_split_1=my_split[0];
var split_hr_1= hr_split_1.split(" ");
//document.write(split_hr_1[4]);

var min_split_1=my_split[1];
//document.write(min_split_1);

var sec_split_1=my_split[2];
var split_sec_1= sec_split_1.split(" ");
//document.write(split_sec_1[0]);
//document.write("</br>");




var var_1=Math.abs(split_hr[4] - split_hr_1[4]);
//document.write("</br>");
var var_2=Math.abs( min_split - min_split_1);
//document.write("</br>");
var var_3=Math.abs( split_sec[0]- split_sec_1[0]);
//document.write("</br>");

var difference=today_is - decodedString;
if(var_2 <= 20 && var_3 <= 60)

{
 
       
		
		window.location=conf_url+"company/"+comp_url+"/"+carnr+"/"+carnr;
		
		<?php	//header('Location: /dwf_new_UB_1/company/'.$company_url.'/'.$u.'/'.$u); ?>
}
else
{
window.location=conf_url+"error.php";
}


</script>


<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<link href="favicon.ico" rel="shortcut icon" type="image/png" />




<title><?php echo $row['cname']; ?> Dashboard</title>


<link rel="stylesheet" href="<?php echo $mainurl; ?>/css/css-be258.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="<?php echo $mainurl; ?>/js/jquery-1.8.3.js" type="text/javascript"></script>
<script src="<?php echo $mainurl; ?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $mainurl; ?>/js/jquery.validation.functions.js" type="text/javascript"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" />
<style>
#timeout {
    display: none;
}
</style>
<script type="text/javascript">
/*setTimeout(onUserInactivity, 1000 * 1320)
function onUserInactivity() {
  window.location.href = conf_url+"inactive.php"
}

*/


  // Set timeout variables.
        var timoutWarning = 60000*5; // Display warning in 1Mins.
        var timoutNow = 60000*6; // Timeout in 2 mins.
        var logoutUrl = conf_url+"inactive.php"; // URL to logout page.

        var warningTimer;
        var timeoutTimer;

        // Start timers.
        function StartTimers() {
            warningTimer = setTimeout("IdleWarning()", timoutWarning);
            timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
        }

        // Reset timers.
        function ResetTimers() {
            clearTimeout(warningTimer);
            clearTimeout(timeoutTimer);
            StartTimers();
            $("#timeout").dialog('close');
        }

        // Show idle timeout warning dialog.
        function IdleWarning() {
            $("#timeout").dialog({
                modal: true
            });
        }

        // Logout the user.
        function IdleTimeout() {
            window.location = logoutUrl;
        }

/*inactivityTimeout = False
resetTimeout()
function onUserInactivity() {
   window.location.href = conf_url+"inactive.php";
}
function resetTimeout() {
   clearTimeout(inactivityTimeout)
   inactivityTimeout = setTimeout(onUserInactivity, 5000 )
}
window.onmousemove = resetTimeout();*/



/*var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 2) { // 20 minutes
         window.location.reload();
    }
}*/
</script>

</head>
<body onload="StartTimers();" onmousemove="ResetTimers();">

<div id="timeout">
        <p>No activity has been detected since 5 mins. This session will disconnect after 60 seconds if no further activity is observed. move your mouse over this window to continue. </p>
    </div>
<?php

if($_GET['page']==''  ){
//include('header_1.php');
include('main_1.php');
include('footer_1.php');
} 


elseif($_GET['page']=='log-report-userguideline_1') {
//include('header.php');
include('log-report-userguideline_1.php');
include('footer_1.php');
} 

elseif($_GET['page']=='speak_up') {
//include('header.php');

include('speak_up.php');

} 






elseif($_GET['page']=='log-report-form') {
include('header.php');
include('log-report-form.php');
include('footer_1.php');
} elseif($_GET['page']=='thank-you-msg') {
include('header.php');
include('thank-you-msg.php');
include('footer_1.php');
} elseif($_GET['page']=='reg_complaint_process') {
include('header.php');
include('reg_complaint_process.php');
include('footer_1.php');
} elseif($_GET['page']=='loginprocess') {
include('header.php');
include('loginprocess.php');
include('footer.php');
} elseif($_GET['page']=='logout') {
include('header.php');
include('logout.php');
include('footer.php');
} elseif($_GET['page']=='complaint-replay-process') {
include('header.php');
include('complaint-replay-process.php');
include('footer.php');
} elseif($_GET['page']=='what-is-disclose-without-fear') {
include('header.php');
include('what-is-disclose-without-fear.php');
include('footer.php');
} elseif($_GET['page']=='what-can-i-report-here') {
include('header.php');
include('what-can-i-report-here.php');
include('footer.php');
} elseif($_GET['page']=='what-does-it-work') {
include('header.php');
include('what-does-it-work.php');
include('footer.php');
} elseif($_GET['page']=='how-is-my-confidentiality-maintained') {
include('header.php');
include('how-is-my-confidentiality-maintained.php');
include('footer.php');
} elseif($_GET['page']=='what-happens-to-the-information') {
include('header.php');
include('what-happens-to-the-information.php');
include('footer.php');
} elseif($_GET['page']=='what-is-responsible-reporting') {
include('header.php');
include('what-is-responsible-reporting.php');
include('footer.php');
} elseif(($_GET['complaint-id']=='') && ($_GET['page']=='ticket-dasboard')) {
include('header.php');
include('ticket-dasboard.php');
include('footer.php');
}elseif(($_GET['complaint-id']!='') && ($_GET['page']=='ticket-dasboard')) {
include('header.php');
include('view-complaint-details.php');
include('footer.php');
}
?>

<?php


 
//include('footer.php');
?>
<!-- //FOOTER -->    
</body></html>