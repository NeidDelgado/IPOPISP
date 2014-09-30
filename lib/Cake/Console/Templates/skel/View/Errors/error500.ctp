<?php
/**
<<<<<<< HEAD
 *
 * PHP 5
 *
=======
>>>>>>> origin/master
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<<<<<<< HEAD
<h2><?php echo $name; ?></h2>
=======
<h2><?php echo $message; ?></h2>
>>>>>>> origin/master
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
