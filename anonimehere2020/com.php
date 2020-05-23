<?php
		include_once("conexao.php");
		//$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$come = filter_input(INPUT_POST, 'come', FILTER_SANITIZE_STRING);  


		$result_usuario = "INSERT INTO comentarios 
		(comentario,
			created) 
		VALUES 
		('$come', 
	 		 NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);



if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Comentario adicionado em TOTAL ANÔNIMATO! ;)</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'OCORREU UM ERRO! TENTE NOVAMENTE!</p>";
	header("Location: index.php");
}
?>




		?>