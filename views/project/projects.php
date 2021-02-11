<div class="Project">
    <h2><a href="#Project">Proyectos destacados</a></h2>
    <ul>
        <?php while ($valores = $query->fetch_assoc()):?>
        <li>
        <a target="_blank" href="<?=$valores["url"]?>">
            <img src="asset/img/<?=$valores["image"]?>" alt="tiendaOnline">
            <h3><?=$valores["Pname"]?></h3>
            <p><?=$valores["description"]?></p>        
        </a>
        </li>        
        <?php endwhile;?>
    </ul>
    <br>
    <br>    
    <p>Más proyectos próximamente ...</p>
</div>

