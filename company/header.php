<div id="t3-header" class="t3-header container" style="background-color:#003B4D;" >
<div class="row"  >


    <img style="margin-bottom:-10px;margin-top:10px;" align="left" src="<?php echo $mainurl; ?>/images/Speak-up-1.png" alt="" width="100" height="100" >

<img  style="margin-bottom:-28px;margin-top:12px;margin-left:25%;float:right;position:relative;left:10px;" src="<?php echo $mainurl; ?>/images/HRM.png" alt="" width="150" height="150" >
</nav>




</div>
<nav id="t3-mainnav" class="t3-mainnav navbar-collapse-fixed-top span10">
<div class="head-position">     
<?php
$result = mysql_query("SELECT * FROM company where unique_url='".$_GET['companyurl']."'");	
$row = mysql_fetch_assoc($result);
?>

<?php
if($sessuserid!=''){
?>
<p style="width:110px;"><a href="<?php echo $mainurl; ?>company/<?php echo $_GET['companyurl']; ?>/logout" style="float:left; color:#fff; width:110px;">Logout</a></p>
<?php } ?>
</div>
</nav>
</div>







</div>