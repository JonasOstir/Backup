<?php
/*
 * PHP Klein - How to use named parameters
 */

//require the autoloader
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
echo __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//create a new klein instance
$klein = new \Klein\Klein();

//set up the handler to respond to named requests
//you could also use .htaccess rewrites to redirect all content to route.php
//thus the path whould be : '/[:name]'
$klein->respond('/[:name]', function ($request) {
	echo 'test';
    return 'Hello ' . $request->name;
});

//dispatch the reponses
$klein->dispatch();
?>
