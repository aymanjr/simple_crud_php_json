<?php

include "./configdata.php";


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Afficher Etudiant</title>
</head>

<body class="" style=" background: linear-gradient(
35deg, #66fcf1, #45a29e);
   ">

    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset mt-3">
                <table class="table table-striped table-bordered bg-light">
                    <thead>
                        <tr class="bg-dark text-light text-center">
                            <th>ID</th>
                            <th>NOM & PRENOM</th>
                            <th>ADDRESS</th>
                            <th>datenaissance</th>
                            <th>email</th>
                            <th>tel</th>


                            <th>EDIT</th>
                            <th>DELETE</th>
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
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nom']; ?></td>
                                    <td><?= $row['address']; ?></td>
                                    <td><?= $row['datenaissance']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['tel']; ?></td>


                                    <td><a class="btn btn-info" href="edit.php?id=<?= $row['id']; ?>">Modifer</a></td>
                                    <td><a class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Supprission</a></td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>


                <div class="form-group text-center">
                    <a class="btn btn-warning text-center" href="showdata.php">Ajouter nouvel Etudiant</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>