<?php
/*
*** salvar este ficheiro sempre em charset uft-8 ***

estrutura de organização do nome das strings:
lang_<modulo>_<ficheiro>_<tipo>_<id>
ex: lang_admin_index_text_1

tipos:
	text
	title
	link (para tags de <a> e <button>)
	placeholder
*/

/*
 * MAIN PAGE
*/

//index.php
$lang_type = 'pt';	//html language code
$lang_main_index_content = 'Página principal do administrador';
$lang_main_index_page_error = 'Página não encontrada';

//footer.php
$lang_main_footer_text_1 = 'Interface e código realizado por';
$lang_main_footer_title_2 = 'Enviar e-mail a';
$lang_main_footer_text_3 = 'Código licenciado pela licença';
$lang_main_footer_title_4 = 'Ver termos e condições para o uso, reprodução e distribuição da licensa Apache 2.0';
$lang_main_footer_text_5 = 'Versão';

/*
 * ADMINISTRATOR PAGES
*/

//index.php
$lang_admin_index_tabtitle_1 = 'cloudCRM | Painel Geral';
$lang_admin_index_tabtitle_2 = 'cloudCRM | Admin | Aplicação';
$lang_admin_index_tabtitle_3 = 'cloudCRM | Admin | Funcionários';
$lang_admin_index_tabtitle_4 = 'cloudCRM | Admin | Área Pessoal';
$lang_admin_index_tabtitle_5 = 'cloudCRM | Admin | Novo Funcionário';
$lang_admin_index_tabtitle_6 = 'cloudCRM | Admin | Ver Funcionário';
$lang_admin_index_tabtitle_7 = 'cloudCRM | Admin | Alterar Funcionário';

//header.php - Menu
$lang_admin_header_title_1 = 'cloud CRM';
$lang_admin_header_title_2 = 'Ir para o painel de administração';
$lang_admin_header_link_3 = ' Home';
$lang_admin_header_title_4 = 'Ir para o módulo de gestão da aplicação';
$lang_admin_header_link_5 = 'Aplicação';
$lang_admin_header_title_6 = 'Ir para o módulo de gestão dos funcionários';
$lang_admin_header_link_7 = 'Funcionários';
$lang_admin_header_title_8 = 'Ir para o módulo de gestão da área pessoal';
$lang_admin_header_link_9 = 'Área Pessoal';
$lang_admin_header_title_10 = 'Terminar Sessão';
$lang_admin_header_link_11 = 'Logout';

//admin/index.php
$lang_admin_index_text_1 = 'Painel de Administração';
$lang_admin_index_text_2 = 'O painel de administração, o administrador poderá gerir os seus funcionários e alterar dados relativos à sua empresa.';
$lang_admin_index_text_3 = 'Gerir Aplicação';
$lang_admin_index_text_4 = 'O módulo de aplicação o administrador do sistema poderá alterar determinadas credenciais da aplicação.';
$lang_admin_index_title_5 = 'Ir para a página de gestão de aplicação';
$lang_admin_index_link_6 = 'Gerir Aplicação';
$lang_admin_index_text_7 = 'Gerir Funcionários';
$lang_admin_index_text_8 = 'O módulo de funcionários permite ao administrador gerir os funcionários existentes no sistema.';
$lang_admin_index_title_9 = 'Ir para a página de gestão dos funcionários';
$lang_admin_index_link_10 = 'Gerir Funcionários';
$lang_admin_index_text_11 = 'Área Pessoal';
$lang_admin_index_text_12 = 'Configurações da sua conta pessoal.';
$lang_admin_index_title_13 = 'Ir para o página de gestão de conta';
$lang_admin_index_link_14 = 'Área pessoal';

//application/index.html
$lang_application_index_text_1 = 'Painel de Administração';
$lang_application_index_text_2 = 'Aplicação';
$lang_application_index_text_3 = 'Gestão de Aplicação';
$lang_application_index_text_4 = 'O módulo de gestão da Aplicação tem como principal funcionalidade gerir a informação referente à empresa, ou seja, alteração da mesma.';
$lang_application_index_text_5 = 'Dados da empresa';
$lang_application_index_text_6 = 'Nome';
$lang_application_index_placeholder_7 = 'Nome da empresa';
$lang_application_index_title_8 = 'Introduza o nome da empresa';
$lang_application_index_text_9 = 'Introduza o nome da empresa';
$lang_application_index_link_10 = 'Guardar';

//worker/index.html
$lang_worker_index_text_1 = 'Painel de Administração';
$lang_worker_index_text_2 = 'Funcionários';
$lang_worker_index_text_3 = 'Gestão de Funcionários';
$lang_worker_index_text_4 = 'O módulo de gestão de funcionários tem como principal funcionalidade gerir a informação relacionada com os mesmos, ou seja, criar de novos funcionários, ver e alterar toda a informação associada às permissões dos funcionário e desativar e reativar os funcionários.';
$lang_worker_index_placeholder_5 = 'Pesquisar';
$lang_worker_index_text_6 = 'Número';
$lang_worker_index_text_7 = 'Nome';
$lang_worker_index_text_8 = 'Permissões';
$lang_worker_index_text_9 = 'Todos os funcionários';
$lang_worker_index_text_10 = 'Só funcionários ativos';
$lang_worker_index_text_11 = 'Só funcionários desativos';
$lang_worker_index_title_12 = 'Pesquisar';
$lang_worker_index_link_13 = 'Pesquisar';
$lang_worker_index_title_14 = 'Inserir novo funcionário';
$lang_worker_index_link_15 = 'Novo funcionário';
$lang_worker_index_text_16 = 'Número';
$lang_worker_index_text_17 = 'Nome';
$lang_worker_index_text_18 = 'Correio-eletrónico';
$lang_worker_index_text_19 = 'Permissões';
$lang_worker_index_text_20 = 'Opções';
$lang_worker_index_link_21 = ' Ver';
$lang_worker_index_link_22 = ' Alterar';
$lang_worker_index_link_23 = ' Desativar';
$lang_worker_index_link_24 = ' Ativar';
$lang_worker_index_title_25 = 'Importar dados dos funcionários';
$lang_worker_index_link_26 = 'Importar dados dos funcionários';
$lang_worker_index_title_27 = 'Exportar dados dos funcionários';
$lang_worker_index_link_28 = 'Exportar dados dos funcionários';

//worker/insert.html
$lang_worker_insert_text_1 = 'Painel de Administração';
$lang_worker_insert_text_2 = 'Funcionários';
$lang_worker_insert_text_3 = 'Inserir';
$lang_worker_insert_text_4 = 'Inserir Funcionário';
$lang_worker_insert_text_5 = 'Introduza os dados pessoais do funcionário, bem como as suas permissões.';
$lang_worker_insert_text_6 = 'Dados Pessoais';
$lang_worker_insert_text_7 = 'Número do funcionário';
$lang_worker_insert_text_8 = 'Nome';
$lang_worker_insert_placeholder_9 = 'Nome do funcionário';
$lang_worker_insert_title_10 = 'Introduza o nome do funcionário';
$lang_worker_insert_text_11 = 'Introduza o nome do funcionário';
$lang_worker_insert_text_12 = 'Correio eletrónico';
$lang_worker_insert_placeholder_13 = 'Correio eletrónico do funcionário';
$lang_worker_insert_title_14 = 'Introduza o correio eletrónico do funcionário';
$lang_worker_insert_text_15 = 'Introduza o correio eletrónico do funcionário';
$lang_worker_insert_text_16 = 'Fotografia';
$lang_worker_insert_title_17 = 'Introduza uma fotografia do funcionário';
$lang_worker_insert_text_18 = 'Introduza uma fotografia do funcionário';
$lang_worker_insert_text_19 = 'Permissões';
$lang_worker_insert_text_20 = 'Escolha as permissões de acesso do funcionário';
$lang_worker_insert_text_21 = 'Inserir';
$lang_worker_insert_text_22 = 'Editar';
$lang_worker_insert_text_23 = 'Desativar';
$lang_worker_insert_text_24 = 'Gestão de';
$lang_worker_insert_text_25 = ' Leads';
$lang_worker_insert_text_26 = 'Gestão de Clientes';
$lang_worker_insert_text_27 = 'Gestão de Campanhas';
$lang_worker_insert_text_28 = 'Gestão de Encomendas';
$lang_worker_insert_text_29 = 'Gestão de Funcionário';
$lang_worker_insert_link_30 = 'Criar';

//worker/view.html
$lang_worker_view_text_1 = 'Painel de Administração';
$lang_worker_view_text_2 = 'Funcionários';
$lang_worker_view_text_3 = 'Ver';
$lang_worker_view_text_4 = 'Ver Funcionário';
$lang_worker_view_text_5 = 'Ver os dados pessoais do funcionário, bem como as suas permissões.';
$lang_worker_view_text_6 = 'Dados Pessoais';
$lang_worker_view_text_7 = 'Nome';
$lang_worker_view_text_8 = 'Correio eletrónico';
$lang_worker_view_text_9 = 'Permissões';
$lang_worker_view_text_10 = 'Ver as permissões de acesso do funcionário';
$lang_worker_view_text_11 = 'Inserir';
$lang_worker_view_text_12 = 'Editar';
$lang_worker_view_text_13 = 'Desativar';
$lang_worker_view_text_14 = 'Gestão de';
$lang_worker_view_text_15 = ' Leads';
$lang_worker_view_text_16 = 'Gestão de Clientes';
$lang_worker_view_text_17 = 'Gestão de Campanhas';
$lang_worker_view_text_18 = 'Gestão de Encomendas';
$lang_worker_view_text_19 = 'Gestão de Funcionário';

//worker/update.html
$lang_worker_update_text_1 = 'Painel de Administração';
$lang_worker_update_text_2 = 'Funcionários';
$lang_worker_update_text_3 = 'Alterar permissões';
$lang_worker_update_text_4 = 'Alterar permissões';
$lang_worker_update_text_5 = 'Permite alterar as permissões dos funcionários.';
$lang_worker_update_text_6 = 'Dados Pessoais';
$lang_worker_update_text_7 = 'Número';
$lang_worker_update_text_8 = 'Nome';
$lang_worker_update_text_9 = 'Correio eletrónico';
$lang_worker_update_text_10 = 'Fotografia';
$lang_worker_update_text_11 = 'Permissões';
$lang_worker_update_text_12 = 'Escolha as permissões de acesso do funcionário';
$lang_worker_update_text_13 = 'Inserir';
$lang_worker_update_text_14 = 'Editar';
$lang_worker_update_text_15 = 'Desativar';
$lang_worker_update_text_16 = 'Gestão de';
$lang_worker_update_text_17 = ' Leads';
$lang_worker_update_text_18 = 'Gestão de Clientes';
$lang_worker_update_text_19 = 'Gestão de Campanhas';
$lang_worker_update_text_20 = 'Gestão de Encomendas';
$lang_worker_update_text_21 = 'Gestão de Funcionário';
$lang_worker_update_link_22 = 'Alterar';

//personal/index.html
$lang_personal_index_text_1 = 'Painel de Administração';
$lang_personal_index_text_2 = 'Área Pessoal';
$lang_personal_index_text_3 = 'Gestão Área Pessoal';
$lang_personal_index_text_4 = 'O módulo de gestão da Área Pessoal serve para alterar os dados de perfil.';
$lang_personal_index_text_5 = 'Dados Pessoais';
$lang_personal_index_text_6 = 'Nome';
$lang_personal_index_placeholder_7 = 'Nome do Administrador';
$lang_personal_index_title_8 = 'Altere o nome do Administrador';
$lang_personal_index_text_9 = 'Altere o nome do Administrador';
$lang_personal_index_text_10 = 'Correio eletrónico';
$lang_personal_index_placeholder_11 = 'Correio eletrónico do Administrador';
$lang_personal_index_title_12 = 'Altere o correio eletrónico do Administrador';
$lang_personal_index_text_13 = 'Altere o correio eletrónico do Administrador';
$lang_personal_index_text_14 = 'Fotografia';
$lang_personal_index_title_15 = 'Altere a fotografia do Administrador';
$lang_personal_index_text_16 = 'Altere a fotografia do Administrador';
$lang_personal_index_text_17 = 'Palavra-Passe';
$lang_personal_index_text_18 = 'Nova Palavra-Passe';
$lang_personal_index_placeholder_19 = 'Nova Palavra-Passe';
$lang_personal_index_title_20 = 'Nova Palavra-Passe';
$lang_personal_index_text_21 = 'Introduza Nova Palavra-Passe';
$lang_personal_index_text_22 = 'Confirme Palavra-Passe';
$lang_personal_index_placeholder_23 = 'Confirme Nova Palavra-Passe';
$lang_personal_index_title_24 = 'Confirme Nova Palavra-Passe';
$lang_personal_index_text_25 = 'Confirme a sua Nova Palavra-Passe';
$lang_personal_index_text_26 = 'Palavra-Passe Atual';
$lang_personal_index_placeholder_27 = 'Palavra-Passe Atual';
$lang_personal_index_title_28 = 'Palavra-Passe Atual';
$lang_personal_index_text_29 = 'Introduza a Palavra-Passe Atual';
$lang_personal_index_link_30 = 'Guardar';

/*
 * USER PAGES
 */

//index.php
$lang_user_index_tabtitle_1 = 'cloudCRM | Painel de Geral';
$lang_user_index_tabtitle_2 = 'cloudCRM | Funcionário | Leads';
$lang_user_index_tabtitle_3 = 'cloudCRM | Funcionário | Clientes';
$lang_user_index_tabtitle_4 = 'cloudCRM | Funcionário | Campanhas';
$lang_user_index_tabtitle_5 = 'cloudCRM | Funcionário | Interações';
$lang_user_index_tabtitle_6 = 'cloudCRM | Funcionário | Encomendas';
$lang_user_index_tabtitle_7 = 'cloudCRM | Funcionário | Área Pessoal';
$lang_user_index_tabtitle_8 = 'cloudCRM | Funcionário | Relatórios';

//header.php - Menu
$lang_user_header_title_1 = 'cloud CRM';
$lang_user_header_title_2 = 'Ir para o painel principal';
$lang_user_header_link_3 = ' Painel principal';
$lang_user_header_title_4 = 'Ir para o módulo de gestão de leads';
$lang_user_header_link_5 = 'Leads';
$lang_user_header_title_6 = 'Ir para o módulo de gestão de clientes';
$lang_user_header_link_7 = 'Clientes';
$lang_user_header_title_8 = 'Ir para o módulo de gestão de campanhas comerciais';
$lang_user_header_link_9 = 'Campanhas';
$lang_user_header_title_10 = 'Ir para o módulo de gestão de interações';
$lang_user_header_link_11 = 'Interações';
$lang_user_header_title_12 = 'Ir para o módulo de gestão de encomendas';
$lang_user_header_link_13 = 'Encomendas';
$lang_user_header_title_14 = 'Ir para o módulo de gestão de área pessoal';
$lang_user_header_link_15 = 'Área Pessoal';

//user/index.php
$lang_user_index_text_1 = 'Painel Principal';
$lang_user_index_text_2 = 'No painel Principal de funcionários, o utilizador poderá, consoante as suas permissões, gerir as leads, os clientes, as campanhas comerciais, as interações, as encomendas e a sua área pessoal.';
$lang_user_index_text_3 = 'Gerir';
$lang_user_index_text_4 = ' Leads';
$lang_user_index_text_5 = 'O módulo de utilizador permite ao utilizador gerir as';
$lang_user_index_text_6 = ' Leads.';
$lang_user_index_title_7 = 'Ir para o módulo de gestão das leads';
$lang_user_index_link_8 = 'Gerir Leads ';
$lang_user_index_text_9 = 'Gerir Clientes';
$lang_user_index_text_10 = 'O módulo de utilizador permite ao utilizador gerir os clientes.';
$lang_user_index_title_11 = 'Ir para o módulo de gestão dos clientes';
$lang_user_index_link_12 = 'Gerir Funcionários ';
$lang_user_index_text_13 = 'Gerir Campanhas';
$lang_user_index_text_14 = 'O módulo de utilizador permite ao utilizador gerir as campanhas.';
$lang_user_index_title_15 = 'Ir para o módulo de gestão das campanhas';
$lang_user_index_link_16 = 'Gerir Campanhas ';
$lang_user_index_text_17 = 'Gerir Interações';
$lang_user_index_text_18 = 'O módulo de utilizador permite ao utilizador gerir as Interações.';
$lang_user_index_title_19 = 'Ir para o módulo de gestão das interações';
$lang_user_index_link_20 = 'Gerir Interações ';
$lang_user_index_text_21 = 'Gerir Encomendas';
$lang_user_index_text_22 = 'O módulo de utilizador permite ao utilizador gerir as encomendas.';
$lang_user_index_title_23 = 'Ir para o módulo de gestão das encomendas';
$lang_user_index_link_24 = 'Gerir Encomendas ';
$lang_user_index_text_25 = 'Gerir Área Pessoal';
$lang_user_index_text_26 = 'A área pessoal permite ao utilizador gerir as suas definições.';
$lang_user_index_title_27 = 'Ir para o módulo de gestão da área pessoal';
$lang_user_index_link_28 = 'Gerir Área Pessoal ';

//user/leads.php  -falta adicionar-
$lang_user_index_text_1 = 'Painel Principal';
$lang_user_index_text_2 = 'Leads';
$lang_user_index_text_3 = 'Gestão de';
$lang_user_index_text_4 = ' Leads';
$lang_user_index_text_5 = 'O módulo de gestão de';
$lang_user_index_text_6 = ' tem como principal funcionalidade gerir a informação relacionada com os mesmos, ou seja, criar novas campanhas, ver e alterar toda a informação associada às mesmas.';
$lang_user_index_placeholder_7 = 'Pesquisar';

?>