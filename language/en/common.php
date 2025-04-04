<?php
/**
 *
 * Top Poster of the Month: an extension for the phpBB forum software package.
 *
 * @copyright (c) 2005, 2019, 3Di <https://www.phpbbstudio.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	$lang = [];
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

$lang = array_merge($lang, [
	'TPOTM_CAT'						=> 'Top Poster of the Month',
	'TPOTM_EVER_CAT'				=> 'Top Posters ever',
	'TPOTM_NOW'						=> 'At the present time is ',
	'TPOTM_NOBODY'					=> 'not yet available ',
	'TPOTM_BADGE'					=> 'Badge ?',
	'TPOTM_BADGE_MINIPROFILE'		=> 'Top Poster of the Month',
	'TOTAL_MONTH'					=> ' out of <strong>%1s</strong> (%2s%%)',
	'TPOTM_EXPLAIN'					=> 'From %1s to %2s',
	'TPOTM_NO_EXPLAIN'				=> 'During the current month',
	'TPOTM_TOT_POST'				=> 'Total posts',
	'TPOTM_DATE'					=> 'Year and month',
	'TPOTM_LAST_POST_IN_MONTH'		=> 'Last on',

	'TPOTM_CACHE'	=> [
		0	=> ' <i>[updates at every page load]</i>',
		1	=> ' <i>[updates every <strong>%d</strong> minute]</i>',
		2	=> ' <i>[updates every <strong>%d</strong> minutes]</i>',
	],

	'TPOTM_POST'	=> [
		1	=> ' with a total of <strong>%d</strong> post',
		2	=> ' with a total of <strong>%d</strong> posts',
	],

	// Translators please do not change the following line, no need to translate it!
	'TPOTM_CREDIT_LINE'				=>	' | <a href="https://github.com/3D-I/tpotm">Top Poster of the Month</a> &copy; 2005, 2018 - 3Di',

	// Hall of Fame
	'VIEWING_TPOTM_HALL'			=> 'Viewing TPotM Hall of Fame',
	'TPOTM_PAGE'					=> 'Hall of Fame',
	'TPOTM_HELLO'					=> 'Top Posters of the Month &ndash; Hall of Fame',
	'TPOTM_EXPLAIN_HALL'			=> 'From %1s to %2s',
	'TPOTM_HALL_NO_EXPLAIN'			=> 'Since epoch till the very end of the previous month',
	'TPOTM_HALL_NO_TOP_POSTERS'		=> 'There are no past Top Posters yet to display.',

	'HALL_OF_FAME'	=> [
		0	=> 'Hall of Fame',
		1	=> 'Hall of Fame &bull; page %d',
		2	=> 'Hall of Fame &bull; page %d',
	],

	'TPOTM_HALL_COUNT'	=> [
		1	=> ' Found a total of <strong>%d</strong> top poster',
		2	=> ' Found a total of <strong>%d</strong> top posters',
	],

	'NOT_AUTHORISED_TPOTM_HALL'		=> 'You are not authorized to see the Top Posters of the Month Hall of Fame.',
	'TPOTM_HALL_DISABLED'			=> 'The Top Posters of the Month Hall of Fame is disabled.',
]);
