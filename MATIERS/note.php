<script>
    var id_mat = localStorage.getItem("id_mat");
    var id_etd = localStorage.getItem("id_etd");
    var note_a = localStorage.getItem("note_a");
    
    // var resetValue = 0;
    // localStorage.setItem("myValue", resetValue);



    
<?php $id_mat = "<script>document.write(id_mat)</script>"?>   
<?php $id_etd = "<script>document.write(id_etd)</script>"?>   
<?php $note_a = "<script>document.write(note_a)</script>"?>   
</script>


<?php

include ".//configdata.php";

// $id_mat = $_SESSION['rech'];
// $id_etd =  $_SESSION['id_etd'];
// $note_a =  $_SESSION['note_a'];




$sql  = "INSERT INTO `note` (`id_matier_f`, `id_etd_f`, `note`) VALUES (' $id_mat','$id_etd', '$note_a') '";
// $sql = "DELETE FROM etudiant WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
    echo "Error";
}

?>