<?php
/************************************************************************************************************ 
Nome Arquivo...: index.php
Descrição......: Pagina inicial e principal do sistema 

Nome Projeto...: Sistema AEVP
Data...........: Julho / 2016
Company........: ASC - Tecnologia da Informação e Comunicação
WebSite........: 
Developer......: Alex Sanders Carvalho
Email..........: asc.tic1@gmail.com
/************************************************************************************************************ */


ob_start(); // Inicializa o buffer e bloqueia qualquer saída para o navegador
session_start(); // Inicia a sessão

include_once("variaveis.php");
require_once("sql/conecta.php");
require("verifica.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
				
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Meta para sites responsivos -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title><?php echo $sisnome_longo; ?></title>
		
		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet">		
		<link href="css/jquery-ui.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet">
		
		<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
		<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
		
		<script>
		  $('#myButton').on('click', function () {
			var $btn = $(this).button('loading')
			// business logic...
			$btn.button('reset')
		  })
		</script>
		
		<link rel="shortcut icon" href="img/sisaevp.ico" type="image/x-icon" />
						
	</head>

	<body>
		<?php include_once("navbar.php"); ?>
		<?php include_once("header.php"); ?>
		
		<div id="main" class="container-fluid">		
			<h2 class="page-header"><?php echo $sisnome_longo; ?><small> Início</small></h2>
			<div class="row">
				<div class="conteudo">
					<img src="img/wallpaper.jpg" class="img-thumbnail img-responsive" />
				</div>
			</div>
		</div>   
				
		<?php include_once("footer.php"); ?>
	</body>
</html>
