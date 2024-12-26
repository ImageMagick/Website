<?php

function crtprompt()
{
  echo('<kbd>$ </kbd>');
}

function crtin($s)
{
  crtprompt();
  echo("<code>");
  echo($s);
  echo("</code>");
}

function crtout($s)
{
  echo("<samp>");
  echo($s);
  echo("</samp>");
}

function crt()
{
  $p=0;
  echo("<pre class=\"p-3 mb-2 text-body-secondary bg-body-tertiary\"");
  $arg_list = func_get_args();
  for ($i = 0; $i < func_num_args(); $i++) {
    if ($p == 0) {
      crtin($arg_list[$i]);
    } else {
      crtout($arg_list[$i]);
    }
    $p = 1-$p;
  }
  echo("</pre>");
 }
?>

