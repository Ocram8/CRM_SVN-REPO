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
				<li><a href="?page=home"><?php echo $lang_user_leadsinsert_text_1;?></a></li>
				<li><a href="?page=leads"><?php echo $lang_user_leadsinsert_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_leadsinsert_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_leadsinsert_text_4;?><i lang="en-uk"><?php echo $lang_user_leadsinsert_text_5;?></i></h1>
			</div>
			<p class="lead"><?php echo $lang_user_leadsinsert_text_6;?><i lang="en-uk"><?php echo $lang_user_leadsinsert_text_7;?></i></p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend><?php echo $lang_user_leadsinsert_text_8;?><i lang="en-uk"><?php echo $lang_user_leadsinsert_text_9;?></i></legend>

						<div class="col-lg-6">
							<label for="nome" title="Introduza o nome da campanha"><?php echo $lang_user_leadsinsert_text_10;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsinsert_placeholder_11;?>" title="<?php echo $lang_user_leadsinsert_title_12;?>" id="name"> <span class="help-block"><?php echo $lang_user_leadsinsert_text_13;?></span> </br>
							<label for="email" title="Introduza a Empresa"><?php echo $lang_user_leadsinsert_text_14;?></label><input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsinsert_placeholder_15;?>" title="<?php echo $lang_user_leadsinsert_title_16;?>" id="email"> <span class="help-block"><?php echo $lang_user_leadsinsert_text_17;?></span> </br>
							<label for="email" title="Introduza a origem"><?php echo $lang_user_leadsinsert_text_18;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsinsert_placeholder_19;?>" title="<?php echo $lang_user_leadsinsert_title_20;?>" id="email"> <span class="help-block"><?php echo $lang_user_leadsinsert_text_21;?></span> </br>
							<label for="email" title="Introduza as observações da lead"><?php echo $lang_user_leadsinsert_text_22;?></label> <textarea class="form-control" rows="3" placeholder="<?php echo $lang_user_leadsinsert_placeholder_23;?>" title="<?php echo $lang_user_leadsinsert_title_24;?>"></textarea> <span class="help-block"><?php echo $lang_user_leadsinsert_text_25;?></span> </br>

						</div>

					</fieldset>

					</br>

					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_user_leadsinsert_link_26;?></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>