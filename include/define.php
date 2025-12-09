<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<?php
  /*
    ImageMagick Constants.
  */
  define('MagickDevelopmentTeam', 'support-magick-0x01@urban-warrior.org');
  define('MagickMajorReleaseText', '7');
  define('MagickLibVersionText', '7.1.1');
  define('MagickLibSubversion', '-30');
  define('MagickReleaseDate', '2024-02-11')
?>
