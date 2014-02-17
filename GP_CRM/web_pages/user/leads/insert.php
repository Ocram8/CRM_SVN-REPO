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
				<li><a href="?page=home">Painel Principal</a></li>
				<li><a href="?page=leads">Leads</a></li>
				<li class="active">Inserir</li>
			</ol>

			<div class="page-header">
				<h1>Inserir Nova Lead</h1>
			</div>
			<p class="lead">Introduza os dados do novo lead.</p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend> Dados do Lead </legend>

						<div class="col-lg-6">
							<label for="nome" title="Introduza o nome da campanha">Nome</label> <input type="text" class="form-control" placeholder="Nome da Lead" title="Introduza o nome da lead" id="name"> <span class="help-block">Introduza o nome da Lead</span> </br> <label for="email" title="Introduza a Empresa">Empresa</label>
							<input type="text" class="form-control" placeholder="Empresa" title="Introduza a Empresa" id="email"> <span class="help-block">Introduza a empresa</span> </br> <label for="email" title="Introduza a data de fim da campanha">Origem</label> <input type="text" class="form-control"
								placeholder="Origem" title="Introduza a origem" id="email"> <span class="help-block">Introduza a origem</span> </br> <label for="email" title="Introduza as observações da lead">Observações</label>
							<textarea class="form-control" rows="3" title="Introduza as observações da lead"></textarea>
							<span class="help-block">Introduza as observações da lead</span> </br>

						</div>

					</fieldset>

					</br>

					<button type="submit" class="btn btn-lg btn-primary">Criar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>