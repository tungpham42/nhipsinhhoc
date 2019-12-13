<?php
//ini_set('session.save_handler','files');
//ini_set('session.save_path','/tmp');
//ini_set('session.save_handler', 'redis');
//ini_set('session.save_path', 'tcp://127.0.0.1:6379');
//require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/compress.inc.php';
//If the HTTPS is not found to be "on"
if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}
require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/pusher.inc.php';
require realpath($_SERVER['DOCUMENT_ROOT']).'/inc/functions.vi.inc.php';