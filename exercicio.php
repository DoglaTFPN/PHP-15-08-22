<?php 

	class Contas{
		var $numAge;
		var $numConta;
		var $nome;
		var $saldo;

	function ExibeDados()
	{

		echo "Número da Agência: ".$this->numAge."<br/>";
		echo "Número da conta: ".$this->numConta."<br/>";
		echo "Nome: ".$this->nome."<br/>";
		echo "Saldo: ".$this->saldo."<br/><br/>";

	}	
	}
	
 ?>