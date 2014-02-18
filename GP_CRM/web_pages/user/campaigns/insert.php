<?php
if (!isset($_SESSION['login']))
	header ( "Location: ../../error.php" );
else
{ ?>

<!-- Insert New Campaigns Content -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
			</p>

			<ol class="breadcrumb">
				<li><a href="?page=home"><?php echo $lang_user_campaignsinsert_text_1;?></a></li>
				<li><a href="?page=campaigns"><?php echo $lang_user_campaignsinsert_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_campaignsinsert_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_campaignsinsert_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_user_campaignsinsert_text_5;?></p>

			<div class="col-lg-10">

				<form action="">
					<fieldset>
						<legend><?php echo $lang_user_campaignsinsert_text_6;?></legend>
						<div class="col-lg-6">
							<label for="num_campaign" title="Introduza o número da campanha comercial"><?php echo $lang_user_campaignsinsert_text_7;?></label> <p class="form-control-static">[Número da campanha]</p> </br>
							<label for="nome_campaign" title="Introduza o nome da campanha"><?php echo $lang_user_campaignsinsert_text_8;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_campaignsinsert_placeholder_9;?>" title="<?php echo $lang_user_campaignsinsert_title_10;?>" id="name"> <span class="help-block"><?php echo $lang_user_campaignsinsert_text_11;?></span> </br>
							<label for="datain_campaign" title="Introduza a data de início da campanha"><?php echo $lang_user_campaignsinsert_text_12;?></label> <input type="date" class="form-control" title="<?php echo $lang_user_campaignsinsert_title_13;?>" id="email"> <span class="help-block"><?php echo $lang_user_campaignsinsert_text_14;?></span> </br>
							<label for="datafim_campaign" title="Introduza a data de fim da campanha"><?php echo $lang_user_campaignsinsert_text_15;?></label> <input type="date" class="form-control" title="<?php echo $lang_user_campaignsinsert_title_16;?>" id="email"> <span class="help-block"><?php echo $lang_user_campaignsinsert_text_17;?></span> </br>
							<label for="obs_campaign" title="Introduza as observações da campanha"><?php echo $lang_user_campaignsinsert_text_18;?></label> <textarea class="form-control" rows="3" placeholder="<?php echo $lang_user_campaignsinsert_placeholder_19;?>" title="<?php echo $lang_user_campaignsinsert_title_20;?>"></textarea> <span class="help-block"><?php echo $lang_user_campaignsinsert_text_21;?></span> </br>
						</div>
					</fieldset>

					<fieldset>
						<legend><?php echo $lang_user_campaignsinsert_text_22;?></legend>
						<span class="help-block"><?php echo $lang_user_campaignsinsert_text_23;?><i lang="en-uk"><?php echo $lang_user_campaignsinsert_text_24;?></i><?php echo $lang_user_campaignsinsert_text_25;?>
						</span> <input type="checkbox" id="check" value="toc"><?php echo $lang_user_campaignsinsert_text_26;?><i lang="en-uk"><?php echo $lang_user_campaignsinsert_text_27;?></i></br> <input type="checkbox" id="check" value="toc"><?php echo $lang_user_campaignsinsert_text_28;?></br>
					</fieldset>
					</br>

					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_user_campaignsinsert_link_29;?></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>