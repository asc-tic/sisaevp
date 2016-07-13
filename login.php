<?php
/*   */

include_once("variaveis.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
				
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Meta para sites responsivos -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Login - <?php echo $sisnome_longo; ?></title>
		
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
		<header>
			<div class="container-fluid bg-primary">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<span class="pull-right"><?php echo $sisnome_longo ?></span>
					</div>
				</div>					
			</div>
		</header>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<span class="label "> </span>
				</div>
			</div>
		
		
			<div class="row">
				<div class="col-md-4"></div>
		
				<div class="col-xs-12 col-md-4">
					<div class="panel panel-primary">			
						<div class="panel-heading">
							<img class="img-responsive center-block" src="img/logosis_md.gif" alt=<?php echo $sisnome_curto; ?> />
						</div>
		
						<div class="panel-body">						
							<form class="form-horizontal" name="form_login" id="form_login" method="POST" action="verifica.php" autocomplete="on">
								<div class="form-group">
									<label for="login" class="col-xs-12 col-md-4 control-label">Login</label>
									<div class="col-xs-12 col-md-8">
										<input type="text" class="form-control" name="login" id="login"  maxlength="30" placeholder="Login do usuário" autofocus required  />
									</div>
								</div>
								
								<div class="form-group">
									<label for="senha" class="col-xs-12 col-md-4 control-label">Password</label>
									<div class="col-xs-12 col-md-8">
										<input type="password" class="form-control" name="senha" id="senha"  maxlength="16" placeholder="Senha do usuário" autocomplete="off" required />
									</div>
								</div>
			  
								
								<div class="col-xs-12 col-md-12 centro"  >
									<button type="submit" class="btn btn-primary btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Acessar Sistema</button>
								</div>								
							</form>			
						</div>
	
						<div class="panel-footer centro">
							<h6>Copyright © 2016 <?php echo $sisdeveloper;?></h6>
							<h6><?php echo $sisnome_longo ." - Versão ". $sisversion; ?></h6>
						</div>
		
					</div>
				</div>
			</div>
		</div>
			
		
		
  		<?php require_once ("footer.php"); ?>	
	</body>
</html>
