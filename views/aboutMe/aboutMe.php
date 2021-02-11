<div class="AboutMe">
    <div class="infoAboutMe">
        <h2><a href="#AboutMe">Acerca de mi</a></h2>
        <p>Hola!!! Me llamo Roger Reyes y soy un desarrollador web fullstack junior, en constante aprendizaje y con el deseo de desarrollar grandes proyectos 
            para solucionar problemas.</p>
        <br>
        <p>Dispuesto a trabajar en grupo para lograr objetivos mutuos.</p>
        <br>
        <p>Tambien, llevo algunos años programando pero ultimamente me he dedicado al mundo del desarrollo web.</p>
        <img src="asset/img/perfil.png">
    </div>  
    
    <div class="skill">
        <h2><a href="#AboutMe">Habilidades</a></h2>
        <?php while ($datos = $result->fetch_assoc()):?>
        
        <h3><?=$datos["title"]?></h3>
        <ul>
            <li><?=$datos["description"]?></li>
        </ul>  
        <?php endwhile;?>
                
    </div>  
    
</div>

