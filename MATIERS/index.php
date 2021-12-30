<?php

include './configdata.php'

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/etudiant/bootstrap.min.css">
    <script src="/etudiant/bootstrap.min.js"></script>
    <script src="/etudiant/popper.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Afficher Etudiant</title>
</head>

<body class="" style=" background: linear-gradient(
35deg, #66fcf1, #45a29e);
   ">

    <form name="form" action="note.php" method="post">
        <div class="container">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM `matier`  ");
            echo "<center>";
            echo "<hr/>";
            echo "<select id='rech'>";

            echo "<option value=''>-- Recherche Matier  par Nom</option>";

            while ($row  = mysqli_fetch_array($result)) {

                echo "<option value='$row[id_matier]'   >$row[nom_matier]</option>";
            }
            echo "</select>";
            echo "</center>";
            

            ?>

            <div class="row">
                <div class="col-lg-10 offset mt-3">
                    <table class="table table-striped table-bordered bg-light">
                        <thead>
                            <tr class="bg-dark text-light text-center">
                                <th>ID</th>
                                <th>NOM & PRENOM</th>
                                <th>Note :</th>
                                <th>EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM etudiant";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                                    <tr class="text-center">
                                        <td><?= $row['id']; ?> <input type="hidden" id="id_etd" name="id_etd" value="<?= $row['id']; ?>"></td>
                                        <td><?= $row['nom']; ?></td>
                                        <td><input type="number" for="note" name="note_a" id="note_a"></td>


                                        <td><input class="btn btn-info" onclick="on_submit()" href="note.php?id=<?= $row['id']; ?> " id="submit" type="submit" name="submit" value="submit"> </td>




                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>


                    <div class="form-group text-center">
                        <!-- <a class="btn btn-warning text-center" href="showdata.php">Ajouter nouvel Etudiant</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- <input id="submit" type="submit" name="submit" value="submit" > -->


        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <?

        // $id_mat =  $_POST["rech"];
        // $id_etd =  $_POST["id_etd"];
        // $note_a =  $_POST["note_a"];

        $_SESSION['rech'] = $_POST['rech'];

        $_SESSION['id_etd']
            = $_POST['id_etd'];

        $_SESSION['note_a']
            = $_POST['note_a'];

        ?>
        <!-- 
        <script>
            $("#rech").chosen();


            function senddata() {

                var id_mat = document.getElementById('rech').value;
                var id_etd = document.getElementById('id_etd').value;
                var note_a = document.getElementById('note_a').value;

                localStorage.setItem("id_mat", id_mat );
                localStorage.setItem("id_etd", id_etd );
                localStorage.setItem("note_a", note_a );

                
                window.location.href = "note.php";
               

            }
        </script> -->
    </form>

</body>

</html>