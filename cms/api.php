<?php
//header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include("engine.php");
$req = array_merge($_GET, $_POST);
apiJson( $req['query'], $req );
?>