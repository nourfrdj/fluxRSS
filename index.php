<?php SESSION_start();
 ?>
<?php require("view/header.php");
require("controllers/flux_controllers.php");
if(isset($_COOKIE['nbre_art'])){
  $_SESSION['nbreacticlechoisi']=$_COOKIE['nbre_art'];
getArticles($_COOKIE['url'], $_SESSION['nbreacticlechoisi'] );
var_dump($_COOKIE['nbre_art']);
}
else{
  
}

$idmodal = 0;
?>
<div class="ndContent">
  <div class="ndContCard">
    <?php 
    for ($counter = 0; $counter < $_SESSION['nbreacticlechoisi']; $counter++) {
      $idmodal++;
    ?>
      <div class="ndCard">
        <div class="circle" style="background-image:url('<?= $_SESSION['tableauArticles'][$counter]['img'] ?>')">
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
              <img class="ndImgClose" src="./assets/img/times-solid.svg" data-bs-dismiss="modal" />
            </div>
            <div class="modal-header text-center">
              <h3 class="modal-title" id="exampleModalLabel">
                <?= $_SESSION['tableauArticles'][$counter]['title'] ?>
              </h3>
            </div>
            <div class="ndImgMod">
              <img src="<?= $_SESSION['tableauArticles'][$counter]['img']?>" style="max-width:100%;" />
            </div>
            <div class="modal-body text-center">
              <p class="ndPModal"><?= formatdescription($_SESSION["tableauArticles"][$counter]['desc']); ?></p>
            </div>
            <div class="modal-footer">
            <div class="bi bi-facebook ndFb" data-href="" data-layout="button" data-size="small">Partager cet article <a target="" href="https://www.facebook.com/sharer/sharer.php?u=https://www.01net.com/rss/actualites/produits/src=sdkpreparse" class="fb-xfbml-parse-ignore"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg></a>
              </div>
              <a class="ndButtonArticle" href="<?= $_SESSION['tableauArticles'][$counter]['link']?>">Lire l'article</a>
              
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>

  </div>
</div>

<?php require("view/footer.php"); ?>