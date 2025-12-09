<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p class="lead">Learn how to cite ImageMagick in your work.  Choose from these citation formats:</p>

<h4>Citation in APA style</h4>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>ImageMagick Studio LLC. (2024). ImageMagick. Retrieved from https://imagemagick.org</samp></pre>

<h4>Citation in Vancouver style</h4>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>1. ImageMagick Studio LLC. ImageMagick [Internet]. 2024. Available from: https://imagemagick.org</samp></pre>

<h4>Citation in Harvard style</h4>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><sampl>ImageMagick Studio LLC, 2024. ImageMagick, Available at: https://imagemagick.org.</samp></pre>
<h4>Citation in Bibtex format</h4>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>@software{imagemagick,
  author = {{ImageMagick Studio LLC}},
  title = {ImageMagick},
  url = {https://imagemagick.org},
  version = {7.1.1},
  date = {2024-01-04},
}</samp></pre>
