<?php 
//Include database connection details
header('Content-Type: text/html; charset=utf-8');
require_once('../config.php');
require_once('auth.php');
$sess=$_SESSION["company_secure_web"];
if(!isset($_SESSION["company_secure_web"]) || ($_SESSION["company_secure_web"] == '')) {
//header("location:/dwf_new_UB_1/error_2.php");
header("location: ".$mainurl."error_2.php");
}





//Array to store validation errors
$errmsg_arr = array();
//Validation error flag
$errflag = false;
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
//Sanitize the POST values
$Complaint_Category = clean($_POST['Complaint_Category']);
$Upload_Document = clean($_FILES['Upload_Document']['name']);
$Upload_Document_Size = clean($_FILES['Upload_Document']['size']);
$Complaint_Department = clean($_POST['Complaint_Department']);
$Detailed_Complaint = nl2br($_POST['Detailed_Complaint']);
$Detailed_Complaint_1=str_replace('<br />', " ", $Detailed_Complaint);
$_SESSION['Detailed_Complaint'] = $Detailed_Complaint_1;
$anonymous=clean($_POST['ano_yes']);
$Name_emp=clean($_POST['Name_emp']);
$complaint_department=clean($_POST['complaint_department']);
$location=clean($_POST['location']);
$emp_mail=clean($_POST['emp_mail']);

//$Username = clean($_POST['Username']);
//$Password = clean($_POST['Password']);
//$Verify_Password = clean($_POST['Verify_Password']);
/*if($Username == '') {
$errmsg_arr[] = 'Enter user name for company login';
$errflag = true;
}*/

if($anonymous=='no')
{
	if($Name_emp=='' || $complaint_department=='' || $location=='' || $emp_mail=='')
	{
	$ano_sess=$anonymous;
	$below_error='If No, Below * fields require';
	$new_error = true;
	
	
	}

}

if($new_error) {
				$_SESSION['below_error'] = $below_error;
				$_SESSION['ano_sess']=$ano_sess;
				header("location: log-report-form");
					exit();
	}
	
	

	
	
	


if($Detailed_Complaint == '') {
$errmsg_arr[] = 'Enter the complaint';
$errflag = true;
}
/*if($Password == '') {
$errmsg_arr[] = 'Enter the password';
$errflag = true;
}
if($Verify_Password == '') {
$errmsg_arr[] = 'confirm the password';
$errflag = true;
}*/
if($Upload_Document_Size > '8000000') {
$errmsg_arr[] = 'Upload file size must be less than 10MB';
$errflag = true;
}
/*if( strcmp($Password, $Verify_Password) != 0 ) {
$errmsg_arr[] = 'Passwords does not match';
$errflag = true;
}*/
//Check for duplicate login ID
/*if($Username != '') {
$qry = "SELECT * FROM complaint_user WHERE username='$Username'";
$result = mysql_query($qry);
if($result) {
if(mysql_num_rows($result) > 0) {
$errmsg_arr[] = 'Username already in use';
$errflag = true;
}
@mysql_free_result($result);
}
else {
die("Query failed");
}
}*/	
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;



session_write_close();
header('Location: log-report-form');
//header("Location: ".$mainurl."company/".$_GET['companyurl']."/log-report-form");
exit();
}
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
$strip_Company_Logo=str_replace(' ', '', $Company_Logo);
$strip_Company_Name=str_replace(' ', '', $Company_Name);
$companylogo_name = $_FILES['Company_Logo']['name']."<br />";
$companylogo_type =  $_FILES["Company_Logo"]["type"]."<br />";
$companylogo_size =  $_FILES['Company_Logo']['size']."<br />";
$companylogo_tmppath = $_FILES["Company_Logo"]["tmp_name"]."<br />"; 
$result = mysql_query("SELECT * FROM company WHERE unique_url='".$_GET['companyurl']."'");
$row = mysql_fetch_assoc($result);
$camid=$row['cam_id'];
$companyid=$row['company_id'];
$result12 = mysql_query("SELECT * FROM company_lead WHERE lead_id=".$row['lead_id']);
$row12 = mysql_fetch_assoc($result12);
$tsid=$row12['ts_id'];
//Create INSERT query
//$md5Password=md5($Password);
/*$qry = "INSERT INTO complaint_user(username, pword, status, modified_on, created_on) VALUES('$Username','$md5Password','1',NOW(),NOW())";
$result = @mysql_query($qry);
$user_id = mysql_insert_id();*/
$result123 = mysql_query("SELECT * FROM complaints WHERE company_id=".$companyid);
$countcomplaint = mysql_num_rows($result123);
$countcomplaint=$countcomplaint+1;
$countcomplaint=str_pad( $countcomplaint, 5, "0", STR_PAD_LEFT );
$ticket="TKT".$companyid."_".$countcomplaint;

if($anonymous== 'no')
{

$qry1 = "INSERT INTO complaints(company_id, ticket, cam_id, ts_id, Name_emp, complaint_department, fraud_dept, location, emp_mail, cat_id, dep_id, detail, status, created_on) VALUES('$companyid','$ticket','$camid','$tsid','$Name_emp', '$complaint_department','$Complaint_Department', '$location', '$emp_mail', '$Complaint_Category','$complaint_department','$Detailed_Complaint','0',NOW())";
$result1 = @mysql_query($qry1);
$complaint_id = mysql_insert_id();
}

if($anonymous== 'yes')
{
$qry1 = "INSERT INTO complaints(company_id, ticket, cam_id, ts_id, Name_emp, fraud_dept, location, emp_mail, cat_id, dep_id, detail, status, created_on) VALUES('$companyid','$ticket','$camid','$tsid','$Name_emp', '$Complaint_Department','$location', '$emp_mail', '$Complaint_Category','$Complaint_Department','$Detailed_Complaint','0',NOW())";
$result1 = @mysql_query($qry1);
$complaint_id = mysql_insert_id();

}








if($anonymous== 'yes')
{
$qry2 ="UPDATE complaints SET Name_emp='Anonymous', complaint_department='Anonymous', location='Anonymous', emp_mail='Anonymous' WHERE complaint_id=".$complaint_id;
$result2 = @mysql_query($qry2);

}





$docname=$ticket."_".$_FILES["Upload_Document"]["name"];
if ($Upload_Document!='') 
{
$filename = stripslashes($_FILES['Company_Logo']['name']);
$extension = getExtension($filename);
$extension = strtolower($extension);




move_uploaded_file($_FILES["Upload_Document"]["tmp_name"], "doc/" . $docname);
$qry2 ="UPDATE complaints SET upload='".$docname."' WHERE complaint_id=".$complaint_id;
$result2 = @mysql_query($qry2);
}


$to=$row12['cemail'];
$subject='complaint Lodged';
$message='<div><pre>New case has been lodged. Please log into the SPOC dashboard and see details.</pre></div>';
$frommail_hrm = 'info@thehrmpractitioners.com';


 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= 'From:'.$frommail_hrm. "\r\n";
 
$sendmail= mail($to,$subject,$message,$headers);






?>
<div id="t3-mainbody" class="container t3-mainbody ">
<div class="row" style="margin-bottom:-5px;">
<!-- MAIN CONTENT -->
<article>
<div id="formWrapper">
<fieldset class="fBlock" id="Login_Detail" style="margin-right:-20px;margin-bottom:-20px;">
<legend>Thank you</legend>
<div id="formText">

<p style="text-align: left;line-height:0px;justify;margin-bottom:2px;margin-top:-15px;">Thank you for registering your “Speak Up” case. </p>

 

<p style="text-align: left;margin-bottom:2px;">We value your information and appreciate the fact that you have taken extra efforts to register a case with the sole intention of making UBL a better workplace.
</p>

 

<p style="text-align: left;justify;margin-bottom:2px;">While we will ensure your confidentiality and anonymity, you have our assurance that as per the Speak Up@UBL policy, your case will be treated seriously and processed according to the procedures set up in the policy. 
The Company will not tolerate any form of harassment, retaliation or victimization of anyone raising a genuine Speak Up@UBL case and will take strict disciplinary action against those who resort to such actions. 
</p>

 

<p style="text-align: left;justify;margin-bottom:2px;">If, after registering this case, you believe that you are being subjected to discrimination, retaliation or harassment by any person(s) within the organization, you must immediately report, in writing, those facts to your manager or HR representative. If, for any reason, you do not feel comfortable discussing the matter with these persons, you should bring the matter to the attention of the Chairman of the UBL Whistleblowing Management Committee (WBMC), Mr Hans van Zon (hansvanzon@ubmail.com) or to the EVP (HR) and Member of the WBMC, Mr Manmohan Kalsy (manmohankalsy@ubmail.com) or to VP (Legal) and Member of the WMBC, Mr Govind Iyengar (gri@ubmail.com).  It is imperative that you bring the matter to the Company’s attention promptly so that any concern of reprisal, discrimination or adverse employment consequences can be investigated and addressed promptly and appropriately.
</p>

 

<p style="text-align: left;justify;margin-bottom:2px;">Once again, thank you for your efforts to actively promote an ethical, safe and compliant workplace at UBL.
</p>

 

<!--<p><strong>Your Login Detail</strong></p>
<p>Username: <?php //echo $Username; ?><br />
Password: <?php //echo $Password; ?></p>-->
</div>
</fieldset>
</div>
</article></div>


</div>

<?php include('footer_1.php');
unset($_SESSION["company_secure_web"]);?>
<?php
exit();

?>

