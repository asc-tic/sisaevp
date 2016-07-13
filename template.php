<?php
/************************************************************************************************************ 
Nome Arquivo...: template.php
Descrição......: Arquivo base/modelo para os demais aquivos do sistema

Nome Projeto...: Sistema AEVP
Data...........: Julho / 2016
Company........: ASC - Tecnologia da Informação e Comunicação
WebSite........: 
Developer......: Alex Sanders Carvalho
Email..........: asc.tic1@gmail.com
/************************************************************************************************************ */


ob_start();
session_start();
//require("verifica.php");
//require_once("sql/conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
				
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Meta para sites responsivos -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Sistema A.E.V.P.</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" >
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet">		
		<link href="css/jquery-ui.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet">
		
		<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
		<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
		<link rel="shortcut icon" href="img/sisaevp.ico" type="image/x-icon" />
						
	</head>

	<body>
		<?php include_once("navbar.php"); ?>

		<?php include_once("header.php"); ?>
		
		<div id="main" class="container-fluid">		
			<h2 class="page-header">Sistema A.E.V.P. Inicial</h2>
				<div class="row">
					<div class="conteudo">
						<img src="img/wallpaper.jpg" class="img-thumbnail img-responsive" />
					</div>
										
				</div>
		</div>
   
		<div>
			<br /><br /><br /><br /><br />
		</div>
		
		<?php include_once("footer.php"); ?>
	</body>
</html>
