


<!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand text-light" href="galeriePhoto.php"><i class="fas fa-dog"></i> INSTADOG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo-navbar" aria-controls="demo-navbar"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="demo-navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="galeriePhoto.php">
            <i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="profil_user.php"><i class="fas fa-user-circle"></i> Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="se_connecter.php">
            <span style="font-size: 1rem;">
            <span style="color: white;">
            <i class="fas fa-sign-in-alt"></i>
            </span>
            </span>Se connecter</a>
        </li>

        <a href="inscription.php"><button type="button" class="btn btn-success ml-4 mr-4"><i class="fas fa-user-plus"></i> S'Inscrire</button>
        </a>

        <a href="profil_user.php"><button type="button" class="btn btn-danger ml-4 mr-4">
          <i class="fas fa-plus-circle"></i> Ajouter Chien</button>
        </a>
      </ul>
      <form action="galeriePhoto.php" method="GET" class="form-inline my-2 my-lg-0">
        <!-- Dans value il charge si il y a quelque chose de set dans le GET q et l'affiche dans la barre de recherche  -->
        <input class="form-control mr-sm-2" type="text" name="q"  value="<?php if (isset($_GET['q'])) echo $_GET['q']; ?>" placeholder="Chercher un chien...">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Rechercher</button>
      </form>
    </div>
  </nav>



