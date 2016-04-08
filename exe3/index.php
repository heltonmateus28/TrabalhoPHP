<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Exe3</title>
 	<style type="text/css">
 	
 	</style>
   						
</head>
<body>

	<h2>Cookie</h2>

	</br></br><form action="index.php" method="post">
	Usuário: <input type="text" name="post_Usuario"></br></br>
	Senha:   <input type="text" name="post_Senha"></br></br>
	<input type="submit" value="post"></input>
	</form><br><br>

	<?php
		$cookie_nome = "post_Usuario";
		$cookie_senha= "post_Senha";
		setcookie($cookie_nome, $cookie_senha , time() + (86400 * 3),"/");
		
	?>
	

	<?php

		if(!isset($_COOKIE[$cookie_nome])){
			
			echo "O cookie nome '". $cookie_nome ."'nao setado";
			
		}else{
			
			echo "O cookie " . $cookie_nome . "  existe! ";
			echo "Seu valor é:" . $_COOKIE[$cookie_nome];
		}

			///////////////////////
			
				if(!isset($_COOKIE[$cookie_senha])){
			
			echo "O cookie senha '". $cookie_senha ."'nao setado";
			
		}else{
			
			echo "O cookie " . $cookie_senha . "  existe! ";
			echo "Seu valor é:" . $_COOKIE[$cookie_senha];
		}
?>
</body>
</html>