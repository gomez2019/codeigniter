<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url('resources/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark justify-content-center  ">
		<a class="navbar-brand" href="#">Codeigniter Crud</a>
	</nav>

	<div class="container">
		

<?php

for ($i=1 ; $i<11 ; $i++){

	$num[$i] = rand(1,100);
}


print_r($num);

/////////////////

// for($i = 0; $i <= 10; $i++) {
//      ${"variable$i"} = rand(1,10);
// }
// echo $variable2;

//////////

// for($i = 0; $i <= 10; $i++) {
// 	$some = "variable{$i}";
//     $$some = rand(1,10);
// }
// echo $variable1;


/////////




if( max($num) == true )
{
	echo "<br> el mayor numero es ". max($num);
}

if ( min($num) == true)

{
	echo "<br> el menor numero es es ". min($num);

}