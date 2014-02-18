<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Update Campaigns Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_user_campaignsupdate_text_1;?></a></li>
				<li><a href="?page=campaigns"><?php echo $lang_user_campaignsupdate_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_campaignsupdate_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_campaignsupdate_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_user_campaignsupdate_text_5;?></p>

			<div class="col-lg-10">
				<form action="">
					<fieldset>
						<legend><?php echo $lang_user_campaignsupdate_text_6;?></legend>

						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial"><?php echo $lang_user_campaignsupdate_text_7;?></label> <p class="form-control-static">[Número da campanha]</p> </br>
							<label for="nome" title="Altere o nome da campanha"><?php echo $lang_user_campaignsupdate_text_8;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_campaignsupdate_placeholder_9;?>" title="<?php echo $lang_user_campaignsupdate_title_10;?>" id="name"> <span class="help-block"><?php echo $lang_user_campaignsupdate_text_11;?></span> </br>
							<label for="datai" title="Altere a data de início da campanha"><?php echo $lang_user_campaignsupdate_text_12;?></label> <input type="date" class="form-control" title="<?php echo $lang_user_campaignsupdate_title_13;?>" id="email"> <span class="help-block"><?php echo $lang_user_campaignsupdate_text_14;?></span> </br>
							<label for="dataf" title="Altere a data de fim da campanha"><?php echo $lang_user_campaignsupdate_text_15;?></label> <input type="date" class="form-control" title="<?php echo $lang_user_campaignsupdate_title_16;?>" id="email"> <span class="help-block"><?php echo $lang_user_campaignsupdate_text_17;?></span> </br>
							<label for="obs" title="Altere as observações da campanha"><?php echo $lang_user_campaignsupdate_text_18;?></label> <textarea class="form-control" rows="3" placeholder="<?php echo $lang_user_campaignsupdate_placeholder_19;?>" title="<?php echo $lang_user_campaignsupdate_title_20;?>"></textarea> <span class="help-block"><?php echo $lang_user_campaignsupdate_text_21;?></span> </br>
						</div>
					</fieldset>
					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_user_campaignsupdate_link_29;?></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>