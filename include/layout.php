<?php
  require_once($_SESSION['AbsolutePath'] . '/../include/define.php');
  require_once($_SESSION['AbsolutePath'] . '/../class/MetaContent.php');

  function IsActive($target,$title)
  {
    if (strcmp($title,$target) == 0) {
      echo "active";
    }
  }

  function SiteHeader($title)
  {
    $meta=&new MetaContent;
    $meta->company_name="ImageMagick Studio LLC";
    $meta->application_name="ImageMagick";
    $meta->description="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.";
    $meta->application_url="http://www.imagemagick.org";
    $meta->keywords2="ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert";
    $meta->sitename="ImageMagick";
    $meta->slogan="Digital image manipulation that works like magick!";
    $meta->generator="PHP";
    $meta->email="webmaster@imagemagick.org";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4" />
  <?php echo $meta->metadata($title); ?>
  <link rel="icon" href="<?php echo $_SESSION['RelativePath']?>/../image/wand.png"/>
  <link rel="shortcut icon" href="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"/>
  <link rel="stylesheet" href="<?php echo $_SESSION['RelativePath']?>/../css/magick.php"/>
</head>
<?php flush(); ?>
<body>
<div class="main">
<div class="magick-masthead">
  <div class="container">
    <?php if ($_SERVER["SERVER_ADDR"] != "10.144.245.30") echo '<script async="async" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>' ?>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <nav class="magick-nav">
      <a class="magick-nav-item <?php IsActive($title,"Convert, Edit, Or Compose Bitmap Images"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../index.php">Home</a>
      <a class="magick-nav-item <?php IsActive($title,"Install from Binary Distribution"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/binary-releases.php">Download</a>
      <a class="magick-nav-item <?php IsActive($title,"Command-line Tools"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">Tools</a>
      <a class="magick-nav-item <?php IsActive($title,"Command-line Processing"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command-line</a>
      <a class="magick-nav-item <?php IsActive($title,"Resources"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a>
      <a class="magick-nav-item <?php IsActive($title,"Application Program Interfaces"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/api.php">Develop</a>
      <a class="magick-nav-item <?php IsActive($title,"Search"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/search.php">Search</a>
      <a class="magick-nav-item pull-right" href="https://www.imagemagick.org/discourse-server/">Community</a>
    </nav>
  </div>
</div>
<div class="container">
<?php
  }

  function SiteFooter()
  {
?>
  <footer class="magick-footer">
    <p><a href="<?php echo $_SESSION['RelativePath']?>/../script/support.php">Donate</a> •
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/sitemap.php">Sitemap</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/links.php">Related</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>
</p>
    <p><a href="#">Back to top</a> •
    <a href="http://pgp.mit.edu:11371/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact Us</a></p>
    <?php if ($_SERVER["SERVER_ADDR"] == "10.144.245.30") echo '<p><small>Sponsored by <a href="https://transloadit.com">Transloadit</a> - the file uploading &amp; processing service</small></p>' ?>
    <p><small>©  1999-2016 ImageMagick Studio LLC</small></p>
  </footer>
</div><!-- /.container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo $_SESSION['RelativePath']?>/../js/magick.php"></script>
</div>
</body>
</html>
<?php
  }
?>
