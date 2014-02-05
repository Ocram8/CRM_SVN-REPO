<?php
if (isset ( $_GET ['page'] )) {
	
	if ($_SESSION ['user'] == 'admin') {
		
		if ($_GET ['page'] == 'home')
			$container = array (
					'menu' => 'admin',
					'tabtitle' => "$lang_admin_index_tabtitle_1",
					'page' => 'admin/index.php' 
			);
		
		elseif ($_GET ['page'] == 'application')
			$container = array (
					'menu' => 'application',
					'tabtitle' => "$lang_admin_index_tabtitle_2",
					'page' => 'admin/application/index.php' 
			);
		
		elseif ($_GET ['page'] == 'worker')
			$container = array (
					'menu' => 'worker',
					'tabtitle' => "$lang_admin_index_tabtitle_3",
					'page' => 'admin/worker/index.php' 
			);
		
		elseif ($_GET ['page'] == 'personal')
			$container = array (
					'menu' => 'personal',
					'tabtitle' => "$lang_admin_index_tabtitle_4",
					'page' => 'admin/personal/index.php' 
			);
		
		elseif ($_GET ['page'] == 'new_worker')
			$container = array (
					'menu' => 'worker',
					'tabtitle' => "$lang_admin_index_tabtitle_5",
					'page' => 'admin/worker/insert.php' 
			);
		
		elseif ($_GET ['page'] == 'update_worker')
			$container = array (
					'menu' => 'worker',
					'tabtitle' => "$lang_admin_index_tabtitle_6",
					'page' => 'admin/worker/update.php' 
			);
		
		elseif ($_GET ['page'] == 'view_worker')
			$container = array (
					'menu' => 'worker',
					'tabtitle' => "$lang_admin_index_tabtitle_7",
					'page' => 'admin/worker/view.php' 
			);
		
		else
			$container = array (
					'menu' => '',
					'tabtitle' => "$lang_main_index_page_error",
					'page' => '404.php' 
			);
	}
	
	if ($_SESSION ['user'] == 'worker') {
		
		if ($_GET ['page'] == 'home')
			$container = array (
					'menu' => 'user',
					'tabtitle' => "$lang_user_index_tabtitle_1",
					'page' => 'user/index.php' 
			);
		
		elseif ($_GET ['page'] == 'campaigns')
			$container = array (
					'menu' => 'campaigns',
					'tabtitle' => "$lang_user_index_tabtitle_4",
					'page' => 'user/campaigns/index.html' 
			);
		
		elseif ($_GET ['page'] == 'customer')
			$container = array (
					'menu' => 'customer',
					'tabtitle' => "$lang_user_index_tabtitle_3",
					'page' => 'user/customer/index.html' 
			);
		
		elseif ($_GET ['page'] == 'interactions')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5",
					'page' => 'user/interactions/index.html' 
			);
		
		elseif ($_GET ['page'] == 'leads')
			$container = array (
					'menu' => 'leads',
					'tabtitle' => "$lang_user_index_tabtitle_2",
					'page' => 'user/leads/index.html' 
			);
		
		elseif ($_GET ['page'] == 'package')
			$container = array (
					'menu' => 'package',
					'tabtitle' => "$lang_user_index_tabtitle_6",
					'page' => 'user/package/index.html' 
			);
		
		elseif ($_GET ['page'] == 'personal')
			$container = array (
					'menu' => 'personal',
					'tabtitle' => "$lang_user_index_tabtitle_7",
					'page' => 'user/personal/index.html' 
			);
		
		elseif ($_GET ['page'] == 'reports')
			$container = array (
					'menu' => 'reports',
					'tabtitle' => "$lang_user_index_tabtitle_8",
					'page' => 'user/index.php' 
			);
		
		else
			$container = array (
					'menu' => '',
					'tabtitle' => "$lang_main_index_page_error",
					'page' => '404.php' 
			);
	}
} else {
	if ($_SESSION ['user'] == 'admin') {
		$container = array (
				'menu' => 'admin',
				'tabtitle' => "$lang_admin_index_tabtitle_1",
				'page' => 'admin/index.php' 
		);
	}
	
	if ($_SESSION ['user'] == 'worker') {
		$container = array (
				'menu' => 'user',
				'tabtitle' => "$lang_user_index_tabtitle_1",
				'page' => 'user/index.php' 
		);
	}
}
?>