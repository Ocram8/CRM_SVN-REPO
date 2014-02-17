<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Insert New Worker Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_worker_insert_text_1;?></a></li>
				<li><a href="?page=worker"><?php echo $lang_worker_insert_text_2;?></a></li>
				<li class="active"><?php echo $lang_worker_insert_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_worker_insert_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_worker_insert_text_5;?></p>

			<div class="col-lg-10">

				<form action="">
					<fieldset>
						<legend><?php echo $lang_worker_insert_text_6;?></legend>

						<div class="col-lg-6">
							<label for="num" title=""><?php echo $lang_worker_insert_text_7;?></label>
							<p class="form-control-static">[ToDo] ID</p>
							</br> 
							<label for="nome" title="Introduza o nome do funcionário"><?php echo $lang_worker_insert_text_8;?></label> 
							<input type="text" class="form-control" placeholder="<?php echo $lang_worker_insert_placeholder_9;?>" title="<?php echo $lang_worker_insert_title_10;?>" id="name">
							<span class="help-block"><?php echo $lang_worker_insert_text_11;?></span> 
							</br> 
							<label for="email" title="Introduza o correiro eletrónico do funcionário"><?php echo $lang_worker_insert_text_12;?></label>
							<input type="email" class="form-control" placeholder="<?php echo $lang_worker_insert_placeholder_13;?>" title="<?php echo $lang_worker_insert_title_14;?>" id="email">
							<span class="help-block"><?php echo $lang_worker_insert_text_15;?></span>
							</br> <label for="inputfile" title="Introduza uma fotografia do funcionário"><?php echo $lang_worker_insert_text_16;?></label>
							</br> <input type="file" id="inputfile" title="<?php echo $lang_worker_insert_title_17;?>">
							<span class="help-block"><?php echo $lang_worker_insert_text_18;?></span>
							</br></br>
						</div>
					</fieldset>

					<fieldset>
						<legend><?php echo $lang_worker_insert_text_19;?></legend>
						<span class="help-block"><?php echo $lang_worker_insert_text_20;?></span>
						<table class="table table-striped table-hover">
							<tr>
								<th></th>
								<th><?php echo $lang_worker_insert_text_21;?></th>
								<th><?php echo $lang_worker_insert_text_22;?></th>
								<th><?php echo $lang_worker_insert_text_23;?></th>
							</tr>

							<tr>
								<th><?php echo $lang_worker_insert_text_24;?><i lang="en-uk"><?php echo $lang_worker_insert_text_25;?></i></th>
								<td><input type="checkbox" id="gli" value="gli"></td>
								<td><input type="checkbox" id="gle" value="gle"></td>
								<td><input type="checkbox" id="gld" value="gld"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_insert_text_26;?></th>
								<td><input type="checkbox" id="gci" value="gci"></td>
								<td><input type="checkbox" id="gce" value="gce"></td>
								<td><input type="checkbox" id="gcd" value="gcd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_insert_text_27;?></th>
								<td><input type="checkbox" id="gcpi" value="gcpi"></td>
								<td><input type="checkbox" id="gcpe" value="gcpe"></td>
								<td><input type="checkbox" id="gcpd" value="gcpd"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_insert_text_28;?></th>
								<td><input type="checkbox" id="gei" value="gei"></td>
								<td><input type="checkbox" id="gee" value="gee"></td>
								<td><input type="checkbox" id="ged" value="ged"></td>
							</tr>

							<tr>
								<th><?php echo $lang_worker_insert_text_29;?></th>
								<td><input type="checkbox" id="gfi" value="gfi"></td>
								<td><input type="checkbox" id="gfe" value="gfe"></td>
								<td><input type="checkbox" id="gfd" value="gfd"></td>
							</tr>
						</table>
					</fieldset>
					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_worker_insert_link_30;?></button>
				</form>
			</div>
		</div>
	</div>
	<hr>
</div>
<!--/.container-->

<?php } ?>