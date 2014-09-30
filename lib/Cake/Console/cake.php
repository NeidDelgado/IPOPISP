#!/usr/bin/php -q
<?php
/**
 * Command-line code generation utility to automate programmer chores.
 *
<<<<<<< HEAD
 * PHP 5
 *
=======
>>>>>>> origin/master
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console
 * @since         CakePHP(tm) v 1.2.0.5012
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

<<<<<<< HEAD
$ds = DIRECTORY_SEPARATOR;
$dispatcher = 'Cake' . $ds . 'Console' . $ds . 'ShellDispatcher.php';
=======
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

$dispatcher = 'Cake' . DS . 'Console' . DS . 'ShellDispatcher.php';
>>>>>>> origin/master
$found = false;
$paths = explode(PATH_SEPARATOR, ini_get('include_path'));

foreach ($paths as $path) {
<<<<<<< HEAD
	if (file_exists($path . $ds . $dispatcher)) {
=======
	if (file_exists($path . DS . $dispatcher)) {
>>>>>>> origin/master
		$found = $path;
		break;
	}
}

if (!$found) {
<<<<<<< HEAD
	$rootInstall = dirname(dirname(dirname(__FILE__))) . $ds . $dispatcher;
	$composerInstall = dirname(dirname(__FILE__)) . $ds . $dispatcher;
=======
	$rootInstall = dirname(dirname(dirname(__FILE__))) . DS . $dispatcher;
	$composerInstall = dirname(dirname(__FILE__)) . DS . $dispatcher;
>>>>>>> origin/master

	if (file_exists($composerInstall)) {
		include $composerInstall;
	} elseif (file_exists($rootInstall)) {
		include $rootInstall;
	} else {
		trigger_error('Could not locate CakePHP core files.', E_USER_ERROR);
	}
<<<<<<< HEAD
} else {
	include $found . $ds . $dispatcher;
}

unset($paths, $path, $found, $dispatcher, $root, $ds);
=======
	unset($rootInstall, $composerInstall);

} else {
	include $found . DS . $dispatcher;
}

unset($paths, $path, $found, $dispatcher);
>>>>>>> origin/master

return ShellDispatcher::run($argv);
