<?php

 require 'connect.php';

?>

<!DOCTYPE html>

 <html lang="en">

  <head>
   <meta charset="UTF-8">

    <title>crud php</title>
     
      
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
      <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" 
      rel="stylesheet">

     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     
     <link rel="stylesheet" href="style.css">
 

  </head>
<body>

 <div class="container">
  <div class="row ">
   <form action="index.php" method="POST" class="form-horizontal col-md-6 pt-4 " enctype="multipart/form-data">
    <h3>Les Employes</h3>
    <div class="form-group">
      
     <label for="input1"class="control-label"> </label>
      <div class="col-sm-10">
       <input type="number" name="matricule" placeholder="matricule" class="form-control me-6" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="nom" placeholder="Nom" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="prenom" placeholder="prenom" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="date_naissance" placeholder="date_naissance" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="departement" placeholder="departement" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="salaire" placeholder="salaire" class="form-control" id="input1">
      </div>
    </div>
    <div class="form-group">
     <label for="input1"class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
       <input type="text" name="fonction" placeholder="fonction" class="form-control" id="input1">
      </div>
      <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
</div>
     <input name="submit" type="submit" value="Ajouter" class="btn btn-info m-3 " class="btn1">
      <a href="index.php">
       <button class="btn btn-dark" type="button" class="btn">
         le tablau
       </button>
      </a>
    </div>
   </form>
   
  </div>
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity=
"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity=
"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity=
"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>