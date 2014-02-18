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
				<li><a href="?page=customer">Clientes</a></li>
				<li class="active">Ver</li>
			</ol>

			<div class="page-header">
				<h1>Ver Cliente</h1>
			</div>
			<p class="lead">Ver os dados do Cliente.</p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend> Dados do Cliente </legend>
						<div class="col-lg-6">
							<label for="num" title="Introduza o número do Cliente">Número do Cliente</label>
							<p class="form-control-static">[Número do Cliente]</p>
							</br> <label for="nome" title="Altere o nome do Cliente">Nome</label>
							<p class="form-control-static">[Nome do Cliente]</p>
							</br> <label for="nome" title="Altere o sexo do Cliente">Sexo</label>
							<p class="form-control-static">[Masculino]</p>
							</br> <label for="nome" title="Altere o NIC do Cliente">NIC</label>
							<p class="form-control-static">[*********]</p>
							</br> <label for="nome" title="Altere o profissão do Cliente">Profissão</label>
							<p class="form-control-static">[Taberneiro]</p>
							</br> <label for="nome" title="Altere o Estado Civil do Cliente">Estado Civil</label>
							<p class="form-control-static">[Viuvo]</p>
							</br> <label for="nome" title="Altere a morada do Cliente">Morada</label>
							<p class="form-control-static">[Rua Antonio Cunha 6300-069 Guarda]</p>
							</br> <label for="email" title="Altere o Email do Cliente">Email</label>
							<p class="form-control-static">[.....@hotmail.com]</p>
							</br> <label for="nome" title="Altere o telefone do Cliente">Telefone</label>
							<p class="form-control-static">[235058745]</p>
							</br> <label for="nome" title="Altere o Telemovel do Cliente">Telemovel</label>
							<p class="form-control-static">[925647895]</p>
							</br> <label for="email" title="Altere as observações do Cliente">Observações</label>
							<p class="form-control-static">[Observações do Cliente]</p>
							</br>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>