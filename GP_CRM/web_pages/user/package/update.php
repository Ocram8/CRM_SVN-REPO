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
				<li><a href="./index.html">Encomendas</a></li>
				<li class="active">Alterar</li>
			</ol>

			<div class="page-header">
				<h1>Alterar Encomenda</h1>
			</div>
			<p class="lead">Altere os dados da encomenda.</p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend> Dados da Encomenda </legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial">Número da encomenda</label>
							<p class="form-control-static">[Número da encomenda]</p>
							</br> <label for="nome" title="Altere o nome da campanha">Nome Cliente</label> <input type="text" class="form-control" placeholder="Nome do cliente" title="Altere o nome do cliente" id="name" value="[Nome do cliente]"> <span class="help-block">Altere o nome do cliente</span> </br> <label
								for="dataie" title="Altere a data de início da encomenda">Data de encomenda</label> <input type="date" class="form-control" placeholder="Data de início da encomenda" title="Altere a data de início da encomenda" id="dataie" value="1993-09-11"> <span class="help-block">Altere a data de
								início da encomenda</span> </br> <label for="time" title="Altere a hora de início da encomenda">Hora</label> <input type="time" class="form-control" placeholder="Hora de início da encomenda" title="Altere a hora de início da encomenda" id="time" value="08:30"> <span class="help-block">Altere
								a hora de início da encomenda</span> </br> <label for="datafe" title="Altere a data de entrega da encomenda">Data de entrega</label> <input type="date" class="form-control" placeholder="Data de entrega da encomenda" title="Altere a data de entrega da encomenda" id="datafe"
								value="2013-11-24"> <span class="help-block">Altere a data de entrega da encomenda</span> </br> <label for="des" title="Altere as descrições da encomenda">Descrição</label>
							<textarea class="form-control" rows="3" title="Altere as descrições da encomenda">[Descrições da encomenda]</textarea>
							<span class="help-block">Introduza as descrições da encomenda</span> </br> <label for="est" title="Altere o estado da encomenda">Estado da encomenda</label></br> <input type="radio" name="est" value="can"> Cancelado</br> <input type="radio" name="est" value="pen" checked> Pendente</br> <input
								type="radio" name="est" value="pro"> Processamento</br> <input type="radio" name="est" value="fin"> Finalizado</br> </br>

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