<?php
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$tele = filter_input(INPUT_POST, 'tele', FILTER_SANITIZE_STRING);
$txt = filter_input(INPUT_POST, 'txt', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $tel <br>";
//echo "E-mail: $txt <br>";

$result_usuario = "INSERT INTO mensagens 
(nome,
 tele,
  txt,
   created) 
VALUES 
('$nome', 
	'$tele', 
	  '$txt', 
	    NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

 


if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Mensagen enviada em TOTAL ANÔNIMATO! ;)</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'OCORREU UM ERRO! TENTE NOVAMENTE!</p>";
	header("Location: index.php");
}
?>
