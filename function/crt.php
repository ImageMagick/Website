<?php

function crtprompt()
{
  echo('<span class="crtprompt"> </span>');
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
	$numargs = func_num_args();
    $arg_list = func_get_args();

    $p=0;
    echo("<pre>");
    for ($i = 0; $i < $numargs; $i++) {
        if($p == 0) {
            crtin($arg_list[$i]);
            }
       else {
            crtout($arg_list[$i]);
            }
        $p = 1-$p;
        }
    echo("</pre>");
 }


?>

