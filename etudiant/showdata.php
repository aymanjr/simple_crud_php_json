<?php

    include "./configdata.php";

    $result ="";

    if (isset($_POST['submit'])){
        $name = test_input($_POST['nom']) ;
        $address = test_input($_POST['address']);
        $datenaissance = test_input($_POST['datenaissance']);
        $email = test_input($_POST['email']);
        $tel = test_input($_POST['tel']);
        
        

        $sql = "INSERT INTO etudiant (nom, address, datenaissance,email,tel) VALUES ('$name', '$address','$datenaissance','$email','$tel')";

        if (mysqli_query($conn, $sql)) {
            $result = "un enregistrement inséré avec succès";
        }else{ 
             $result = "Quelque chose s est mal passé" .mysqli_connect_error($conn);
        }
       
    }


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
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

    <title>Ecole </title>
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 offset-lg-4 bg-light text-dark mt-4 p-3 rounded">
                <h3 class="p-2 text-center"> Ajouter Etudiant </h3>
                <hr class="bg-light">
                <form action="" method="post">
                        <div class="form-group">
                            <label for="nom">Nom et Prenom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Nom" required> 
                        </div>
                    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="address" required>
                        </div>
                         
                        <div class="form-group">
                            <label for="datenaissance">datenaissance</label>
                            <input type="text" name="datenaissance" class="form-control" placeholder="YYYY/MM/DD" required> 
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email" class="form-control" placeholder="email" required> 
                        </div>
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="number" name="tel" class="form-control" placeholder="tel" required> 
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Ajouter" name="submit" class="btn btn-primary btn-block" placeholder="Ajouter Etudiant" > 
                        </div>
                        <div class="form-group text-center">
                            <a href="index.php" class="text-dark lead">Afficher</a>
                        </div>                        

                        <div class="form-group text-center">
                            <p class="lead"> <?php echo $result; ?> </p>
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