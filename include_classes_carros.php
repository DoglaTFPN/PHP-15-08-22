<?php 

	include_once 'exercicio_carros.php';

	$valor = new Carros();
	$valor->cor = 'Blue';
	$valor->ano = 2007;
	$valor->numeroPortas = 4;
	$valor->peso = 1549;
	$valor2 = new Carros();
	$valor2->cor = 'Red';
	$valor2->ano = 1983;
	$valor2->numeroPortas = 2;
	$valor2->peso = 1781;


	$valor->ExibirCor();
	$valor2->ExibirCor();
	$valor->Acelerar();
	



 ?>