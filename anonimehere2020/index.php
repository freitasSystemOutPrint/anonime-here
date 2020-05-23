<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>ENVIAR MENSAGEM ANÔNIMA - byILUDIDO</title>
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
			<input type="text" name="nome" placeholder="Nome da Vítima" required=""><br>

			<label>Telefone: </label>
			<input type="tel" name="tele" placeholder="(00) 00000-0000)" required=""><br>
			<br>
			<br>
			<p>Escreva sua mensagem no campo abaixo !</p>
            <br><br>
			<textarea style="margin: 0px; height: 137px; width: 352px;" name="txt" required=""> </textarea>

			<br>
			<br>
			

			<input type="submit" value="EnviarANÔNIMAMENTE">
			<br>
			<br>
		</form>

		<h4>COMENTÁRIOS</h4>
		<p>Se desejar deixe um comentario aqui.</p>
		<form method="POST" action="com.php">
		<textarea style="margin: 0px; height: 97px; width: 352px;" name="come"> </textarea>


		<input type="submit" value="ENVIAR COMENTÁRIOS">
		</form>

	

		<?php  
$cx = mysqli_connect("localhost", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "anonimeh");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM comentarios") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) {
  echo "-----------------------------------------<br />"; 
  echo "USUARIO ANONIMO DISSE : <br> <strong>" .$aux["comentario"]." </strong><br />"; 
  echo "".$aux["created"]."<br />";
}
?>
<br>
<a href="index.php">CLIQUE AQUI PARA ATUALIZAR A PAGINA.</a>

	<footer> <br> 
		&copy;ILUDIDO
		<h6> Aplicativo em formato beta, não ligue pro design.<br>
			 Aqui o importante é o <strong>ANÔNIMATO.<strong>	
	</h6>
    </footer>
    </div>
	</body>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>