<?php
<<<<<<< HEAD
if (!isset($channel)) {
	$channel = array();
}
if (!isset($channel['title'])) {
	$channel['title'] = $title_for_layout;
}
=======
if (!isset($channel)):
	$channel = array();
endif;
if (!isset($channel['title'])):
	$channel['title'] = $this->fetch('title');
endif;
>>>>>>> origin/master

echo $this->Rss->document(
	$this->Rss->channel(
		array(), $channel, $this->fetch('content')
	)
);
<<<<<<< HEAD
?>
=======
>>>>>>> origin/master
