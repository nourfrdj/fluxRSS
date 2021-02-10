  <?php if (isset($_POST['save'])) {
    setcookie('theme', $_POST['theme'], time() + 365 * 24 * 3600); //cookie pour 1 an
    switch ($_POST['cathegory']) {
      case 'cat_app_log':
        setcookie('url', "https://www.01net.com/rss/actualites/applis-logiciels/", time() + 365 * 24 * 3600);
        setcookie('cathegory', 'cat_app_log', time() + 365 * 24 * 3600);
        break;
      case 'cat_jeux':
        setcookie('cathegory','cat_jeux', time() + 365 * 24 * 3600);
        setcookie('url', "https://www.01net.com/rss/actualites/jeux/", time() + 365 * 24 * 3600);
        break;
      case 'cat_tech':
        setcookie('cathegory', 'cat_tech', time() + 365 * 24 * 3600);
        setcookie('url', "https://www.01net.com/rss/actualites/technos/", time() + 365 * 24 * 3600);
        break;
      case 'cat_security':
        setcookie('cathegory','cat_security', time() + 365 * 24 * 3600);
        setcookie('url', "https://www.01net.com/rss/actualites/securite/", time() + 365 * 24 * 3600);
        break;
      case 'cat_product':
        setcookie('cathegory', 'cat_product', time() + 365 * 24 * 3600);
        setcookie('url', "https://www.01net.com/rss/actualites/produits/", time() + 365 * 24 * 3600);
        break;
      default:
        setcookie('url', "https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/", time() + 365 * 24 * 3600);
    
      }
    switch ($_POST['nbre_art']) {
      case 'nbre_art_6':
        setcookie('nbre_art', 6, time() + 365 * 24 * 3600);
        break;
      case 'nbre_art_12':
        setcookie('nbre_art', 12, time() + 365 * 24 * 3600);
        break;
      case 'nbre_art_all':
        setcookie('nbre_art', 29, time() + 365 * 24 * 3600);
        break;

    }
    
    header("Location: index.php");

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
    <link rel="stylesheet" href="./assets/css/theme3.css">
    <title>Hello, world!</title>
  </head>

  <body>

    <div class="ndNav">
      <div class="ndColNav">

      </div>
      <div class="ndColNav" id="ndLogo">
        <a href="index.php"></a>
      </div>
      <div class="ndColNav" id="ndParam">
        <img class=" ndButtonParam" src="./assets/img/cog-solid.svg" data-bs-toggle="modal" data-bs-target="#idmodalparametre" />
      </div>
    </div>
    <div class="entete">
      <div class="slog">
        <h1>LogOnHand</h1>
        <p id="ndCaractAnime"></p>
      </div>
    </div>
    <div id="idmodalparametre" class="modal" tabindex="-1">
      <form method="post" action="index.php">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title ">Parametre</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-checked="true">Apparence</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-checked="false">la gestion des flux </a>
                  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-checked="false">Articles </a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div>
                      <label for="theme">Choisissez votre Theme : </label>
                      <p> <input  type="radio" id="themeWhite" name="theme"  value="themeWhite"checked><label for="themeWhite">Jour</label></p>
                      <p>
                        <input type="radio" id="themeBlack" name="theme" value="themeBlack" ><label for="themeBlack">Nuit</label>
                      </p>
                      <p>
                        <input type="radio" id="themeRJB" name="theme" value="RJB" >
                        <label for="themeRJB">Technologie</label>
                      </p>

                    </div>

                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class=""> <label>Choisissez la cathegorie que vous voulez suivre :</label>
                      <p> <input type="radio" id="cat_app_log" name="cathegory" value="cat_app_log" checked><label for="cat_app_log">applications et logiciels</label></p>
                      <p> <input type="radio" id="cat_tech" name="cathegory" value="cat_tech" <?= isset($_COOKIE['cathegory']) == "cat_tech" ?'checked' : ''  ?>><label for="cat_tech">Technologie</label></p>
                      <p> <input type="radio" id="cat_jeux" name="cathegory" value="cat_jeux" <?= isset($_COOKIE['cathegory']) == "cat_jeux" ? 'checked' : ''  ?>><label for="cat_jeux">Jeux</label></p>
                      <p> <input type="radio" id="cat_security" name="cathegory" value="cat_security" <?= isset($_COOKIE['cathegory']) == "cat_security" ? 'checked' : '' ?>><label for="cat_security">Securité </label></p>
                      <p> <input type="radio" id="cat_product" name="cathegory" value="cat_product" <?= isset($_COOKIE['cathegory']) == "cat_product" ? 'checked' : '' ?>><label for="cat_product">Produits </label></p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <div class=""> <label>Le nombre d'article par page :</label>
                      <p> <input type="radio" id="nbr_art_6" checked name="nbre_art" value="nbre_art_6" <?= isset($_COOKIE['nbre_art']) && $_COOKIE['nbre_art'] == 'nbre_art_6' ? 'checked' : '' ?>><label for="nbre_art_6">6 articles</label></p>
                      <p> <input type="radio" id="nbre_art_12" name="nbre_art" value="nbre_art_12" <?= isset($_COOKIE['nbre_art']) && $_COOKIE['nbre_art'] == 'nbre_art_12' ?'checked' : '' ?>><label for="nbre_art_12">12 articles</label></p>
                      <p> <input type="radio" id="nbre_art_all" name="nbre_art" value="nbre_art_all" <?=isset($_COOKIE['nbre_art']) && $_COOKIE['nbre_art'] == 'nbre_art_all '? 'checked' : '' ?>><label for="nbre_art_all">Tous les articles</label></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" name="save" value="save" class="btn btn-primary" onclick="header('Location: index.php ">Enregistrer Vos preferances</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>

  </html>