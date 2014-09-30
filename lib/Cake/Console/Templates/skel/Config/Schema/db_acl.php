<?php
/**
 * This is Acl Schema file
 *
 * Use it to configure database for ACL
 *
<<<<<<< HEAD
 * PHP 5
 *
=======
>>>>>>> origin/master
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config.Schema
 * @since         CakePHP(tm) v 0.2.9
 */

/*
 *
 * Using the Schema command line utility
 * cake schema run create DbAcl
 *
 */
class DbAclSchema extends CakeSchema {

<<<<<<< HEAD
=======
/**
 * Before event.
 *
 * @param array $event The event data.
 * @return bool success
 */
>>>>>>> origin/master
	public function before($event = array()) {
		return true;
	}

<<<<<<< HEAD
	public function after($event = array()) {
	}

=======
/**
 * After event.
 *
 * @param array $event The event data.
 * @return void
 */
	public function after($event = array()) {
	}

/**
 * ACO - Access Control Object - Something that is wanted
 */
>>>>>>> origin/master
	public $acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

<<<<<<< HEAD
=======
/**
 * ARO - Access Request Object - Something that wants something
 */
>>>>>>> origin/master
	public $aros = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

<<<<<<< HEAD
=======
/**
 * Used by the Cake::Model:Permission class.
 * Checks if the given $aro has access to action $action in $aco.
 */
>>>>>>> origin/master
	public $aros_acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'aro_id' => array('type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
		'aco_id' => array('type' => 'integer', 'null' => false, 'length' => 10),
		'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1))
	);

}
