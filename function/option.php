<?php

function bull()
{
	echo("&bull;");
}

function option($opt, $sign="-")
{
	$odisp = str_replace(array("-", "[", "]"), array("-", "[", "]"), $opt);
	$oref = str_replace(array("[", "]"), "_", $opt);
	printf("<a class=\"text-nowrap\" href=\"/command-line-options/#%s\">%s%s</a>",
	$oref,$sign,$odisp);
}

function options()
{
//    bull();
	$numargs = func_num_args();
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
		option($arg_list[$i]);
		echo(" ");
		if($i < $numargs - 1)
			bull();
	}
}

?>

