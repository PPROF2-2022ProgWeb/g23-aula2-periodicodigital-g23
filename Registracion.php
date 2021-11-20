<?php

require_once("Conexion.php");

session_start();

if(isset($_POST["Registracion"]))
{
    if(!empty($_POST['Nombre_Completo']) && !empty($_POST['Email']) && !empty($_POST['User_Name ']) && !empty($_POST['Password']))
    {
        $Nombre_Completo=$_POST['nombreCompleto'];
        $Email=$_POST['email'];
        $User_Name=$_POST['user'];
        $Password=$_POST['password'];
        $Password_hash=Password_hash($password,PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM usuarios WHERE Email=:email");
        $query->bindParam("Email", $Email, PDO::PARAM_STR);
        $query->execute();

        if($query->rowCount() >0)
        {
            echo '<p class="error"> El email ya se encuentra registrado</p>';

        }
        if($query->rowCount() ==0)
        {
            $query= $connection->prepare("INSERT INTO usuarios(Nombre_Completo,Email,User_Name,Password) VALUES(:Nombre_Completo, :Email, :Password_hash, :Email)");
            $query->bindParam("Nombre_Completo", $Nombre_Completo, PDO::PARAM_STR);
            $query->bindParam("User_Name", $User_Name, PDO::PARAM_STR);
            $query->bindParam("Password_hash", $Password_hash, PDO::PARAM_STR);
            $query->bindParam("Email", $Email, PDO::PARAM_STR);

            $result=$query->execute();

            if($result)
            {
                $message="Cuenta creada correctamente";
            }
            else 
            {
                $message="Error al guardar los datos ";
            }
        }
        else
        {
            $message="El nombre de usuario ya existe, por favor ingresa uno nuevo. ";
        }
    }
    else
        {
            $message="Todos los campos son requeridos ";
        }
    
}
 
?>

<?php if(!empty($message)) { echo '<p class="error"> . "Mensaje: " . $message . </p>';} ?>

<div class= "container mregister"> 
    <div id= "login"> 
        <h1> Registrar </h1>
        <form name="refisterform" id="refisterform" action="Registracion.php" method="post">
            <p>
                <label for="user_login"> Nombre Completo <br/>
                <inpunt type="text" name="nombreCompleto" id="nombreCompleto" class="input" /> </label>
            <p>

            <p>
                <label for="user_email"> Email <br/>
                <inpunt type="email" name="email" id="email" class="input" /> </label>
            <p>

            <p>
                <label for="user_username"> Usuario <br/>
                <inpunt type="text" name="user" id="user" class="input" /> </label>
            <p>

            <p>
                <label for="user_pass"> Contraseña <br/>
                <inpunt type="password" name="password" id="password" class="input" /> </label>
            <p>

            <p class="submit">

                <inpunt type="submit" name="register" id="register" class="button" value="Resgistrar" />
            <p>

            <p class="regtext"> ¿Ya tienes una cuenta? <a href="login.html"> Entra Aquí!</a><p>

</form>
    </div>
</div>


