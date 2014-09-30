<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/whoweare', array('controller' => 'pages', 'action' => 'display', 'whoweare'));
	Router::connect('/ipopispworks', array('controller' => 'pages', 'action' => 'display', 'ipopispworks'));
	Router::connect('/ipopmil', array('controller' => 'pages', 'action' => 'display', 'ipopmil'));
	Router::connect('/ipopbus', array('controller' => 'pages', 'action' => 'display', 'ipopbus'));
<<<<<<< HEAD
	Router::connect('/ipopgov', array('controller' => 'pages', 'action' => 'display', 'ipopgov'));
=======
	Router::connect('/ipopmov', array('controller' => 'pages', 'action' => 'display', 'ipopgov'));
>>>>>>> origin/master
	Router::connect('/ipopedu', array('controller' => 'pages', 'action' => 'display', 'ipopedu'));
	Router::connect('/features', array('controller' => 'pages', 'action' => 'display', 'features'));
	Router::connect('/leaflet', array('controller' => 'pages', 'action' => 'display', 'leaflet'));
	Router::connect('/screenshots', array('controller' => 'pages', 'action' => 'display', 'screenshots'));
	Router::connect('/screenshots_user', array('controller' => 'pages', 'action' => 'display', 'screenshots_user'));
	Router::connect('/screenshots_root', array('controller' => 'pages', 'action' => 'display', 'screenshots_root'));
	Router::connect('/screenshots_agentmanager', array('controller' => 'pages', 'action' => 'display', 'screenshots_agentmanager'));
	Router::connect('/screenshots_investor', array('controller' => 'pages', 'action' => 'display', 'screenshots_investor'));
	Router::connect('/screenshots_salesman', array('controller' => 'pages', 'action' => 'display', 'screenshots_salesman'));
	Router::connect('/screenshots_statistics', array('controller' => 'pages', 'action' => 'display', 'screenshots_statistics'));
	Router::connect('/pricing', array('controller' => 'pages', 'action' => 'display', 'pricing'));
	Router::connect('/marksofesteem', array('controller' => 'pages', 'action' => 'display', 'marksofesteem'));
	Router::connect('/faqs', array('controller' => 'pages', 'action' => 'display', 'faqs'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'contact'));
	Router::connect('/marksofesteem04', array('controller' => 'pages', 'action' => 'display', 'marksofesteem04'));
	Router::connect('/marksofesteem00', array('controller' => 'pages', 'action' => 'display', 'marksofesteem00'));
	Router::connect('/marksofesteem01', array('controller' => 'pages', 'action' => 'display', 'marksofesteem01'));
	Router::connect('/marksofesteem02', array('controller' => 'pages', 'action' => 'display', 'marksofesteem02'));
	Router::connect('/marksofesteem03', array('controller' => 'pages', 'action' => 'display', 'marksofesteem03'));
	Router::connect('/marksofesteem05', array('controller' => 'pages', 'action' => 'display', 'marksofesteem05'));
	Router::connect('/marksofesteem06', array('controller' => 'pages', 'action' => 'display', 'marksofesteem06'));
	Router::connect('/marksofesteem07', array('controller' => 'pages', 'action' => 'display', 'marksofesteem07'));
	Router::connect('/marksofesteem08', array('controller' => 'pages', 'action' => 'display', 'marksofesteem08'));
        Router::connect('/marksofesteem09', array('controller' => 'pages', 'action' => 'display', 'marksofesteem09'));
	Router::connect('/marksofesteem10', array('controller' => 'pages', 'action' => 'display', 'marksofesteem10'));
	Router::connect('/marksofesteem11', array('controller' => 'pages', 'action' => 'display', 'marksofesteem11'));        
	Router::connect('/marksofesteem12', array('controller' => 'pages', 'action' => 'display', 'marksofesteem12'));    
        Router::connect('/marksofesteem13', array('controller' => 'pages', 'action' => 'display', 'marksofesteem13'));
        Router::connect('/marksofesteem14', array('controller' => 'pages', 'action' => 'display', 'marksofesteem14'));
        Router::connect('/marksofesteem15', array('controller' => 'pages', 'action' => 'display', 'marksofesteem15'));
        Router::connect('/marksofesteem16', array('controller' => 'pages', 'action' => 'display', 'marksofesteem16'));
	Router::connect('/marksofesteem17', array('controller' => 'pages', 'action' => 'display', 'marksofesteem17'));
	Router::connect('/marksofesteem18', array('controller' => 'pages', 'action' => 'display', 'marksofesteem18'));        
	Router::connect('/marksofesteem19', array('controller' => 'pages', 'action' => 'display', 'marksofesteem19'));  
        Router::connect('/marksofesteem20', array('controller' => 'pages', 'action' => 'display', 'marksofesteem20'));
        Router::connect('/marksofesteem21', array('controller' => 'pages', 'action' => 'display', 'marksofesteem21'));        
        Router::connect('/marksofesteem22', array('controller' => 'pages', 'action' => 'display', 'marksofesteem22'));
        Router::connect('/marksofesteem23', array('controller' => 'pages', 'action' => 'display', 'marksofesteem23'));        
        Router::connect('/marksofesteem24', array('controller' => 'pages', 'action' => 'display', 'marksofesteem24'));        
        Router::connect('/marksofesteem25', array('controller' => 'pages', 'action' => 'display', 'marksofesteem25')); 
        Router::connect('/marksofesteem26', array('controller' => 'pages', 'action' => 'display', 'marksofesteem26'));
        Router::connect('/marksofesteem27', array('controller' => 'pages', 'action' => 'display', 'marksofesteem27'));        
        Router::connect('/marksofesteem28', array('controller' => 'pages', 'action' => 'display', 'marksofesteem28'));
        Router::connect('/marksofesteem29', array('controller' => 'pages', 'action' => 'display', 'marksofesteem29'));
        Router::connect('/marksofesteem30', array('controller' => 'pages', 'action' => 'display', 'marksofesteem30'));
        Router::connect('/marksofesteem31', array('controller' => 'pages', 'action' => 'display', 'marksofesteem31'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
