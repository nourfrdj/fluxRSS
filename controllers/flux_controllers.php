<?php function getBla($url){
    $rss = simplexml_load_file($url);
    return $rss;
}; ?>