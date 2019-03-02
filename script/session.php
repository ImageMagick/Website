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
  $cacheName=$path . '/../cache/' . $script;
  session_name('ImageMagick');
  if (isset($dynamic_content)) {
    session_cache_limiter('private_no_expire, must-revalidate');
  } else {
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
    session_cache_limiter('public');
  }
  /*
    Generate dynamic content.
  */
  ini_set("session.use_trans_sid",1);
  ini_set("url_rewriter.tags", "a=href,area=href,input=src,fieldset=");
  ini_set("arg_separator.output","&amp;");
  session_start();
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $_SESSION['AbsolutePath']=$path['dirname'];
  $path=pathinfo($_SERVER['SCRIPT_NAME']);
  $_SESSION['RelativePath']=$path['dirname'];
  if (strlen($_SESSION['RelativePath']) == 1)
    $_SESSION['RelativePath']='';
  if (($_SERVER['SERVER_NAME'] == 'www.imagemagick.com') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.net') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.org'))
    {
      header("Location: https://imagemagick.org/index.php");
      exit();
    }
  $use_sts = true;
  if ($_SERVER["SERVER_ADDR"] == "10.144.245.30") {
    $use_sts = false;
  }
  if ($use_sts && isset($_SERVER['HTTPS'])) {
    header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
  } elseif ($use_sts && !isset($_SERVER['HTTPS'])) {
    header('Status-Code: 301');
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  }
  require_once($_SESSION['AbsolutePath'] . '/../class/Mail.php');
  require_once($_SESSION['AbsolutePath'] . '/../class/MetaContent.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/cmd.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/crt.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/exception.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/fetchURL.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/geometry.php');
  require_once($_SESSION['AbsolutePath'] . '/../function/option.php');
  require_once($_SESSION['AbsolutePath'] . '/../include/define.php');
  require_once($_SESSION['AbsolutePath'] . '/../include/layout.php');
  SiteHeader($title);
  require_once($_SESSION['AbsolutePath'] . '/../include/' . $script);
  SiteFooter();
  if (!isset($dynamic_content)) {
    file_put_contents($cacheName,ob_get_contents());
  }
  session_unset();
  session_destroy();
  ob_end_flush();
?>
