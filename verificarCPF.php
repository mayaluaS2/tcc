<?php 
$cpf = $_POST['cpf'];

$d11 = substr($cpf, 0,1)*11;
$d10 = substr($cpf, 1,1)*10;
$d9 = substr($cpf, 2,1)*9;

$d8 = substr($cpf, 4,1)*8;
$d7 = substr($cpf, 5,1)*7;
$d6 = substr($cpf, 6,1)*6;

$d5 = substr($cpf, 8,1)*5;
$d4 = substr($cpf, 9,1)*4;
$d3 = substr($cpf, 10,1)*3;

$d2 = substr($cpf, 12,1)*2;
$c1 = substr($cpf, 13,1);

$soma =($d11 + $d10 + $d9 + $d8 + $d7 + $d6 + $d5 + $d4 + $d3 + $d2);

$resto = $soma % 11; //resto da divisao por 11
$ver = 11 - $resto; //verificador 11

$x = 0;
if($cpf == '000.000.000-00')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '111.111.111-11')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '222.222.222-22')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '333.333.333-33')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '444.444.44-44')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '555.555.555-55')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '666.666.666-66')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '777.777.777-77')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '888.888.888-88')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}
if($cpf == '999.999.999-99')
{
	$x = 1;
	echo('o CPF: '.$cpf.' os numeros digitados não são válidos!');
}

if($ver >=10)
{
	$ver = 0;
}

if ($c1 == $ver && $x != 1)
{
	echo('o CPF: '.$cpf. ' É verdadeiro!');
}
else if($x != 1)
{
	echo('o CPF: '.$cpf. ' É falso!');
}

?>