<?php


include_once("variaveis.php");
 ?>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">	
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>		
			
			<a class="navbar-brand" href="index.php">
				<img alt="Brand" src="img/logosis.gif">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documentos <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Faltas</a></li>
							<li><a href="#">Folgas</a></li>
							<li><a href="#">Regularizações</a></li>
							<li><a href="#">Saídas</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Convocação</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Troca de Plantão</a></li>
						</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servidores <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown-submenu"><a href="#">Listar</a>
								<ul class="dropdown-menu">
									<li><a href="#">Geral</a></li>
									<li><a href="#">Ativos</a></li>
									<li><a href="#">Por Equipes</a></li>
								</ul>
							</li>
						</ul>
				</li>
				<li><a href="calendario.php">Calendário</a></li>
				<li><a href="#">Link's</a></li>
				
				<?php
					if ($_SESSION['ss_nivel']==1) { 
				?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administração <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="setor.php">Setores</a></li>
							<li><a href="servidor.php">Servidores</a></li>
						</ul>
					</li>
				<?php } ?>
				
				<li><a href="#">About</a></li>
			</ul>
					
			<ul class="nav navbar-nav navbar-right">
				<li><a href="verifica.php?action=logout">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>