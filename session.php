<?php
  /*
    Start a session and return content from the cache if its exists.
  */
  if (!ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
  }
  if (!isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
    ob_start();
  }
  elseif (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'],'x-gzip') == false) {
      if (strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'],'gzip') == false) {
        ob_start();
      }
      elseif(!ob_start("ob_gzhandler")) {
        ob_start();
      }
  }
  elseif (!ob_start("ob_gzhandler")) {
    ob_start();
  }
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $path=$path['dirname'];
  $script=basename($_SERVER['SCRIPT_FILENAME']);
  $cacheName=$path . '/cache/' . $script;
  session_name('ImageMagick');
  if (($_SERVER['SERVER_NAME'] == 'www.imagemagick.com') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.net') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.org'))
    {
      header("Location: https://imagemagick.org/index.php");
      exit;
    }
  if (file_exists($cacheName) && ((time()-10800) < filemtime($cacheName))) {
    /*
      Render cached content.
    */
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
  exit;
?>
