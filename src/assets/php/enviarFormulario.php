<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Formulario</title>
    <meta http-equiv="Refresh" content="5;URL=index.html">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formulario.css">

</head>
<body>


<center> <h2>Bienvenido a</h2></center>
<center><img src="images/logoparaamarillo.png" alt="logo" width="50%"></center>
<br>



<?php

$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$email=$_POST["Correo"];
$tipoDocumento=$_POST["TipoDocumento"];
$documento=$_POST["Documento"];
$nacimiento=$_POST["fechaNacimiento"];
$intereses=$_POST["Intereses"];
$tipoSuscripcion=$_POST["TipoSuscripcion"];
$pais=$_POST["Pais1"];
$provincia=$_POST["Provincia"];
$password=$_POST["password"];


print "<p>Bienvenido/a <strong>$nombre +" "+ $apellido</strong>.</p>\n";
print "\n";
print "<p>Su documento es <strong>$documento</strong>.</p>\n";
print "\n";
print "<p>Su eMail es <strong>$email</strong>.</p>\n";
print "\n";


//Incluimos los datos de conexión y las funciones.

include("datosDB.php");
$con = misqli_connect($host,$usuario,$clave,$basededatos) or die ("no se puede conectar al servidor de la base de datos");
if (!$con){
    die("conexión fallida: ". mysqli_connect_error());
}

$db = mysqli_select_db($con,$basededatos) or die ( "Error, No se ha podido conectar a la base de datos";)
$consulta = "INSERT INTO Usuario( Nombre, Apellido,CorreoElectronico,NumeroDocumento,FechaNacimiento, Clave) VALUES ('$nombre','$apellido','$email','$documento',
'$nacimiento', '$password')";

if(mysqli_query ($con, $consulta)){
    echo "<p>Registro Agregado</p> ";
} else {
    echo "<p>No se agrgó nuevo registro</p>";
    echo "Error:" . $consulta . "<br>" . mysqli_error($scon);
}
mysqli_close($con);

s
?>


<center> <h5>Serás redirigido en unos segundos...</h5></center>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>