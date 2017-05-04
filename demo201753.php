<?php 
	header("content-type:text/html;charset=utf-8;");
	$name='ppp'; 
	echo   "<br/>$name";
	echo   '<br/>$name';//单引号不可以输出变量
	echo   "<br/>{$name}";

	define('PAI',3.14);
	echo PAI*3;
?>

