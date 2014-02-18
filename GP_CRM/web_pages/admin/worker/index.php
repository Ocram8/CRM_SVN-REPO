<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ 

// 	include '../../../poo/dao/dao_funcionario.class.php';
// 	include '../../../poo/objects/funcionario.class.php';
?>

<!-- Worker Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_worker_index_text_1;?></a></li>
				<li class="active"><?php echo $lang_worker_index_text_2;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_worker_index_text_3;?></h1>
			</div>

			<p class="lead"><?php echo $lang_worker_index_text_4;?></p>
			<hr>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-8" style="width: 600px">
					<form class="form-inline" role="form" action="?page=worker" method="post">
						<div class="form-group">
							<label class="sr-only">Pesquisar</label> <input type="email" class="form-control input-sm" placeholder="<?php echo $lang_worker_index_placeholder_5;?>">
						</div>
						<div class="form-group">
							<label class="sr-only">Permissões</label> <select class="form-control input-sm">
								<option><?php echo $lang_worker_index_text_6;?></option>
								<option selected><?php echo $lang_worker_index_text_7;?></option>
								<option><?php echo $lang_worker_index_text_8;?></option>
							</select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="exampleInputPassword2">Permissões</label> <select class="form-control input-sm">
								<option><?php echo $lang_worker_index_text_9;?></option>
								<option selected><?php echo $lang_worker_index_text_10;?></option>
								<option><?php echo $lang_worker_index_text_11;?></option>
							</select>
						</div>
						<button type="submit" class="btn btn-default btn-sm" title="<?php echo $lang_worker_index_title_12;?>">
							<span class="glyphicon glyphicon-search"></span> <?php echo $lang_worker_index_link_13;?>
						</button>
					</form>
				</div>
				<div class="col-xs-6 col-md-4" style="width: 100px">
					<a class="btn btn-default btn-sm" href="?page=new_worker" title="<?php echo $lang_worker_index_title_14;?>"> <span class="glyphicon glyphicon-plus"></span> <?php echo $lang_worker_index_link_15;?></a>
				</div>
			</div>
			<br>
			<div>
				<table class="table table table-hover">
					<tr>
						<th><?php echo $lang_worker_index_text_16;?></th>
						<th><?php echo $lang_worker_index_text_17;?></th>
						<th><?php echo $lang_worker_index_text_18;?></th>
						<th><?php echo $lang_worker_index_text_19;?></th>
						<th colspan="3"><?php echo $lang_worker_index_text_20;?></th>
					</tr>
					
					<?php 
						$worker_list = array("asd","zxc","dfg","fgh","cas","ogd","vfa");
// 						$get_all_funcionarios = get_all_funcionarios();
						
						for($i=0; $i<2; $i++)
						{
							echo '<tr class="success">'; //class="success" or class="danger"
							echo '<td>'; echo $i+1; echo '</td>';
							echo "<td>$worker_list[$i]</td>";
							echo '<td><a href="mailto:'.$worker_list[$i].'@email.com" title="Enviar e-mail a '.$worker_list[$i].'">'.$worker_list[$i].'@email.com</a></td>';
							echo '<td>[ToDo] Permissões</td>';
							echo '<td><a href="?page=view_worker"><span class="glyphicon glyphicon-eye-open"></span>'.$lang_worker_index_link_21.'</a></td>';
							echo '<td><a href="?page=update_worker"><span class="glyphicon glyphicon-edit"></span>'.$lang_worker_index_link_22.'</a></td>';
							echo '<td><a href="?page=worker"><span class="glyphicon glyphicon-ban-circle"></span>'.$lang_worker_index_link_23.'</a></td>';
							echo '</tr>';
						}
					?>
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
			<div class="btn-group">
				<a class="btn btn-default btn-sm" href="#" title="<?php echo $lang_worker_index_title_25;?>"><span class="glyphicon glyphicon-import"></span> <?php echo $lang_worker_index_link_26;?></a> <a class="btn btn-default btn-sm" href="#" title="<?php echo $lang_worker_index_title_27;?>"><span
					class="glyphicon glyphicon-export"></span>
					<?php echo $lang_worker_index_link_28;?></a>
			</div>
		</div>
	</div>
	<hr>
</div>
<!--/.container-->

<?php } ?>