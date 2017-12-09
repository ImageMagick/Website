<?php
  ob_start("ob_gzhandler");
  header("Cache-Control: public");
  header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
  header('Expires: ' . gmdate('D, d M Y H:i:s',time()+604800) . ' GMT');
  header("Content-type: text/css");
  readfile('bootstrap.min.css');
  readfile('magick-template.css');
  ob_end_flush();
?>
