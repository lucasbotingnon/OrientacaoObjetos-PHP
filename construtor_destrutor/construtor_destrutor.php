<?php 

class Pessoa{

	// Construtor
	private $nome;
	public function correr(){

		echo $this -> nome . "Correndo <br>";

	}

	function __construct($parametro_nome){

		echo "Construtor iniciado <br>";
		$this -> nome = $parametro_nome;
		echo $this -> nome;

	}

	// Destrutor  - Quando algo é removido da memoria
	function __destruct(){

		echo "Objeto removido <br>";
	}

}

$pessoa = new Pessoa("Lucas");
$pessoa -> correr();

 ?>