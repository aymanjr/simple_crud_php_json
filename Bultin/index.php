<?php

include './/configdata.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Bultin Etudiant</title>
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
                            <th>NOM COMPLET</th>
                            <th>MATIER</th>
                            <th>NOTE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT `etudiant`.`id`, `etudiant`.`nom`, `matier`.`nom_matier`, `note`.`note` FROM `etudiant`, `matier` ,`note` WHERE `matier`.`id_matier` = `note`.`id_matier_f` AND `etudiant`.`id`=`note`.`id_etd_f`";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                                <tr class="text-center">
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nom']; ?></td>
                                    <td><?= $row['nom_matier']; ?></td>
                                    <td><?= $row['note']; ?></td>
                                    
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>