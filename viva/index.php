<?php
//require library phpQuery
require_once("../phpquery/phpQuery/phpQuery.php");

//data utama berita
$url           = "http://viva.co.id";
$get           = file_get_contents($url);
$dom           = phpQuery::newDocument($get);
$list          = pq(".modlist-1.article-list ul.clearenter li:not(.sponsored):not(li[style])");
$gambar        = $list->find("img:not(.img_ad)");
$judul         = $list->find("h3");
$link          = $list->find("a.title-content");
$kategory      = $list->find("h5");
$list_kategory = $list->find("div.date");

//lakukan perulangan foreach untuk mengambil data berita
foreach ($list as $a => $value) {
 //data berita
 $data = [
  "sumber"   => $url,
  "gambar"   => $gambar->eq($a)->attr("data-original"),
  "judul"    => $judul->eq($a)->text(),
  "link"     => $link->eq($a)->attr("href"),
  "kategory" => $kategory->eq($a)->text(),
  "date"     => $list_kategory->eq($a)->text()
 ];

  #mengambil data waktu untuk sorting berdasarkan waktu (in milisecond)
  $data["sorting"] = strtotime(substr($data["date"], -9, 5));

//khusus untuk melihat data
echo "<pre>";
print_r($data);

//ajaxoptions
$data              = http_build_query($data);
$data_get          = "$_SERVER[]/index.php/Csavedb/csavedbf?" . $data;

//tampilkan data hasil dari request ajax
echo "status: " . file_get_contents($data_get) . "<br />";
}
 ?>
