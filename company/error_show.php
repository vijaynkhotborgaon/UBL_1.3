<?php





	//Start session





	





	





	





	//Unset the variables stored in session

if(!isset($_SESSION['company_secure']) || ($_SESSION['company_secure'] == '')) {
     unset($_SESSION['company_secure']);
	 header("location: ".$mainurl."error_1.php");
		exit();
	}



	


	





    





?>





