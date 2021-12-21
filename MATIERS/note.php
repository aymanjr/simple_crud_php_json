<?php 
    
    include ".//configdata.php";
    $id=$_GET["id"];
    $id=$_GET["nom"];
    $id=$_GET["note"];

    $sql  = "INSERT INTO `note` (`id_matier_f`, `id_etd_f`, `note`) VALUES ('$id', '2', '11') ";
    // $sql = "DELETE FROM etudiant WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    }else{
        echo "Error";
    } 

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>