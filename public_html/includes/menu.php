<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div id="logo" class="text-center">
	<img src="images/logo.png" alt="Logo" width="450px" class="img-responsive text-center">
</div>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid text-center">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
				<li><a href="index.php#servicos">Serviços</a></li>
				<li class="<?= ($activePage == 'rsvp') ? 'active':''; ?>"><a href="rsvp.php">R.S.V.P.</a></li>
				<li class="<?= ($activePage == 'contato') ? 'active':''; ?>"><a href="contato.php">Contato</a></li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>		
