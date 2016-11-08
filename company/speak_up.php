<!DOCTYPE html>
<?php 
/* set the cache limiter to 'private' */
session_start();
require_once('../config.php');
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* set the cache expire to 30 minutes */
session_cache_expire();
$cache_expire = session_cache_expire();



header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: post-check=0, pre-check=0",false);
session_cache_limiter();

$m=$_GET['q'];
$u=preg_replace('/[^A-Za-z0-9\-]/', '', $m);
$company_url=$_GET['companyurl'];
$_SESSION["company_secure_web"]=$u;
session_write_close();
?>

<script type="text/javascript">
// Define the string
//document.write("<h1>Success</h1>");
var carnr;
carnr="<?php print($u);?>";

var conf_url;
conf_url="<?php print($mainurl);?>";

var comp_url="<?php print($company_url);?>";
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
//document.write(today_is);
//document.write("</br>");
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
//document.write(var_1);
//document.write("</br>");
var var_2=Math.abs( min_split - min_split_1);
//document.write(var_2);
//document.write("</br>");
var var_3=Math.abs( split_sec[0]- split_sec_1[0]);
//document.write("</br>");

var difference=today_is - decodedString;


if( var_2 <= 5 && var_3 <= 60)

{

//document.write("hello if part");

      
       
		
		window.location=conf_url+"company/"+comp_url+"/"+carnr+"/"+carnr;
		
		<?php	//header('Location: /dwf_new_UB_1/company/'.$company_url.'/'.$u.'/'.$u); ?>


}
else
{
document.write("<h1>Time Out<h1>");
}



</script>
