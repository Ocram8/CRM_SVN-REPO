<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Update Worker Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_worker_update_text_1;?></a></li>
				<li><a href="?page=worker"><?php echo $lang_worker_update_text_2;?></a></li>
				<li class="active"><?php echo $lang_worker_update_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_worker_update_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_worker_update_text_5;?></p>

			<div class="col-lg-10">

				<form action="">
					<fieldset>
						<legend>
							<?php echo $lang_worker_update_text_6;?>
						</legend>

						<div class="col-lg-8">
							<label for="nome"><?php echo $lang_worker_update_text_7;?></label>
							<p class="form-control-static">[ToDo] ID</p>
							<br>
						</div>

						<div class="col-lg-8">
							<label for="nome"><?php echo $lang_worker_update_text_8;?></label>
							<p class="form-control-static">[ToDo] Nome do funcionário</p>
							<br>
						</div>

						<div class="col-lg-6">
							<label for="email" title="Introduza o correiro eletrónico do funcionário"><?php echo $lang_worker_update_text_9;?></label>
							<p class="form-control-static">
								<a href="mailto:Correiro eletrónico do funcionário">[ToDo] Correiro eletrónico do funcionário</a>
							</p>
							<br>
						</div>

						<div class="col-lg-8">
							<label for="inputfile" title="Introduza uma fotografia do funcionário"><?php echo $lang_worker_update_text_10;?></label>
							<br>
							<img src="..." alt="[ToDo] Imagem" class="img-thumbnail"> </br> </br>
						</div>
					</fieldset>

					<fieldset>
						<legend>
							<?php echo $lang_worker_update_text_11;?>
						</legend>

						<span class="help-block"><?php echo $lang_worker_update_text_12;?></span>

						<table class="table table-striped table-hover">
							<tr>
								<th></th>
								<th><?php echo $lang_worker_update_text_13;?></th>
								<th><?php echo $lang_worker_update_text_14;?></th>
								<th><?php echo $lang_worker_update_text_15;?></th>
							</tr>

							<tr>
								<th><?php echo $lang_worker_update_text_16;?><i lang="en-uk"><?php echo $lang_worker_update_text_17;?></i></th>
								<td><input type="checkbox" id="gli" value="gli"></td>
								<td><input type="checkbox" id="gle" value="gle"></td>
								<td><input type="checkbox" id="gld" value="gld"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_update_text_18;?></th>
								<td><input type="checkbox" id="gci" value="gci"></td>
								<td><input type="checkbox" id="gce" value="gce"></td>
								<td><input type="checkbox" id="gcd" value="gcd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_update_text_19;?></th>
								<td><input type="checkbox" id="gcpi" value="gcpi"></td>
								<td><input type="checkbox" id="gcpe" value="gcpe"></td>
								<td><input type="checkbox" id="gcpd" value="gcpd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_update_text_20;?></th>
								<td><input type="checkbox" id="gei" value="gei"></td>
								<td><input type="checkbox" id="gee" value="gee"></td>
								<td><input type="checkbox" id="ged" value="ged"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_update_text_21;?></th>
								<td><input type="checkbox" id="gfi" value="gfi"></td>
								<td><input type="checkbox" id="gfe" value="gfe"></td>
								<td><input type="checkbox" id="gfd" value="gfd"></td>
							</tr>
						</table>
					</fieldset>
					</br>

					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_worker_update_link_22;?></button>
				</form>
			</div>
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<hr>
</div>
<!--/.container-->

<?php } ?>