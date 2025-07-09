<?php 
require_once "controlador/controlador.php";
$controlador= new controlador;
if (isset($_GET["freyder"])){

}else{
    $controlador->verPagina("vista/html/inicio.php");
}
?>
