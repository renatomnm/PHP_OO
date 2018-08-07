<?php 
	require "Pessoa.php";
	require "CalculaPeso.php";

	$leonam = new Pessoa("M","70","1.80");
	$rafael = new Pessoa("M","35","1.50");

	$CalculaPesoDoLeonam = new CalculaPeso($leonam);
	echo $CalculaPesoDoLeonam->veredito();
?>