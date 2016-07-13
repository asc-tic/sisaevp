<?php /* PÁGINA DE CONEXAO BANCO DADOS DO SISTEMA ***********************************************************
/************************************************************************************************************ 
Nome Arquivo...: conecta.php
Descrição......: Arquivo para conectar o banco de dados ao sistema

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


// Faz a conexão com o Mysql
$localhost = "localhost";
$my_user = "sysadmin";
$my_password = "sandexadmin";
$dbname = "sisaevp";

$link  = mysqli_connect($localhost,$my_user,$my_password) or die ("ERRO DE CONEXÃO COM O MYSQL!!! --> " . mysqli_connect_error() ."  ". mysqli_error($link));

/* check connection */
if (!mysqli_connect_errno()) {
    require_once("gerar.php");
    //exit();
}


?>