<?php session_start();
	$_SESSION['palavras']="<h4>Encontre as Palavras: Goiaba, Acerola, Banana, Manga, Figo, Graviola e Uva.</h4>";
	
	$_SESSION['ter']=0;

	$_SESSION['tabela']=[
	["G","A","B","C","L","I","M","A","M","A","R","E","L","O","S","L"],
	["D","O","E","F","A","V","E","L","A","C","E","R","O","L","A","I"],
	["A","B","I","K","G","T","I","D","O","N","A","L","D","N","C","R"],
	["H","I","C","A","A","P","I","O","M","A","L","T","N","E","H","E"],
	["M","Z","Q","X","B","G","J","F","H","O","Q","E","C","H","O","Z"],
	["A","C","Y","R","T","A","U","B","I","T","B","O","L","G","R","O"],
	["V","B","M","S","O","R","C","H","A","G","A","R","O","S","R","H"],
	["L","U","A","I","S","S","T","E","S","N","O","W","B","S","O","L"],
	["G","U","E","N","C","R","D","P","E","T","E","R","Y","E","A","E"],
	["C","O","P","I","A","O","U","S","L","A","V","U","B","S","G","O"],
	["A","L","O","H","L","N","S","P","O","P","S","T","A","R","N","C"],
	["P","A","H","E","A","B","A","R","S","I","L","A","I","S","A","U"],
	["I","N","V","G","J","L","O","A","R","I","L","O","U","C","M","B"],
	["V","E","G","R","A","V","I","O","L","A","O","I","L","B","L","N"]
	];

	$_SESSION['gabarito']=[
	[1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,1,0,0,0,0,0,0,1,1,1,1,1,1,1,0],
	[0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,1,0,0,1,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,1,0,0,1,0,0,0,0,0,0,0],
	[0,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0],
	[0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,0],
	[0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0],
	[0,0,0,0,1,0,0,0,0,1,1,1,0,0,1,0],
	[0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0],
	[0,0,0,0,0,0,1,0,0,0,0,0,0,0,1,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0],
	[0,0,1,1,1,1,1,1,1,1,0,0,0,0,0,0]
	];

	$_SESSION['resposta']=[
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
	];

	header("location:jogar.php");
 
?>