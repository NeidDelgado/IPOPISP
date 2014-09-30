<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
<<<<<<< HEAD
	<title><?php echo $title_for_layout; ?></title>
=======
	<title><?php echo $this->fetch('title'); ?></title>
>>>>>>> origin/master
</head>

<body>
	<?php echo $this->fetch('content'); ?>

	<p>このメールは <a href="http://cakephp.org">CakePHP Framework</a> を利用して送信しました。</p>
</body>
</html>