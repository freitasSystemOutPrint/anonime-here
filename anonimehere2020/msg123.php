<?php    
$cx = mysqli_connect("localhost", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "anonimeh");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM mensagens") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome 	:<br>" 			.$aux["nome"		]."<br />";
  echo "Numero  :"				.$aux["tele"	 	]."<br />"; 
  echo "Mensagem:"				.$aux["txt"			]."<br />";
  
  //echo "ENDERECO:"	.$aux["ende"	 	]."<br />";

 echo "".$aux["created"    ]	."<br />";
 
}
?>
