<!--<script src="https://www.juthawong.com/wp-content/uploads/2015/06/amparecopyprotection.js" type="text/javascript"></script>-->


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
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$sess=$_SESSION["company_secure_web"];
if(!isset($_SESSION["company_secure_web"]) || ($_SESSION["company_secure_web"] == '')) {
//header("location:/dwf_new_UB_1/error_2.php");
header("location: ".$mainurl."error_2.php");
}





?>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<script>

$(document).ready(function(){
    $("#ano_yes").click(function(){
        $("#anonym_container").slideUp("slow");
        
    });
});

$(document).ready(function(){
    $("#ano_yes_1").click(function(){
        $("#anonym_container").slideDown("slow");
        
    });
});

/*$(document).ready(function(){
    $("#ano_yes").click(function(){
        $("#anonym_container_1").show();
        
    });
});

$(document).ready(function(){
    $("#ano_yes_1").click(function(){
        $("#anonym_container_1").hide();
        
    });
});*/


</script>





<div id="t3-mainbody" class="container t3-mainbody ">
<div class="row">
<article>
<?php	if(isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) { ?> 
<div id="system-message">
<div class="alert alert-message">
<?php
foreach($_SESSION['ERRMSG_ARR'] as $msg) { 
echo '<p style="color:#FF0040;"><font size="3"><b>'.$msg.'</b></font></p>'; 
}		
?>  
</div>
</div>
<?php
unset($_SESSION['ERRMSG_ARR']);	
}
?>
<div id="formWrapper" style="margin-left:10px;"> 
<form action="reg_complaint_process" method="post" enctype="multipart/form-data" onsubmit="return myFunction1()">


<fieldset class="fBlock" id="Corporate_Details">
<legend>CASE LOGIN PAGE</legend>

<fieldset class="fBlock" id="Login_Detail" style="background-color:#F2F2F2">

<div id="formText">
<p style="text-align: justify;margin-bottom:2px;">Hello,</p>

<p style="text-align: justify;margin-bottom:2px;">You are about to log in a Speak Up@UBL case.</p>

<p style="text-align: justify;margin-bottom:2px;">Before you do so, we want to bring to your notice the following points again – </p>





<ol style="margin-top:0px;">
<li style="text-align: justify;justify;margin-bottom:2px;">Please make sure that you are logging in a genuine case and NOT misusing this portal to malign, victimize, retaliate or take revenge on any UBL employee. Any employee, who registers a case with mala fide intentions and which is subsequently found to be false will be subject to strict disciplinary action as per the UBL disciplinary framework.
</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Although UBL accepts anonymously reported cases, it encourages it’s employees to disclose their identity while registering the case and assures them of confidentiality and protection as per the SPEAKUP POLICY as this will help conduct the investigations more accurately and objectively.
</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Your personal details are safe with us. Even if you disclose your identity while registering your case, we will keep your identity confidential and only report the case details to UBL*. In case UBL requests for more data, they will send us their queries on your case and we will write to you with those queries and request you to provide further information/ clarifications.
<p style="text-align: justify;justify;margin-bottom:2px; font-size:12px;">(* Unless (in exceptional circumstances) required by law, in the course of a criminal investigation by the Police, or in serving a substantial public interest requirement.)
</p>
</li>


</ol>

</div>















<table style="margin-bottom:2px;">
<tr>
<td style="padding-top:20px;"><input type="radio" name="ano_yes" value="yes" id="ano_yes" checked /></td>
<td style="text-align: justify;justify;margin-bottom:2px; font-weight:600; font-size:13px; font-style:italic;">I prefer to register the case anonymously. I understand that by doing so, I will not be able to provide further information/ clarifications required to investigate this case, nor will I be informed about the outcome of this case. 

 </td></tr>

<tr>
<td style="padding-top:32px;"><input type="radio" name="ano_yes" id="ano_yes_1" value="no"  <?php if(isset($_SESSION['ano_sess']) && $_SESSION['ano_sess'] == 'no') { echo " checked"; } ?>/></td>
<td style="text-align: justify;justify;margin-bottom:2px; font-weight:600; font-size:13px; font-style:italic;">I want to provide my personal details. I understand that the portal will maintain my anonymity and confidentiality and not provide any of my personal details that I furnish here to UBL. Any queries on my case will be routed through the portal to me for any further information/ clarification.</td>
</tr>
</table>

<?php if($_SESSION['ano_sess']=='no' ) {?>
<div id="anonym_container" style="width:100%;" >
<p class="p_special" style="color:#DF0101;background-color:#FFFFFF;"><?php if( isset($_SESSION['below_error'])){ echo $_SESSION['below_error']; unset($_SESSION['below_error']);	}?></p> 


<p ><label style="font-size: 13px; font-weight:600;">Your Name <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="Name_emp" id="Name_emp">

<p> <label style="font-size: 13px; font-weight:600;">Your Department <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="complaint_department" id="complaint_department">
<!--<select name="Complaint_Department" id="Complaint_Department">
<?php //$result = mysql_query("SELECT * FROM complaint_department");
//while($row = mysql_fetch_array($result))  { 
?>
<option value="<?php //echo $row['dep_id']; ?>">
<?php //echo $row['department']; ?>
</option>
<?php// } ?>  </select>-->

<p><label style="font-size: 13px; font-weight:600;">Your Location <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="location" id="location">

<p><label style="font-size: 13px; font-weight:600;">Your Personal Email ID <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="emp_mail" id="emp_mail"></p>


</div>

<?php unset($_SESSION['ano_sess']); } else {?>

<div id="anonym_container" style="width:100%;display:none;" >
<?php if( isset($_SESSION['below_error'])){ echo $_SESSION['below_error']; unset($_SESSION['below_error']);	}?>


<p><label style="font-size: 13px; font-weight:600;">Your Name <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="Name_emp" id="Name_emp">

<p> <label style="font-size: 13px; font-weight:600;">Your Department <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="complaint_department" id="complaint_department">
<!--<select name="Complaint_Department" id="Complaint_Department">
<?php //$result = mysql_query("SELECT * FROM complaint_department");
//while($row = mysql_fetch_array($result))  { 
?>
<option value="<?php echo $row['dep_id']; ?>">
<?php //echo $row['department']; ?>
</option>
<?php //} ?>  </select>-->

<p><label style="font-size: 13px; font-weight:600;">Your Location <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="location" id="location">

<p><label style="font-size: 13px; font-weight:600;">Your Personal Email ID <span style="color:#FE2E2E;">*</span></label>
<input type="text" name="emp_mail" id="emp_mail"></p>


</div>

<?php }?>










<p><label style="font-size: 13px; font-weight:600;">Case Category</label>
<select name="Complaint_Category" id="Complaint_Category">
<?php 
$result = mysql_query("SELECT * FROM complaint_category");
while($row = mysql_fetch_array($result))  {
?>
<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category']; ?></option>
<?php 
} 
?>
</select>
</p>

<div id="anonym_container_1" style="width:100%;height:30px;background-color:#EFF5FA;" >
<p> <label style="font-size: 13px; font-weight:600;">Case Department (optional) </label>
<input type="text" name="Complaint_Department" id="Complaint_Department">
</div>

</fieldset>





<fieldset class="fBlock" id="Login_Detail" style="background-color:#F2F2F2">
<legend>CASE DETAILS</legend>
<div id="formText">
<p style="margin-top:-25px;"><font size="3" color="#003B4D"><b>While registering your case, please make sure that you include the following details :</b></font></p>
<ol style="margin-top:-10px;">
<li style="text-align: justify;justify;margin-bottom:2px;">What is the issue?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Who is involved and how and why?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Where is this happening? Is it widespread throughout the company or just at a particular location?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">When did this start or happen (date & time), how frequently is this happening, is this still ongoing? Is it happening within working hours?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Why is this happening? What has caused this? What are the consequences of this?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">How do you know this has happened? Have you seen it directly yourself or has someone else told you about this issue?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">What is the scale of the damage or loss due to this issue?</li>
<li style="text-align: justify;justify;margin-bottom:2px;">Has this been reported before? To whom? What action was taken?</li>

</ol>

</div>


</fieldset>


































































<!--<p> <label>Complaint Department</label>
<select name="Complaint_Department" id="Complaint_Department">
<?php //$result = mysql_query("SELECT * FROM complaint_department");
//while($row = mysql_fetch_array($result))  { 
?>
<option value="<?php //echo $row['dep_id']; ?>">
<?php //echo $row['department']; ?>
</option>
<?php //} ?>  </select></p>-->
<p class="Detailed_Complaint"><label style="font-size: 13px;width:330px; font-weight:600;">Case Description</label>
<textarea spellcheck="true" wrap="hard" cols="200" rows="3" name="Detailed_Complaint" id="Detailed_Complaint" class="Detailed_Complaint" style="border-color:#A9BCF5;width:800px;"><?php if(isset($_SESSION['Detailed_Complaint'])) { echo $_SESSION['Detailed_Complaint']; } ?></textarea></p>

<?php unset($_SESSION['Detailed_Complaint']);?>
<p><label style="font-size: 13px;width:50%; font-weight:600;">Supporting Documentation (Max Size 10MB, ZIP/RAR Allowed)</label>
<input type="file" name="Upload_Document" id="Upload_Document" class="Upload_Document" onchange="myFunction()"  style="float:left;">
<!--<div class="head-position-1" style="float:right;clear:both;position:relative;left:50px;bottom:10px;">-->

<span id="demo" wrap="hard" style="word-wrap: break-word; width:190px; display:block;position:relative;left:680px;bottom:40px;"></span></br>
<span id="demo1" style="position:relative;left:680px;bottom:60px;"></span>
<!--</div>-->





    
<script>
function myFunction1() {
   var x = document.getElementById("Upload_Document");
    if (x.files.length == 0) {
	if (confirm("Are you sure you want to proceed without providing any supporting documentation?") == true) {
       window.location="reg_complaint_process"; 
    } else {
       return false;
    }
	}
   
}








function myFunction(){
    var x = document.getElementById("Upload_Document");
    var txt = "";
	var txt1 = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
               
                var file = x.files[i];
                if ('name' in file) {
                    txt +=  file.name + "</br> ";
                }
                if ('size' in file) {
                    
					var num= file.size/1024/1024;
					var n=num.toFixed(2);
					txt1 += "Size: " + n + " MB";
                }
            }
        }
    } 
    
    document.getElementById("demo").innerHTML = txt;
	document.getElementById("demo1").innerHTML = txt1;
	
}
</script>
















</fieldset>
<!--<fieldset class="fBlock" id="Login_Detail">
<legend>Account Details</legend>
<div id="formText">
<p>Based on the report submitted by you, the organization may require additional information from you to carry out its investigations and further actions.&nbsp;By creating an anonymous Username and Password of your choice below, you will be able to:</p>
<ol>
<li>Track the progress of your report; and</li>
<li>Provide additional information to the organization.</li>
</ol>
<p>The Track Report page will allow you to respond to the organizational queries confidentially and also to check the status of your reports.&nbsp;To maintain your anonymity, we will not be sending the login details to your email id, so please make sure that you keep the Username and Password safe and do not share it with anyone.</p>
<p>Please allow us 24 hours to create a tracking account with the username and password provided by you. Once your account is created, you may track your report by logging in at&nbsp;<a href="<?php echo $mainurl; ?>company/<?php echo $_GET['companyurl']; ?>/ticket-dasboard"><?php echo $mainurl; ?>company/<?php echo $_GET['companyurl']; ?>/ticket-dasboard</a>. The "Track Report" page can also be accessed from the opening page of the DWF portal.</p>
<p>We request you to access the above page regularly and update any information requirement that is required. Please remember not to update any information that may compromise your confidentiality.</p>
</div>
<?php
/*function passGen($length,$nums){
		$lowLet = "abcdefghijklmnopqrstuvwxyz";
		$highLet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$numbers = "123456789";
		$pass = "";
		$i = 1;
		While ($i <= $length){
			$type = rand(0,1);
			if ($type == 0){
				if (($length-$i+1) > $nums){
					$type2 = rand(0,1);
					if ($type2 == 0){
						$ran = rand(0,25);
						$pass .= $lowLet[$ran];
					}else{
						$ran = rand(0,25);
						$pass .= $highLet[$ran];
					}
				}else{
					$ran = rand(0,8);
					$pass .= $numbers[$ran];
					$nums--;
				}
			}else{
				if ($nums > 0){
					$ran = rand(0,8);
					$pass .= $numbers[$ran];
					$nums--;
				}else{
					$type2 = rand(0,1);
					if ($type2 == 0){
						$ran = rand(0,25);
						$pass .= $lowLet[$ran];
					}else{
						$ran = rand(0,25);
						$pass .= $highLet[$ran];
					}
				}
			}
			$i++;
		}
		return $pass;
}*/
?>
<p><label>Username </label><input type="text" name="Username" id="Username" value="<?php //echo passGen(8,3); ?>" readonly="readonly"></p>
<p><label>Password of your choice </label><input type="password" name="Password" id="Password"></p>
<p><label>Verify Password </label><input type="password" name="Verify_Password" id="Verify_Password"></p>
</fieldset>-->
<center><input name="Submit" type="submit" class="fSubmit" value="Submit" ></center>
</form>
</div>
</article>
</div>





</div>