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
				<li class="active">Interações</li>
			</ol>

			<div class="page-header">
				<h1>Gestão de Interações</h1>
			</div>
			<p class="lead">O módulo de gestão de interações tem como principal funcionalidade gerir toda a informação de contacto relacionado com os clientes</p>

			<hr>

			<fieldset>
				<p class="lead">Agendamentos</p>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">
						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only">Pesquisar</label> <input type="text" class="form-control input-sm" placeholder="Pesquisar">
							</div>
							<div class="form-group">
								<label class="sr-only">Pesquisar1</label> <select class="form-control input-sm">
									<option>Número</option>
									<option selected>Nome</option>
									<option>Motivo</option>
								</select>
							</div>


							<div class="form-group">
								<label class="sr-only">Data de início</label> <input type="date" class="form-control input-sm" placeholder="Data de início" title="Data de início da interação">
							</div>

							<button type="submit" class="btn btn-default btn-sm" title="Pesquisar">
								<span class="glyphicon glyphicon-search"></span> Pesquisar
							</button>
						</form>
					</div>

				</div>

			</fieldset>

			<br>
			<div>
				<table class="table table-hover">
					<tr>
						<th>Número</th>
						<th>Nome</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Motivo</th>
						<th>Iniciar</th>
					</tr>

					<tr>
						<td>1</td>
						<td>Tó Manel</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>Coisas do tempo</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Zé Marco</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>fosforos</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Luís Costa</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>ta má</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Tomé Rama</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>o gonçalo é mau cozinheiro</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Manuel Silva</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>ovo estrelado</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
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
			<hr>

			<div>
				<fieldset>
					<p class="lead">Contactos</p>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">
							<form class="form-inline" role="form">
								<div class="form-group">
									<label class="sr-only">Pesquisar</label> <input type="text" class="form-control input-sm" placeholder="Pesquisar">
								</div>
								<div class="form-group">
									<label class="sr-only">Pesquisar1</label> <select class="form-control input-sm">
										<option>Número</option>
										<option selected>Nome</option>
										<option>Motivo</option>
									</select>
								</div>

								<div class="form-group">
									<label class="sr-only">Data de início</label> <input type="date" class="form-control input-sm" placeholder="Data de início" title="Data de início da interação">
								</div>

								<button type="submit" class="btn btn-default btn-sm" title="Pesquisar">
									<span class="glyphicon glyphicon-search"></span> Pesquisar
								</button>
							</form>
						</div>

					</div>

				</fieldset>
				<hr>

				<table class="table table-hover">
					<tr>
						<th>Número</th>
						<th>Nome</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Motivo</th>
						<th>Iniciar</th>
					</tr>

					<tr>
						<td>1</td>
						<td>José Mota</td>
						<td>dd/mm/aaaa</td>
						<td>hh:mm</td>
						<td>tom3 faz barulho</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Cliente X</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>chegou e nao disse nada</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Cliente Y</td>
						<td>dd/mm/aaaa</td>
						<td>00:00</td>
						<td>paletes</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Este Senhor</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>tesouras</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Tuxa</td>
						<td>dd/mm/aaaa</td>
						<td>12:34</td>
						<td>trabalho atrasado</td>
						<td><a href="./receive.html"><span class="glyphicon glyphicon-play"></span> Iniciar</a></td>
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

	<hr>
	<a class="btn btn-default btn-sm" href="javascript:popUp('user/interactions/initiate.php')" title="Efetuar chamada"> <span class="glyphicon glyphicon-resize-full"></span> Iniciar Interação
	</a> <a class="btn btn-default btn-sm" href="user/interactions/receive.php" title="Receber chamada"> <span class="glyphicon glyphicon-resize-small"></span> Receber interação
	</a>
</div>
<!--/.container-->

<?php } ?>