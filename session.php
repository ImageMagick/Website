<?php
  /*
    Start a session and return content from the cache if its exists.
  */
  if (!ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
  }
  ob_start("ob_gzhandler");
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $path=$path['dirname'];
  $script=basename($_SERVER['SCRIPT_FILENAME']);
  $cacheName=$path . '/cache/' . $script;
  session_name('ImageMagick');
  if (file_exists($cacheName) && ((time()-10800) < filemtime($cacheName))) {
    session_start();
    readfile($cacheName);
    echo "<!-- Magick Cache " . date('jS F Y H:i',filemtime($cacheName)) .
      " -->";
    session_unset();
    session_destroy();
    ob_end_flush();
    exit;
  }
  header("Location: script/index.php");
  ob_end_flush();
?>
