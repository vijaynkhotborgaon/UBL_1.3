<?php








	require_once('../config.php');








	require_once('auth.php');








	$camid=$_GET['camid'];








?>








<!DOCTYPE html>








<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">








  <title>Update CAM Detail</title>








  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">








<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">








<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>








<script src="../js/jquery.validate.js" type="text/javascript"></script>








<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>








        <script type="text/javascript">








            /* <![CDATA[ */








            jQuery(function(){








                jQuery("#name").validate({








                    expression: "if (VAL) return true; else return false;",








                    message: "Please enter Your Name"








                });








                jQuery("#email").validate({








                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",








                    message: "Please enter a valid Email ID"








                });








                jQuery("#telephone").validate({








                    expression: "if (VAL) return true; else return false;",








                    message: "Please enter telephone number"








                });








            });








            /* ]]> */








        </script>








</head>








<body>








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








											<?php








	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {








		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>








  <div id="system-message">








							<div class="alert alert-message">








<?php








			echo '<p>',$msg,'</p>'; 








		}








		?>








       									</div>








					</div>	








 








        <?php








		unset($_SESSION['ERRMSG_ARR']);








	}








?>








<?php








	if(isset($_SESSION['CAMUPDATE']) && $_SESSION['CAMUPDATE']==1 ) {








?>








  <div id="system-message">








							<div class="alert alert-message">








<p>Update CAM Detail successfully</p>








       									</div>








					</div>	








<?php








		unset($_SESSION['CAMUPDATE']);








	}








?>








<?php








	if(isset($_SESSION['CAMPASSCNG']) && $_SESSION['CAMPASSCNG']==1 ) {








?>








  <div id="system-message">








							<div class="alert alert-message">








<p>Password Change successfully</p>








       									</div>








					</div>	








<?php








		unset($_SESSION['CAMPASSCNG']);








	}








?>








<?php








$result = mysql_query("SELECT * FROM camdetails WHERE cam_id=".$camid);








$row = mysql_fetch_assoc($result);








$result2 = mysql_query("SELECT * FROM cams WHERE cam_id=".$camid);








$row2 = mysql_fetch_assoc($result2);








?>








    <form action="cam-update-process.php" method="post">








    <input name="camid" type="hidden" value="<?php echo $camid; ?>">








<table border="1" width="100%">








<tbody>








<tr>








<td colspan="2"><h4><strong>Update CAM Detail</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td width="150"><strong>Name</strong></td>








<td><input name="name" id="name" type="text" value="<?php echo $row['name']; ?>"></td>








</tr>








<tr>








<td><strong>Email</strong></td>








<td><input name="email" id="email" type="text" value="<?php echo $row['email']; ?>"></td>








</tr>








<tr>








<td><strong>Telephone</strong></td>








<td><input name="telephone" id="telephone" type="text" value="<?php echo $row['tel_no']; ?>"></td>








</tr>








<tr>








<td><strong>Alternate Number</strong></td>








<td><input name="phone" id="phone" type="text" value="<?php echo $row['alternate_no']; ?>"></td>








</tr>








<tr>








<td><strong>Username</strong></td>








<td><?php echo $row2['cam_name']; ?></td>








</tr>








<tr>








<td>&nbsp;</td>








<td><input name="submit" type="submit" value="Update CAM detail"></td>








</tr>








</tbody>








</table>








</form>





<form action="cam-password-change.php" method="post">








    <input name="camid" type="hidden" value="<?php echo $camid; ?>">








<table border="1" width="100%">








<tbody>








<tr>








<td colspan="2"><h4><strong>Change CAM Password</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td width="150"><strong>New Password</strong></td>








<td><input name="pword" id="pword" type="password"></td>








</tr>








<tr>








<td><strong>Verify New Password</strong></td>








<td><input name="vpword" id="vpword" type="password"></td>








</tr>








<tr>








<td>&nbsp;</td>





<td><input name="submit" type="submit" value="Change Password"></td>








</tr>








</tbody>








</table>








</form>








</article>








	<!-- //Article -->








</div>








</div>








    <!-- //MAIN CONTENT -->








</div>	








    

















<?php








include('footer.php');








?>








<!-- //FOOTER -->    








  </body></html>