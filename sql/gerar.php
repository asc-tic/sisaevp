<?php /* PÁGINA DE CONEXAO BANCO DADOS DO SISTEMA ***********************************************************
/************************************************************************************************************ 
Nome Arquivo...: gerar.php
Descrição......: Arquivo para criar base de dados e tabelas do sistema

Nome Projeto...: Sistema AEVP
Data...........: Julho / 2016
Company........: ASC - Tecnologia da Informação e Comunicação
WebSite........: 
Developer......: Alex Sanders Carvalho
Email..........: asc.tic1@gmail.com
/************************************************************************************************************ */

# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, 'pt_BR.utf8');

mb_internal_encoding('UTF-8'); //Define o default encoding interno
mb_http_output('UTF-8'); //Define o default encoding HTTP input
mb_http_input('UTF-8');//Define o default encoding HTTP output
mb_language('uni');//seta uma linguagem, no caso unicode(utf-8)



// Cria o banco de dados
$query = "CREATE DATABASE IF NOT EXISTS " .$dbname. " Default CHARSET=utf8  COLLATE=utf8_general_ci";
$result = mysqli_query($link,$query);

// Seleciona o banco de dados
$base =  mysqli_select_db($link,$dbname) or die ("ERRO DE CONEXÃO COM O BANDO DE DADOS");


# Aqui está o segredo
mysqli_set_charset($link,"UTF8");


//#####  CRIA A TABELA DE LOGIN  #####
$query_tb = "CREATE TABLE IF NOT EXISTS tb_login(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			username VARCHAR(30) NOT NULL,
			password CHAR(128) NOT NULL,
			id_servidor INT NOT NULL,
			nivel INT NOT NULL
			)ENGINE=InnoDB Default CHARSET=utf8  COLLATE=utf8_general_ci";
$result = mysqli_query($link, $query_tb);


$query_rows = "SELECT * FROM tb_login";
$result2 = mysqli_query($link, $query_rows);
$num_registro = mysqli_num_rows($result2);
//echo "$num_registro Rows\n";

if ($num_registro == 0) {
	$query_insert = "INSERT INTO tb_login (id, username, password, id_servidor, nivel)
									VALUES ('1', 'admin', 'sandex', '999', '1')";
	$result = mysqli_query($link, $query_insert);
	/*if (mysqli_query($link, $query_insert)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $query_insert . "<br>" . mysqli_error($link);
	}*/
}


?>