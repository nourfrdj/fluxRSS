<?php SESSION_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <?php
    require("controllers/flux_controllers.php");
    $url = "https://www.01net.com/rss/actualites/produits/";
    $_SESSION['nbreacticlechoisi'] = 5;


    getArticles($url, $_SESSION['nbreacticlechoisi']);
    $idmodal = 0;
    for ($counter = 0; $counter < $_SESSION['nbreacticlechoisi']; $counter++) {
        $idmodal++;
    ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_SESSION['tableauArticles'][$counter]['img']['url'] ?>" alt="img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_SESSION['tableauArticles'][$counter]['title'] ?></h5>
                        <p class="card-text"><small class="text-muted"><?= formatdate($_SESSION["tableauArticles"][$counter]['date']) ?></small></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $idmodal ?>"> + d'infos</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- la modal pour chaque article-->
        <div class="modal fade" id="modal<?= $idmodal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                        <?=$_SESSION['tableauArticles'][$counter]['title']?>
                        <button type="close" class="btn btn-danger" data-bs-dismiss="modal">X</button>                       
                        </h5>
                    </div>
                    <div class="modal-body">
                        <?= $_SESSION["tableauArticles"][$counter]['desc'] ?>
                    </div>
                    <div class="modal-footer">
                    <button type="boutton" class="btn btn-primary" data-bs-dismiss="modal">lire l'article</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>