<?php
  /*
    Start a session and return content from the cache if its exists.
  */
  ob_start("ob_gzhandler");
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $path=$path['dirname'];
  $script=basename($_SERVER['SCRIPT_FILENAME']);
  $cacheName=$path . '/../cache/' . $script;
  if (file_exists($cacheName) && ((time()-604800) < filemtime($cacheName))) {
    readfile($cacheName);
    echo "<!-- Magick Cache " . date('jS F Y H:i',filemtime($cacheName)) .
      " -->";
    ob_end_flush();
    exit();
  }
  /*
    Generate dynamic content.
  */
  session_name('ImageMagick');
  ini_set("session.use_trans_sid",1);
  ini_set("url_rewriter.tags", "a=href,area=href,input=src,fieldset=");
  ini_set("arg_separator.output","&amp;");
  if (!isset($dynamic_content) || !$dynamic_content) {
    session_cache_limiter('public');
  } else {
    session_cache_limiter('private_no_expire, must-revalidate');
  }
  session_start();
  $path=pathinfo($_SERVER['SCRIPT_FILENAME']);
  $_SESSION['AbsolutePath']=$path['dirname'];
  $path=pathinfo($_SERVER['SCRIPT_NAME']);
  $_SESSION['RelativePath']=$path['dirname'];
  if (strlen($_SESSION['RelativePath']) == 1)
    $_SESSION['RelativePath']='';
  if ($_SERVER['SERVER_NAME'] == 'www.imagemagick.com')
    {
      header("Location: https://www.imagemagick.org/index.php");
      exit();
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
  if (!isset($dynamic_content) || !$dynamic_content) {
    file_put_contents($cacheName,ob_get_contents());
  }
  session_unset();
  session_destroy();
  ob_end_flush();
?>
