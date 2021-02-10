<?php
setcookie("nbre_art", "", time()-3600, "/", "", false, false);
setcookie("url", "", time()-3600, "/", "", false, false);
setcookie("theme", "", time()-3600, "/", "", false, false);
setcookie("cathegory", "", time()-3600, "/", "", false, false);
header("Location: ../index.php");
?>
