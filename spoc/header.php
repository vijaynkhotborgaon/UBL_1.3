<div id="t3-header" class="t3-header container">
<div class="row">
<img style="margin-bottom:-15px;margin-top:3px;float:left;margin-left:22px;" src="<?php echo $mainurl; ?>/images/Speak-up-1.png" alt="" width="130" height="130" >
<nav id="t3-mainnav">
<div class="head-position" >     
<?php
$result = mysql_query("SELECT * FROM company where unique_url='".$_GET['companyurl']."'");	
$row = mysql_fetch_assoc($result);
?>



<?php
if($_SESSION['SESS_SPOC_ID']!=''){
$result = mysql_query("SELECT * FROM company_spoc where spoc_id=".$_SESSION['SESS_SPOC_ID']);
$row = mysql_fetch_assoc($result);
?>
<p>Hello <strong><?php echo $row['name']; ?></strong><br />
<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/logout" style="float:left; color:#fff;">Logout</a></p>
<?php } ?>
</div>
</nav>
</div>







</div>