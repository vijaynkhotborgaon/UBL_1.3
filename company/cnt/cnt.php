<?php
  ##############################################################################
  # Php Counter With Advanced Technology For The Prevention Of Reloading Pages #
  # Version: 1.4 - Date: 13.11.2014 - Created By Alessandro Marinuzzi [Alecos] #
  ##############################################################################
  function cnt($file) {
    
    global $pagecnt;
    $reloaded = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    $thispage = basename($_SERVER['SCRIPT_FILENAME']);
    if (!isset($_SESSION['first_go'])) {
      $_SESSION['first_go'] = 1;
      $first_go = TRUE;
    } else {
      $first_go = FALSE;
    }
    if (!isset($_SESSION['thispage'])) {
      $_SESSION['thispage'] = $thispage;
    }
    if ($_SESSION['thispage'] != $thispage) {
      $_SESSION['thispage'] = $thispage;
      $new_page = TRUE;
    } else {
      $new_page = FALSE;
    }
    $pagecnt = rtrim(file_get_contents($file));
    if ((!$reloaded) && ($new_page == TRUE) || ($first_go == TRUE)) {
      $fd = fopen($file, 'w+');
      flock($fd, LOCK_EX);
      fwrite($fd, ++$pagecnt);
      flock($fd, LOCK_UN);
      fclose($fd);
    }
  }
?>