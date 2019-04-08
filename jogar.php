<!DOCTYPE html><?php session_start();?>
<html>
<head>
	<meta charset="UTF-8">
  	<title>Caça Palavras</title>
	<link rel="stylesheet" type="text/css" href="projeto1.css"> 
</head>

<body>
	<?= $_SESSION['palavras'];  ?>

	<div class="btn-group">
    <a href="iniciarjogo.php"><button class="button">Voltar</button></a>
	</div>

	<?php if ($_SESSION['ter']==0) { ?>

	<div class="tabela"> 
  	<?php
		for ($i=0; $i < sizeof($_SESSION['tabela']); $i++) { 
				echo "<tr>";
			for ($j=0; $j < sizeof($_SESSION['tabela'][$i]); $j++) {
				if ($_SESSION['resposta'][$i][$j]!=1) {
					echo '<td><a href="funcaoconfere.php?l='.$i.'&c='.$j.'"><button class="red">'.$_SESSION['tabela'][$i][$j].'</button></a></td>';
				}
				else{
					echo '<td><a href="funcaoconfere.php?l='.$i.'&c='.$j.'"><button class="green">'.$_SESSION['tabela'][$i][$j].'</button></a></td>';					 	
				}
			}
			echo "</tr><br>";
		}
	?>
  	</div>
  	<?php }else{?>
  	<h1>Parabéns</h1>
  	<?php } ?>
</body>
</html>