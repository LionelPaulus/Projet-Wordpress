<?php

$news = htmlspecialchars($_POST['news']);
$vote = htmlspecialchars($_POST['vote']);

$wpdb->insert(
	$wpdb->prefix.'news',
	array(
		'name' => $news,
		'vote' => $vote
	)
);

die();

?>