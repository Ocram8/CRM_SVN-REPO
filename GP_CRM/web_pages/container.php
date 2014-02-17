<?php
if (isset ( $_GET ['page'] )) {
	
	//ADMINISTRATOR PAINEL **************
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
			header ( "Location: error.php" );
// 			$container = array (
// 					'menu' => '',
// 					'tabtitle' => "$lang_main_index_page_error",
// 					'page' => 'error.php' 
// 			);
	}
	
	//USER PAINEL **************
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
					'page' => 'user/campaigns/index.php' 
			);

		elseif ($_GET ['page'] == 'new_campaign')
			$container = array (
					'menu' => 'campaigns',
					'tabtitle' => "$lang_user_index_tabtitle_4_1",
					'page' => 'user/campaigns/insert.php'
			);

		elseif ($_GET ['page'] == 'View_campaign')
			$container = array (
					'menu' => 'campaigns',
					'tabtitle' => "$lang_user_index_tabtitle_4_3",
					'page' => 'user/campaigns/view.php'
			);
			
		elseif ($_GET ['page'] == 'update_campaign')
			$container = array (
					'menu' => 'campaigns',
					'tabtitle' => "$lang_user_index_tabtitle_4_2",
					'page' => 'user/campaigns/update.php'
			);
			
		elseif ($_GET ['page'] == 'customer')
			$container = array (
					'menu' => 'customer',
					'tabtitle' => "$lang_user_index_tabtitle_3",
					'page' => 'user/customer/index.php' 
			);
			
		elseif ($_GET ['page'] == 'new_customer')
			$container = array (
					'menu' => 'customer',
					'tabtitle' => "$lang_user_index_tabtitle_3_1",
					'page' => 'user/customer/insert.php'
			);
			
		elseif ($_GET ['page'] == 'view_customer')
			$container = array (
					'menu' => 'customer',
					'tabtitle' => "$lang_user_index_tabtitle_3_3",
					'page' => 'user/customer/view.php'
			);
			
			elseif ($_GET ['page'] == 'update_customer')
			$container = array (
					'menu' => 'customer',
					'tabtitle' => "$lang_user_index_tabtitle_3_2",
					'page' => 'user/customer/update.php'
			);
			
		
		elseif ($_GET ['page'] == 'interactions')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5",
					'page' => 'user/interactions/index.php' 
			);
			
		elseif ($_GET ['page'] == 'new_interaction')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5_2",
					'page' => 'user/interactions/iniciate.php'
			);
			
		elseif ($_GET ['page'] == 'new_package')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5_3",
					'page' => 'user/interactions/insert_package.php'
			);
			
		elseif ($_GET ['page'] == 'receive_interaction')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5_1",
					'page' => 'user/interactions/receive.php'
			);
			
		elseif ($_GET ['page'] == 'success_interaction')
			$container = array (
					'menu' => 'interactions',
					'tabtitle' => "$lang_user_index_tabtitle_5_4",
					'page' => 'user/interactions/success.php'
			);
			
		
		elseif ($_GET ['page'] == 'leads')
			$container = array (
					'menu' => 'leads',
					'tabtitle' => "$lang_user_index_tabtitle_2",
					'page' => 'user/leads/index.php' 
			);
			
		elseif ($_GET ['page'] == 'new_lead')
			$container = array (
					'menu' => 'leads',
					'tabtitle' => "$lang_user_index_tabtitle_2_1",
					'page' => 'user/leads/insert.php'
			);

		elseif ($_GET ['page'] == 'view_lead')
			$container = array (
					'menu' => 'leads',
					'tabtitle' => "$lang_user_index_tabtitle_2_3",
					'page' => 'user/leads/view.php'
			);

		elseif ($_GET ['page'] == 'update_lead')
			$container = array (
					'menu' => 'leads',
					'tabtitle' => "$lang_user_index_tabtitle_2_2",
					'page' => 'user/leads/update.php'
			);
			
			
		elseif ($_GET ['page'] == 'package')
			$container = array (
					'menu' => 'package',
					'tabtitle' => "$lang_user_index_tabtitle_6",
					'page' => 'user/package/index.php' 
			);
			
		elseif ($_GET ['page'] == 'view_package')
			$container = array (
					'menu' => 'package',
					'tabtitle' => "$lang_user_index_tabtitle_6_2",
					'page' => 'user/package/view.php'
			);
			
		elseif ($_GET ['page'] == 'update_package')
			$container = array (
					'menu' => 'package',
					'tabtitle' => "$lang_user_index_tabtitle_6_1",
					'page' => 'user/package/update.php'
			);
			
		
		elseif ($_GET ['page'] == 'personal')
			$container = array (
					'menu' => 'personal',
					'tabtitle' => "$lang_user_index_tabtitle_7",
					'page' => 'user/personal/index.php' 
			);
		
		elseif ($_GET ['page'] == 'reports')
			$container = array (
					'menu' => 'reports',
					'tabtitle' => "$lang_user_index_tabtitle_8",
					'page' => 'user/index.php' 
			);
		
		else
			header ( "Location: error.php" );
// 			$container = array (
// 					'menu' => '',
// 					'tabtitle' => "$lang_main_index_page_error",
// 					'page' => 'error.php' 
// 			);
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