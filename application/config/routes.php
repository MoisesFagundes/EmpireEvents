<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['Home'] = 'Page/home';
$route['Faq/(:num)'] = 'Page/faq/$1';
$route['Sair'] = 'Login/logout';
$route['Login'] = 'Page/login';
$route['Painel'] = 'Painel/painel';
$route['Contato'] = 'Page/contato';
$route['Mercado/(:num)/(:any)/(:any)/?(:any)?'] = 'Mercado/mercado/$1/$2/$3/$4';
$route['Briefing'] = 'Page/briefing';
$route['Carrinho'] = 'Mercado/carrinho';
$route['Finalizar'] = 'Mercado/finalizar';
$route['Nossa_Historia'] = 'Page/nossa_historia';
$route['Guia_para_Empresas'] = 'Page/guia_para_empresas';
$route['Remover_Pacote/(:num)'] = 'Mercado/remover_pacote/$1';
$route['Esqueceu_a_Senha'] = 'Page/esqueceu_a_senha';
$route['Pagina_de_Anuncio/(:num)'] = 'Mercado/pagina_de_anuncio/$1';
$route['Cadastro'] = 'Page/cadastro';
$route['Termos_e_Condicoes'] = 'Page/termos_e_condicoes';
$route['Politica_de_Privacidade'] = 'Page/politica_de_privacidade';
$route['default_controller'] = 'Page/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

