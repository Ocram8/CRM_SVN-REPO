<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Campaigns Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_user_campaignsindex_text_1;?></a></li>
				<li class="active"><?php echo $lang_user_campaignsindex_text_2;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_campaignsindex_text_3;?></h1>
			</div>
			<p class="lead"><?php echo $lang_user_campaignsindex_text_4;?></p>

			<hr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only">Pesquisar</label> <input type="text" class="form-control input-sm" placeholder="<?php echo $lang_user_campaignsindex_placeholder_5;?>">
						</div>

						<div class="form-group">
							<label class="sr-only">Pesquisar1</label> <select class="form-control input-sm">
								<option><?php echo $lang_user_campaignsindex_title_6;?></option>
								<option selected><?php echo $lang_user_campaignsindex_title_7;?></option>
							</select>
						</div>

						<div class="form-group">
							<label class="sr-only">Data de inicio</label> <input type="date" class="form-control input-sm" title="<?php echo $lang_user_campaignsindex_title_8;?>">
						</div>
						<div class="form-group">
							<label class="sr-only">Data de fim</label> <input type="date" class="form-control input-sm" title="<?php echo $lang_user_campaignsindex_title_9;?>">
						</div>
						<button type="submit" class="btn btn-default btn-sm" title="<?php echo $lang_user_campaignsindex_title_12;?>">
							<span class="glyphicon glyphicon-search"></span><?php echo $lang_user_campaignsindex_link_13;?>
						</button>
					</form>
				</div>
				<div class="col-xs-6 col-md-4" style="width: 100px">
					<a class="btn btn-default btn-sm" href="?page=new_campaign" title="<?php echo $lang_user_campaignsindex_title_10;?>"><span class="glyphicon glyphicon-plus"></span><?php echo $lang_user_campaignsindex_link_11;?></a>
				</div>
			</div>
			<br>
			<div>
				<table class="table table-hover">
					<tr>
						<th><?php echo $lang_user_campaignsindex_text_14;?></th>
						<th><?php echo $lang_user_campaignsindex_text_15;?></th>
						<th><?php echo $lang_user_campaignsindex_text_16;?></th>
						<th><?php echo $lang_user_campaignsindex_text_17;?></th>
						<th colspan="3"><?php echo $lang_user_campaignsindex_text_18;?></th>
					</tr>

					<tr class="success">
						<td>1</td>
						<td>Campanha 1</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="?page=view_campaign"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="?page=update_campaign"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>2</td>
						<td>Campanha 2</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>3</td>
						<td>Campanha 3</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>4</td>
						<td>Campanha 4</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ok"></span> Reativar</a></td>
					</tr>
					<tr class="success">
						<td>5</td>
						<td>Campanha 5</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>6</td>
						<td>Campanha 6</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ok"></span> Reativar</a></td>
					</tr>
					<tr class="success">
						<td>7</td>
						<td>Campanha 7</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>8</td>
						<td>Campanha 8</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>9</td>
						<td>Campanha 9</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>10</td>
						<td>Campanha 10</td>
						<td>dd/mm/aaaa</td>
						<td>dd/mm/aaaa</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ok"></span> Reativar</a></td>
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