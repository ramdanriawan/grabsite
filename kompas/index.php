<?php
//require library phpQuery
require_once("..\phpquery\phpQuery\phpQuery.php");

// ambil data update kompas
$url = "http://kompas.com";
$get = file_get_contents($url);

//list data berita
$dom      = phpQuery::newDocument($get);
$latest   = pq(".article__list.clearfix:not(.article__list--video) .article__link");
$date     = pq(".article__list.clearfix:not(.article__list--video) .article__date");
$kategory = pq(".article__list.clearfix:not(.article__list--video) .article__subtitle.article__subtitle--inline");
$gambar   = pq(".article__list.clearfix:not(.article__list--video) .article__list__asset.clearfix .article__asset img");

//lakukan perulangan foreach untuk menentukan data berita
foreach($latest->elements as $a => $value){

 //data ajax yang akan dikirim ke server savedb
 $data = [
  "sumber"   => $url,
  "link"     => $latest  ->eq($a)->attr("href"),
  "judul"    => $latest  ->eq($a)->text(),
  "date"     => $date    ->eq($a)->text(),
  "kategory" => $kategory->eq($a)->text(),
  "gambar"   => $gambar  ->eq($a)->attr("src")
 ];

 //khusus untuk melihat data
 echo "<pre>";
 print_r($data);

//jadikan data sebagai query
$data      = http_build_query($data);

 //gabungkan url save db dengan data field
 $data_get = "http://localhost/index.php/Csavedb/csavedbf?" . $data;

 //tampilkan data hasil dari request ajax
 echo "status: " . file_get_contents($data_get);

 //
}

?>
