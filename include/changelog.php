<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<?php
  header("Location: https://github.com/ImageMagick/ImageMagick/blob/main/ChangeLog.md");
?>
