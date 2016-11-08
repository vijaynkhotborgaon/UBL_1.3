<div id="t3-header" class="t3-header container" >
<div class="row">


    





<img src="../images/ub.png" width="100px" height="100px" alt="Disclose Without Fear" style="margin-bottom:-40px;margin-top:-10px;margin-left:40%;float:right;"/>


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