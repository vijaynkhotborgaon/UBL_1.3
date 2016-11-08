<?php 

	//Include database connection details



	require_once('../config.php');

	require_once('auth.php');

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

$Company_Name = clean($_POST['Company_Name']);

$Company_Logo = clean($_FILES['Company_Logo']['name']);
$image_logo = clean($_POST['image_logo']);




$caddress = clean($_POST['caddress']);

$Name_of_CEO = clean($_POST['Name_of_CEO']);

$Number_of_Employees = clean($_POST['Number_of_Employees']);



$Industry = clean($_POST['Industry']);



$Corporate_Description = clean($_POST['Corporate_Description']);



$leadid = clean($_POST['leadid']);

$tsid = clean($_POST['tsid']);

$camid = clean($_POST['camid']);

$name_of_spoc=clean($_POST['name_of_spoc']);

$email_spoc=clean($_POST['email_spoc']);

$ph_no=clean($_POST['ph_no']);

$designation=clean($_POST['designation']);

$uname=clean($_POST['uname']);

$spocpword1=clean($_POST['spocpword1']);

$spocvpword1=clean($_POST['spocvpword1']);

$company_id=clean($_POST['company_id']);










	if($Company_Name == '') {



		$errmsg_arr[] = 'Enter the Company Name';



		$errflag = true;



	}



	if($Name_of_CEO == '') {



		$errmsg_arr[] = 'Enter the name of company CEO';



		$errflag = true;



	}	
	if($caddress == '') {



		$errmsg_arr[] = 'Enter the Company Address';



		$errflag = true;



	}	

	if($Number_of_Employees == '') {



		$errmsg_arr[] = 'Enter No. of employees working in the company';



		$errflag = true;



	}



	if($Industry == '') {



		$errmsg_arr[] = 'Enter company Industry';



		$errflag = true;



	}



	if($Corporate_Description == '') {



		$errmsg_arr[] = 'Enter company description';



		$errflag = true;



	}
	
	if($email_spoc == '') {



		$errmsg_arr[] = 'Enter the Email';



		$errflag = true;



	}
	
	if($name_of_spoc == '') {



		$errmsg_arr[] = 'Enter the SPOC name';



		$errflag = true;



	}

	if($ph_no == '') {



		$errmsg_arr[] = 'Enter the SPOC phone';



		$errflag = true;



	}
	
      if($designation == '') {



		$errmsg_arr[] = 'Enter the Designation';



		$errflag = true;



	}
	
	if($uname == '') {



		$errmsg_arr[] = 'Enter the username';



		$errflag = true;



	}
	
if(strcmp($spocpword1, $spocvpword1) != 0 ) {



		$errmsg_arr[] = 'Password not Matching';



		$errflag = true;



	}

	

		if($errflag) {



		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;



		session_write_close();



		header("location: edit-company-details.php?leadid=$leadid");



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



//exit();



if ($companylogo_name!='') 



 	{ 		$filename = stripslashes($_FILES['Company_Logo']['name']);



 	



  		$extension = getExtension($filename);



 		$extension = strtolower($extension);



		



		



 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 



 		{



		



 			$change='<div class="msgdiv">Unknown Image extension </div> ';



 			$errors=1;



 		}



 		else



 		{ $size=filesize($_FILES['Company_Logo']['tmp_name']);



if ($size > 500000)



{



	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';



	$errors=1;

}if($extension=="jpg" || $extension=="jpeg" )



{



$uploadedfile = $_FILES['Company_Logo']['tmp_name'];;



$src = imagecreatefromjpeg($uploadedfile);}



else if($extension=="png")



{



$uploadedfile = $_FILES['Company_Logo']['tmp_name'];



$src = imagecreatefrompng($uploadedfile);}



else 



{



$src = imagecreatefromgif($uploadedfile);



}



list($width,$height)=getimagesize($_FILES["Company_Logo"]["tmp_name"]);$newwidth=400;



$newheight=($height/$width)*$newwidth;



$tmp=imagecreatetruecolor($newwidth,$newheight);$newwidth1=110;



$newheight1=($height/$width)*$newwidth1;



$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);$filename = "../images/company/big/".$strip_Company_Name."_". $strip_Company_Logo;

$filename1 = "../images/company/small/".$strip_Company_Name."_". $strip_Company_Logo;

$imgfilename = "images/company/big/".$strip_Company_Name."_". $strip_Company_Logo;

$imgfilename1 = "images/company/small/".$strip_Company_Name."_". $strip_Company_Logo;

imagejpeg($tmp,$filename,100);

imagejpeg($tmp1,$filename1,100);

imagedestroy($src);



imagedestroy($tmp);



imagedestroy($tmp1);

}



	}

	

	

	//Create INSERT query




if ($companylogo_name!='') {

	$qry ="UPDATE company SET clogo='$imgfilename1', clogo_big='$imgfilename', cceo='$Name_of_CEO', cemployees='$Number_of_Employees', industry_id='$Industry', cdescription='$Corporate_Description', modidied_on=NOW() WHERE lead_id=".$leadid;

	$result = @mysql_query($qry);
	
	}  
	
	









	else {
	
	$qry ="UPDATE company SET cceo='$Name_of_CEO', cemployees='$Number_of_Employees', industry_id='$Industry', cdescription='$Corporate_Description', modidied_on=NOW() WHERE lead_id=".$leadid;

	$result = @mysql_query($qry);
		
	}
	
	
	
	$pass_change = "UPDATE company_spoc SET pword='".md5($spocpword1)."' WHERE company_id=$company_id";

	$result_change = @mysql_query($pass_change);
	
	
	
	$spoc_detail ="UPDATE company_spoc SET name='$name_of_spoc', email='$email_spoc', phone='$ph_no', designation='$designation', uname='$uname' WHERE company_id=$company_id";

	$result_detail = @mysql_query($spoc_detail);

	$spoc_detail ="UPDATE company_lead SET cperson='$name_of_spoc', cemail='$email_spoc', cphone='$ph_no', cdesignation='$designation' WHERE lead_id=$leadid";

	$result_detail = @mysql_query($spoc_detail);
	
	
	
	
	
	
	
	
	$qry1 ="UPDATE company_lead SET cname='$Company_Name', caddress='$caddress', ts_id='$tsid', cam_id='$camid' WHERE lead_id=".$leadid;

	$result1 = @mysql_query($qry1);
	
	

	






		if($result1) {



			$_SESSION['COMREGMESG'] = 1;



			session_write_close();
			
			if($Company_Logo == '')
			{
			$qry111 ="UPDATE company SET clogo='$image_logo' WHERE lead_id=".$leadid;

			$result111 = @mysql_query($qry111);
			}

			header("location: edit-company-details.php?leadid=$leadid");



			exit();



		}else {



			die("Query failed");



		}



?>