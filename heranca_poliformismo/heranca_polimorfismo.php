<?php 

// Classe mãe ou Super Classe
class Felino{

	var $mamifero = "sim";

	function correr(){

		echo "Correr como felino";
	}
}

// Classe filha ou Subclasse
class Chita extends Felino{

	// Polimorfismo e heranca
	function correr(){

		echo "Correr como Chita 100KM/H";

	}

}

$chita = new Chita();
echo $chita -> mamifero;
$chita -> correr();

 ?>