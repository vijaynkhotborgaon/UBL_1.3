<?php

require_once('../config.php');
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?php
$result = mysql_query("SELECT * FROM company where unique_url='".$_GET['companyurl']."'");	
$row = mysql_fetch_assoc($result);
?>
<title><?php echo $row['cname']; ?> Dashboard</title>
<link href="favicon.ico" rel="shortcut icon" type="image/png" />
<link rel="stylesheet" href="<?php echo $mainurl; ?>/css/css-be258.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="<?php echo $mainurl; ?>/js/jquery-1.8.3.js" type="text/javascript"></script>
<script src="<?php echo $mainurl; ?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $mainurl; ?>/js/jquery.validation.functions.js" type="text/javascript"></script>
</head>
<body>
<?php

if($_GET['page']==''){
include('login_1.php');
include('footer_1.php');
} elseif($_GET['page']=='login') {
include('login_1.php');
include('footer_1.php');
} elseif($_GET['page']=='loginprocess') {
include('header.php');
include('loginprocess.php');
include('footer_1.php');
} elseif($_GET['page']=='logout') {
include('header.php');
include('logout.php');
include('footer_1.php');
} elseif($_GET['page']=='dashboard') {
include('header.php');
include('dashboard.php');
include('footer_1.php');
} elseif($_GET['page']=='view-company-details') {
include('header.php');
include('view-company-details.php');
include('footer_1.php');
} elseif($_GET['page']=='view-complaints') {
include('header.php');
include('view-complaints.php');
include('footer_1.php');
}elseif($_GET['page']=='closed-complaints') {
include('header.php');
include('closed-complaints.php');
include('footer_1.php'); 
}elseif($_GET['page']=='spam-complaints') {
include('header.php');
include('spam-complaints.php');
include('footer_1.php'); 
}

elseif($_GET['page']=='update-complaint-process') {
include('header.php');
include('update-complaint-process.php');
include('footer_1.php');
} elseif($_GET['page']=='update-personal-detail') {
include('header.php');
include('update-personal-detail.php');
include('footer_1.php');
} elseif($_GET['page']=='update-detail-process') {
include('header.php');
include('update-detail-process.php');
include('footer_1.php');
} elseif($_GET['page']=='spoc-password-change') {
include('header.php');
include('spoc-password-change.php');
include('footer_1.php');
} elseif(($_GET['id']!='') && ($_GET['page']=='view-complaint-details')) {
include('header.php');
include('view-complaint-details.php');
include('footer_1.php');
}
?>
<?php
//include('footer.php');
?>
<!-- //FOOTER -->    
</body></html>