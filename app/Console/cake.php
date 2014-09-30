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
 * @package       app.Console
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
<<<<<<< HEAD
$ds = DIRECTORY_SEPARATOR;
$dispatcher = 'Cake' . $ds . 'Console' . $ds . 'ShellDispatcher.php';

if (function_exists('ini_set')) {
	$root = dirname(dirname(dirname(__FILE__)));

	// the following line differs from its sibling
	// /lib/Cake/Console/Templates/skel/Console/cake.php
	ini_set('include_path', $root . $ds . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
=======

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

$dispatcher = 'Cake' . DS . 'Console' . DS . 'ShellDispatcher.php';

if (function_exists('ini_set')) {
	$root = dirname(dirname(dirname(__FILE__)));
	$appDir = basename(dirname(dirname(__FILE__)));
	$install = $root . DS . 'lib';
	$composerInstall = $root . DS . $appDir . DS . 'Vendor' . DS . 'cakephp' . DS . 'cakephp' . DS . 'lib';

	// the following lines differ from its sibling
	// /lib/Cake/Console/Templates/skel/Console/cake.php
	if (file_exists($composerInstall . DS . $dispatcher)) {
		$install = $composerInstall;
	}

	ini_set('include_path', $install . PATH_SEPARATOR . ini_get('include_path'));
	unset($root, $appDir, $install, $composerInstall);
>>>>>>> origin/master
}

if (!include $dispatcher) {
	trigger_error('Could not locate CakePHP core files.', E_USER_ERROR);
}
<<<<<<< HEAD
unset($paths, $path, $dispatcher, $root, $ds);
=======
unset($dispatcher);
>>>>>>> origin/master

return ShellDispatcher::run($argv);
