<form class="form-control" action="/" method="GET">
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
          <label for="periode">Période</label>
          <select class="custom-select" name="periode" id="">
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
    <div class="col-md-4">
      <div class="form-group">
          <label for="annee_scolaire">Année Scolaire</label>
          <select class="custom-select" name="annee_scolaire" id="">
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
    <div class="col-md-4">
      <div class="form-group">
          <label for="semestre">Semestre</label>
          <select class="custom-select" name="semestre" id="">
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



    <button type="submit" class="btn btn-primary">Filtrer</button>
</form>
