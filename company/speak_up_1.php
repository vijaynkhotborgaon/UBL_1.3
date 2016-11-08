<!DOCTYPE html>
<?php 
session_start();
$m=$_GET['q'];
$u=preg_replace('/[^A-Za-z0-9\-]/', '', $m);
$company_url=$_GET['companyurl'];?>

<script type="text/javascript">
// Define the string
//document.write("<h1>Success</h1>");
var carnr;
carnr="<?php print($u);?>";
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


if( var_1 == 0 && var_2 <= 4 && var_3 <= 60)

{

//document.write("hello if part");

       <?php $_SESSION['time_out']='time'; ?>
       
		
		window.location="/dwf_new_UB_1/company/"+comp_url+"/"+carnr+"/"+carnr;
		
		<?php	//header('Location: /dwf_new_UB_1/company/'.$company_url.'/'.$u.'/'.$u); ?>


}
else
{
document.write("<h1>Error page<h1>");
}



</script>
