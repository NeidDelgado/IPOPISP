<?php
echo $this->Rss->header();

if (!isset($channel)) {
	$channel = array();
}
if (!isset($channel['title'])) {
<<<<<<< HEAD
	$channel['title'] = $title_for_layout;
=======
	$channel['title'] = $this->fetch('title');
>>>>>>> origin/master
}

echo $this->Rss->document(
	$this->Rss->channel(
		array(), $channel, $this->fetch('content')
	)
);

?>