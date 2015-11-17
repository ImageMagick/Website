<?php

function cmd($c)
{
	$href = $_SESSION['RelativePath'];
	printf("<a href=\"%s/../script/%s.php\">%s</a>", $href, $c, $c);
}

function cmds()
{
	$numargs = func_num_args();
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
		cmd($arg_list[$i]);
		if($i < $numargs - 1)
			echo(", ");
	}
}

function usedby()
{
	$numargs = func_num_args();
    $arg_list = func_get_args();
	echo("<span style=\"background-color:#FFeeDD;\">[Used by ");
	if($numargs == 0)
		cmds("convert", "mogrify");
	else
		{
		call_user_func_array(cmds,$arg_list);
		}
	echo(".]</span>\n");
}


function intro()
{
	$numargs = func_num_args();
    $arg_list = func_get_args();
	echo("<table style='background-color:#FFFFE0; margin-left:40px; margin-right:40px; width:88%'><tr><td style='width:75%'>");
	echo($arg_list[0]);
	echo("</td><td style='text-align:right;'>");
	array_shift($arg_list);
	if($numargs > 1)
		{
		echo("[");
		call_user_func_array('cmds',$arg_list);
		echo("]");
		}
	echo("</td></tr></table>\n");
}


// margin: 1.33em 0px;
// cellpadding='0%' cellspacing='0'
// display: block
?>

