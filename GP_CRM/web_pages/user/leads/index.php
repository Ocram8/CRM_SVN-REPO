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
				<li><a href="?page=home"><?php echo $lang_user_leadsindex_text_1;?></a></li>
				<li class="active"><i lang="en-uk"><?php echo $lang_user_leadsindex_text_2?></i></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_leadsindex_text_3;?><i lang="en-uk"><?php echo $lang_user_leadsindex_text_4;?></i>
				</h1>
			</div>
			<p class="lead"><?php echo $lang_user_leadsindex_text_5;?><i lang="en-uk"><?php echo $lang_user_leadsindex_text_4;?></i><?php echo $lang_user_leadsindex_text_6;?></p>

			<hr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only">Pesquisar</label> <input type="text" class="form-control input-sm" placeholder="<?php echo $lang_user_leadsindex_placeholder_7;?>">
						</div>
						<div class="form-group">
							<label class="sr-only">Pesquisar1</label> <select class="form-control input-sm">
								<option><?php echo $lang_user_leadsindex_title_8;?></option>
								<option selected><?php echo $lang_user_leadsindex_title_9;?></option>
							</select>
						</div>
						<div class="form-group">
							<label class="sr-only">iniciolead</label> <input type="date" class="form-control input-sm" title="<?php echo $lang_user_leadsindex_title_10;?>">
						</div>
						<div class="form-group">
							<label class="sr-only">fimlead</label> <input type="date" class="form-control input-sm" title="<?php echo $lang_user_leadsindex_title_11;?>">
						</div>
						<button type="submit" class="btn btn-default btn-sm" title="<?php echo $lang_user_leadsindex_title_24?>">
							<span class="glyphicon glyphicon-search"></span><?php echo $lang_user_leadsindex_link_23?>
						</button>
					</form>
				</div>
				<div class="col-xs-6 col-md-4" style="width: 100px">
					<a class="btn btn-default btn-sm" href="?page=new_lead" title="<?php echo $lang_user_leadsindex_title_12;?>"><span class="glyphicon glyphicon-plus"></span><?php echo $lang_user_leadsindex_link_13;?></a>
				</div>
			</div>
			<br>
			<div>
				<table class="table table-hover">
					<tr>
						<th><?php echo $lang_user_leadsindex_text_14;?></th>
						<th><?php echo $lang_user_leadsindex_text_15;?></th>
						<th><?php echo $lang_user_leadsindex_text_16;?></th>
						<th><?php echo $lang_user_leadsindex_text_17;?></th>
						<th colspan="3"><?php echo $lang_user_leadsindex_text_18;?></th>
					</tr>

					<tr class="success">
						<td>1</td>
						<td>Lead 1</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="?page=view_lead"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="?page=update_lead"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>2</td>
						<td>Lead 2</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>3</td>
						<td>Lead 3</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>4</td>
						<td>Lead 4</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ok"></span> Reativar</a></td>
					</tr>
					<tr class="success">
						<td>5</td>
						<td>Lead 5</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>6</td>
						<td>Lead 6</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ok"></span> Reativar</a></td>
					</tr>
					<tr class="success">
						<td>7</td>
						<td>Lead 7</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>8</td>
						<td>Lead 8</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="success">
						<td>9</td>
						<td>Lead 9</td>
						<td>**********</td>
						<td>**********</td>
						<td><a href="./view.html"><span class="glyphicon glyphicon-eye-open"></span> Ver</a></td>
						<td><a href="./update.html"><span class="glyphicon glyphicon-edit"></span> Alterar</a></td>
						<td><a href=""><span class="glyphicon glyphicon-ban-circle"></span> Desativar</a></td>
					</tr>
					<tr class="danger">
						<td>10</td>
						<td>Lead 10</td>
						<td>**********</td>
						<td>**********</td>
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