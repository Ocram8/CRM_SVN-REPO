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
				<li class="active">Encomendas</li>
			</ol>

			<div class="page-header">
				<h1>Gestão de Encomendas</h1>
			</div>

			<p class="lead">O módulo de gestão de encomendas tem como principal objetivo gerir toda a informação de novas encomendas associadas aos clientes.</p>
			<hr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">

					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only">Pesquisar</label> <input type="email" class="form-control input-sm" placeholder="Pesquisar">
						</div>

						<div class="form-group">
							<label class="sr-only">Permissões</label> <select class="form-control input-sm">
								<option selected>Referência</option>
								<option>Nome Cliente</option>
								<option>Data Encomenda</option>
								<option>Hora</option>
								<option>Data Entrega</option>
							</select>
						</div>

						<div class="form-group">
							<label class="sr-only" for="exampleInputPassword2">Permissões</label> <select class="form-control input-sm">
								<option selected>Todas as encomendas</option>
								<option>Encomendas pendentes</option>
								<option>Encomendas finalizadas</option>
								<option>Encomendas em processamento</option>
							</select>
						</div>

						<button type="submit" class="btn btn-default btn-sm" title="Pesquisar">
							<span class="glyphicon glyphicon-search"></span> Pesquisar
						</button>
					</form>
				</div>
			</div>
			<br>

			<div>
				<table class="table table-striped table-hover">
					<tr>
						<th>Refêrencia</th>
						<th>Data Encomenda</th>
						<th>Hora</th>
						<th>Data Entrega</th>
						<th>Descrição</th>
						<th colspan="2">Opções</th>
					</tr>

					<tr class="active">
						<td>1</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="success">
						<td>2</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="success">
						<td>3</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="warning">
						<td>4</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="success">
						<td>5</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="danger">
						<td>6</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="danger">
						<td>7</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="success">
						<td>8</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="active">
						<td>9</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
					<tr class="success">
						<td>10</td>
						<td>20/11/2013</td>
						<td>11:15</td>
						<td>7/1/2014</td>
						<td>[Texto]</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
					</tr>
				</table>

				<ul class="pagination pagination-sm">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>