<?php
require_once('spoc-auth.php');

require_once('../config.php');
	
	$admin_mail = mysql_query("SELECT * FROM counter");

   $row5=  mysql_fetch_assoc($admin_mail);
   $count=$row5['count'];

?>

<div id="t3-mainbody" class="container t3-mainbody minHeight">


  <div class="row">


    


    <!-- MAIN CONTENT -->


    <div id="t3-content" class="t3-content span3">     


<?php


include('topsection.php');


?>


    </div>


    <div id="t3-content" class="t3-content span9" style="position:relative;">     


	<article>


  <h3 style="position:relative;left:55px;">Welcome to UB WB Manager Dashboard</h3>
  
   <div style="position:absolute;background-color:#ff7f27 ;padding:5px;left:200px;top:370px;radius:5px;">
   <h1>Visitors : <span style="color:green;"><?php echo $count; ?></span></h1>
   </div>


 </article>   


  </div>


    <!-- //MAIN CONTENT -->


  </div>


</div>	
