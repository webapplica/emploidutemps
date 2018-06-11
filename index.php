<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emploi du Temps</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main role="main" class="container">
<?php
include('includes/menu.php');
include('includes/connexion.php');

?>
    <div class="row">
    <div class="col-md-12">
      <?php
       session_start();
       if(isset($_SESSION['message'])){
      ?>
      <div class="alert alert-success">
        <?php echo $_SESSION['message']; ?>
      </div>
      <?php
      unset($_SESSION['message']);
    }?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Emploi du Temps</h1>
            <?php
            // insertion du fommulaire pour filrer l'emploi du temps
            include('includes/form_filtre.php');
            ?>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
    <table class="table table-bordered">
            <tr>
                <td></td>
                <td>LUNDI</td>
                <td>MARDI</td>
                <td>MECREDI</td>
                <td>JEUDI</td>
                <td>VENDREDI</td>
                <td>SAMEDI</td>
                <td>DIMANCE</td>
            </tr>
        <?php
        // boucle sur toutes les heures de la journer de 8h du mation jusqu'à 18h du soir
        for ($heure=8; $heure <= 18; $heure++) {
        ?>
        <tr>
        <td><?php echo $heure ?> </td>
        <?php
          // boucle
          for ($jour=1; $jour <=7 ; $jour++) {
            ?>
            <td>
              <?php
              $sql = "SELECT * FROM emploi_temps join element on emploi_temps.id_element=element.id";
              //teste si le filtre est envoyé
            if(isset($_GET['annee_scolaire']) && !empty($_GET['annee_scolaire'])){
            $sql = "SELECT * FROM emploi_temps join element on emploi_temps.id_element=element.id where emploi_temps.annee_scolaire=".$_GET['annee_scolaire'];
            }
               $result = mysqli_query($conn, $sql);
               //si des données existent
               if ($result && mysqli_num_rows($result) > 0) {
               // boucle sur les données
               while($row = mysqli_fetch_assoc($result)) {
                 if($row['jour']==$jour && ($row['heure_deb']==$heure || $row['heure_deb']==$heure ) ){
                   echo "<span class='badge badge-success'>".$row['label_element']."</span>";
                 }
               }
             }// si des données existent
              ?>
            </td>
        <?php
          }
         ?>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
    </div>
    </div>

</main><!-- /.container -->
    <?php
    include('includes/pied.php');
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>
