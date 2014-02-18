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
				<li><a href="?page=interactions">Interações</a></li>
				<li class="active">Receber</li>
			</ol>

			<div class="page-header">
				<h1>Em chamada...</h1>
			</div>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend> Dados do Cliente </legend>

						<div class="col-lg-6">
							<label for="num" title="Ver o número do Cliente">Número do Cliente</label>
							<p class="form-control-static">[Número do Cliente]</p>
							</br> <label for="nome" title="Ver o nome do Cliente">Nome</label>
							<p class="form-control-static">[Nome do Cliente]</p>
							</br> <label for="email" title="Ver o NIC do Cliente">NIC</label>
							<p class="form-control-static">[NIC]</p>
							</br> <label for="email" title="Ver o Email do Cliente">Email</label>
							<p class="form-control-static">[Data de fim da campanha]</p>
							</br> <label for="email" title="Ver as observações do Cliente">Observações</label>
							<p class="form-control-static">[Observações do Cliente]</p>
							</br>
						</div>
					</fieldset>
				</form>
			</div>

			<hr>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend> Dados da Encomenda </legend>

						<div class="col-lg-6">
							<label for="num" title="Ver o número da encomenda">Número da encomenda</label>
							<p class="form-control-static">[Número da encomenda]</p>
							</br> <label for="dataie" title="Ver a data de início da encomenda">Data de encomenda</label>
							<p class="form-control-static">[Data da encomenda]</p>
							</br> <label for="time" title="Ver a hora de início da encomenda">Hora</label>
							<p class="form-control-static">[Hora da encomenda]</p>
							</br> <label for="datafe" title="Ver a data de entrega da encomenda">Data de entrega</label>
							<p class="form-control-static">[Data entrega]</p>
							</br> <label for="des" title="Ver as descrições da encomenda">Descrição</label>
							<p class="form-control-static">[Descrição]</p>
							</br> <label for="est" title="Ver o estado da encomenda">Estado da encomenda</label></br> <input type="radio" name="est" value="pen" disabled> Pendente</br> <input type="radio" name="est" value="pro" checked disabled> Processamento</br> <input type="radio" name="est" value="fin" disabled>
							Finalizado</br> </br>

						</div>

					</fieldset>
				</form>
			</div>

			<div class="col-lg-10">
				<fieldset>
					<legend> Dados da Chamada </legend>
					<label for="email" title="Introduza as observações da chamada">Observações</label>
					<textarea class="form-control" rows="3" title="Introduza as observações da chamada"></textarea>
					<span class="help-block">Observações chamada</span> 					
					<input type="checkbox" id="cont" value="cont" checked>Deseja voltar a ser contactado? </br> </br> 
					
					<a class="btn btn-default btn-sm" href="?page=new_package" title="Inserir nova interação"><span class="glyphicon glyphicon-plus"></span> Nova encomenda</a> 
					<a class="btn btn-default btn-sm" href="javascript:popUp('?page=success_interaction')" title="Inserir nova interação"><span class="glyphicon glyphicon-earphone"></span> Terminar</a>
				</fieldset>
			</div>

		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>