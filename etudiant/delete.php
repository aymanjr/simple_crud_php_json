<?php 
    
    include "configdata.php";
    $id=$_GET["id"];

    $sql = "DELETE FROM etudiant WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    }else{
        echo "Error";
    } 
?>