<!DOCTYPE html>
<html lang="fr">

<head>
    <title>INSTADOG - Communauté de chiens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="profil_user.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.wallpaperup.com%2Fuploads%2Fwallpapers%2F2013%2F12%2F11%2F191759%2Fae5fb76ec7d4e6e611258b64cb4ed5fb.jpg&f=1");
    
}

.jumbotron { 
    background-color: #525050; /* Gris */
    color: #ffffff;
}

  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }


.carousel-inner{
    height: auto;
}

.text-decoration{
    text-decoration: underline;
}
.container{
    background-color: white;
}
</style>
</head>

<body>

  <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  
  <?php

    include 'header.php';
    ?>



     <!--  ///Text Profil////////////////////////////////////////////////////////////////////////////////////////////////7 -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/chien1.jpg" alt="Los Angeles" width="1100" height="400">
                <div class="card-img-overlay">
      <h4 class="card-title mt-5 ml-5">John Doe</h4>
      
    </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>


    <!-- ///deuxieme parti////////////////////////////////////////////////////////////////////////////////////////////////// -->
   
    <h2 class="text-center mt-4 text-decoration">Articles</h2>
  <div class="container mt-4">
  <div class="d-flex justify-content-center">
    <button class="btn btn-danger mb-3 mt-3" type="button" data-toggle="collapse" data-target="#footwear" aria-expanded="false" aria-controls="footwear">
Ajouter un Article
</button>
  </div>
  <div class="d-flex justify-content-center">
    

<div class="collapse" id="footwear" style="width: 36rem;">
                    <div class="card card-body">
                        <div class="row ">
                            <form class="needs-validation formPadding" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3 sm-6 text-center">
                                        <label for="validationCustom01">Texte</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 sm-6 text-center">
                                        <label for="validationCustom02">Photo</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                   
                                                                        
                                    <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                        <button class="btn btn-primary bottonConnecter">VALIDER</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
  </div>
  </div>

  <div class="container">
  <div class="d-flex justify-content-center">
 <div class="card mt-1 mb-4" style="width:500px">
  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1" alt="Lights" style="width:100%" alt="Card image">
 
  <div class="card-body">
    <h4 class="card-title">Feioso</h4>
    <p class="card-text">Some example text some example text. John Doe is an architect and engineer sdsd dffd  wewefefref  gergergerg  ergergerg ergerg gf a we t ree rger  eg</p>
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