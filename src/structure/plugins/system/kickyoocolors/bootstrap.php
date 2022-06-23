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

use YOOtheme\Builder;
use YOOtheme\Path;

return [

	'theme' => [
		'styles' => [
			'components' => [
				'kickvariables' => Path::get('./assets/less/variables.less'),
				'kickinverse' => Path::get('./assets/less/inverse.less'),
				'kickbutton' => Path::get('./assets/less/button.less'),
				'kickcard' => Path::get('./assets/less/card.less'),
				'kicksection' => Path::get('./assets/less/section.less'),
				'kicktext' => Path::get('./assets/less/text.less'),
				'kicktile' => Path::get('./assets/less/tile.less'),
			],
		],
	],

	'events' => [

		// Add settings Panels
		'customizer.init' => [
			SettingsListener::class => 'initCustomizer',
		],

		'builder.type' => [
			FormListener::class => ['addStyleOptions', -10]
		]
	],

	];
