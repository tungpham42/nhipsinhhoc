<?php
//ini_set('session.save_handler','files');
//ini_set('session.save_path','/tmp');
//ini_set('session.save_handler', 'redis');
//ini_set('session.save_path', 'tcp://127.0.0.1:6379');
//require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/compress.inc.php';<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
	$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $redirect);
	exit();
}
require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/pusher.inc.php';
require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/functions.vi.inc.php';