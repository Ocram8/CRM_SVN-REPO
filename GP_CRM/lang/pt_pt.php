<?php
/*
*** salvar este ficheiro sempre em charset utf-8 ***

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
$lang_main_index_page_noaccess = 'Não tem permissões para aceder a esta página.';

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
$lang_admin_index_text_2 = 'No painel de administração, o administrador poderá gerir os seus funcionários e alterar dados relativos à sua empresa.';
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
$lang_application_index_text_1 = 'Home';
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
$lang_worker_index_text_1 = 'Home';
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
$lang_worker_insert_text_1 = 'Home';
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
$lang_worker_view_text_1 = 'Home';
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
$lang_worker_update_text_1 = 'Home';
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
$lang_personal_index_text_1 = 'Home';
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
$lang_user_index_tabtitle_2_1 = 'cloudCRM | Funcionário | Leads | Inserir';
$lang_user_index_tabtitle_2_2 = 'cloudCRM | Funcionário | Leads | Alterar';
$lang_user_index_tabtitle_2_3 = 'cloudCRM | Funcionário | Leads | Ver';
$lang_user_index_tabtitle_3 = 'cloudCRM | Funcionário | Clientes';
$lang_user_index_tabtitle_3_1 = 'cloudCRM | Funcionário | Clientes | Inserir';
$lang_user_index_tabtitle_3_2 = 'cloudCRM | Funcionário | Clientes | Alterar';
$lang_user_index_tabtitle_3_3 = 'cloudCRM | Funcionário | Clientes | Ver';
$lang_user_index_tabtitle_4 = 'cloudCRM | Funcionário | Campanhas';
$lang_user_index_tabtitle_4_1 = 'cloudCRM | Funcionário | Campanhas | Inserir';
$lang_user_index_tabtitle_4_2 = 'cloudCRM | Funcionário | Campanhas | Alterar';
$lang_user_index_tabtitle_4_3 = 'cloudCRM | Funcionário | Campanhas | Ver';
$lang_user_index_tabtitle_5 = 'cloudCRM | Funcionário | Interações';
$lang_user_index_tabtitle_5_1 = 'cloudCRM | Funcionário | Interações | Receber';
$lang_user_index_tabtitle_5_2 = 'cloudCRM | Funcionário | Interações | Iniciar';
$lang_user_index_tabtitle_5_3 = 'cloudCRM | Funcionário | Interações | Inserir Encomenda';
$lang_user_index_tabtitle_5_4 = 'cloudCRM | Funcionário | Interações | Sucesso';
$lang_user_index_tabtitle_6 = 'cloudCRM | Funcionário | Encomendas';
$lang_user_index_tabtitle_6_1 = 'cloudCRM | Funcionário | Encomendas | Alterar';
$lang_user_index_tabtitle_6_2 = 'cloudCRM | Funcionário | Encomendas | Ver';
$lang_user_index_tabtitle_7 = 'cloudCRM | Funcionário | Área Pessoal';

//header.php - Menu
$lang_user_header_title_1 = 'cloud CRM';
$lang_user_header_title_2 = 'Ir para o painel principal';
$lang_user_header_link_3 = ' Home';
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

//user/leadsindex.php  -falta adicionar-
$lang_user_leadsindex_text_1 = 'Home';
$lang_user_leadsindex_text_2 = 'Leads';
$lang_user_leadsindex_text_3 = 'Gestão de';
$lang_user_leadsindex_text_4 = ' Leads';
$lang_user_leadsindex_text_5 = 'O módulo de gestão de';
$lang_user_leadsindex_text_6 = ' tem como principal funcionalidade gerir a informação relacionada com os mesmos, ou seja, criar novas campanhas, ver e alterar toda a informação associada às mesmas.';
$lang_user_leadsindex_placeholder_7 = 'Pesquisar';
$lang_user_leadsindex_title_8 = 'Número';
$lang_user_leadsindex_title_9 = 'Nome';
$lang_user_leadsindex_title_10 = 'Data de início de lead';
$lang_user_leadsindex_title_11 = 'Data de fim de lead';
$lang_user_leadsindex_title_12 = 'Inserir nova lead';
$lang_user_leadsindex_link_13 = ' Nova Lead';
$lang_user_leadsindex_text_14 = 'Número';
$lang_user_leadsindex_text_15 = 'Nome';
$lang_user_leadsindex_text_16 = 'Empresa';
$lang_user_leadsindex_text_17 = 'Origem';
$lang_user_leadsindex_text_18 = 'Opçoes';
$lang_user_leadsindex_text_19 = ' Ver';
$lang_user_leadsindex_text_20 = ' Alterar';
$lang_user_leadsindex_text_21 = ' Desativar';
$lang_user_leadsindex_text_22 = ' Ativar';
$lang_user_leadsindex_link_23 = ' Pesquisar';
$lang_user_leadsindex_title_24 = 'Fazer pesquisa';

//user/leadsinsert.php  -falta adicionar-
$lang_user_leadsinsert_text_1 = 'Home';
$lang_user_leadsinsert_text_2 = 'Leads';
$lang_user_leadsinsert_text_3 = 'Inserir';
$lang_user_leadsinsert_text_4 = 'Inserir dados da ';
$lang_user_leadsinsert_text_5 = 'lead';
$lang_user_leadsinsert_text_6 = 'Introduza os dados da ';
$lang_user_leadsinsert_text_7 = 'lead.';
$lang_user_leadsinsert_text_8 = 'Dados da ';
$lang_user_leadsinsert_text_9 = 'lead';
$lang_user_leadsinsert_text_10 = 'Nome';
$lang_user_leadsinsert_placeholder_11 = 'Nome da lead';
$lang_user_leadsinsert_title_12 = 'Introduza o nome da lead';
$lang_user_leadsinsert_text_13 = 'Introduza o nome da lead';
$lang_user_leadsinsert_text_14 = 'Empresa';
$lang_user_leadsinsert_placeholder_15 = 'Nome da empresa';
$lang_user_leadsinsert_title_16 = 'Introduza o nome da empresa';
$lang_user_leadsinsert_text_17 = 'Introduza o nome da empresa';
$lang_user_leadsinsert_text_18 = 'Origem';
$lang_user_leadsinsert_placeholder_19 = 'Origem da lead';
$lang_user_leadsinsert_title_20 = 'Introduza a origem da lead';
$lang_user_leadsinsert_text_21 = 'Introduza a origem da lead';
$lang_user_leadsinsert_text_22 = 'Observações';
$lang_user_leadsinsert_placeholder_23 = 'Observações da lead';
$lang_user_leadsinsert_title_24 = 'Introduza as observações da lead';
$lang_user_leadsinsert_text_25 = 'Introduza as observações da lead';
$lang_user_leadsinsert_link_26 = 'Criar';

//user/leadsview.php -falta adicionar-
$lang_user_leadsview_text_1 = 'Home';
$lang_user_leadsview_text_2 = 'Leads';
$lang_user_leadsview_text_3 = 'Ver ';
$lang_user_leadsview_text_4 = 'leads';
$lang_user_leadsview_text_5 = 'Ver dados da ';
$lang_user_leadsview_text_6 = 'lead.';
$lang_user_leadsview_text_7 = 'Dados da ';
$lang_user_leadsview_text_8 = 'lead';
$lang_user_leadsview_text_9 = 'Número';
$lang_user_leadsview_text_10 = 'Nome';
$lang_user_leadsview_text_11 = 'Empresa';
$lang_user_leadsview_text_12 = 'Origem';
$lang_user_leadsview_text_13 = 'Observações';

//user/leadsupdate.php -falta adicionar-
$lang_user_leadsupdate_text_1 = 'Home';
$lang_user_leadsupdate_text_2 = 'Leads';
$lang_user_leadsupdate_text_3 = 'Alterar';
$lang_user_leadsupdate_text_4 = 'Alterar dados da ';
$lang_user_leadsupdate_text_5 = 'lead';
$lang_user_leadsupdate_text_6 = 'Altere os dados da ';
$lang_user_leadsupdate_text_7 = 'lead.';
$lang_user_leadsupdate_text_8 = 'Dados da ';
$lang_user_leadsupdate_text_9 = 'lead';
$lang_user_leadsupdate_text_10 = 'Nome';
$lang_user_leadsupdate_placeholder_11 = 'Nome da lead';
$lang_user_leadsupdate_title_12 = 'Altere o nome da lead';
$lang_user_leadsupdate_text_13 = 'Altere o nome da lead';
$lang_user_leadsupdate_text_14 = 'Empresa';
$lang_user_leadsupdate_placeholder_15 = 'Nome da empresa';
$lang_user_leadsupdate_title_16 = 'Altere o nome da empresa';
$lang_user_leadsupdate_text_17 = 'Altere o nome da empresa';
$lang_user_leadsupdate_text_18 = 'Origem';
$lang_user_leadsupdate_placeholder_19 = 'Altere da lead';
$lang_user_leadsupdate_title_20 = 'Altere a origem da lead';
$lang_user_leadsupdate_text_21 = 'Altere a origem da lead';
$lang_user_leadsupdate_text_22 = 'Observações';
$lang_user_leadsupdate_placeholder_23 = 'Observações da lead';
$lang_user_leadsupdate_title_24 = 'Altere as observações da lead';
$lang_user_leadsupdate_text_25 = 'Altere as observações da lead';
$lang_user_leadsupdate_link_26 = 'Alterar';

//user//customerindex.php -falta adicionar-
$lang_user_customerindex_text_1 = 'Home';
$lang_user_customerindex_text_2 = 'Clientes';
$lang_user_customerindex_text_3 = 'Gestão de clientes';
$lang_user_customerindex_text_4 = 'O módulo de gestão de novos clientes tem como principal funcionalidade gerir a informação relacionada com os mesmos, ou seja, criar novos clientes, ver e alterar toda a informação associada às mesmas.';
$lang_user_customerindex_placeholder_5 = 'Pesquisar';
$lang_user_customerindex_title_6 = 'Número';
$lang_user_customerindex_title_7 = 'Nome';
$lang_user_customerindex_title_8 = 'Número';
$lang_user_customerindex_title_9 = 'Data de registo cliente';
$lang_user_customerindex_title_10 = 'Inserir novo cliente';
$lang_user_customerindex_link_11 = ' Novo cliente';
$lang_user_customerindex_text_12 = 'Número';
$lang_user_customerindex_text_13 = 'Nome';
$lang_user_customerindex_text_14 = 'BI';
$lang_user_customerindex_text_15 = 'E-mail';
$lang_user_customerindex_text_16 = 'Ver';
$lang_user_customerindex_text_17 = 'Alterar';
$lang_user_customerindex_text_18 = 'Desativar';
$lang_user_customerindex_text_19 = 'Ativar';

//user/custumerinsert.php -falta adicionar-
$lang_user_customerinsert_text_1 = 'Home';
$lang_user_customerinsert_text_2 = 'Clientes';
$lang_user_customerinsert_text_3 = 'Inserir';
$lang_user_customerinsert_text_4 = 'Inserir cliente';
$lang_user_customerinsert_text_5 = 'Introduza os dados do cliente';
$lang_user_customerinsert_text_6 = 'Dados do cliente';
$lang_user_customerinsert_text_7 = 'Nome';
$lang_user_customerinsert_placeholder_8 = 'Nome do cliente';
$lang_user_customerinsert_title_9 = 'Introduza o nome do cliente';
$lang_user_customerinsert_text_10 = 'Introduza o nome do cliente';
$lang_user_customerinsert_text_11 = 'Sexo';
$lang_user_customerinsert_title_12 = 'Masculino';
$lang_user_customerinsert_title_13 = 'Feminino';
$lang_user_customerinsert_text_14 = 'Introduza o sexo do cliente';
$lang_user_customerinsert_text_15 = 'NIC';
$lang_user_customerinsert_placeholder_16 = 'NIC do cliente';
$lang_user_customerinsert_title_17 = 'Introduza o NIC do cliente';
$lang_user_customerinsert_text_18 = 'Introduza o NIC do cliente';
$lang_user_customerinsert_text_19 = 'Profissão';
$lang_user_customerinsert_placeholder_20 = 'Profissão do cliente';
$lang_user_customerinsert_title_21 = 'Introduza a profissão do cliente';
$lang_user_customerinsert_text_22 = 'Introduza a profissão do cliente';
$lang_user_customerinsert_text_23 = 'Estado civil';
$lang_user_customerinsert_title_24 = 'Solteiro/(a)';
$lang_user_customerinsert_title_25 = 'Casado/(a)';
$lang_user_customerinsert_title_26 = 'Divorciado/(a)';
$lang_user_customerinsert_title_27 = 'Viuvo/(a)';
$lang_user_customerinsert_text_28 = 'Morada';
$lang_user_customerinsert_placeholder_29 = 'Morada do cliente';
$lang_user_customerinsert_title_30 = 'Introduza a morada do cliente';
$lang_user_customerinsert_text_31 = 'Introduza a morada do cliente';
$lang_user_customerinsert_text_32 = 'E-mail';
$lang_user_customerinsert_placeholder_33 = 'E-mail do cliente';
$lang_user_customerinsert_title_34 = 'Introduza o e-mail do cliente';
$lang_user_customerinsert_text_35 = 'Introduza o e-mail do cliente';
$lang_user_customerinsert_text_36 = 'Número de telefone';
$lang_user_customerinsert_placeholder_37 = 'Número de telefone do cliente';
$lang_user_customerinsert_title_38 = 'Introduza o número de telefone do cliente';
$lang_user_customerinsert_text_39 = 'Introduza o número de telefone do cliente';
$lang_user_customerinsert_text_40 = 'Número de telemóvel';
$lang_user_customerinsert_placeholder_41 = 'Número de telemóvel do cliente';
$lang_user_customerinsert_title_42 = 'Introduza o número de telemóvel do cliente';
$lang_user_customerinsert_text_43 = 'Introduza o número de telemóvel do cliente';
$lang_user_customerinsert_text_44 = 'Observações';
$lang_user_customerinsert_placeholder_45 = 'Observações do cliente';
$lang_user_customerinsert_title_46 = 'Introduza observações do cliente';
$lang_user_customerinsert_text_47 = 'Introduza observações do cliente';
$lang_user_customerinsert_link_48 = 'Criar';

//user/customerview.php -falta adicionar-
$lang_user_customerview_text_1 = 'Home';
$lang_user_customerview_text_2 = 'Clientes';
$lang_user_customerview_text_3 = 'Ver';
$lang_user_customerview_text_4 = 'Ver cliente';
$lang_user_customerview_text_5 = 'Ver os dados do cliente';
$lang_user_customerview_text_6 = 'Dados do cliente';
$lang_user_customerview_text_7 = 'Número';
$lang_user_customerview_text_8 = 'Nome';
$lang_user_customerview_text_9 = 'Sexo';
$lang_user_customerview_text_10 = 'NIC';
$lang_user_customerview_text_11 = 'Profissão';
$lang_user_customerview_text_12 = 'Estado civil';
$lang_user_customerview_text_13 = 'Morada';
$lang_user_customerview_text_14 = 'E-mail';
$lang_user_customerview_text_15 = 'Número de telefone';
$lang_user_customerview_text_16 = 'Número de telemovel';
$lang_user_customerview_text_17 = 'Observações';

//user/customerupdate.php -falta adicionar-
$lang_user_customerupdate_text_1 = 'Home';
$lang_user_customerupdate_text_2 = 'Clientes';
$lang_user_customerupdate_text_3 = 'Alterar';
$lang_user_customerupdate_text_4 = 'Alterar dados do cliente';
$lang_user_customerupdate_text_5 = 'Altere os dados do cliente';
$lang_user_customerupdate_text_6 = 'Dados do cliente';
$lang_user_customerupdate_text_7 = 'Nome';
$lang_user_customerupdate_placeholder_8 = 'Nome do cliente';
$lang_user_customerupdate_title_9 = 'Altere o nome do cliente';
$lang_user_customerupdate_text_10 = 'Altere o nome do cliente';
$lang_user_customerupdate_text_11 = 'Sexo';
$lang_user_customerupdate_title_12 = 'Masculino';
$lang_user_customerupdate_title_13 = 'Feminino';
$lang_user_customerupdate_text_14 = 'Altere o sexo do cliente';
$lang_user_customerupdate_text_15 = 'NIC';
$lang_user_customerupdate_placeholder_16 = 'NIC do cliente';
$lang_user_customerupdate_title_17 = 'Altere o NIC do cliente';
$lang_user_customerupdate_text_18 = 'Altere o NIC do cliente';
$lang_user_customerupdate_text_19 = 'Profissão';
$lang_user_customerupdate_placeholder_20 = 'Profissão do cliente';
$lang_user_customerupdate_title_21 = 'Altere a profissão do cliente';
$lang_user_customerupdate_text_22 = 'Altere a profissão do cliente';
$lang_user_customerupdate_text_23 = 'Estado civil';
$lang_user_customerupdate_title_24 = 'Solteiro/(a)';
$lang_user_customerupdate_title_25 = 'Casado/(a)';
$lang_user_customerupdate_title_26 = 'Divorciado/(a)';
$lang_user_customerupdate_title_27 = 'Viuvo/(a)';
$lang_user_customerupdate_text_28 = 'Morada';
$lang_user_customerupdate_placeholder_29 = 'Morada do cliente';
$lang_user_customerupdate_title_30 = 'Altere a morada do cliente';
$lang_user_customerupdate_text_31 = 'Altere a morada do cliente';
$lang_user_customerupdate_text_32 = 'E-mail';
$lang_user_customerupdate_placeholder_33 = 'E-mail do cliente';
$lang_user_customerupdate_title_34 = 'Altere o e-mail do cliente';
$lang_user_customerupdate_text_35 = 'Altere o e-mail do cliente';
$lang_user_customerupdate_text_36 = 'Número de telefone';
$lang_user_customerupdate_placeholder_37 = 'Número de telefone do cliente';
$lang_user_customerupdate_title_38 = 'Altere o número de telefone do cliente';
$lang_user_customerinsert_text_39 = 'Altere o número de telefone do cliente';
$lang_user_customerupdate_text_40 = 'Número de telemóvel';
$lang_user_customerupdate_placeholder_41 = 'Número de telemóvel do cliente';
$lang_user_customerupdate_title_42 = 'Altere o número de telemóvel do cliente';
$lang_user_customerupdate_text_43 = 'Altere o número de telemóvel do cliente';
$lang_user_customerupdate_text_44 = 'Observações';
$lang_user_customerupdate_placeholder_45 = 'Observações do cliente';
$lang_user_customerupdate_title_46 = 'Altere observações do cliente';
$lang_user_customerupdate_text_47 = 'Altere observações do cliente';
$lang_user_customerupdate_link_48 = 'Alterar';

//user/campaignsindex.php -falta adicionar-
$lang_user_campaignsindex_text_1 = 'Home';
$lang_user_campaignsindex_text_2 = 'Campanhas';
$lang_user_campaignsindex_text_3 = 'Gestão de campanhas';
$lang_user_campaignsindex_text_4 = 'O módulo de gestão de campanhas comerciais tem como principal funcionalidade gerir a informação relacionada com os mesmos, ou seja, criar novas campanhas, ver e alterar toda a informação associada às mesmas.';
$lang_user_campaignsindex_placeholder_5 = 'Pesquisar';
$lang_user_campaignsindex_title_6 = 'Número';
$lang_user_campaignsindex_title_7 = 'Nome';
$lang_user_campaignsindex_title_8 = 'Data início de campanha';
$lang_user_campaignsindex_title_9 = 'Data fim de campanha';
$lang_user_campaignsindex_title_10 = 'Inserir nova campanha';
$lang_user_campaignsindex_link_11 = 'Nova campanha';
$lang_user_campaignsindex_title_12 = 'Pesquisar';
$lang_user_campaignsindex_link_13 = 'Pesquisar';
$lang_user_campaignsindex_text_14 = 'Número';
$lang_user_campaignsindex_text_15 = 'Nome';
$lang_user_campaignsindex_text_16 = 'Data de início';
$lang_user_campaignsindex_text_17 = 'Data de fim';
$lang_user_campaignsindex_text_18 = 'Opções';
$lang_user_campaignsindex_text_19 = 'Ver';
$lang_user_campaignsindex_text_20 = 'Alterar';
$lang_user_campaignsindex_text_21 = 'Desativar';
$lang_user_campaignsindex_text_22 = 'Ativar';

//user/campaignsinsert.php -falta adicionar-
$lang_user_campaignsinsert_text_1 = 'Home';
$lang_user_campaignsinsert_text_2 = 'Campanhas';
$lang_user_campaignsinsert_text_3 = 'Inserir';
$lang_user_campaignsinsert_text_4 = 'Inserir campanha';
$lang_user_campaignsinsert_text_5 = 'Introduza os dados da nova campanha comercial.';
$lang_user_campaignsinsert_text_6 = 'Dados da campanha';
$lang_user_campaignsinsert_text_7 = 'Número da campanha';
$lang_user_campaignsinsert_text_8 = 'Nome';
$lang_user_campaignsinsert_placeholder_9 = 'Nome da campanha';
$lang_user_campaignsinsert_title_10 = 'Introduza o nome da campanha';
$lang_user_campaignsinsert_text_11 = 'Introduza o nome da campanha';
$lang_user_campaignsinsert_text_12 = 'Data de início';
$lang_user_campaignsinsert_title_13 = 'Introduza a data de início da campanha';
$lang_user_campaignsinsert_title_14 = 'Introduza a data de início da campanha';
$lang_user_campaignsinsert_text_15 = 'Data de fim';
$lang_user_campaignsinsert_title_16 = 'Introduza a data de fim da campanha';
$lang_user_campaignsinsert_title_17 = 'Introduza a data de fim da campanha';
$lang_user_campaignsinsert_text_18 = 'Observações';
$lang_user_campaignsinsert_placeholder_19 = 'Observações da campanha';
$lang_user_campaignsinsert_title_20 = 'Introduza observações da campanha';
$lang_user_campaignsinsert_text_21 = 'Introduza observações da campanha';
$lang_user_campaignsinsert_text_22 = 'Agendamentos';
$lang_user_campaignsinsert_text_23 = 'Escolha os clientes e ';
$lang_user_campaignsinsert_text_24 = 'leads';
$lang_user_campaignsinsert_text_25 = 'associados à campanha';
$lang_user_campaignsinsert_text_26 = 'Todos os ';
$lang_user_campaignsinsert_text_27 = 'leads';
$lang_user_campaignsinsert_text_28 = 'Todos os clientes';
$lang_user_campaignsinsert_link_29 = 'Criar';

//user/campaignsview.php -falta adicionar-
$lang_user_campaignsview_text_1 = 'Home';
$lang_user_campaignsview_text_2 = 'Campanhas';
$lang_user_campaignsview_text_3 = 'Ver';
$lang_user_campaignsview_text_4 = 'Ver campanha';
$lang_user_campaignsview_text_5 = 'Ver os dados da campanha';
$lang_user_campaignsview_text_6 = 'Dados da campanha';
$lang_user_campaignsview_text_7 = 'Ver';
$lang_user_campaignsview_text_8 = 'Número da campanha';
$lang_user_campaignsview_text_9 = 'Nome';
$lang_user_campaignsview_text_10 = 'Data de início';
$lang_user_campaignsview_text_10 = 'Data de fim';
$lang_user_campaignsview_text_11 = 'Observações';

//user/campaignsupdate.php -falta adicionar-
$lang_user_campaignsupdate_text_1 = 'Home';
$lang_user_campaignsupdate_text_2 = 'Campanhas';
$lang_user_campaignsupdate_text_3 = 'Alterar';
$lang_user_campaignsupdate_text_4 = 'Alterar campanha';
$lang_user_campaignsupdate_text_5 = 'Altere os dados da nova campanha comercial.';
$lang_user_campaignsupdate_text_6 = 'Dados da campanha';
$lang_user_campaignsupdate_text_7 = 'Número da campanha';
$lang_user_campaignsupdate_text_8 = 'Nome';
$lang_user_campaignsupdate_placeholder_9 = 'Nome da campanha';
$lang_user_campaignsupdate_title_10 = 'Altere o nome da campanha';
$lang_user_campaignsupdate_text_11 = 'Altere o nome da campanha';
$lang_user_campaignsupdate_text_12 = 'Data de início';
$lang_user_campaignsupdate_title_13 = 'Altere a data de início da campanha';
$lang_user_campaignsupdate_title_14 = 'Altere a data de início da campanha';
$lang_user_campaignsupdate_text_15 = 'Data de fim';
$lang_user_campaignsupdate_title_16 = 'Altere a data de fim da campanha';
$lang_user_campaignsupdate_title_17 = 'Altere a data de fim da campanha';
$lang_user_campaignsupdate_text_18 = 'Observações';
$lang_user_campaignsupdate_placeholder_19 = 'Observações da campanha';
$lang_user_campaignsupdate_title_20 = 'Altere observações da campanha';
$lang_user_campaignsupdate_text_21 = 'Altere observações da campanha';
$lang_user_campaignsupdate_text_22 = 'Agendamentos';
$lang_user_campaignsupdate_text_23 = 'Escolha os clientes e ';
$lang_user_campaignsupdate_text_24 = 'leads';
$lang_user_campaignsupdate_text_25 = 'associados à campanha';
$lang_user_campaignsupdate_text_26 = 'Todos os ';
$lang_user_campaignsupdate_text_27 = 'leads';
$lang_user_campaignsupdate_text_28 = 'Todos os clientes';
$lang_user_campaignsupdate_link_29 = 'Criar';

//user/interactionsindex.php -falta adicionar-
$lang_user_interactionsindex_text_1 = 'Home';
$lang_user_interactionsindex_text_2 = 'Interações';
$lang_user_interactionsindex_text_3 = 'Gestão de interações';
$lang_user_interactionsindex_text_4 = 'O módulo de gestão de interações tem como principal funcionalidade gerir toda a informação de contacto relacionado com os clientes';
$lang_user_interactionsindex_text_5 = 'Agendamentos';
$lang_user_interactionsindex_placeholder_6 = 'Pesquisar';
$lang_user_interactionsindex_title_7 = 'Número';
$lang_user_interactionsindex_title_8 = 'Nome';
$lang_user_interactionsindex_title_9 = 'Motivo';
$lang_user_interactionsindex_title_10 = 'Data de início de interação';
$lang_user_interactionsindex_title_11 = 'Pesquisar interações';
$lang_user_interactionsindex_link_12 = 'Pesquisar';
$lang_user_interactionsindex_text_13 = 'Número';
$lang_user_interactionsindex_text_14 = 'Nome';
$lang_user_interactionsindex_text_15 = 'Data';
$lang_user_interactionsindex_text_16 = 'Hora';
$lang_user_interactionsindex_text_17 = 'Motivo';
$lang_user_interactionsindex_text_18 = 'Iniciar';
$lang_user_interactionsindex_link_19 = 'Iniciar';
$lang_user_interactionsindex_text_20 = 'Contactos';
$lang_user_interactionsindex_title_21 = 'Efetuar chamada';
$lang_user_interactionsindex_link_22 = 'Iniciar interação';
$lang_user_interactionsindex_title_23 = 'Receber chamada';
$lang_user_interactionsindex_link_24 = 'Receber interação';

//user/intetactionsiniciate.php -falta adicionar
$lang_user_interactionsiniciate_text_1 = 'Chamada ao cliente';
$lang_user_interactionsiniciate_title_2 = 'Número';
$lang_user_interactionsiniciate_title_3 = 'NIF';
$lang_user_interactionsiniciate_title_4 = 'NIC';
$lang_user_interactionsiniciate_title_5 = 'Chamar';

//user/interactionspackage.php -falta adicionar-
$lang_user_interactionspackage_text_1 = 'Home';
$lang_user_interactionspackage_text_2 = 'Interações';
$lang_user_interactionspackage_text_3 = 'Receber';
$lang_user_interactionspackage_text_4 = 'Nova encomenda';
$lang_user_interactionspackage_text_5 = 'Inserir encomenda';
$lang_user_interactionspackage_text_6 = 'Introduza os dados da encomenda';
$lang_user_interactionspackage_text_7 = 'Dados da encomenda';
$lang_user_interactionspackage_text_8 = 'Número da encomenda';
$lang_user_interactionspackage_text_9 = 'Nome cliente';
$lang_user_interactionspackage_placeholder_10 = 'Nome do cliente';
$lang_user_interactionspackage_text_11 = 'Introduza o nome do cliente';
$lang_user_interactionspackage_text_12 = 'Data de encomenda';
$lang_user_interactionspackage_title_13 = 'Introduza a data de início da encomenda';
$lang_user_interactionspackage_text_14 = 'Introduza a data de início da encomenda';
$lang_user_interactionspackage_text_15 = 'Hora';
$lang_user_interactionspackage_title_16 = 'Introduza a hora de início da encomenda';
$lang_user_interactionspackage_text_17 = 'Introduza a hora de início da encomenda';
$lang_user_interactionspackage_text_18 = 'Data de entrega';
$lang_user_interactionspackage_title_19 = 'Introduza a data de entrega da encomenda';
$lang_user_interactionspackage_text_20 = 'Introduza a data de entrega da encomenda';
$lang_user_interactionspackage_text_21 = 'Descrição';
$lang_user_interactionspackage_placeholder_22 = 'Descrição da encomenda';
$lang_user_interactionspackage_title_23 = 'Introduza a descrição da encomenda';
$lang_user_interactionspackage_text_24 = 'Introduza a descrição da encomenda';
$lang_user_interactionspackage_text_25 = 'Estado da encomenda';
$lang_user_interactionspackage_text_26 = 'Cancelado';
$lang_user_interactionspackage_text_27 = 'Pendente';
$lang_user_interactionspackage_text_28 = 'Processamento';
$lang_user_interactionspackage_text_29 = 'Finalizado';
$lang_user_interactionspackage_link_30 = 'Inserir';

//user/interactionsreceive.php -falta adicionar-
$lang_user_interactionsreceive_text_1 = 'Home';
$lang_user_interactionsreceive_text_2 = 'Interações';
$lang_user_interactionsreceive_text_3 = 'Receber';
$lang_user_interactionsreceive_text_4 = 'Em chamada...';
$lang_user_interactionsreceive_text_5 = 'Dados do cliente';
$lang_user_interactionsreceive_text_6 = 'Número do cliente';
$lang_user_interactionsreceive_text_7 = 'Nome';
$lang_user_interactionsreceive_text_8 = 'NIC';
$lang_user_interactionsreceive_text_9 = 'E-mail';
$lang_user_interactionsreceive_text_10 = 'Observações';
$lang_user_interactionsreceive_text_11 = 'Dados da encomenda';
$lang_user_interactionsreceive_text_12 = 'Número da encomenda';
$lang_user_interactionsreceive_text_13 = 'Data da encomenda';
$lang_user_interactionsreceive_text_14 = 'Hora';
$lang_user_interactionsreceive_text_15 = 'Data da entrega';
$lang_user_interactionsreceive_text_16 = 'Descrição';
$lang_user_interactionsreceive_text_17 = 'Estado da encomenda';
$lang_user_interactionsreceive_text_18 = 'Pendente';
$lang_user_interactionsreceive_text_19 = 'Processamento';
$lang_user_interactionsreceive_text_20 = 'Finalizado';
$lang_user_interactionsreceive_text_21 = 'Dados da chamada';
$lang_user_interactionsreceive_text_22 = 'Observações';
$lang_user_interactionsreceive_title_23 = 'Introduza as observações da chamada';
$lang_user_interactionsreceive_text_24 = 'Introduza as observações da chamada';
$lang_user_interactionsreceive_text_25 = 'Deseja voltar a ser contactado?';
$lang_user_interactionsreceive_title_26 = 'Inserir nova encomenda';
$lang_user_interactionsreceive_text_27 = 'Nova encomenda';
$lang_user_interactionsreceive_title_28 = 'Inserir nova interação';
$lang_user_interactionsreceive_text_29 = 'Terminar';

//user/interactionssuccess.php -falta adicionar-
$lang_user_interactionssuccess_text_1 = 'Chamada ao cliente';
$lang_user_interactionssuccess_text_2 = 'A interação teve sucesso?';
$lang_user_interactionssuccess_text_3 = 'Sim';
$lang_user_interactionssuccess_text_4 = 'Não';
$lang_user_interactionssuccess_link_5 = 'Ok';

//user/packageindex.php -falta adicionar-
$lang_user_packageindex_text_1 = 'Home';
$lang_user_packageindex_text_2 = 'Encomendas';
$lang_user_packageindex_text_3 = 'Gestão de encomendas';
$lang_user_packageindex_text_4 = 'O módulo de gestão de encomendas tem como principal objetivo gerir toda a informação de novas encomendas associadas aos clientes.';
$lang_user_packageindex_placeholder_5 = 'Pesquisar';
$lang_user_packageindex_title_6 = 'Referência';
$lang_user_packageindex_title_7 = 'Nome cliente';
$lang_user_packageindex_title_8 = 'Data encomenda';
$lang_user_packageindex_title_9 = 'Hora';
$lang_user_packageindex_title_10 = 'Data entrega';
$lang_user_packageindex_title_11 = 'Todas as encomendas';
$lang_user_packageindex_title_12 = 'Encomendas pendentes';
$lang_user_packageindex_title_13 = 'Encomendas finalizadas';
$lang_user_packageindex_title_14 = 'Encomendas em processamento';
$lang_user_packageindex_title_15 = 'Pesquisar encomendas';
$lang_user_packageindex_link_16 = 'Pesquisar';
$lang_user_packageindex_text_17 = 'Referência';
$lang_user_packageindex_text_18 = 'Data encomenda';
$lang_user_packageindex_text_19 = 'Hora';
$lang_user_packageindex_text_20 = 'Data entrega';
$lang_user_packageindex_text_21 = 'Descrição';
$lang_user_packageindex_text_22 = 'Opções';
$lang_user_packageindex_text_23 = 'Ver';
$lang_user_packageindex_text_24 = 'Alterar';

//user/packageview.php -falta adicionar-
$lang_user_packageview_text_1 = 'Home';
$lang_user_packageview_text_2 = 'Encomendas';
$lang_user_packageview_text_3 = 'Ver';
$lang_user_packageview_text_4 = 'Ver encomenda';
$lang_user_packageview_text_5 = 'Ver os dados da encomenda.';
$lang_user_packageview_text_6 = 'Dados da encomenda';
$lang_user_packageview_text_7 = 'Número da encomenda';
$lang_user_packageview_text_8 = 'Nome do cliente';
$lang_user_packageview_text_9 = 'Data encomenda';
$lang_user_packageview_text_10 = 'Hora';
$lang_user_packageview_text_11 = 'Data entrega';
$lang_user_packageview_text_12 = 'Descrição';
$lang_user_packageview_text_13 = 'Estado da encomenda';
$lang_user_packageview_text_14 = 'Pendente';
$lang_user_packageview_text_15 = 'Processamento';
$lang_user_packageview_text_16 = 'Finalizado';

//user/packageupdate.php -falta adicionar-
$lang_user_packageupdate_text_1 = 'Home';
$lang_user_packageupdate_text_2 = 'Encomendas';
$lang_user_packageupdate_text_3 = 'Alterar';
$lang_user_packageupdate_text_4 = 'Alterar encomenda';
$lang_user_packageupdate_text_5 = 'Altere os dados da encomenda.';
$lang_user_packageupdate_text_6 = 'Dados da encomenda';
$lang_user_packageupdate_text_7 = 'Número da encomenda';
$lang_user_packageupdate_text_9 = 'Nome cliente';
$lang_user_packageupdate_placeholder_10 = 'Nome do cliente';
$lang_user_packageupdate_text_11 = 'Altere o nome do cliente';
$lang_user_packageupdate_text_12 = 'Data de encomenda';
$lang_user_packageupdate_title_13 = 'Altere a data de início da encomenda';
$lang_user_packageupdate_text_14 = 'Altere a data de início da encomenda';
$lang_user_packageupdate_text_15 = 'Hora';
$lang_user_packageupdate_title_16 = 'Altere a hora de início da encomenda';
$lang_user_packageupdate_text_17 = 'Altere a hora de início da encomenda';
$lang_user_packageupdate_text_18 = 'Data de entrega';
$lang_user_packageupdate_title_19 = 'Altere a data de entrega da encomenda';
$lang_user_packageupdate_text_20 = 'Altere a data de entrega da encomenda';
$lang_user_packageupdate_text_21 = 'Descrição';
$lang_user_packageupdate_placeholder_22 = 'Descrição da encomenda';
$lang_user_packageupdate_title_23 = 'Altere a descrição da encomenda';
$lang_user_packageupdate_text_24 = 'Altere a descrição da encomenda';
$lang_user_packageupdate_text_25 = 'Estado da encomenda';
$lang_user_packageupdate_text_26 = 'Cancelado';
$lang_user_packageupdate_text_27 = 'Pendente';
$lang_user_packageupdate_text_28 = 'Processamento';
$lang_user_packageupdate_text_29 = 'Finalizado';
$lang_user_packageupdate_link_30 = 'Alterar';

//user/personal.php -falta adicionar-
$lang_user_personal_text_1 = 'Home';
$lang_user_personal_text_2 = 'Área pessoal';
$lang_user_personal_text_3 = 'Gestão área pessoal';
$lang_user_personal_text_4 = 'O módulo de gestão da Área Pessoal serve para alterar os dados de perfil.';
$lang_user_personal_text_5 = 'Nome';
$lang_user_personal_placeholder_6 = 'Nome do funcionário';
$lang_user_personal_title_7 = 'Altere o seu nome';
$lang_user_personal_text_8 = 'Altere o seu nome';
$lang_user_personal_text_9 = 'E-mail';
$lang_user_personal_placeholder_10 = 'E-mail do funcionário';
$lang_user_personal_title_11 = 'Altere o seu e-mail';
$lang_user_personal_text_12 = 'Altere o seu e-mail';
$lang_user_personal_text_13 = 'Fotografia';
$lang_user_personal_title_14 = 'Altere a sua fotografia';
$lang_user_personal_text_15 = 'Altere a sua fotografia';
$lang_user_personal_text_16 = 'Palavra-passe';
$lang_user_personal_text_17 = 'Nova palavra-passe';
$lang_user_personal_placeholder_18 = 'Nova palavra-passe';
$lang_user_personal_title_19 = 'Introduza a nova palavra-passe';
$lang_user_personal_text_20 = 'Introduza a nova palavra-passe';
$lang_user_personal_text_21 = 'Confirme a palavra-passe';
$lang_user_personal_placeholder_22 = 'Nova palavra-passe';
$lang_user_personal_title_23 = 'Confirme a nova palavra-passe';
$lang_user_personal_text_24 = 'Confirme a nova palavra-passe';
$lang_user_personal_text_25 = 'Palavra-passe atual';
$lang_user_personal_placeholder_26 = 'Palavra-passe atual';
$lang_user_personal_title_27 = 'Introduza a palavra-passe atual';
$lang_user_personal_text_28 = 'Introduza a palavra-passe atual';
$lang_user_personal_link_29 = 'Guardar';

?>