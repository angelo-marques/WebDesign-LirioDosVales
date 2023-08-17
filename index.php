<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Lírio dos Vales</title>
        <!-- Favicon and Touch Icons -->
        
        <!--Responsável pelo metadata-->
		<?php include_once("meta.php"); ?>
        
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">   
		<!--Responsável pelo css-->
		<?php include_once("css/css.php"); ?>
        <!--Verifica menu-->
        <?php include_once("var.php"); ?>
	</head>
    <body>
        <div class="main-container">
            <?php include_once("view/header/header.php");?>
            <div class="main-container">
                <?php include_once("view/body/body.php");?>              
            </div>
            <?php include_once("view/footer/footer.php");?>  
        </div>
        <div class="body-overlay"></div>
        <div class="body-background"></div>
        <?php include_once("view/components/menu_lateral.php");?>
        <?php include_once("view/components/loader.php");?>
        <?php include_once("js/js.php");?>
   </body>
</html>
