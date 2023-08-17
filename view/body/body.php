<?php
switch ($page){
        
    case "index":
        include_once($page.".html");
    break;
        
    case "galeria":
        include_once($page.".html");
    break;
        
    case "empresa":
        include_once($page.".html");
    break;
        
    case "contato":
        include_once($page.".html");
    break;
        
    case "servicos":
        include_once($page.".html");
    break;
    
    case "erro":
        include_once($page.".html");
    break;

    default:
        include_once($page.".php");
    break;
        
}
?>