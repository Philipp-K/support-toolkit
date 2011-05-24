<?php
/**
*
* @package Support Toolkit - Profile List
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL'					=> 'Todos',

	'CLICK_TO_DELETE'		=> 'Apagar todos os utilizadores selecionados, clicando neste botão. <em>(Não pode ser revertido!)</em>',

	'FILTER'				=> 'Filtro',

	'LIMIT'					=> 'Limite',

	'ONLY_NON_EMPTY'		=> 'Só não vazios',
	'ORDER_BY'				=> 'Ordenar por',

	'PROFILE_LIST'			=> 'Lista do Perfil',
	'PROFILE_LIST_EXPLAIN'	=> 'Ferramenta para exibir informações do Perfil para múltiplos Utilizadores. Esta ferramenta pode ajudar a detetar contas Spam.',

	'USERS_DELETE'				=> 'Apagar utilizadores selecionados',
	'USERS_DELETE_CONFIRM'		=> 'Tem a certeza que quer apagar os utilizadores selecionados? Apagando os utilizadores com esta ferramente <strong>eliminará</strong> também todas as suas mensagens!',
	'USERS_DELETE_SUCCESSFULL'	=> 'Todos os utilizadores selecionados foram apagados com sucesso!',
));

?>