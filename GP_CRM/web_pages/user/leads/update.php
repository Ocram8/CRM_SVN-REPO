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
				<li><a href="?page=home"><?php echo $lang_user_leadsupdate_text_1;?></a></li>
				<li><a href="?page=leads"><?php echo $lang_user_leadsupdate_text_2;?></a></li>
				<li class="active"><?php echo $lang_user_leadsupdate_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_user_leadsupdate_text_4;?><i lang="en-uk"><?php echo $lang_user_leadsupdate_text_5;?></i></h1>
			</div>
			<p class="lead"><?php echo $lang_user_leadsupdate_text_6;?><i lang="en-uk"><?php echo $lang_user_leadsupdate_text_7;?></i></p>

			<div class="col-lg-10">

				<form action="">

					<fieldset>
						<legend><?php echo $lang_user_leadsupdate_text_8;?><i lang="en-uk"><?php echo $lang_user_leadsupdate_text_9;?></i></legend>

						<div class="col-lg-6">
							<label for="nome" title="Altere o nome da lead"><?php echo $lang_user_leadsupdate_text_10;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsupdate_placeholder_11;?>" title="<?php echo $lang_user_leadsupdate_title_12;?>" id="name"> <span class="help-block"><?php echo $lang_user_leadsupdate_text_13;?></span> </br>
							<label for="datai" title="Altere a empresa"><?php echo $lang_user_leadsupdate_text_14;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsupdate_placeholder_15;?>" title="<?php echo $lang_user_leadsupdate_title_16;?>" id="email"> <span class="help-block"><?php echo $lang_user_leadsupdate_text_17;?></span> </br>
							<label for="dataf" title="Altere a Origem"><?php echo $lang_user_leadsupdate_text_18;?></label> <input type="text" class="form-control" placeholder="<?php echo $lang_user_leadsupdate_placeholder_19;?>" title="<?php echo $lang_user_leadsupdate_title_20;?>" id="email"> <span class="help-block"><?php echo $lang_user_leadsupdate_text_21;?></span> </br>
							<label for="obs" title="Altere as observações da lead"><?php echo $lang_user_leadsupdate_text_22;?></label> <textarea class="form-control" rows="3" placeholder="<?php echo $lang_user_leadsupdate_placeholder_23;?>" title="<?php echo $lang_user_leadsupdate_title_24;?>"></textarea> <span class="help-block"><?php echo $lang_user_leadsupdate_text_25;?></span> </br>
						</div>

					</fieldset>

					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_user_leadsupdate_link_26;?></button>
				</form>
			</div>



		</div>
	</div>
</div>
<!--/.container-->

<?php } ?>