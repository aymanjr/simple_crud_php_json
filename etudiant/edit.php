<?php

    include "./configdata.php";

    $id=$_GET["id"];

    $result = mysqli_query($conn, "SELECT * FROM 	etudiant	 WHERE id = '$id'");

    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $name = $_POST['nom'] ;
        $address = $_POST['address'];
        $datenaissance = $_POST['datenaissance']; 
        $email = $_POST['email']; 
        $tel = $_POST['tel']; 


        

        $sql = "UPDATE  etudiant  SET  nom ='$name', address ='$address', datenaissance ='$datenaissance',email='$email',tel = '$tel'  WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            header("Location:showdata.php");
        }
       
    }
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

    <title>Modifer databse etudiant</title>
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
                <h3 class="p-2 text-center"> Modifer Database etudiant</h3>
                <hr class="bg-light">
                <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name et Prenom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Name" required
                            value="<?=
                                $row['nom'];
                            ?>"
                            > 
                        </div>
                    
                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" name="address" class="form-control" placeholder="addresss" required
                            value="<?=
                                $row['address'];
                            ?>"
                            >
                        </div>
                      
                        <div class="form-group">
                            <label for="datenaissance">datenaissance</label>
                            <input type="text" name="datenaissance" class="form-control" placeholder="datenaissance" required
                            value="<?=
                                $row['datenaissance'];
                            ?>"
                            > 
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" class="form-control" placeholder="email" required
                            value="<?=
                                $row['email'];
                            ?>"
                            > 
                        </div>
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="text" name="tel" class="form-control" placeholder="tel" required
                            value="<?=
                                $row['tel'];
                            ?>"
                            > 
                        </div>

                        

                        
                        <div class="form-group">
                            <input type="submit" value="Modifer" name="submit" class="btn btn-primary btn-block" placeholder="Update"> 
                        </div>
                        <div class="form-group text-center">
                            <a href="showdata.php" class="text-dark lead">Ajouter</a><br>
                            <a href="index.php" class="text-danger lead">Afficher</a>
                        </div> 
                </form>
            </div>
        </div>
    </div>
    


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>
