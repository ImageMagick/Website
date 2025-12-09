<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p class="lead"> </p>
<div class="gcse-searchresults-only"></div>
</div>
