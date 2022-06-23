<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [AUTHOR_URL]
 * @license    [LICENSE]
 * @link       [AUTHOR_URL]
 */

namespace Kicktemp\Yootheme\Colors;


use YOOtheme\Config;
use YOOtheme\Path;
use YOOtheme\Arr;

class FormListener
{
	public static function addStyleOptions(Config $config, $type)
	{
		if (!in_array($type['name'], ['gallery', 'button_item', 'section', 'text', 'headline', 'grid_item', 'column', 'popover_item', 'panel-slider_item', 'panel', 'grid', 'table', 'description_list', 'map']))
		{
			return $type;
		}

		// Section
		if (Arr::has($type, 'fields.style.options'))
		{
			$type['fields']['style']['options']['Tertiary']   = 'tertiary';
			$type['fields']['style']['options']['Quaternary'] = 'quaternary';
			$type['fields']['style']['options']['Quinary']    = 'quinary';
			$type['fields']['style']['options']['Senary']     = 'senary';
		}

		// Headline
		if (Arr::has($type, 'fields.title_color.options'))
		{
			$type['fields']['title_color']['options']['Tertiary']   = 'tertiary';
			$type['fields']['title_color']['options']['Quaternary'] = 'quaternary';
			$type['fields']['title_color']['options']['Quinary']    = 'quinary';
			$type['fields']['title_color']['options']['Senary']     = 'senary';
		}

		// Text
		if (Arr::has($type, 'fields.text_color.options'))
		{
			$type['fields']['text_color']['options']['Tertiary']   = 'tertiary';
			$type['fields']['text_color']['options']['Quaternary'] = 'quaternary';
			$type['fields']['text_color']['options']['Quinary']    = 'quinary';
			$type['fields']['text_color']['options']['Senary']     = 'senary';
		}

		// Button
		if (Arr::has($type, 'fields.button_style.options'))
		{
			$type['fields']['button_style']['options']['Tertiary']   = 'tertiary';
			$type['fields']['button_style']['options']['Quaternary'] = 'quaternary';
			$type['fields']['button_style']['options']['Quinary']    = 'quinary';
			$type['fields']['button_style']['options']['Senary']     = 'senary';
		}

		// Grid Item, Panel Slider Item, Panel
		if (Arr::has($type, 'fields.panel_style.options'))
		{
			$type['fields']['panel_style']['options']['Card Tertiary']   = 'card-tertiary';
			$type['fields']['panel_style']['options']['Card Quaternary'] = 'card-quaternary';
			$type['fields']['panel_style']['options']['Card Quinary']    = 'card-quinary';
			$type['fields']['panel_style']['options']['Card Senary']     = 'card-senary';
			$type['fields']['panel_style']['options']['Tile Tertiary']   = 'tile-tertiary';
			$type['fields']['panel_style']['options']['Tile Quaternary'] = 'tile-quaternary';
			$type['fields']['panel_style']['options']['Tile Quinary']    = 'tile-quinary';
			$type['fields']['panel_style']['options']['Tile Senary']     = 'tile-senary';
		}

		// Popover Item
		if (Arr::has($type, 'fields.card_style.options'))
		{
			$type['fields']['card_style']['options']['Tertiary']   = 'tertiary';
			$type['fields']['card_style']['options']['Quaternary'] = 'quaternary';
			$type['fields']['card_style']['options']['Quinary']    = 'quinary';
			$type['fields']['card_style']['options']['Senary']     = 'senary';
		}

		return $type;
	}
}
