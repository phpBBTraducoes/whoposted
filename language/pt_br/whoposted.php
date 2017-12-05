<?php
/**
*
* @package Who posted
* @copyright (c) 2016 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.7] (https://github.com/phpBBTraducoes)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'WHOPOSTED_TITLE'	=> 'Quem postou?',
	'WHOPOSTED_EXP'		=> 'Esta é uma lista de todos os membros que publicaram neste tópico',
	'WHOPOSTED_SHOW'	=> 'Mostrar tópico',
	'AND_MORE_USERS'				=> array(
		1 => 'e mais %s usuário',
		2 => 'e mais %s usuários',
	),
));
