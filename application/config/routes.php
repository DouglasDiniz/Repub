<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* Serviços */
$route['API/Republica.create']['post'] = 'Republica/create';
$route['API/Republica.retrieve']['post'] = 'Republica/retrieve';
$route['API/Republica.update']['post'] = 'Republica/update';
$route['API/Republica.delete']['post'] = 'Republica/delete';

$route['API/Usuario/create'] = 'Usuario/create';

$route['API/Despesa/create'] = 'Despesa/create';

/* Páginas */

// CONFIGURAÇÃO PADRÃO
$route['default_controller'] = 'Paginas/despesas';
$route['404_override'] = 'Paginas/nao_encontrada';
$route['translate_uri_dashes'] = FALSE;