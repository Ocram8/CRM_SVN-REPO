<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div id="imglogo">
				<a href="index.php"><img src="img/logo.png" title="<?php echo $lang_admin_header_title_1;?>"></a>
			</div>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if($header_menu_page==1) echo 'class="active"';?>>
					<a href="?page=home" title="<?php echo $lang_admin_header_title_2;?>"><span class="glyphicon glyphicon-home">&ensp;</span><?php echo $lang_admin_header_link_3;?></a>
				</li>
				<li <?php if($header_menu_page==2) echo 'class="active"';?>>
					<a href="?page=application" title="<?php echo $lang_admin_header_title_4;?>"><?php echo $lang_admin_header_link_5;?></a>
				</li>
				<li <?php if($header_menu_page==3) echo 'class="active"';?>>
					<a href="?page=worker" title="<?php echo $lang_admin_header_title_6;?>"><?php echo $lang_admin_header_link_7;?></a>
				</li>
				<li <?php if($header_menu_page==4) echo 'class="active"';?>>
					<a href="?page=personal" title="<?php echo $lang_admin_header_title_8;?>"><?php echo $lang_admin_header_link_9;?></a>
				</li>
			</ul>
		</div>
		<!--/.navbar-collapse -->
	</div>
	<!-- /container -->
</div>