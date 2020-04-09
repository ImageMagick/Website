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
    $meta->description="Use ImageMagick® to create, edit, compose, and convert bitmap images. Resize an image, crop it, change its shades and colors, add captions, and more.";
    $meta->application_url="https://imagemagick.org";
    $meta->keywords2="image converter, image resizer, image editor, photo editor, jpg converter, png converter, tiff converter, vector images, online, free, swiss army";
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
  <meta property='og:description' content="Create, Edit, Compose, or Convert Bitmap Images" />
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org<?php echo $_SERVER['SCRIPT_NAME']?>" rel="canonical">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.png" rel="icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico" rel="shortcut icon">
  <link href="<?php echo $_SESSION['RelativePath']?>/../assets/magick-css.php" rel="stylesheet">
</head>
<?php flush(); ?>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMagick" aria-controls="navbarsMagick" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsMagick" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php IsActive($title,"Convert, Edit, or Compose Bitmap Images"); ?>">
        <a class="nav-link" href="<?php echo $_SESSION['RelativePath']?>/../">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" target="_blank" href="https://github.com/ImageMagick/ImageMagick/discussions">Community</a>
      </li>
    </ul>
    </div>
    <form class="form-inline my-2 my-lg-0" action="<?php echo $_SESSION['RelativePath']?>/../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
  </nav>
  <div class="container">
   <?php if ($_SERVER["SERVER_ADDR"] != "10.144.245.30") echo '<script async="async" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>' ?>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-full-width-responsive="true"
         data-ad-format="horizontal"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  </div>

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
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>
    &nbsp;
    <a href="#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"/></a>
    &nbsp;
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/links.php">Related</a> •
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/sitemap.php">Sitemap</a>
    <br/>
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/support.php">Donate</a> •
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact Us</a> 
    <br/>
    <a href="https://github.com/imagemagick/imagemagick" target="_blank" rel="noopener" aria-label="GitHub"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 499.36" width="2%" height="2%" role="img" focusable="false"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"/></svg></a> •
        <a href="https://twitter.com/imagemagick" target="_blank" rel="noopener" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 416.32" width="2%" height="2%" role="img" focusable="false"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"/></svg></a>
    <br/>
    <small>© 1999-2020 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="<?php echo $_SESSION['RelativePath']?>/../assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><\/script>')</script>
</body>
</html>
<?php
  }
?>
