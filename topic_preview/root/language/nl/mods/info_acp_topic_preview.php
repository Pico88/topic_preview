<?php
/**
*
* topic_preview [Dutch]
*
* @package Topic Preview
* @version $Id$
* @copyright (c) 2010 Matt Friedman
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
* @author Erik Frèrejean ( erikfrerejean@phpbb.com ) http://www.erikfrerejean.nl
*/
$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'					=> 'Topic Voorbeeld',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Er zal een voorbeeld van het topic worden weergegeven zolang de muis boven de titel van het onderwerp gehouden wordt.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Topic voorbeeld instellingen',
	'TOPIC_PREVIEW_LENGTH'			=> 'Lengte van de topic voorbeeld tekst',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Geef hier aan hoeveel tekens er voor het voorbeeld gebruikt dienen te worden (standaard 150). Door deze waarde op 0 te zetten wordt deze functie uitgezet',
	'DISPLAY_TOPIC_PREVIEW'			=> 'Laat het topic voorbeeld zien',
	'TOPIC_PREVIEW_STRIP'			=> 'BBCodes die niet gebruikt worden in het voorbeeld',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Geef hier aan welde BBCodes je wilt verwijderen van het voorbeeld (bijvoorbeeld spoiler and verborgen text BBCodes). BBCodes worden gescheiden door het "|" teken, bijvoorbeeld: spoiler|hide|code',
	'TOPIC_PREVIEW_JQUERY'			=> 'Enable jQuery Topic Previews',
	'TOPIC_PREVIEW_AVATARS'			=> 'Display user avatars (in jQuery Topic Previews)',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Display “Last post” text (in jQuery Topic Previews)',
	'CHARS'							=> 'Tekens',
	'FIRST_POST'					=> 'Eerste bericht',
));

?>