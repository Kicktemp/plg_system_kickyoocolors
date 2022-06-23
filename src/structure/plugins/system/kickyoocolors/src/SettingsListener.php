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

class SettingsListener
{
	public static function initCustomizer(Config $config)
	{
		$config->addFile('customizer', Path::get('../config/customizer.json'));
	}
}
