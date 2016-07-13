<?php 


include_once("variaveis.php");
?>



<footer class="bg-primary">
	<div class="container-fluid">
		<div class="row">
			<div>
				<div class="col-xs-12 col-md-3 centro">
					<a href="http://escoltaevigilancia.blogspot.com" target="_blank"><img class="img-responsive pull-left" src="img/social/Blogger.gif" alt=" Blogger " /></a>
					<a href="http://plus.google.com/+EscoltaevigilanciaBlogspot" target="_blank"><img class="img-responsive pull-left"  src="img/social/Google.gif" alt=" Google + " /></a>
					<a href="http://www.facebook.com/escoltaevigilancia" target="_blank"><img class="img-responsive pull-left"  src="img/social/Facebook.gif" alt=" Facebook " /></a>
					<a href="http://www.twitter.com/sp_aevp" target="_blank"><img class="img-responsive pull-left"  src="img/social/Twitter.gif" alt=" Twitter " /></a>
					<a href="http://www.youtube.com/escoltaevigilancia" target="_blank"><img class="img-responsive pull-left"  src="img/social/YouTube.gif" alt=" YouTube " /></a>
				</div>
		
				<div class="col-xs-10 col-md-6">
					<span class="center-block centro">Copyright © 2016 <?php echo $sisdeveloper ." | ". $sisnome_longo ." - Versão ". $sisversion ?></span>
				</div>
		
				<div class="col-xs-2 col-md-3 centro">
					<a href="#" target="_blank" data-toggle="modal" data-target="#myModal"><img class="pull-right"  src="img/asc_logo.gif" alt="WebMaster" /></a>
				</div>
			
			</div>
		</div>
	</div>	
</footer>



<script >
	function sendMail() {
		var link = "mailto:me@example.com";
		
		window.location.href = link;
	}
</script >

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sobre...</h4>
      </div>
      <div class="modal-body">
		<h3><?php echo $sisnome_longo . " - Versão ". $sisversion ?></h3>
        <h4>Desenvolvido por <?php echo $sisdeveloper ?></h4>
		<h4>Email: <?php echo $sisemail ?></h4>
      </div>
      <div class="modal-footer">        
		<button type="button" class="btn btn-primary" onclick="sendMail(); return false" >Enviar email</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
