<?php  
require 'connect.php';

    if(isset($_GET['matricule'])){
        $matricule = $_GET['matricule'];
        $sqlDelete = "SELECT * FROM employe WHERE matricule=$matricule";
        $result = mysqli_query($con,$sqlDelete);
        $dat = mysqli_fetch_assoc($result);
        
         
  
            
        }
    if(!empty($_POST)){
        
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_naissance = $_POST['date_naissance'];
        $departement = $_POST['departement'];
        $salaire = $_POST['salaire'];
        $fonction = $_POST['fonction'];
        $photo = $_POST['photo'];

        $Update ="UPDATE employe SET  matricule='$matricule',nom='$nom',prenom='$prenom',date_naissance='$date_naissance',departement='$departement'
        ,salaire='$salaire',fonction='$fonction',photo='$photo' WHERE matricule=$matricule ";

        $result = mysqli_query($con, $Update);
        header('location: index.php');
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">


  <title>modifier</title>
  <link rel="stylesheet" href="modifier.css">

</head>
<body>

 <div class="container">
  <div class="row ">
   <form action="" method="POST" class="form-horizontal col-md-6 pt-4 "  enctype="multipart/form-data">
    <h3>Les Employes</h3>
    <div class="form-group">
      
     <label for="input1"class="control-label"> </label>
      <div class="col-sm-10">
       <input type="number" name="matricule" value="<?php echo $dat['matricule'] ?>" placeholder="matricule" class="form-control me-6" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="nom" value="<?php echo $dat['nom']  ?>"  placeholder="Nom" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="prenom" value="<?php echo $dat['prenom'] ?>"  placeholder="prenom" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="date_naissance" value="<?php echo $dat['date_naissance'] ?>"  placeholder="date_naissance" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="departement" value="<?php echo $dat['departement'] ?>"  placeholder="departement" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="salaire" value="<?php echo $dat['salaire'] ?>"  placeholder="salaire" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="fonction" value="<?php echo $dat['fonction'] ?>" placeholder="fonction" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="file" name="photo" value="<?php echo $dat['photo']?>"  id="bg" >
      </div>
    </div>
    <button type='submit'>Modifier</button>
  
    <a href="index.php">
       <button class="btn btn-dark" type="button" class="btn">
         le tablau
       </button>
      </a>
    
   </form>
   
  </div>
 </div>

</body>
</html>