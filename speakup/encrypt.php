<html>

<head>
</head>

<body>
<?php
function base64_url_encode($input) {
 return strtr(base64_encode($input), '+/=', '-_,');
}
?>




<?php
$today=date("Y-m-d H:i:s");
$today_new=base64_url_encode($today);
?>

<a href="next?q=<?php echo $today_new;?>"> click here </a>


</body>










</html>