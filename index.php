<?php
// var_dump($_GET);
echo "test";

// on sépare les paramètres
$params = explode('/', $_GET['p']);
var_dump($params);

// est ce qu'un parametre existe

if ($params[0] != ""){
    $controller = ucfirst($params[0]);
    echo $controller;

}else{

}



?>