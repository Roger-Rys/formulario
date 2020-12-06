<?php
include_once "views/include/header.php";
include_once "autoload.php";
?>
<!--CONTENT-->
<article id="contenido">
    <section id="Intro">
        <?php
        $intro = new IntroController();
        $intro->index();
        ?>
    </section>
    
    <section id="AboutMe">
        <?php
        $aboutMe = new AboutMeController();
        $aboutMe->index();
        ?>
    </section>
    
  
    <section id="Project">
        <?php
        $project = new ProjectController();
        $project->index();
        ?>
    </section>
    

    <section id="Contact">
        <?php
        $contact = new ContactController();
        $contact->index();
        ?>  
    </section>
</article>
<?php
include_once "views/include/footer.php";
?>
