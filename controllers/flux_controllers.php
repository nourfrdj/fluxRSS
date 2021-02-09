
<?php
// aller chercher le nombre choisis d'articles 
function GetArticles($url, $nbrechoisi)
{
    $rss =  simplexml_load_file($url);
    $tableauInfos = null;
    for ($leCompteur = 0; $leCompteur < $nbrechoisi; $leCompteur++) {
        $tableauInfos[$leCompteur]['link'] =  (string)$rss->channel->item[$leCompteur]->link;
        $tableauInfos[$leCompteur]['title'] = (string) $rss->channel->item[$leCompteur]->title;
        $tableauInfos[$leCompteur]['desc'] = (string) $rss->channel->item[$leCompteur]->description;
        $tableauInfos[$leCompteur]['date'] = (string) $rss->channel->item[$leCompteur]->pubDate;
        $tableauInfos[$leCompteur]['img'] =(string) $rss->channel->item[$leCompteur]->enclosure['url'];
    }
    $_SESSION['tableauArticles'] = $tableauInfos;
}
function formatdate($date)
{
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $datefr = utf8_encode(strftime('%A %d %B %Y', strtotime($date)));
    return $datefr;
}
function formatdescription($description)
{
    $rest = explode(".", $description);
    return $rest[0];
}

?>
