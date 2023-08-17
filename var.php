<?php

    if(isset($_GET['p'])){
        $page = $_GET['p'];
    } else {
        $page = "index";
    }

$home =  " ";
$empresa = " "; 
$galeria = " "; 
$contato = " ";
$servicos = " ";
$erro = " ";

switch ($page){
        
    case "index":
        $home = "current-menu-item";
    break;
    case "empresa":
        $empresa = "current-menu-item";
    break;
    case "galeria":
        $galeria = "current-menu-item";
    break;
    case "contato": 
        $contato = "current-menu-item";
    break;
    case "servicos":
        $servicos = "current-menu-item";
    break;
    case "erro":
        $erro = "current-menu-item";
    break;
    
    default:
        $page = "index";
        $home = "current-menu-item";
    break;
}

?>