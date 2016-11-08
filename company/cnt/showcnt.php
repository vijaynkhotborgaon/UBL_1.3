<?php

require_once('../config.php');
  ##############################################################################
  # Show Counter Results - v.1.4 - 13.11.2014 By Alessandro Marinuzzi [Alecos] #
  ##############################################################################
  function gfxcnt($file) {
    global $number;
    $number = rtrim(file_get_contents($file));
    $lenght = strlen($number);
    $gfxcnt = "";
    for ($i = 0; $i < $lenght; $i++) {
      $gfxcnt .= $number[$i];
    }
	
	$qry2 ="UPDATE counter SET count='".$gfxcnt."' WHERE count_no=1";
	$result2 = @mysql_query($qry2);
    /*$gfxind = "<div style='padding:5px;background-color:#D2EEFA;float:right;margin:5px;border:2px solid green;color:FD7829;'>$gfxcnt</div>";
    echo $gfxind;*/
  }
?>