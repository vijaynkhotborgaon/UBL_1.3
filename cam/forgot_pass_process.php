<?php 


	//Include database connection details





	require_once('../config.php');


	//require_once('auth.php');
	
	session_start();


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




$username = clean($_POST['username']);
	
$pword = clean($_POST['pword']);


$vpword = clean($_POST['vpword']);



if($username == '') {





		$errmsg_arr[] = 'Enter the username';





		$errflag = true;





	}
	
	
	
	
	
	if($pword == '') {





		$errmsg_arr[] = 'Enter the new password';





		$errflag = true;





	}





	if($vpword == '') {





		$errmsg_arr[] = 'verify new password';





		$errflag = true;





	}

	if( strcmp($pword, $vpword) != 0 ) {

		$errmsg_arr[] = 'Passwords do not match';

		$errflag = true;

	}







	


		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: forgot_pass.php");





		exit();





	}





	


	


	//Create INSERT query


	$qry11="SELECT * FROM cams WHERE cam_name='$username'";

	$result11=mysql_query($qry11);


	//Check whether the query was successful or not

	if($result11) {

		if(mysql_num_rows($result11) != 1) {

	
	     $_SESSION['USER_ERR'] = 2;
		 
		 session_write_close();





			header("location: forgot_pass.php");





			exit();

		 
		 
	
	
	
	}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	




	$qry = "UPDATE cams SET cam_pword='".md5($pword)."' WHERE cam_name='$username'";





	$result = @mysql_query($qry);














		if($result) {





			$_SESSION['PASSCNG'] = 1;





			session_write_close();





			header("location: forgot_pass.php");





			exit();





		}else {





			die("Query failed");





		}





?>

















