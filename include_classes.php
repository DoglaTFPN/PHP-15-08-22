<?php 

	include_once 'exercicio.php';

	$valor = new Contas();
	$valor->numAge = 4565;
	$valor->numConta = '2';
	$valor->nome = 'Douglas';
	$valor->saldo = '32';
	$valor2 = new Contas();
	$valor2->numAge = 1236;
	$valor2->numConta = '9';
	$valor2->nome = 'Caio';
	$valor2->saldo = '5569';

	//echo $valor->numAge. " " . $valor->numConta . " " . $valor->nome. " " . $valor->Saldo;


	$valor->ExibeDados();
	$valor2->ExibeDados();
	

 ?>