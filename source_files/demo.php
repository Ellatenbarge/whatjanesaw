<?php
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => TRUE
));

$template = $twig->loadTemplate('roomview.html');
//need to rewrite url here... 
//should the room view have it's own controller?

$docdatajson = file_get_contents("json.php");
$docdata = json_decode($docdatajson, true);
// now we have an array data, needs to be loaded from external json file

$template->display(array(
	'pageTitle' => 'room1 views',
	'docs' => $docdata
	));
		
?>
		