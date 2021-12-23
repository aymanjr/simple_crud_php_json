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


    <div class="container">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM `matier`  ");
        echo "<center>";
        echo "<hr/>";
        echo "<select id='rech'>";
        echo "<option>-- Recherche Matier par Nom</option>";
        while ($row  = mysqli_fetch_array($result)) {

            echo "<option>$row[nom_matier]</option>";
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
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nom']; ?></td>
                                    <td><input type="number" for="note" id="lanote"></td>


                                    <td><a class="btn btn-info" >ADD</a></td>

                                    <script>
                                        $("#btn").click(function() {
                                            var id = $row['id'];
                                            var matiernom = document.getElementById("rech");
                                            var matiernom = e.options[e.selectedIndex].text;
                                            var note = $("#lanote");

                                             alert(matiernom);

                                        });
                                    </script>

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



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $("#rech").chosen();
    </script>

</body>

</html>