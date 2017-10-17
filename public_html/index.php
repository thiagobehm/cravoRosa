<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="images/rose.png" />
	<title>Cravo Rosa Eventos</title>
	<?php include 'includes/stylesheet.php'; ?>
</head>
<body>
	<header class="text-center">
		<?php include 'includes/menu.php'; ?>
	</header>
	
	<section id="hero">
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-xs-12">
					<h1 id="heroText">Uma empresa especializada em planejamento, organização e produção de eventos.</h1>	
				</div>
			</div>
		</div>				
	</section>
	<section id="servicos">
		<!-- <div class="container text-center">
			<h3 class="title">Serviços</h3>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<ul>
						<li>Festa de 15 anos</li>
						<li>Presentes Personalizados</li>
						<li>Corporativo</li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<ul>
						<li>Aniversários</li>
						<li>Festa Infantil</li>
						<li>Bodas</li>
					</ul>
				</div>
			</div>
		</div> -->
		<div class="container text-center">
			<h3 class="title">Serviços</h3>
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="serv15ANos">						
						<div class="flipper" onclick="teste('#serv15ANos');">
							<div class="front">
								<!-- front content -->								
								<img src="images/serv_15_anos.jpg" alt="15 anos" class="img-responsive"> 
							</div>
							<div class="back">
								<!-- back content -->
								<div class="back-content">
									Festa de 15 anos
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="servPresente">
						<div class="flipper" onclick="teste('#servPresente');">
							<div class="front">
								<!-- front content -->
								<img src="images/serv_presentes.jpg" alt="Presente personalizado" class="img-responsive">
							</div>
							<div class="back">
								<!-- back content -->								
								<div class="back-content">
									Presentes Personalizados
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="servCorporativo">
						<div class="flipper" onclick="teste('#servCorporativo');">
							<div class="front">
								<!-- front content -->
								<img src="images/serv_corporativo.jpg" alt="Festa Corporativa" class="img-responsive">
							</div>
							<div class="back">
								<!-- back content -->
								<div class="back-content">
									Corporativo
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="servAvniversario">
						<div class="flipper" onclick="teste('#servAvniversario');">
							<div class="front">
								<!-- front content -->								
								<img src="images/serv_aniversario.jpg" alt="Aniversário" class="img-responsive">
							</div>
							<div class="back">
								<!-- back content -->								
								<div class="back-content">
									Aniversários
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="servInfantil">
						<div class="flipper" onclick="teste('#servInfantil');">
							<div class="front">
								<!-- front content -->
								<img src="images/serv_aniv_infantil.jpg" alt="Festa Infantil" class="img-responsive">
							</div>
							<div class="back">
								<!-- back content -->
								<div class="back-content">
									Festa Infantil
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="flip-container well" id="bodas">
						<div class="flipper" onclick="teste('#bodas');">
							<div class="front">
								<!-- front content -->
								<img src="images/serv_bodas.jpg" alt="Bodas" class="img-responsive">
							</div>
							<div class="back">
								<!-- back content -->
								<div class="back-content">
									Bodas
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>	
	<section id="diferencial">
		<div class="container text-center">
			<div class="row">
				<h3 class="title">Nosso Diferencial</h3>
				<!-- diferencial 1-->
				<div class="col-xs-12 col-md-3">					
					<div class="well">
						<div class="well-body">
							<img src="images/girl.png" alt="Garota sentada relaxando" class="img-responsive">
						</div>
						<div class="well-description">
							Cuidamos de tudo para você. Sem stress e preocupações.
						</div>
					</div>
				</div>	
				<!-- diferencial 2-->
				<div class="col-xs-12 col-md-3">					
					<div class="well">
						<div class="well-body">
							<img src="images/wedding-planner.png" alt="Planejamento" class="img-responsive">
						</div>
						<div class="well-description">
							Festas totalmente personalizadas conforme sua necessidade.
						</div>
					</div>
				</div>	
				<!-- diferencial 3-->
				<div class="col-xs-12 col-md-3">					
					<div class="well">
						<div class="well-body">
							<img src="images/support.png" alt="Suporte" class="img-responsive">
						</div>
						<div class="well-description">
							Conte com nosso apoio 24/07 em diferentes plataformas.
						</div>
					</div>
				</div>	
				<!-- diferencial 4-->
				<div class="col-xs-12 col-md-3">					
					<div class="well">
						<div class="well-body">
							<img src="images/denny.png" alt="Sem necessidade de parceiros" class="img-responsive">
						</div>
						<div class="well-description">
							Sem obrigações de contratação de parceiros.
						</div>
					</div>
				</div>	

			</div>
		</div>
	</section>
	<!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	<!-- load scripts -->
	<?php include 'includes/scripts.php'; ?>

	<script>
		function teste(servico) {
			$(document).ready(function () {				
				$(servico).toggleClass("flip");				
			});
		}
	</script>
</body>
</html>

