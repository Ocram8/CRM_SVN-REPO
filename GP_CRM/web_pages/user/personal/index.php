<?php
if (! isset ( $_SESSION ['login'] ))
	header ( "Location: ../../error.php" );
else {
	?>

<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="../index.html">Painel Principal</a></li>
				<li class="active">Área Pessoal</li>
			</ol>

			<div class="page-header">
				<h1>Gestão de Área Pessoal</h1>
			</div>
			<p class="lead">O módulo de gestão da Área Pessoal serve para alterar os dados de perfil.</p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend>Dados Pessoais</legend>
						<div class="col-lg-6">
							<label for="nome" title="Altere o seu nome">Nome</label>
							<input type="text" class="form-control" placeholder="Nome do funcionário" title="Introduza o nome do funcionário" id="name"> 
							<span class="help-block">Alterar o seu nome</span>
							<label for="email" title="Altere o seu correiro eletrónico">Correio eletrónico</label> 
							<input type="email" class="form-control" placeholder="Correio eletrónico do funcionário" title="Altere o seu correiro eletrónico" id="email"> 
							<span class="help-block">Altere o seu correiro eletrónico</span>
							<label for="inputfile" title="Altere a sua fotografia">Fotografia</label>
							<input type="file" id="inputfile" title="Altere a sua fotografia">
							<span class="help-block">Altere a sua fotografia</span>
							</br>
						</div>
					</fieldset>

					<fieldset>
						<legend>Palavra-Passe</legend>
						<div class="col-lg-6">
							<label for="nome" title="Introduza a nova palavra-passe">Nova Palavra-Passe</label>
							<input type="password" class="form-control" placeholder="Nova palavra-passe" title="Introduza a nova palavra-passe" id="name">
							<span class="help-block">Introduza a nova palavra-passe</span>
							<label	for="nome" title="Confirme a nova palavra-passe">Confirme Palavra-Passe</label>
							<input type="password" class="form-control" placeholder="Nova palavra-passe" title="Confirme a nova palavra-passe" id="name">
							<span class="help-block">Confirme a nova palavra-passe</span>
							<label for="nome" title="Palavra-Passe Atual">Palavra-Passe Atual</label>
							<input type="password" class="form-control" placeholder="Palavra-Passe Atual" title="Palavra-Passe Atual" id="name">
							<span class="help-block">Introduza a Palavra-Passe Atual</span>
							<button type="submit" class="btn btn-lg btn-primary">Guardar</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /container -->

<?php } ?>