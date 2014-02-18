<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- View Campaigns Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_user_campaignsview_text_1;?></a></li>
				<li><a href="?page=campaigns"><?php echo $lang_user_campaignsview_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_campaignsview_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_campaignsview_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_user_campaignsview_text_5;?></p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend><?php echo $lang_user_campaignsview_text_6;?></legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial"><?php echo $lang_user_campaignsview_text_7;?></label> <p class="form-control-static">[Número da campanha]</p> </br>
							<label for="nome" title="Altere o nome da campanha"><?php echo $lang_user_campaignsview_text_8;?></label> <p class="form-control-static">[Nome da campanha]</p> </br>
							<label for="email" title="Altere a data de início da campanha"><?php echo $lang_user_campaignsview_text_9;?></label> <p class="form-control-static">[Data de início da campanha]</p> </br>
							<label for="email" title="Altere a data de fim da campanha"><?php echo $lang_user_campaignsview_text_10;?></label> <p class="form-control-static">[Data de fim da campanha]</p> </br>
							<label for="email" title="Altere as observações da campanha"><?php echo $lang_user_campaignsview_text_11;?></label> <p class="form-control-static">[Observações da campanha]</p> </br>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>