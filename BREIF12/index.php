<?php

 require 'connect.php';

?>

<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration Page</title>
 
    <link rel="stylesheet" href="tableau.css">

  </head>
  <body>
            
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sf.php">Ajouter un Employe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Le Tableau</a>
        </li>
      </ul>
      <form action="" method="GET" class="d-flex">
        <div class="input-group mb-3">
          <input class="form-control me-2" type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
</nav>


    <?php
                    
    // AJOUT
  
    if(isset($_POST['submit'])) {
      @$matricule = $_POST['matricule'];
      @$nom = $_POST['nom'];
      @$prenom = $_POST['prenom'];
      @$date_naissance = $_POST['date_naissance'];
      @$departement = $_POST['departement'];
      @$salaire = $_POST['salaire'];
      @$fonction = $_POST['fonction'];
      // @$photo = $_FILES['photo']['name'];
  
      $dtt="INSERT INTO `employe`(`matricule`, `nom`, `prenom`, `date_naissance`, `departement`, `salaire`, `fonction`) VALUES ('$matricule','$nom','$prenom','$date_naissance','$departement','$salaire','$fonction')";
       $res = mysqli_query($con,$dtt);
      
      //  if($res){
      //     move_uploaded_file($_FILES['photo']['tmp_name'], "$photo");
      //  }
    }

    ?>
    <?php
     
     if(isset($_GET['search'])){
       $filtervalues = $_GET['search'];
       $quer = "SELECT * FROM employe WHERE CONCAT(matricule,nom,departement) LIKE '%$filtervalues%'";
       $quer_run = mysqli_query($con,$quer);

       if(mysqli_num_rows($quer_run) > 0){
         foreach($quer_run as $items){
           ?>

            <tr>
              <td><?= $items['matricule'];?></td>
              <td><?= $items['nom'];?></td>
              <td><?= $items['departement'];?></td>
            </tr>

           <?php
         }
       }
       else{

       }
     
      }

    ?>
    <div class="container-fluid g-5 p-5">
    <table  class="table table-info">
      <thead>
       <tr>
         
        <th  scope="col">matricule</th>
        <th  scope="col">nom</th>
        <th  scope="col">prenom</th>
        <th  scope="col">date_naissance</th>
        <th  scope="col">departement</th>
        <th  scope="col">salaire</th>
        <th  scope="col">fonction</th>
        <th  scope="col">photo</th>
        <th  scope="col">action</th>
        
       </tr> 
      </the
     <tbody>

  <?php

    $slec="SELECT * FROM employe";
    $result = mysqli_query($con,$slec);
    while($row = mysqli_fetch_assoc($result)){  
         
 
  ?>
  <tr>

    <td><?php echo$row['matricule'] ?></td>
    <td><?php echo $row['nom'] ?></td>
    <td><?php echo $row['prenom'] ?></td>
    <td><?php echo $row['date_naissance'] ?></td>
    <td><?php echo $row['departement'] ?></td>
    <td><?php echo $row['salaire'] ?></td>
    <td><?php echo $row['fonction'] ?></td>
    <td><img src="<?php echo $row['photo'] ?>" width="40px" > </td>
    <td>
      <button   type="button" class="btn btn-info"><a href="modifier.php?matricule=<?php echo $row['matricule'] ?>">modifier</a></button>
      <button  type="button" class="btn btn-light"><a href="suprimer.php?dele=<?php echo $row['matricule'] ?>">suprimer</a></button>
    </td>

  </tr>

  <?php
              
     }

  ?>
  </tbody>
  </table>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>






















