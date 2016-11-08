<?php
	require_once('login-auth.php');
	require_once('../config.php');
	
	$qry = "SELECT * FROM counter WHERE count_no=1";

   $row5=  mysql_fetch_assoc($qry);
   $count=$row5['count'];


?>


<?php


include('header.php');


?>


<div id="t3-mainbody" class="container t3-mainbody minHeight">


  <div class="row">


    


    <!-- MAIN CONTENT -->


    <div id="t3-content" class="t3-content span3">     


<?php


include('topsection.php');


?>


    </div>


    <div id="t3-content" class="t3-content span9">     


	<article>


  <h3>Welcome to SPOC Home Page</h3>
  <h3>Website Visiters : <?php echo $count; ?><h3>


 </article>   


  </div>


    <!-- //MAIN CONTENT -->


  </div>


</div>	