<?php

$numero = 0;
$soma = 0;

while($soma < 1000){
	$numero = rand(0,100);
	$soma = $soma + $numero;
	echo $soma . "\n";
}

/*do{
	$numero = rand(0,100);
	$soma = $soma + $numero . "\n";
	echo $soma . "\n";
} while($soma < 1000);*/
