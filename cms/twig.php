<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("engine.php");
require_once 'vendor/autoload.php';

function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath);     
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    // return: http://localhost/myproject/
    //echo $protocol.$hostName;
    //echo dirname($pathInfo['dirname']);
    $dir = '/';
    if ( dirname($pathInfo['dirname']) !='/') $dir = dirname($pathInfo['dirname']).'/';
    return $protocol.$hostName.$dir;
}
//$templates_assoc = fetch_twig_templates();
//print_r($templates_assoc);
// todo: 404 if req name not in templates_assoc
//$loader = new Twig_Loader_Array( $templates_assoc);

//$loader = new Twig_Loader_Filesystem('../twigtemplates');
$loader = new Twig_Loader_Filesystem(dirname( dirname(__FILE__) ).'/twigtemplates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twigcache',
    'auto_reload' => true
));

$f = new Twig_SimpleFunction('fetch', function ($name, $params=array()) {
    //print_r($params);
    return fetch($name, $params);
});
$twig->addFunction($f);

/* transform /filename/param1/param2/... to ['filename', 'param1', 'param2'] and assign it to $_GET */
//print_r($_SERVER);
$p = parse_url($_SERVER['REQUEST_URI']);
if (!isset($p['query'])) $p['query']='';
if (!isset($p['path']))  $p['path']='';
//list($path, $query) =
$pathArr = array_filter(explode('/', $p['path']));
//print_r( $pathArr );
//$queryArr = array_filter(explode('&', $p['query']));
parse_str($p['query'], $queryArr);
//print_r( $queryArr );

$index = 0;
foreach($pathArr as $key) {
    $queryArr[$index] = $key;
    $index++;
}

$_GET = array_merge($_GET, $queryArr);
//$_GET['twig_file_name'] = $_GET[0];

$twig->addGlobal('_GET', $_GET);
$twig->addGlobal('_POST', $_POST);// todo add SESSION var
$twig->addGlobal('_BASE', getBaseUrl());


//$template = $twig->load(isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig');

//$dogs = fetch('Projekat') ;
//print_r(fetch_twig_templates());
//$templatename = isset($_GET['twig_file_name'])?$_GET['twig_file_name']:'index'; //from db
$templatename = isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig'; // from fs

//echo $templatename;
//$template = $twig->load(isset($_GET['twig_file_name'])?$_GET['twig_file_name'].'.twig':'index.twig');

echo $twig->render($templatename);
/*



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
