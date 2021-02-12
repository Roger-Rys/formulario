<div class="login">
    <h2>Ingresar para editar</h2>
    <form action="<?=url_root?>controllers/EditController.php" method="POST">
        <label for="user">Usuario</label>
        <input type="text" name="user" required/>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required/>

        <input type="submit" value="Iniciar Sesion">
    </form>
    
</div>



