<?php
/**
 *
 * Top Poster of the Month: an extension for the phpBB forum software package.
 *
 * @copyright (c) 2005, 2017, 3Di
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACL_U_ALLOW_TPOTM_VIEW'	=> '<strong>TPotM</strong> - Can use the extension',
	'ACL_A_TPOTM_ADMIN'			=> '<strong>TPotM</strong> - Can administer the extension',
]);
