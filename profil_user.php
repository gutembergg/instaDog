<!DOCTYPE html>
<html lang="fr">

<head>
    <title>INSTADOG - Communauté de chiens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="profil_user.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  <?php

  include 'header.php';
  ?>


  <!-- ///Donnees du User////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="jumbotron text-center pt-5 pb-5">
        <h2>PRENOM + NOM</h2>
        <h6><span  aria-hidden="true"></span> Mon Profil Utilisateur</h6>
    </div>

    <div class="container text-center">
            <p>Mes données personnelles:</p> 
            <br>
        <div class="row">          
                <div class="col-md-4 col-lg-4">
                        <table class="table table-hover text-left">
                                <tbody>
                                  <tr>
                                    <th scope="row">NOM</th>
                                    <td>Van Doornik <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">PRENOM</th>
                                    <td>Adrien <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                </tbody>
                              </table>
                </div>
                <div class="cocol-md-4 col-lg-4">
                        <table class="table table-hover text-left">
                                <tbody>
                                  <tr>
                                    <th scope="row">EMAIL</th>
                                    <td>adrien.vandoornik@gmail.com <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">MOT DE PASSE</th>
                                    <td>****** <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                </tbody>
                              </table>
                </div>
                <div class="cocol-md-4 col-lg-4">
                        <table class="table table-hover text-left">
                                <tbody>
                                  <tr>
                                    <th scope="row">PSEUDO</th>
                                    <td>Adrien421 <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">DERNIERE CONNEXION</th>
                                    <td>22/01/2019 10h37 <button type="button" class="btn btn-link">modifier</button></td>
                                  </tr>
                                </tbody>
                              </table>
                </div>
        </div>



        <!-- ///Mes Chiens/////////////////////////////////////////////////////////////////////////////////////////////// -->
        
        <h3>MES CHIENS</h3>
        <p><em>Ma liste de chiens</em></p>
                <p></p><button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Ajouter un chien
                </button></p>           
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                        <div class="row">
                                <form class="needs-validation formPadding" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Surnom</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Nom de l'élevage</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Âge</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Sexe</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Race</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Photo</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto"
                                                required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                        </div>
                                    </div>
                                        <div class="col-md-6 mb-3">
                                                <button type="button" class="btn btn-primary btn-block">Ajouter un chien</button>
                                            </div>
                                    </div>
                            </div>  
                </div>
            </div>
       
       


 
<div class="container">
  <div class="row">
  <div class="col-sm-4">
    <div class="card" >
      <div class="card-body">
      <img class="card-img-top" img src="image/chien1.jpg" alt="Card image cap" width="300" height="300">
        <h5 class="card-title">Place Title Here</h5>
        <p class="card-text">Place the content here and it will size as per the content only.</p>
        <a href="http://www.tutorialmines.net/bootstrap-3-tutorial/" class="btn btn-primary">Bootstrap tutorials</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" >
      <div class="card-body">
      <img class="card-img-top" img src="image/chien2.png" alt="Card image cap" width="300" height="300">
        <h5 class="card-title">Place Title Here</h5>
        <p class="card-text">Place the content here and it will size as per the content only.</p>
        <a href="http://www.tutorialmines.net/bootstrap-3-tutorial/" class="btn btn-primary">Bootstrap tutorials</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" >
      <div class="card-body">
      <img class="card-img-top" img src="image/chien3.jpg" alt="Card image cap" width="300" height="300">
        <h5 class="card-title">Place Title Here</h5>
        <p class="card-text">Place the content here and it will size as per the content only.</p>
        <a href="http://www.tutorialmines.net/bootstrap-3-tutorial/" class="btn btn-primary">Bootstrap tutorials</a>
      </div>
    </div>
  </div>
  </div>
</div>
 <!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <?php
include 'footer.php';

?>
</body>
</html>