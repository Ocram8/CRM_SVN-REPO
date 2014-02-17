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
				<li><a href="./index.html">Clientes</a></li>
				<li class="active">Inserir</li>
			</ol>

			<div class="page-header">
				<h1>Inserir Novo Cliente</h1>
			</div>
			<p class="lead">Introduza os dados do novo Cliente.</p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend> Dados do Cliente </legend>
						<div class="col-lg-6">

							<label for="nome" title="Introduza o nome do Cliente">Nome</label> <input type="text" class="form-control" placeholder="Nome do Cliente" title="Introduza o nome do Cliente" id="name"> <span class="help-block">Introduza o nome do Cliente</span> </br> <label for="email"
								title="Introduza o Sexo do Cliente">Sexo</label> <select class="form-control input-sm">
								<option selected></option>
								<option>Masculino</option>
								<option>Feminino</option>

							</select> <span class="help-block">Introduza o Sexo do Cliente</span> </br> <label for="email" title="Introduza o NIC do Cliente">NIC</label> <input type="text" class="form-control" placeholder="NIC" title="Introduza o BI do Cliente" id="email"> <span class="help-block">Introduza o NIC do
								Cliente</span> </br> <label for="email" title="Introduza a Profissão do Cliente">Profissão</label> <input type="text" class="form-control" placeholder="Profissão" title="Introduza a Profissão do Cliente" id="email"> <span class="help-block">Introduza a Profissão do Cliente</span> </br>

							<label for="email" title="Introduza o Estado Civil do Cliente">Estado Civil</label> <select class="form-control input-sm">
								<option selected></option>
								<option>Solteiro</option>
								<option>Casado</option>
								<option>Divorciado</option>
								<option>Viuvo</option>
							</select> <span class="help-block">Introduza o Estado Civil do Cliente</span> </br> <label for="email" title="Introduza a Morada do cliente">Morada</label> <input type="text" class="form-control" placeholder="Morada" title="Introduza a Morada do cliente" id="email"> <span class="help-block">Introduza
								a Morada do Cliente</span> </br> <label for="email" title="Introduza o email do cliente">Email</label> <input type="text" class="form-control" placeholder="Email" title="Introduza o mail do cliente" id="email"> <span class="help-block">Introduza o email do Cliente</span> </br> <label
								for="email" title="Introduza o Telefone do Cliente">Telefone</label> <input type="tel" class="form-control" placeholder="Telefone" title="Introduza o Telefone do Cliente" id="email"> <span class="help-block">Introduza o Telefone do Cliente</span> </br> <label for="email"
								title="Introduza o Telemovel do Cliente">Telemovel</label> <input type="tel" class="form-control" placeholder="Telemovel" title="Introduza o Telemovel do Cliente" id="email"> <span class="help-block">Introduza o Telemovel do Cliente</span> </br> <label for="email"
								title="Introduza as observações do Cliente">Observações</label>
							<textarea class="form-control" rows="3" title="Introduza as observações do Cliente"></textarea>
							<span class="help-block">Introduza as observações do Cliente</span> </br>
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
