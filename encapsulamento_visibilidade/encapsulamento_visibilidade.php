<?php 
/*
class Veiculo{
	
	public
	private
	protected
	

	public $placa;
	private $cor;
	protected $tipo;
}

$veiculo = new Veiculo();
$veiculo -> placa = "LUC3232";
//PRIVATE  $veiculo -> cor = "Azul";
//PROTECTED $veiculo -> tipo = "Caminhonete";
echo $veiculo -> placa;
*/

class Veiculo{

	private $placa;
	private $cor;
	private $tipo = "Caminhonete";

	public function setPlaca($parametro_placa){

		$this -> placa = $parametro_placa;

	}

	public function getPlaca(){

		return $this -> placa;
	}

}

class Carro extends Veiculo{
// Quando private nao pode ser alterado de forma externa
// protected pode ser alterado apenas nas filhas
	public function exibirTipo(){

		echo $this -> tipo;
	}
}

$carro = new Carro();
$carro -> exibirTipo();

$veiculo = new Veiculo();
$veiculo -> setplaca("LUC7744");
echo $veiculo -> getPlaca();


 ?>