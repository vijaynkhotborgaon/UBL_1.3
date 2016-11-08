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




$mailspoc = nl2br($_POST['mailspoc']);








$tomail = $_POST['tomail'];







$frommail = $_POST['frommail'];

$frommail_hrm = 'info@thehrmpractitioners.com';



$cam_id=$_POST['cam_id'];


$cid = $_POST['cid'];






	if($mailspoc == '') {







		$errmsg_arr[] = 'Enter the Message';







		$errflag = true;







	}


	



	

$qry = "INSERT INTO complaints_reply(complaint_id, cam_id, status, msg, created_on) VALUES('$cid','$cam_id','6','$mailspoc', NOW())";

	$result = @mysql_query($qry);

	
		/*if($result) {


            $_SESSION['COMRPLYMSG'] = 1;



			session_write_close();


			//header('Location: request-more-details.php');



			exit();



		}else {



			die("Query failed");



		}*/





		/*if($errflag) {







		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;







		session_write_close();







		header("location: send-mail-to-spoc.php?leadid=$cid");







		exit();







	}*/


$to = $tomail;


$subject = "Request for more details";


$mail_body = '<html>
<body><div ><pre >' . $mailspoc . ' 
<a href=' .$mainurl. 'cam/emp_more.php?complaint_id='.$cid.' style="color:#4E9258;" target="_blank">Click here to Add More Details</a></pre></div>
</body>
</html>';


/*$headers = "From: " . strip_tags($frommail) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($frommail) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/
  
  $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From:" . strip_tags($frommail_hrm) . "\r\n" .
"Reply-To:". strip_tags($frommail) . "\r\n" .
"X-Mailer: PHP/" . phpversion();

$sendmail= mail($to, $subject, $mail_body, $headers);











		if($sendmail) {







			$_SESSION['MAILTOEMP'] = 1;







			session_write_close();







			header("location:request-more-details.php?complaint_id=$cid");







			exit();







		}else {







			die("Query failed");







		}







?>
