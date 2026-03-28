<?php
  /*
    Make sure variables are defined.
  */
  if (!isset($title)) { $title = ""; }
  if (!isset($topic)) { $topic = ""; }
  $filename = $_SERVER['SCRIPT_FILENAME'];
  if (isset($folder)) {
    $filename=$folder . '.php';
  }
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
  $path=pathinfo($filename);
  $path=$path['dirname'];
  $script=basename($filename);
  $cacheName=$path . '/../cache/' . $script;
  $useCache=!isset($dynamic_content);
  if (isset($_SERVER['MAGICK_DISABLE_CACHE']) && $_SERVER['MAGICK_DISABLE_CACHE'] == "true")
    $useCache=false;
  if (!$useCache) {
    session_cache_limiter('private_no_expire, must-revalidate');
  } else {
    if (file_exists($cacheName) && ((time()-10800) < filemtime($cacheName))) {
      /*
        Render cached content.
      */
      readfile($cacheName);
      echo "<!-- Magick Cache " . date('jS F Y H:i',filemtime($cacheName)) .
        " -->";
      ob_end_flush();
      exit;
    }
    session_cache_limiter('public');
  }
  /*
    Generate dynamic content.
  */
  ini_set("url_rewriter.tags", "a=href,area=href,input=src,fieldset=");
  ini_set("arg_separator.output","&amp;");
  $path=pathinfo($_SERVER['SCRIPT_NAME']);
  if (($_SERVER['SERVER_NAME'] == 'www.imagemagick.com') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.net') ||
      ($_SERVER['SERVER_NAME'] == 'www.imagemagick.org'))
    {
      header("Location: https://imagemagick.org/");
      exit;
    }
  $use_sts = true;
  if (($_SERVER["SERVER_ADDR"] == "10.144.245.30") ||
      (isset($_SERVER["MAGICK_DEVCONTAINER"]) && $_SERVER["MAGICK_DEVCONTAINER"] == "true")) {
    $use_sts = false;
  }
  if ($use_sts && isset($_SERVER['HTTPS'])) {
    header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
  } elseif ($use_sts && !isset($_SERVER['HTTPS'])) {
    header('Status-Code: 301');
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  }
  require_once(__DIR__ . '/../class/MetaContent.php');
  require_once(__DIR__ . '/../function/geometry.php');
  require_once(__DIR__ . '/../include/define.php');
  require_once(__DIR__ . '/../include/layout.php');
  SiteHeader($title,$topic,$folder);
  require_once(__DIR__ . '/../include/' . $script);
  SiteFooter();
  if ($useCache) {
    file_put_contents($cacheName,ob_get_contents());
  }
  ob_end_flush();
  exit;
?>
