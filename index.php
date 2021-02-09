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
    for ($counter = 0; $counter < $_SESSION['nbreacticlechoisi']; $counter++) {
        var_dump( $_SESSION['tableauArticles'][$counter]['img']['url'])?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_SESSION['tableauArticles'][$counter]['img']['url'] ?>" alt="img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_SESSION['tableauArticles'][$counter]['title'] ?></h5>
                        <p class="card-text"><?= $_SESSION["tableauArticles"][$counter]['desc'] ?></p>
                        <p class="card-text"><small class="text-muted"><?= formatdate($_SESSION["tableauArticles"][$counter]['date']) ?></small></p>
                        <a class="btn btn-primary" href="<?=$_SESSION['tableauArticles'][$counter]['link'] ?>" role="button">lire l'article</a>
                    </div>
                </div>
            </div>
        </div> <?php
            }
                ?>
</body>

</html>