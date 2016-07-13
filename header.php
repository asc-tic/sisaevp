<?php

date_default_timezone_set("Brazil/East");

include_once("variaveis.php");

// Data longa
$semana = date('w');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
switch($semana){
	case '0': $semana_atual = "domingo"; break;
	case '1': $semana_atual = "segunda-feira"; break;
	case '2': $semana_atual = "terça-feira"; break;
	case '3': $semana_atual = "quarta-feira"; break;		
	case '4': $semana_atual = "quinta-feira"; break;
	case '5': $semana_atual = "sexta-feira"; break;		
	case '6': $semana_atual = "sábado"; break;
	}
switch($mes){
	case '01': $mes_atual = "janeiro"; break;
	case '02': $mes_atual = "fevereiro"; break;
	case '03': $mes_atual = "março"; break;		
	case '04': $mes_atual = "abril"; break;
	case '05': $mes_atual = "maio"; break;		
	case '06': $mes_atual = "junho"; break;
	case '07': $mes_atual = "julho"; break;
	case '08': $mes_atual = "agosto"; break;		
	case '09': $mes_atual = "setembro"; break;
	case '10': $mes_atual = "outubro"; break;		
	case '11': $mes_atual = "novembro"; break;
	case '12': $mes_atual = "dezembro"; break;
	}
$data_longa = $dia." de ".$mes_atual. " de " .$ano;
$data_semana_longa = $semana_atual.", ".$dia." de ".$mes_atual. " de " .$ano;

//Saudação
$hora = date('H');
switch($hora){
	case '00': $saudacao = "Bom dia"; break;
	case '01': $saudacao = "Bom dia"; break;
	case '02': $saudacao = "Bom dia"; break;
	case '03': $saudacao = "Bom dia"; break;		
	case '04': $saudacao = "Bom dia"; break;
	case '05': $saudacao = "Bom dia"; break;		
	case '06': $saudacao = "Bom dia"; break;
	case '07': $saudacao = "Bom dia"; break;
	case '08': $saudacao = "Bom dia"; break;		
	case '09': $saudacao = "Bom dia"; break;
	case '10': $saudacao = "Bom dia"; break;		
	case '11': $saudacao = "Bom dia"; break;
	case '12': $saudacao = "Boa tarde"; break;
	case '13': $saudacao = "Boa tarde"; break;
	case '14': $saudacao = "Boa tarde"; break;
	case '15': $saudacao = "Boa tarde"; break;		
	case '16': $saudacao = "Boa tarde"; break;
	case '17': $saudacao = "Boa tarde"; break;		
	case '18': $saudacao = "Boa noite"; break;
	case '19': $saudacao = "Boa noite"; break;
	case '20': $saudacao = "Boa noite"; break;		
	case '21': $saudacao = "Boa noite"; break;
	case '22': $saudacao = "Boa noite"; break;		
	case '23': $saudacao = "Boa noite"; break;
	}
?>

<div class="bg-primary">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<span><?php echo $saudacao.", <b>".$_SESSION['ss_login']."!</b>" ?></span>
			</div>
				
			<div class="col-xs-12 col-md-6">
				<span class="pull-right"><?php echo $data_semana_longa ?></span>
			</div>
		</div>
	</div>	
</div>	
