  <?php

  if (isset($_POST['save'])) {
    setcookie('theme', $_POST['theme'], time() + 365 * 24 * 3600, "/"); //cookie pour 1 an
    switch ($_POST['cathegory']) {
      case 'cat_app_log':
        setcookie('url', "https://www.01net.com/rss/actualites/applis-logiciels/", time() + 365 * 24 * 3600, "/");
        setcookie('cathegory', 'cat_app_log', time() + 365 * 24 * 3600, "/");
        break;
      case 'cat_jeux':
        setcookie('cathegory', 'cat_jeux', time() + 365 * 24 * 3600, "/");
        setcookie('url', "https://www.01net.com/rss/actualites/jeux/", time() + 365 * 24 * 3600, "/");
        break;
      case 'cat_tech':
        setcookie('cathegory', 'cat_tech', time() + 365 * 24 * 3600, "/");
        setcookie('url', "https://www.01net.com/rss/actualites/technos/", time() + 365 * 24 * 3600, "/");
        break;
      case 'cat_security':
        setcookie('cathegory', 'cat_security', time() + 365 * 24 * 3600, "/");
        setcookie('url', "https://www.01net.com/rss/actualites/securite/", time() + 365 * 24 * 3600, "/");
        break;
      case 'cat_product':
        setcookie('cathegory', 'cat_product', time() + 365 * 24 * 3600, "/");
        setcookie('url', "https://www.01net.com/rss/actualites/produits/", time() + 365 * 24 * 3600, "/");
        break;
      default:
        setcookie('url', "https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/", time() + 365 * 24 * 3600, "/");
    }
    switch ($_POST['nbre_art']) {
      case 'nbre_art_6':
        setcookie('nbre_art', 5, time() + 365 * 24 * 3600, "/");
        break;
      case 'nbre_art_12':
        setcookie('nbre_art', 10, time() + 365 * 24 * 3600, "/");
        break;
      case 'nbre_art_all':
        setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
        break;
    }

    header("Location: index.php");
  }
  if (isset($_GET['btncatapp'])) {
    setcookie('url', "https://www.01net.com/rss/actualites/applis-logiciels/", time() + 365 * 24 * 3600, "/");
    setcookie('cathegory', 'cat_app_log', time() + 365 * 24 * 3600, "/");
    if(isset($_COOKIE["nbre_art"])){
      header("Location: index.php");
    }else{
      setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
    header("Location: index.php");}
  }
  if (isset($_GET['btnjeux'])) {
    setcookie('cathegory', 'cat_jeux', time() + 365 * 24 * 3600, "/");
    setcookie('url', "https://www.01net.com/rss/actualites/jeux/", time() + 365 * 24 * 3600, "/");
    if(isset($_COOKIE["nbre_art"])){
      header("Location: index.php");
    }else{
      setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
    header("Location: index.php");}
  }
  if (isset($_GET['btntech'])){
    setcookie('cathegory', 'cat_tech', time() + 365 * 24 * 3600, "/");
    setcookie('url', "https://www.01net.com/rss/actualites/technos/", time() + 365 * 24 * 3600, "/");
    if(isset($_COOKIE["nbre_art"])){
      header("Location: index.php");
    }else{
      setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
    header("Location: index.php");}

  }
  if (isset($_GET['btnsec'])){
    setcookie('cathegory', 'cat_security', time() + 365 * 24 * 3600, "/");
    setcookie('url', "https://www.01net.com/rss/actualites/securite/", time() + 365 * 24 * 3600, "/");
    if(isset($_COOKIE["nbre_art"])){
      header("Location: index.php");
    }else{
      setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
    header("Location: index.php");}
  
  }
  if (isset($_GET['btnproduit'])){
    setcookie('cathegory', 'cat_product', time() + 365 * 24 * 3600, "/");
        setcookie('url', "https://www.01net.com/rss/actualites/produits/", time() + 365 * 24 * 3600, "/");
        if(isset($_COOKIE["nbre_art"])){
          header("Location: index.php");
        }else{
          setcookie('nbre_art', 29, time() + 365 * 24 * 3600, "/");
        header("Location: index.php");}
  }

  ?>
  <!doctype html>
  <html lang="fr">

  <head>
    <!-- Required meta tags -->
    <title>Flux RSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/<?php if (!isset($_COOKIE["theme"])) {
                                                echo "theme1";
                                              } else {
                                                echo $_COOKIE["theme"];
                                              }; ?>.css">
    <title>Hello, world!</title>
  </head>

  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="ndNav">
      <div class="ndColNav">

      </div>
      <div class="ndColNav" id="ndLogo">
        <a href="index.php"></a>
      </div>
      <div class="ndColNav" id="ndParam" data-bs-toggle="modal" data-bs-target="#idmodalparametre">

      </div>
    </div>
    <div class="entete">
      <div class="slog">
        <h1>LogOnHand</h1>
        <p id="ndCaractAnime"></p>
      </div>
    </div>
    <div id="groupbtn" class="btn-group " role="group" aria-label="Basic outlined example">
      <form method="GET" action="index.php">
        <button id="btngroup" type="btncatapp" name="btncatapp" class="btn btn-outline-primary">Applications</button>
        <button id="btngroup" type="btntech" name="btntech" class="btn btn-outline-primary">Technologie</button>
        <button id="btngroup" type="btnjeux" name="btnjeux" class="btn btn-outline-primary">Jeux</button>
        <button id="btngroup" type="btnsec" name="btnsec" class="btn btn-outline-primary">Sécurité</button>
        <button id="btngroup" type="btnproduit" name="btnproduit" class="btn btn-outline-primary">Produits</button>
      </form>
    </div>
    <div id="idmodalparametre" class="modal" tabindex="-1">
      <form method="post" action="index.php">
        <div class="modal-dialog ndModParam">
          <div class="modal-content ">
            <div class="modal-header ">
              <h5 class="modal-title ">Parametre</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex align-items-start ndContentModal">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-checked="true">Apparence</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-checked="false">la gestion des flux </a>
                  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-checked="false">Articles </a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div>
                      <label for="theme" style="margin-bottom:15px;"><strong>Choisissez votre Theme : </strong></label>
                      <p> <input type="radio" id="themeWhite" name="theme" value="theme1" <?= isset($_COOKIE['theme']) && $_COOKIE["theme"] == "theme1" ? 'checked' : '' ?>><label for="themeWhite"><span class="ndSpan"> Jour</span></label></p>
                      <p>
                        <input type="radio" id="themeBlack" name="theme" value="theme2" <?= isset($_COOKIE['theme']) && $_COOKIE["theme"] == "theme2" ? 'checked' : '' ?>><label for="themeBlack"><span class="ndSpan">Nuit</span></label>
                      </p>
                      <p>
                        <input type="radio" id="themeRJB" name="theme" value="theme3" <?= isset($_COOKIE['theme']) && $_COOKIE["theme"] == "theme3" ? 'checked' : '' ?>>
                        <label for="themeRJB"><span class="ndSpan">Girl Power!</span></label>
                      </p>

                    </div>

                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class=""> <label style="margin-bottom:15px;"><strong>Choisissez la cathegorie que vous voulez suivre :</strong></label>
                      <p> <input type="radio" id="cat_app_log" name="cathegory" value="cat_app_log" checked><label for="cat_app_log">applications et logiciels</label></p>
                      <p> <input type="radio" id="cat_tech" name="cathegory" value="cat_tech" <?= isset($_COOKIE['cathegory']) && $_COOKIE["cathegory"] == "cat_tech" ? 'checked' : ''  ?>><label for="cat_tech"><span class="ndSpan">Technologie</span></label></p>
                      <p> <input type="radio" id="cat_jeux" name="cathegory" value="cat_jeux" <?= isset($_COOKIE['cathegory']) && $_COOKIE["cathegory"] == "cat_jeux" ? 'checked' : ''  ?>><label for="cat_jeux"><span class="ndSpan">Jeux</span></label></p>
                      <p> <input type="radio" id="cat_security" name="cathegory" value="cat_security" <?= isset($_COOKIE['cathegory']) && $_COOKIE["cathegory"] == "cat_security" ? 'checked' : '' ?>><label for="cat_security"><span class="ndSpan">Securité</span></label></p>
                      <p> <input type="radio" id="cat_product" name="cathegory" value="cat_product" <?= isset($_COOKIE['cathegory']) && $_COOKIE["cathegory"] == "cat_product" ? 'checked' : '' ?>><label for="cat_product"><span class="ndSpan">Produits</span></label></p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <div class=""> <label style="margin-bottom:15px;"><strong>Le nombre d'article par page :</strong></label>
                      <p> <input type="radio" id="nbr_art_6" checked name="nbre_art" value="nbre_art_6" <?= isset($_COOKIE['nbre_art']) && $_COOKIE["nbre_art"] == "5" ? 'checked' : '' ?>><label for="nbre_art_6"><span class="ndSpan">5 articles</span></label></p>
                      <p> <input type="radio" id="nbre_art_12" name="nbre_art" value="nbre_art_12" <?= isset($_COOKIE['nbre_art']) && $_COOKIE["nbre_art"] == "10" ? 'checked' : '' ?>><label for="nbre_art_12"><span class="ndSpan">10 articles</span></label></p>
                      <p> <input type="radio" id="nbre_art_all" name="nbre_art" value="nbre_art_all" <?= isset($_COOKIE['nbre_art']) && $_COOKIE["nbre_art"] == "29" ? 'checked' : '' ?>><label for="nbre_art_all"><span class="ndSpan">Tous les articles</span></label></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a class="ndADeco" href="./controllers/deco.php">Deconnexion</a>
                <input type="submit" name="save" class="ndButtonArticle" value="Enregistrer vos préférences" onclick="header('Location: index.php');">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
