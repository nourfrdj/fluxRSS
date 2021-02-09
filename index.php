<?php SESSION_start() ?>
<?php require("view/header.php"); 
require("controllers/flux_controllers.php");
$url = "https://www.01net.com/rss/actualites/produits/";
$_SESSION['nbreacticlechoisi'] = 5;
getArticles($url, $_SESSION['nbreacticlechoisi']);
?>
<div class="ndContent">
  <div class="ndContCard">
    <?php for ($counter = 0; $counter < $_SESSION['nbreacticlechoisi']; $counter++) { ?>
    <div class="ndCard">
      <div class="circle">
        <img src="<?= $_SESSION['tableauArticles'][$counter]['img']['url'] ?>" alt="img">
      </div>
      <div class="content">
        <h4><?= $_SESSION['tableauArticles'][$counter]['title'] ?></h4>
        <span><?= formatdate($_SESSION["tableauArticles"][$counter]['date']) ?></span>
        <a href="#">read more</a>
      </div>
    </div>

    <?php
        }
          ?>

  </div>
</div>






<?php require("view/footer.php"); ?>