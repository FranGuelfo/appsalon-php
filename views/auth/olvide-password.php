<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/forget">

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" value="Reestablecer Password" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/create-account">¿Aún no tienes una cuenta? Crear una cuenta</a>
</div>