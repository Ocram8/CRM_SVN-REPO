<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- View Worker Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_worker_view_text_1;?></a></li>
				<li><a href="?page=worker"><?php echo $lang_worker_view_text_2;?></a></li>
				<li class="active"><?php echo $lang_worker_view_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_worker_view_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_worker_view_text_5;?></p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend>
								<?php echo $lang_worker_view_text_6;?>
							</legend>

						<div class="col-lg-8">
							<label for="nome" title=""><?php echo $lang_worker_view_text_7;?></label> <span class="help-block">[ToDo] Nome do funcionário</span> </br>
						</div>

						<div class="col-lg-6">
							<label for="email" title=""><?php echo $lang_worker_view_text_8;?></label> <span class="help-block">[ToDo] Correiro eletrónico do funcionário</span>
							</br> </br>
							<img src="..." alt="[ToDo] Imagem" class="img-thumbnail"> </br> </br>
						</div>
					</fieldset>

					<fieldset>
						<legend>
								<?php echo $lang_worker_view_text_9;?>
							</legend>

						<span class="help-block"><?php echo $lang_worker_view_text_10;?></span>

						<table class="table table-striped table-hover">
							<tr>
								<th></th>
								<th><?php echo $lang_worker_view_text_11;?></th>
								<th><?php echo $lang_worker_view_text_12;?></th>
								<th><?php echo $lang_worker_view_text_13;?></th>
							</tr>

							<tr>
								<th><?php echo $lang_worker_view_text_14;?><i lang="en-uk"><?php echo $lang_worker_view_text_15;?></i></th>
								<td><input type="checkbox" id="gli" value="gli"></td>
								<td><input type="checkbox" id="gle" value="gle"></td>
								<td><input type="checkbox" id="gld" value="gld"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_view_text_16;?></th>
								<td><input type="checkbox" id="gci" value="gci"></td>
								<td><input type="checkbox" id="gce" value="gce"></td>
								<td><input type="checkbox" id="gcd" value="gcd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_view_text_17;?></th>
								<td><input type="checkbox" id="gcpi" value="gcpi"></td>
								<td><input type="checkbox" id="gcpe" value="gcpe"></td>
								<td><input type="checkbox" id="gcpd" value="gcpd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_view_text_18;?></th>
								<td><input type="checkbox" id="gei" value="gei"></td>
								<td><input type="checkbox" id="gee" value="gee"></td>
								<td><input type="checkbox" id="ged" value="ged"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_view_text_19;?></th>
								<td><input type="checkbox" id="gfi" value="gfi"></td>
								<td><input type="checkbox" id="gfe" value="gfe"></td>
								<td><input type="checkbox" id="gfd" value="gfd"></td>
							</tr>
						</table>
					</fieldset>
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