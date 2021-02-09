
<?php
// aller chercher le nombre choisis d'articles 
function GetArticles($url,$nbrechoisi){
    $rss = simplexml_load_file($url);
    $tableauInfos=null;
    for($leCompteur=0; $leCompteur<$nbrechoisi; $leCompteur++)
    {
        $tableauInfos[$leCompteur]['link'] =  $rss->channel->item[$leCompteur]->link;
        $tableauInfos[$leCompteur]['title'] =  substr($rss->channel->item[$leCompteur]->title, 0);
        $tableauInfos[$leCompteur]['desc'] =  $rss->channel->item[$leCompteur]->description;
        $tableauInfos[$leCompteur]['date'] =  $rss->channel->item[$leCompteur]->pubDate;
        $tableauInfos[$leCompteur]['img'] =  $rss->channel->item[$leCompteur]-> enclosure ;
    
    }
$_SESSION['tableauArticles']=$tableauInfos;
}
function formatdate($date){
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $datefr=utf8_encode(strftime('%A %d %B %Y %I:%M:%S', strtotime($date)));
return $datefr;
}

?>