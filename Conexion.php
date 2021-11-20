<?php
require_once("DatosDB.php");

try
{
    $connection=new PDO('mysql:host='.DB_HOST.'dbname='.DB_NAME,DB_USER,DB_PASS);
}
catch(Exception $e)
{
    die($e->getMessage());
}

?>