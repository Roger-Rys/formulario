<div class="Contact">
    <h2><a href="#Contact">Contacta conmigo</a></h2>
    <nav>
        <ul>
            <?php while ($valores = $query->fetch_assoc()):?>
            <li><a target="_blank" href="<?=$valores["url"]?>">
                    <img src="asset/img/<?=$valores["image"]?>" alt="linkedin"><br><?=$valores["username"]?>
                </a>
            </li>
            <?php endwhile;?>
            
        </ul>
    </nav>
    <h6></h6>
</div>

