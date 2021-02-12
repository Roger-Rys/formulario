<div class="AboutMe">
    <h2><a href="#AboutMe">Habilidades</a></h2>
    <form>
        <?php while ($result = $skills_datos->fetch_assoc()):?>
        <label for="title">Titulo</label><br>
        <input type="text" name="title" value="<?=$result["title"]?>"/><br>
        <label for="desc">Descripcion</label><br>
        <textarea name="desc"><?=$result["description"]?></textarea>
        <hr>
        <?php endwhile;?> 
        <input type="submit" value="Cambiar"/>
    </form>
</div>

<div class="Project">
    <h2><a href="#Project">Proyectos destacados</a></h2>
    <form>
        <?php while ($result = $projects_datos->fetch_assoc()):?>
        
        <label for="title">Titulo</label><br>
        <input type="text" name="title" value="<?=$result["Pname"]?>"/><br>
        
        <label for="desc">Descripcion</label><br>
        <textarea name="desc"><?=$result["description"]?></textarea><br>
        
        <label for="url">url</label><br>
        <input type="url" name="url" value="<?=$result["url"]?>"/><br>
        
        <label for="file">Imagen</label><br>
        <input type="file" name="file" value="<?=$result["image"]?>"/>
        <hr>
        <?php endwhile;?>
        <input type="submit" value="Cambiar"/>
    </form>
    
</div>
<div class="Contact">
    <h2><a href="#Contact">Contacta conmigo</a></h2>
    <form>
        <?= var_dump($projects_datos->fetch_assoc())?>
        <?php while ($result = $projects_datos->fetch_assoc()):?>
        <label for="username">Nombre User</label><br>
        <input type="text" name="username" value="<?=$result["username"]?>"/><br>

        <label for="url">url</label><br>
        <input type="url" name="url" value="<?=$result["url"]?>"/><br>

        <label for="file">Imagen</label><br>
        <input type="file" name="file" value="<?=$result["image"]?>"/>
        <hr>
        <?php endwhile;?>
        <input type="submit" value="Cambiar"/>
    </form>
</div>
