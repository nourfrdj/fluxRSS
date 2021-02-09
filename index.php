<?php SESSION_start() ?>
<?php require("view/header.php");
require("controllers/flux_controllers.php");
$url = "https://www.01net.com/rss/actualites/produits/";
$_SESSION['nbreacticlechoisi'] = 20;
getArticles($url, $_SESSION['nbreacticlechoisi']);
$idmodal = 0;
?>
<div class="ndContent">
  <div class="ndContCard">
    <?php for ($counter = 0; $counter < $_SESSION['nbreacticlechoisi']; $counter++) {
      $idmodal++;
    ?>
      <div class="ndCard">
        <div class="circle" style="background-image:url('<?= $_SESSION['tableauArticles'][$counter]['img']['url'] ?>')">
        </div>
        <div class="content">
          <h4><?= $_SESSION['tableauArticles'][$counter]['title'] ?></h4>
          <p><?= formatdate($_SESSION["tableauArticles"][$counter]['date']) ?></p>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?= $idmodal ?>">+ d'info</a>
        </div>
      </div>

      <!-- la modal pour chaque article-->
      <div class="modal fade" id="modal<?= $idmodal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="ndClose">
                <img class="ndImgClose" src="./assets/img/times-solid.svg" data-bs-dismiss="modal"/>
              </div>
            <div class="modal-header text-center">
              <h3 class="modal-title" id="exampleModalLabel">
                <?= $_SESSION['tableauArticles'][$counter]['title'] ?>
              </h3>
            </div>
            <div class="ndImgMod">
              <img src="<?= $_SESSION['tableauArticles'][$counter]['img']['url'] ?>" style="max-width:100%;"/>
            </div>
            <div class="modal-body text-center">
              <p class="ndPModal"><?= formatdescription($_SESSION["tableauArticles"][$counter]['desc']); ?></p>
            </div>
            <div class="modal-footer">
              <a class="ndButtonArticle" href="#">Lire l'article</a>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>