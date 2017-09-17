<?php
include_once("phpquery\phpQuery\phpQuery.php");
$url = "kompas.php";
$get = file_get_contents($url);
$dom = phpQuery::newDocument($get);
$ul = pq("ul");
$gokil = $ul->find(".gokil")->eq(0)->elements[0]->nextSibling->textContent;

echo "<pre>";
print_r($gokil);
