<?php
function test(){
	echo "hello,world!";
}
function foo()
{
    $numargs = func_num_args(); //参数数量
    echo "参数个数是:{$numargs}<br />\n";
    if ($numargs >= 2) {
        echo "第二个参数的值:" . func_get_arg(1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "第{$i}个参数值:{$arg_list[$i]}<br />\n";
    }
}
 
foo(1, 'd', 3,4);