<?php

	$image              = $_POST['image'];
	list($type, $image) = explode(';',$image);
	list(, $image)      = explode(',',$image);
	$image              = base64_decode($image);
	$image_name         = time() . '.png';

	file_put_contents('uploads/' . $image_name, $image);

	$baseUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];// . $_SERVER['REQUEST_URI'];
	$newURL  = $baseUrl . '/upload/crop-preview/';

	header('Location: ' . $newURL);

	exit;
?>
