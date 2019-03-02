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
    $meta->description="ImageMagick® creates, edits, composes, and converts bitmap images. Resize an image, crop it, change its shades and colors, add captions, and more.";
    $meta->application_url="https://imagemagick.org";
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
  <meta property='og:url' content='https://imagemagick.org/' />
  <meta property='og:title' content='ImageMagick' />
  <meta property='og:image' content='https://imagemagick.org/image/logo.png' />
  <meta property='og:type' content='website' />
  <meta property='og:site_name' content='ImageMagick' />
  <meta property='og:description' content="Convert, Edit, or Compose Bitmap Images" />
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org<?php echo $_SERVER['SCRIPT_NAME']?>" rel="canonical">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.png" rel="icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico" rel="shortcut icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../assets/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_SESSION['RelativePath']?>/../assets/magick-template.css" rel="stylesheet">
</head>
<?php flush(); ?>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMagick" aria-controls="navbarsMagick" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsMagick" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php IsActive($title,"Convert, Edit, Or Compose Bitmap Images"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php IsActive($title,"Download"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">Download</a>
      </li>
      <li class="nav-item <?php IsActive($title,"Command-line Tools"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item <?php IsActive($title,"Command-line Processing"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item <?php IsActive($title,"Resources"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a>
      </li>
      <li class="nav-item <?php IsActive($title,"Develop"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?php echo $_SESSION['RelativePath']?>/../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
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

  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<?php
  }

  function SiteFooter()
  {
?>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">Security</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/links.php">Related</a> •
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/support.php">Donate</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact Us</a>
    <br/>
    <small>© 1999-2019 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="<?php echo $_SESSION['RelativePath']?>/../assets/bootstrap.min.js" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><\/script>')</script>
</body>
</html>
<?php
  }
?>
