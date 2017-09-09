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
    $meta=new MetaContent;
    $meta->company_name="ImageMagick Studio LLC";
    $meta->application_name="ImageMagick";
    $meta->description="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.";
    $meta->application_url="https://www.imagemagick.org";
    $meta->keywords2="ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert";
    $meta->sitename="ImageMagick";
    $meta->slogan="Digital image manipulation that works like magick!";
    $meta->generator="PHP";
    $meta->email="webmaster@imagemagick.org";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $meta->metadata($title); ?>
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://www.imagemagick.org<?php echo $_SERVER['SCRIPT_NAME']?>" rel="canonical">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.png" rel="icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico" rel="shortcut icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../css/magick.php" rel="stylesheet">
</head>
<?php flush(); ?>
<body>
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
    <nav class="nav magick-nav">
      <a class="nav-link <?php IsActive($title,"Convert, Edit, Or Compose Bitmap Images"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../index.php">Home</a>
      <a class="nav-link <?php IsActive($title,"Download"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">Download</a>
      <a class="nav-link <?php IsActive($title,"Command-line Tools"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">Tools</a>
      <a class="nav-link <?php IsActive($title,"Command-line Processing"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command-line</a>
      <a class="nav-link <?php IsActive($title,"Resources"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a>
      <a class="nav-link <?php IsActive($title,"Develop"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Develop</a>
      <a class="nav-link <?php IsActive($title,"Search"); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/search.php">Search</a>
      <a class="nav-link float-right" href="https://www.imagemagick.org/discourse-server/">Community</a>
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
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">Security</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>
</p>
    <p><a href="#">Back to top</a> •
    <a href="http://pgp.mit.edu:11371/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact Us</a></p>
    <?php if ($_SERVER["SERVER_ADDR"] == "10.144.245.30") echo '<p><small>Sponsored by <a href="https://transloadit.com">Transloadit</a> - the file uploading &amp; processing service</small></p>' ?>
    <p><small>© 1999-2017 ImageMagick Studio LLC</small></p>
  </footer>
</div><!-- /.container -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="<?php echo $_SESSION['RelativePath']?>/../js/magick.php"></script>
</body>
</html>
<?php
  }
?>
