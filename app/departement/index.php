<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emploi du Temps</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <main role="main" class="container">
    <?php
    //inclure le menu
    include('../../includes/menu.php');
    //inclure le fichier de connexion
    include('../../includes/connexion.php');
    //définir la requete
    $sql = "SELECT * FROM departement";
     $result = mysqli_query($conn, $sql);
    ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1>Départemnts </h1>
        </div>
     </div>
   <?php
   if ($result->num_rows > 0) {

    ?>
    <table class="table table-bordered table-inverse table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Code departement</th>
                <th>Label departement</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

                // boucle sur les données
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td scope="row"><?php echo $row["id_departement"] ?></td>
                    <td><?php echo $row["code_departement"] ?></td>
                    <td><?php echo $row["label_departement"] ?></td>
                    <td></td>
                </tr>
                <?php
                }

            ?>
            </tbody>
    </table>

   <?php
   }// fin de si
   else{
   ?>
   <div class="alert alert-danger" role="alert">
    Pas de données
</div>
   <?php
   }//fin de else
   $conn->close();
   ?>
       <?php
    include('../../includes/pied.php');
    ?>
    </main><!-- /.container -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/popper.min.js"></script>
</body>
</html>
