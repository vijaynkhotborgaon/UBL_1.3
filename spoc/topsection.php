<?php 
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$end = end(explode('/', $actual_link));
$current=explode('.php', $end);
$current= $current[0];

?>
<div id="nav" style="margin-top:50px;">
<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/view-company-details" class="well<?php if(($end=='view-company-details')){?> active<?php } ?>"><b><font size="3">View Company Details</font></b></a>


<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/view-complaints" class="well<?php if(($end=='view-complaints')){?> active<?php } ?>"><b><font size="3">View Reports</font></b></a>

<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/closed-complaints" class="well<?php if(($end=='closed-complaints')){?> active<?php } ?>"><b><font size="3">Closed Reports</font></b></a>

<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/spam-complaints" class="well<?php if(($end=='spam-complaints')){?> active<?php } ?>"><b><font size="3">Spam Reports</font></b></a>


<a href="<?php echo $mainurl; ?>spoc/<?php echo $_GET['companyurl']; ?>/update-personal-detail" class="well<?php if(($end=='update-personal-detail')){?> active<?php } ?>"><b><font size="3">Update Personal details</font></b></a>
</div>

<div style="position:relative;top:10px;width:200px;height:200px;">
<img  src="<?php echo $mainurl; ?>/images/HRM_1.png" alt="" width="230" height="230" style="margin:auto;">

</div>
