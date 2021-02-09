  <?php
  setcookie('themeWhite', 'themeWhite', time() + 365 * 24 * 3600); //cookie pour 1 an
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
    <link rel="stylesheet" href="./assets/css/theme1.css">
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
                <a href="param.php"><img class="ndButtonParam" src="./assets/img/cog-solid.svg" /></a>
            </div>
    </div>
    <div class="entete">
      <div class="slog">
        <h1>LogOnHand</h1>
        <p>Toute l'actualité dans le creux de votre main</p>
      </div>
    </div>
    </div>
    <div id="idmodalparametre" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header ">
            <h5 class="modal-title ">Parametre</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex align-items-start">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Apparence</a>
                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">la gestion des flux </a>
                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
              </div>
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div>
                    <label for="theme">Choisissez votre Theme : </label>
                    <p> <input type="radio" id="themeWhite" name="theme" value="themeWhite" <?= isset($_COOKIE['theme']) == 'themeWhite' ? 'checked' : '' ?>><label for="themeWhite">Jour</label></p>
                    <p>
                      <input type="radio" id="themeBlack" name="theme" value="themeBlack" <?= isset($_COOKIE['theme']) == 'themeBlack' ? 'checked' : '' ?>><label for="themeBlack">Nuit</label>
                    </p>
                    <p>
                      <input type="radio" id="themeRJB" name="theme" value="RJB" <?= isset($_COOKIE['theme']) == 'RJB' ? 'checked' : '' ?>>
                      <label for="themeRJB">Technologie</label>
                    </p>

                  </div>

                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <div class="">  <label for="cathegory">Choisissez les cathegorie que vous voulez suivre</label>
                    <p><input type="checkbox" id="cathegory" name="applis-logiciels">
                    <label for="cathegory">applis-logiciels</label></p>
                    <p><input type="checkbox" id="cathegory" name="technologie">
                    <label for="cathegory">Technologie</label></p>
                    <p><input type="checkbox" id="cathegory" name="Jeux">
                    <label for="cathegory">Jeux</label></p>
                    <p><input type="checkbox" id="cathegory" name="Security">
                    <label for="cathegory">Technologie</label></p>
                    <p><input type="checkbox" id="cathegory" name="Products">
                    <label for="cathegory">Produits</label></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Enregistrer les modifications</button>
              <button type="close" class="btn btn-primary">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>