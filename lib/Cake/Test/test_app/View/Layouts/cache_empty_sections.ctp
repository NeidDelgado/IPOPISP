<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<<<<<<< HEAD
	<title><?php echo $title_for_layout; ?></title>
=======
	<title><?php echo $this->fetch('title'); ?></title>
>>>>>>> origin/master
	<!--nocache--><?php $x = 1; ?><!--/nocache-->
</head>
<body>
	<!--nocache--><?php $x++; ?><!--/nocache-->
	<!--nocache--><?php $x++; ?><!--/nocache-->
	<?php echo $this->fetch('content'); ?>
	<!--nocache--><?php echo 'cached count is: ' . $x; ?><!--/nocache-->
</body>
</html>