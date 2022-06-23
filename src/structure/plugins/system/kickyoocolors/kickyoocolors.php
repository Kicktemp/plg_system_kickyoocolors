<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [AUTHOR_URL]
 * @license    [LICENSE]
 * @link       [AUTHOR_URL]
 */

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Uri\Uri;
use YOOtheme\Application;
use YOOtheme\Path;

defined('_JEXEC') or die;

/**
 * KickYooColors plugin.
 *
 * @package   plg_system_kickyoocolors
 * @since     1.0.0
 */
class plgSystemKickYooColors extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
	protected $app;

	/**
	 * Database object
	 *
	 * @var    DatabaseDriver
	 * @since  1.0.0
	 */
	protected $db;

	/**
	 * Affects constructor behavior. If true, language files will be loaded automatically.
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * onAfterInitialise.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function onAfterInitialise ()
	{
		// Check if YOOtheme Pro is loaded
		if (!class_exists(Application::class, false)) {
			return;
		}

		$root = __DIR__;
		$rootUrl = Uri::root(true);

		// set alias
		Path::setAlias('~kickyoocolors', $root);
		Path::setAlias('~kickyoocolors_url', $rootUrl . '/plugins/system/kickyoocolors');

		// register plugin
		JLoader::registerNamespace('Kicktemp\\Yootheme\\Colors\\', __DIR__ . '/src', false, false, 'psr4');


		// Load a single module from the same directory
		$app = Application::getInstance();
		$app->load(__DIR__ . '/bootstrap.php');
	}
}
