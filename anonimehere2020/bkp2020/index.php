<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style.css">
	<head>
		<meta charset="utf-8">
		<title>ENVIAR MENSAGEM ANÔNIMA - byMFX</title>		
	</head>
	<body>
	    <div id="content">
		<h2>MENSAGEM ANÔNIMA</h2> <br><br>
		<p>
			Digite o Nome, número e a MENSAGEM para a  pessoa que você deseja<br>
			enviar <strong>MENSAGEM ANÔNIMA</strong>
		</p>
		<br><br>
		
		<h3>Não forneça seu própio nome nem seu Telefone ! </h3>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<br/>
		<br/>
		<form method="POST" action="processa.php">
			<label>ENVIAR PARA: </label>
			<input type="text" name="nome" placeholder="Nome da Vítima"><br>

			<label>Telefone: </label>
			<input type="tel" name="tel" placeholder="(00) 00000-0000)"><br>
			<br>
			<br>
			<p>Escreva sua mensagem no campo abaixo !</p>
            <br><br>
			<textarea style="margin: 0px; height: 137px; width: 352px;" name="txt"> </textarea>

			<br>
			<br>
			

			<input type="submit" value="EnviarANÔNIMAMENTE">
			<br>
			<br>
		</form>
		<footer> 
		&copy;MFX
		<h6>Aplicativo em formato beta, não ligue pro design.<br>
			Aqui o importante é o <strong>ANÔNIMATO<strong>	
	</h6>
    </footer>
    </div>
	</body>
	
</html>