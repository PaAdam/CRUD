<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername= "localhost";
    $username = "root";
    $password =""; 
    $database="projetl";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql="DELETE FROM projet WHERE id=$id";
    $connection->query($sql);
}
 header("location: /CRUD/index.php");
 exit;
?>