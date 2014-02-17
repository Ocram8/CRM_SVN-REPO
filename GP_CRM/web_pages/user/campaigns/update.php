<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Update Campaigns Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="../index.html">Painel Principal</a></li>
				<li><a href="./index.html">Campanhas</a></li>
				<li class="active">Alterar</li>
			</ol>

			<div class="page-header">
				<h1>Alterar Campanha</h1>
			</div>
			<p class="lead">Altere os dados da campanha comercial.</p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend> Dados da Campanha </legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial">Número da campanha</label>
							<p class="form-control-static">[Número da campanha]</p>
							</br> <label for="nome" title="Altere o nome da campanha">Nome</label> <input type="text" class="form-control" placeholder="Nome da campanha" title="Altere o nome da campanha" id="name" value="[Nome da campanha]"> <span class="help-block">Altere o nome da campanha</span> </br> <label
								for="datai" title="Altere a data de início da campanha">Data de início</label> <input type="date" class="form-control" placeholder="Data de início da campanha" title="Altere a data de início da campanha" id="email" value="1993-09-11"> <span class="help-block">Altere a data de início da
								campanha</span> </br> <label for="dataf" title="Altere a data de fim da campanha">Data de fim</label> <input type="date" class="form-control" placeholder="Data de fim da campanha" title="Altere a data de fim da campanha" id="email" value="2013-11-24"> <span class="help-block">Altere a data
								de fim da campanha</span> </br> <label for="obs" title="Altere as observações da campanha">Observações</label>
							<textarea class="form-control" rows="3" title="Altere as observações da campanha">[Observações da campanha]</textarea>
							<span class="help-block">Introduza as observações da campanha</span> </br>
						</div>
					</fieldset>
					<button type="submit" class="btn btn-lg btn-primary">Alterar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>