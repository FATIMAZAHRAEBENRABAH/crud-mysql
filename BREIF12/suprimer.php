<?php

 include 'connect.php';

  $matricule = $_GET['dele'];
    $sqlDelete = "DELETE FROM employe WHERE matricule= $matricule";
  mysqli_query($con,$sqlDelete);
    header('Location: index.php');
    
?>

