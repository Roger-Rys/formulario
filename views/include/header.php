<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>rys portafolio</title>
        
        <!--Header-->
        <!--Load fonts-->
            <!--Raleway-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
            <!--Roboto Slab-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">  
            <!--Noto Serif-->
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet"> 
       
         
         <!--Styles-->
        <link rel="stylesheet" href="asset/style/style.css"/> 
        
    </head>
    <body>
        <main>
            <!--HEADER-->
            <nav id="menu">
                <ul>
                    <li><a href="<?=url_root?>#Intro">Rys</a></li>
                    <li><a href="<?=url_root?>#AboutMe">Sobre Mi</a></li>
                    <li><a href="<?=url_root?>#Project">Proyectos</a></li>
                    <li><a href="<?=url_root?>#Contact">Contactos</a></li>
                    <li><a href="<?=url_content?>edit">Editar</a></li>
                    <!--ADMIN-->
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==USER_ADMIN):?>
                    <li><a href="<?=url_content?>add">Agregar imagen</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
