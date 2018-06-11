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
      include('../../includes/connexion.php');
      include('../../includes/menu.php');
      ?>
     <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1>Nouveau Emploi du temps</h1>
         <form action="enregistrer.php" method="POST" class="form-control">
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="annee_scolaire">Année scolaire</label>
              <select class="custom-select" name="annee_scolaire" id="annee_scolaire">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM annee_scolaire";
                   $result_annee = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_annee)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['annee_scolaire']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_semestre">Semestre</label>
              <select class="custom-select" name="id_semestre" id="id_semestre">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM semestre";
                   $result_semestre = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_semestre)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['label_semestre']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_niveau">Niveau</label>
              <select class="custom-select" name="id_niveau" id="id_niveau">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM niveau";
                   $result_niveau = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_niveau)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['label_niveau']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
              <label for="id_periode">Période</label>
              <select class="custom-select" name="id_periode" id="id_periode">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM periode";
                   $result_periode = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_periode)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['label_periode']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="jour">Jour</label>
              <select class="custom-select" name="jour" id="jour">
                  <option selected value="-1">Choisir...</option>
                  <option value="1">LUNDI</option>
                  <option value="2">MARDI</option>
                  <option value="3">MERCREDI</option>
                  <option value="4">JEUDI</option>
                  <option value="5">VENDREDI</option>
                  <option value="6">SAMEDI</option>
                  <option value="7">DIMANCHE</option>
              </select>
          </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
              <label for="heure_deb">Heure début</label>
              <select class="custom-select" name="heure_deb" id="heure_deb">
                  <option selected value="-1">Choisir...</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
              </select>
          </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="heure_fin">Heure fin</label>
              <select class="custom-select" name="heure_fin" id="heure_fin">
                  <option selected value="-1">Choisir...</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>

              </select>
          </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_element">Element</label>
              <select class="custom-select" name="id_element" id="id_element">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM element";
                   $result_element = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_element)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['label_element']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_salle">Salle</label>
              <select class="custom-select" name="id_salle" id="id_salle">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM salle";
                   $result_salle = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_salle)) {
                  ?>
                  <option value="<?php echo $row['id_salle']; ?>"><?php echo $row['nom_salle']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_groupe">Groupe</label>
              <select class="custom-select" name="id_groupe" id="id_groupe">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM groupe";
                   $result_groupe = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_groupe)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['label_groupe']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6">
         <div class="form-group">
              <label for="id_professeur">Professeur</label>
              <select class="custom-select" name="id_professeur" id="id_professeur">
                  <option selected value="-1">Choisir...</option>
                  <?php
                  //définir la requete
                  $sql = "SELECT * FROM professeur";
                   $result_groupe = mysqli_query($conn,$sql);
                   // boucle sur les données
                   while($row = mysqli_fetch_assoc($result_groupe)) {
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nom_prof']; ?></option>
                 <?php
                   }
                   ?>
              </select>
          </div>
         </div>
         <div class="col-md-6">
         <button type="submit" class="btn btn-primary">Enregister</button>
         </div>
         </div>
         </form>
        </div>
     </div>
     <?php
    include('../../includes/pied.php');
    ?>
    </main>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/popper.min.js"></script>
</body>
</html>
