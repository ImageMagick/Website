<?php
  require_once($_SESSION['AbsolutePath'] . '/../include/define.php');
  require_once($_SESSION['AbsolutePath'] . '/../class/MetaContent.php');

  function IsActive($topic,$target)
  {
    if (strcmp($topic,$target) == 0) {
      echo "active";
    }
  }

  function SiteHeader($title,$topic,$description)
  {
    $meta=new MetaContent;
    $meta->company_name="ImageMagick Studio LLC";
    $meta->name="ImageMagick";
    $meta->description="ImageMagick is a powerful open-source software suite for creating, editing, converting, and manipulating images in over 200 formats. Ideal for developers, designers, and researchers.";
    $meta->url="https://imagemagick.org" .  $_SERVER['SCRIPT_NAME'];
    $meta->sameAs="https://github.com/ImageMagick, https://x.com/imagemagick";
    $meta->keywords2="image processing software, image conversion tool, batch image editing, open-source image editor, ImageMagick command-line, resize images ImageMagick, crop and rotate images, ImageMagick tutorial, ImageMagick automation, ImageMagick for developers, ImageMagick CLI, ImageMagick filters and effects, ImageMagick scripting, ImageMagick API integration";
    $meta->sitename="ImageMagick";
    $meta->stylesheet="/assets/bootstrap.min.css";
    $meta->version=MagickLibVersionText . MagickLibSubversion;
    $meta->slogan="Mastering digital image alchemy.";
    $meta->email="webmaster@imagemagick.org";
    $meta->image="https://imagemagick.org/image/logo.png";
    $meta->license="https://imagemagick.org/script/license.php";
    $meta->creator="ImageMagick Studio LLC";
    $myTitle=$title;
    $subtitle=$meta->sitename;
    if ($_SERVER['REQUEST_URI'] == '/script/index.php') {
      $myTitle=$meta->sitename;
      $subtitle=$title;
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <?php echo $meta->metadata($title); ?>
  <!-- Google Custom Search -->
  <script defer src="https://cse.google.com/cse.js?cx=006134137889097767902:turn9fku95u"></script>
</head>
<?php flush(); ?>
<body>
  <script>
    function setTheme(theme) {
      localStorage.setItem('theme', theme);
      updateThemeIcon(theme);
      document.documentElement.setAttribute('data-bs-theme', theme === 'auto' ? getSystemTheme() : theme);
    }
    function getSystemTheme() {
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    function updateThemeIcon(theme) {
      const iconMap = {
        light: '☀️',
        dark: '🌙',
        auto: '🌓'
      };
      document.getElementById('currentThemeIcon').textContent = iconMap[theme] || '🌓';
    }
    document.addEventListener('DOMContentLoaded', () => {
      const savedTheme = localStorage.getItem('theme') || 'auto';
      setTheme(savedTheme);
    });
  </script>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/" title="$meta->sitename;">
      <?php echo $meta->sitename; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#magick-navbars" aria-controls="magick-navbars" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="magick-navbars">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php IsActive($topic,'Download'); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php IsActive($topic,'Tools'); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php IsActive($topic,'CLI'); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">CLI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php IsActive($topic,'Develop'); ?>" href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Develop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="noopener noreferrer" target="_blank" href="https://github.com/ImageMagick/ImageMagick/discussions">Community</a>
        </li>
        <li class="nav-item ms-4">
          <iframe src="https://github.com/sponsors/ImageMagick/button" title="Sponsor ImageMagick" height="35" width="107" style="border: 0;"></iframe>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <form class="d-flex form-inline" action="/script/search.php">
            <input class="form-control me-2" type="text" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="sa">Search</button>
          </form>
        </li>
        <li class="nav-item dropdown ms-2">
          <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span id="currentThemeIcon">🌓</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
            <li><a class="dropdown-item" href="#" onclick="setTheme('light')">☀️ Light</a></li>
            <li><a class="dropdown-item" href="#" onclick="setTheme('dark')">🌙 Dark</a></li>
            <li><a class="dropdown-item" href="#" onclick="setTheme('auto')">🌓 Auto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>

<div class="col-lg-8 mx-auto text-body-secondary pt-5 pt-lg-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <div class="mt-3 ms-3">
      <a href="<?php echo $_SESSION['RelativePath']?>/../" class="text-decoration-none">
        <h1 class="fs-2 mb-1"><?php echo $myTitle; ?></h1>
      </a>
      <h2 class="fs-5 text-muted"><?php echo $subtitle; ?></h2>
    </div>
  </header>

  <main class="container">
<?php
  }

  function SiteFooter()
  {
?>
  </main><!-- /.container -->
  <footer class="text-center pt-5 my-5 text-body-secondary border-top">
    <div class="container-fluid">
      <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">Security</a> •
      <a href="<?php echo $_SESSION['RelativePath']?>/../script/news.php">News</a>
    &nbsp;
      <a href="#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="<?php echo $_SESSION['RelativePath']?>/../image/wand.ico"></a>
    &nbsp;
      <a href="<?php echo $_SESSION['RelativePath']?>/../script/links.php">Related</a> •
      <a href="<?php echo $_SESSION['RelativePath']?>/../script/sitemap.php">Sitemap</a>
   <br>
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/support.php">Sponsor</a> •
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/cite.php">Cite</a> •
     <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
     <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact Us</a>
   <br>
     <a href="https://github.com/imagemagick/imagemagick" rel="noopener noreferrer" target="_blank" aria-label="GitHub"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 499.36" width="2%" height="2%" role="img" focusable="false"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"/></svg></a> •
     <a href="https://twitter.com/imagemagick" rel="noopener noreferrer" target="_blank" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 300 300" width="2%" height="2%" role="img" focusable="false"><title>Twitter</title><path d="M178.57 127.15 290.27 0h-26.46l-97.03 110.38L89.34 0H0l117.13 166.93L0 300.25h26.46l102.4-116.59 81.8 116.59h89.34M36.01 19.54H76.66l187.13 262.13h-40.66"/></svg></a>
    <br>
    <small>Copyright © 1999 ImageMagick Studio LLC</small>
    </div>
  </footer>
</div>

  <!-- Javascript assets -->
  <script src="<?php echo $_SESSION['RelativePath']?>/../assets/bootstrap.bundle.min.js" ></script>
  </body>
</html>
<?php
  }
?>
