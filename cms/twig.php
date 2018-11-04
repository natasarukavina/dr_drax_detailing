<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("engine.php");

require_once 'vendor/autoload.php';
$templates_assoc = fetch_twig_templates();
//print_r($templates_assoc);
// todo: 404 if req name not in templates_assoc
$loader = new Twig_Loader_Array( $templates_assoc
//    array(
//    'index' => 'Hello {{ name }}!',
//)
);
$twig = new Twig_Environment($loader, array(
    'cache' => 'twigcache',
    'auto_reload' => true
));

$f = new Twig_SimpleFunction('fetch', function ($name, $params=array()) {
    return fetch($name, $params);
});
$twig->addFunction($f);
$twig->addGlobal('_GET', $_GET);
$twig->addGlobal('_POST', $_POST);// todo add SESSION var
//$template = $twig->load(isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig');

//$dogs = fetch('Projekat') ;
//print_r(fetch_twig_templates());
$templatename = isset($_GET['twig_file_name'])?$_GET['twig_file_name']:'index';
//echo $templatename;
//$template = $twig->load(isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig');

echo $twig->render($templatename, array('name' => 'Fabien'));
/*

require_once 'vendor/autoload.php';
Twig_Autoloader::register();
include("includes/a_config.php");

$loader = new Twig_Loader_Filesystem('twigtemplates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twigcache',
    'auto_reload' => true
));

$f = new Twig_SimpleFunction('fetch', function ($name, $params=array()) {
    return fetch2($name, $params);
});
$twig->addFunction($f);
$twig->addGlobal('_GET', $_GET);
$twig->addGlobal('_POST', $_POST);// todo add SESSION var
//$template = $twig->load('index.html');
$template = $twig->load(isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig');

//$dogs = fetch2('Sati');

//print_r(fetch2('Projekat')); 

echo $template->render();
*/
?>
