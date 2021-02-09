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
        <div class="circle" style="background-image:url('<?= $_SESSION['tableauArticles'][$counter]['img'] ?>')">
        </div>
        <div class="content">
          <h4><?= $_SESSION['tableauArticles'][$counter]['title'] ?></h4>
          <p><?= formatdate($_SESSION["tableauArticles"][$counter]['date']) ?></p>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?= $idmodal ?>">read more</a>
        </div>
      </div>

      <!-- la modal pour chaque article-->
      <div class="modal fade" id="modal<?= $idmodal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <?= $_SESSION['tableauArticles'][$counter]['title'] ?>
                <button type="close" class="btn btn-danger" data-bs-dismiss="modal">X</button>
              </h5>
            </div>
            <div class="modal-body">
              <?= formatdescription($_SESSION["tableauArticles"][$counter]['desc']); ?>
            </div>
            <div class="modal-footer">
              <button type="boutton" class="btn btn-primary" data-bs-dismiss="modal">lire l'article</button>
              <div class="bi bi-facebook" data-href="" data-layout="button" data-size="small">Partager cet article :<a target="" href="https://www.facebook.com/sharer/sharer.php?u=https://www.01net.com/rss/actualites/produits/src=sdkpreparse" class="fb-xfbml-parse-ignore"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg></a></div>
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