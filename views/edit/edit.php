<div>
    <?php if(isset($_SESSION["update"])):?>
        <p><?=$_SESSION["update"]?></p>
    <?php endif;?>
</div>
<div class="AboutMe">
    <h2><a href="#AboutMe">Habilidades</a></h2>
    <form action="<?=url_root?>controllers/EditController.php" method="GET">
        
        <?php while ($result = $skills_datos->fetch_assoc()):?>
        
        <label for="title">Titulo</label><br>
        <input type="text" name="title<?=$result["id"]?>" value="<?=$result["title"]?>"/><br>
        
        <label for="desc">Descripcion</label><br>
        <textarea name="desc<?=$result["id"]?>"><?=$result["description"]?></textarea><br>
        
        <button type="submit" name="skill" value="<?=$result["id"]?>">Enviar</button>
        <hr>
        <?php endwhile;?> 
        
    </form>
</div>

<div class="Project">
    <h2><a href="#Project">Proyectos destacados</a></h2>
    <form action="<?=url_root?>controllers/EditController.php" method="GET">
        <?php while ($result = $projects_datos->fetch_assoc()):?>
        
        <label for="title">Titulo</label><br>
        <input type="text" name="title<?=$result["id"]?>" value="<?=$result["Pname"]?>"/><br>
        
        <label for="desc">Descripcion</label><br>
        <textarea name="desc<?=$result["id"]?>"><?=$result["description"]?></textarea><br>
        
        <label for="url">url</label><br>
        <input type="url" name="url<?=$result["id"]?>" value="<?=$result["url"]?>"/><br>
        
        <label for="image">Imagen</label><br>
        <input type="file" name="image<?=$result["id"]?>" value="<?=$result["image"]?>"/>
        <button type="submit" name="project" value="<?=$result["id"]?>">Enviar</button>
        <hr>        
        <?php endwhile;?>
    </form>
    
</div>
<div class="Contact">
    <h2><a href="#Contact">Contacta conmigo</a></h2>
    <form action="<?=url_root?>controllers/EditController.php" method="GET">
        <?php while ($result = $contacts_datos->fetch_assoc()):?>
        
        <label for="username">Nombre User</label><br>
        <input type="text" name="username<?=$result["id"]?>" value="<?=$result["username"]?>"/><br>

        <label for="url">url</label><br>
        <input type="url" name="url<?=$result["id"]?>" value="<?=$result["url"]?>"/><br>

        <label for="image">Imagen</label><br>
        <input type="file" name="image<?=$result["id"]?>" value="<?=$result["image"]?>"/>
        <button type="submit" name="contact" value="<?=$result["id"]?>">Enviar</button>
        <hr>
        <?php endwhile;?>
    </form>
</div>
