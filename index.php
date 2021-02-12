<?php
//Iniciar Sesion
if(!isset($_SESSION)){ session_start(); }
//Modelo
require_once 'models/project.php';
require_once 'models/aboutMe.php';
require_once 'models/contact.php';

include_once "config/parameters.php";
include_once "views/include/header.php";
include_once "autoload.php";
?>

<!--CONTENT CENTER-->
<article id="contenido">    
    
    <!--GET contiene un valor-->
    <?php if(isset($_GET["contenido"])):?>
    <?php $contenido = $_GET["contenido"];
        Switch($contenido):
            
            case "login":?>
                <!--Contenido: Edit-->
                <section class="ContentCenter login">
                    <?php
                        $login = new EditController();
                        $login->index();
                    ?>
                </section>
            <?php break;?>
            <?php 
            case "edit":?>
                <!--Contenido: Edit-->
                <section class="ContentCenter edit">
                    <?php
                        $edit = new EditController();
                        $edit->edit();
                    ?>
                </section>    
            <?php break;?>
             <!--Contenido: Error-->
            <?php default:?>
                <section>
                    <?php
                        $error = new ErrorController();
                        $error->index();
                    ?>
                </section>
            <?php break;?>
    
        <?php endswitch; ?>
    
             
             
    <!--GET no contiene un valor-->
    <?php else:?>
        <!--Contenido: Intro-->
        <section id="Intro">
            <?php
            $intro = new IntroController();
            $intro->index();
            ?>
        </section>

        <!--Contenido: AboutMe-->
        <section id="AboutMe">
            <?php
            $aboutMe = new AboutMeController();
            $aboutMe->index();
            ?>
        </section>
        
        <!--Contenido: Projects-->
        <section id="Project">
            <?php
            $project = new ProjectController();
            $project->index();
            ?>
        </section>

        <!--Contenido: Contact-->
        <section id="Contact">
            <?php
            $contact = new ContactController();
            $contact->index();
            ?>  
        </section>
        
    <?php endif;?>
</article>

<!--Pie de pagina-->
<?php include_once "views/include/footer.php";?>
