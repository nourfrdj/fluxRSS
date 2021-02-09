<?php SESSION_start() ?>
<?php require("view/header.php"); ?>
<div class="ndContent">
<div class="ndContCard">
      <div class="ndCard">
        <div class="circle">
          <h2>01</h2>
        </div>
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam sapiente sed? Ipsum animi aperiam at omnis libero quisquam dolorem hic ex 
          dignissimos vitae provident totam fugit voluptas, in nemo.</p>
          <a href="#">read more</a>
        </div>
      </div>

      <div class="ndCard">
        <div class="circle">
          <h2>02</h2>
        </div>
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam sapiente sed? Ipsum animi aperiam at omnis libero quisquam dolorem hic ex 
          dignissimos vitae provident totam fugit voluptas, in nemo.</p>
          <a href="#">read more</a>
        </div>
      </div>

      <div class="ndCard">
        <div class="circle">
          <h2>03</h2>
        </div>
        <div class="content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam sapiente sed? Ipsum animi aperiam at omnis libero quisquam dolorem hic ex 
          dignissimos vitae provident totam fugit voluptas, in nemo.</p>
          <a href="#">read more</a>
        </div>
      </div>



      
    </div>
</div>

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

 <?php require("view/footer.php"); ?>