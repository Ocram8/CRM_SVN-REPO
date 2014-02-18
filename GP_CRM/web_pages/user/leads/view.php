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
				<li><a href="?page=home"><?php echo $lang_user_leadsview_text_1;?></a></li>
				<li><a href="?page=leads"><?php echo $lang_user_leadsview_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_leadsview_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_leadsview_text_5;?><i lang="en-uk"><?php echo $lang_user_leadsview_text_6;?></i></h1>
			</div>
			<p class="lead"><?php echo $lang_user_leadsview_text_5;?><i lang="en-uk"><?php echo $lang_user_leadsview_text_6;?></i></p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend><?php echo $lang_user_leadsview_text_7;?><i lang="en-uk"><?php echo $lang_user_leadsview_text_8;?></i></legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da lead"><?php echo $lang_user_leadsview_text_9;?></label>
							<p class="form-control-static">[Número da lead]</p>
							</br> <label for="nome" title="Altere o nome da lead"><?php echo $lang_user_leadsview_text_10;?></label>
							<p class="form-control-static">[Nome da lead]</p>
							</br> <label for="email" title="Altere a Empresa"><?php echo $lang_user_leadsview_text_11;?></label>
							<p class="form-control-static">[Empresa]</p>
							</br> <label for="email" title="Altere a Origem"><?php echo $lang_user_leadsview_text_12;?></label>
							<p class="form-control-static">[Origem]</p>
							</br> <label for="email" title="Altere as observações da lead"><?php echo $lang_user_leadsview_text_13;?></label>
							<p class="form-control-static">[Observações da lead]</p>
							</br>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>