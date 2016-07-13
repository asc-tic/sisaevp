<?php

include_once("variaveis.php");

if (!empty($_GET["action"])) {	
	
	$action = $_GET["action"];
	
	if ($action == "logout") {
		session_start();
		unset ($_SESSION['ss_login']);
		unset ($_SESSION['ss_senha']);
		unset ($_SESSION['ss_user']);
		unset ($_SESSION['ss_nivel']);
		unset ($_SESSION['ss_hora']);
	
		session_destroy();
	
		?><script language='javascript' type='text/javascript'>alert("Logout realizado com sucesso!");window.location.href='login.php';</script><?php
		exit();
		
	}
}

if (!empty($_POST["login"])) {
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	require_once("sql/conecta.php");
	$query = "SELECT * FROM tb_login WHERE username='$login' AND password='$senha' LIMIT 1";
	$result = mysqli_query($link, $query);
	$result2 = mysqli_num_rows($result);
		
	if ($result2==1) {
		
		ob_start();
		session_start();
		
		$result3 = mysqli_fetch_assoc($result);
		$_SESSION['ss_login'] = $login;
		$_SESSION['ss_senha'] = $senha;
		$_SESSION['ss_user'] = $result3["id_servidor"];
		$_SESSION['ss_nivel'] = $result3["nivel"];
		$_SESSION['ss_hora'] = time();
		
		?><script language='javascript' type='text/javascript'>//alert("Login efetuado com sucesso!");
		window.location.href='index.php';</script><?php
		exit();
			
	} else {
		
		?><script language='javascript' type='text/javascript'>alert("Login INVÁLIDO!");window.location.href='login.php';</script><?php
		exit();
		
	}	
}

if (!empty($_SESSION["ss_login"])) {
	
	$agora = time();
	$tempo = (time()) - $_SESSION["ss_hora"];
	$segundos=(is_numeric($_SESSION['ss_hora']) and is_numeric($agora)) ? ($agora-$_SESSION['ss_hora']):false;
	
	$tempo_log = 600;

	if($segundos > $tempo_log) {
		unset ($_SESSION['ss_login']);
		unset ($_SESSION['ss_senha']);
		unset ($_SESSION['ss_user']);
		unset ($_SESSION['ss_nivel']);
		unset ($_SESSION['ss_hora']);
	
		session_destroy();

		?><script language='javascript' type='text/javascript'>alert("O tempo de sessão expirou! Realize o login novamente!");window.location.href='login.php';</script><?php
		exit();
	} else {
		$_SESSION['ss_hora'] = time();		
	}
	
} else {
	?>
		<script language='javascript' type='text/javascript'>//alert("O tempo de sessão expirou! Realize o login novamente!");
		window.location.href='login.php';</script>
	<?php
	exit();	
}

?>


