<?php  
	require 'Pessoa.php';
	require 'Tecnico.php';
	require 'Comercial.php';
	require 'Designer.php';
	require 'Desenvolvedor.php';

	$dev = new Desenvolvedor(550,10,55);
	$com = new Comercial(600,10);
	$des = new Designer(600,10,60);

	echo "o salario do Desenvolvedor é " . $dev->calculaSalario() . "<br>";
	echo "o salario do Comercial é " . $com->calculaSalario() . "<br>";
	echo "o salario do Designer é " . $des->calculaSalario() . "<br>";
?>