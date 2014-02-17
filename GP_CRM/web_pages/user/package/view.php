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
				<li class="active">Ver</li>
			</ol>

			<div class="page-header">
				<h1>Ver Encomenda</h1>
			</div>
			<p class="lead">Ver os dados da encomenda.</p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend> Dados da Encomenda </legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial">Número da encomenda</label>
							<p class="form-control-static">[Número da encomenda]</p>
							</br> <label for="nome" title="Altere o nome da campanha">Nome Cliente</label>
							<p class="form-control-static">[Nome do cliente]</p>
							</br> <label for="dataie" title="Altere a data de início da encomenda">Data de encomenda</label>
							<p class="form-control-static">[Data da encomenda]</p>
							</br> <label for="time" title="Altere a hora de início da encomenda">Hora</label>
							<p class="form-control-static">[Hora da encomenda]</p>
							</br> <label for="datafe" title="Altere a data de entrega da encomenda">Data de entrega</label>
							<p class="form-control-static">[Data entrega]</p>
							</br> <label for="des" title="Altere as descrições da encomenda">Descrição</label>
							<p class="form-control-static">[Descrição]</p>
							</br> <label for="est" title="Altere o estado da encomenda">Estado da encomenda</label></br> <input type="radio" name="est" value="pen" disabled> Pendente</br> <input type="radio" name="est" value="pro" checked disabled> Processamento</br> <input type="radio" name="est" value="fin" disabled>
							Finalizado</br> </br>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>