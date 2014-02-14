<?php
if ($_SESSION ['login']) {
	if ($_SESSION ['user'] == 'admin') {
		?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>

			<div id="imglogo">
				<a href="index.php"><img src="img/logo.png" title="<?php echo $lang_admin_header_title_1;?>"></a>
			</div>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if($container['menu']=='admin') echo 'class="active"';?>><a href="?page=home" title="<?php echo $lang_admin_header_title_2;?>"> <span class="glyphicon glyphicon-home">&ensp;</span><?php echo $lang_admin_header_link_3;?></a></li>
				<li <?php if($container['menu']=='application') echo 'class="active"';?>><a href="?page=application" title="<?php echo $lang_admin_header_title_4;?>"><?php echo $lang_admin_header_link_5;?></a></li>
				<li <?php if($container['menu']=='worker') echo 'class="active"';?>><a href="?page=worker" title="<?php echo $lang_admin_header_title_6;?>"><?php echo $lang_admin_header_link_7;?></a></li>
				<li <?php if($container['menu']=='personal') echo 'class="active"';?>><a href="?page=personal" title="<?php echo $lang_admin_header_title_8;?>"><?php echo $lang_admin_header_link_9;?></a></li>
				<li><a href="actions/logout.php" title="<?php echo $lang_admin_header_title_10;?>"><?php echo $lang_admin_header_link_11;?></a></li>
			</ul>
		</div>
		<!--/.navbar-collapse -->
	</div>
	<!-- /container -->
</div>
<?php
	}
	
	if ($_SESSION ['user'] == 'worker') {
		?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>

			<div id="imglogo">
				<a href="index.php"><img src="img/logo.png" title="<?php echo $lang_user_header_title_1;?>"></a>
			</div>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if($container['menu']=='user') echo 'class="active"';?>><a href="?page=home" title="<?php echo $lang_user_header_title_2;?>"><span class="glyphicon glyphicon-home"></span><?php echo $lang_user_header_link_3;?></a></li>
				<li <?php if($container['menu']=='leads') echo 'class="active"';?>><a href="?page=leads" title="<?php echo $lang_user_header_title_4;?>"><i lang="en"><?php echo $lang_user_header_link_5;?></i></a></li>
				<li <?php if($container['menu']=='customer') echo 'class="active"';?>><a href="?page=customer" title="<?php echo $lang_user_header_title_6;?>"><?php echo $lang_user_header_link_7;?></a></li>
				<li <?php if($container['menu']=='campaigns') echo 'class="active"';?>><a href="?page=campaigns" title="<?php echo $lang_user_header_title_8;?>"><?php echo $lang_user_header_link_9;?></a></li>
				<li <?php if($container['menu']=='interactions') echo 'class="active"';?>><a href="?page=interactions" title="<?php echo $lang_user_header_title_10;?>"><?php echo $lang_user_header_link_11;?></a></li>
				<li <?php if($container['menu']=='package') echo 'class="active"';?>><a href="?page=package" title="<?php echo $lang_user_header_title_12;?>"><?php echo $lang_user_header_link_13;?></a></li>
				<li <?php if($container['menu']=='personal') echo 'class="active"';?>><a href="?page=personal" title="<?php echo $lang_user_header_title_14;?>"><?php echo $lang_user_header_link_15;?></a></li>
				<li><a href="actions/logout.php" title="logout">Logout</a></li>
			</ul>
		</div>
		<!--/.navbar-collapse -->
	</div>
</div>
<?php
	}
}
?>
