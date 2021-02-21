<?php

function crtprompt()
{
  echo('<span class="crtprompt">$ </span>');
}

function crtin($s)
{
  crtprompt();
  echo("<span class='crtin'>");
  echo($s);
  echo("</span>");
}

function crtout($s)
{
  echo("<span class='crtout'>");
  echo($s);
  echo("</span>");
}

function crt()
{
  $p=0;
  echo("<ul><pre class=\"highlight\"><code>");
  $arg_list = func_get_args();
  for ($i = 0; $i < func_num_args(); $i++) {
    if ($p == 0) {
      crtin($arg_list[$i]);
    } else {
      crtout($arg_list[$i]);
    }
    $p = 1-$p;
  }
  echo("</code></pre></ul>");
 }
?>

