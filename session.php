<?php
  /*
    Start a session and return content from the cache if its exists.
  */
  ob_start("ob_gzhandler");
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $path=$path['dirname'];
  $script=basename($_SERVER['SCRIPT_FILENAME']);
  $cachefile=$path . '/cache/' . $script;
  if (file_exists($cachefile) && ((time()-10800) < filemtime($cachefile))) {
    session_start();
    include($cachefile);
    echo "<!-- Magick Cache " . date('jS F Y H:i',filemtime($cachefile)) .
      " -->";
    session_unset();
    session_destroy();
    ob_end_flush();
    exit;
  }
  header("Location: script/index.php");
  ob_end_flush();
?>
