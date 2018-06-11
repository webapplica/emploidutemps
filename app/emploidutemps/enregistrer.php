<?php
include('../../includes/connexion.php');
session_start();
$sql="INSERT INTO emploi_temps ('annee_scolaire', 'id_semestre', 'id_niveau', 'id_periode', 'jour', 'heure_deb', 'heure_fin', 'id_element', 'id_salle', 'id_professeur', 'id_groupe')";
$sql.= " VALUES(";
$sql.=intval($_POST['annee_scolaire']).",";
$sql.=intval($_POST['id_semestre']).",";
$sql.=intval($_POST['id_niveau']).",";
$sql.=intval($_POST['id_periode']).",";
$sql.=intval($_POST['jour']).",";
$sql.=intval($_POST['heure_deb']).",";
$sql.=intval($_POST['heure_fin']).",";
$sql.=intval($_POST['id_element']).",";
$sql.=intval($_POST['id_salle']).",";
$sql.=intval($_POST['id_professeur']).",";
$sql.=intval($_POST['id_groupe']);
$sql.=")";

if (mysqli_query($conn,$sql)) {
  $_SESSION['message']='Emploi ajouté avec succès';
}
else {
    $_SESSION['message']= "Error: " . $sql . "<br>" . $conn->error;
}
  header('Location: /');
?>
