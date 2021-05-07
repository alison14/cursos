<?php
require_once 'model/database.php';


$controller3 = 'cursos';

// Todo esta lógica hara el papel de un FrontController



if(!isset($_REQUEST['t']))
{
    require_once "controller/$controller3.controller.php";
    $controller3 = ucwords($controller3) . 'Controller';
    $controller3 = new $controller3;
    $controller3->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller3 = strtolower($_REQUEST['t']);
    $accion3 = isset($_REQUEST['i']) ? $_REQUEST['i'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller3.controller.php";
    $controller3 = ucwords($controller3) . 'Controller';
    $controller3 = new $controller3;
    
    // Llama la accion
    call_user_func( array( $controller3, $accion3 ) );
}