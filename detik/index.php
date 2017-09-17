
<?php
//require library phpQuery
require_once("../phpquery/phpQuery/phpQuery.php");

//data utama berita
$url         = "http://detik.com";
$get         = file_get_contents($url);
$dom         = phpQuery::newDocument($get);
$list        = pq("ul.list_feed#newsfeed-container li:not(.native_newsfeed_video_judul):not(.newsfeed-ads):not(.widget_mid):not(.more_news)");
$gambar      = $list->find(".img_con a img");
$judul       = $list->find(".desc_nhl a h2");
$link        = $list->find(".desc_nhl a");
$description = $list->find(".desc_nhl .labdate.f11");

//gunakan fungsi foreach untuk mengambil data update setiap berita
foreach ($list as $a => $value) {
 //data
 $data = [
  "sumber"      => "http://detik.com",
  "gambar"      => $gambar->eq($a)->attr("src"),
  "judul"       => $judul ->eq($a)->text(),
  "link"        => $link  ->eq($a)->attr("href"),
  "description" => str_replace(" ", "", $description->eq($a)->elements[0]->nextSibling->textContent)
 ];

 //menentukan description kategoryu dan date
    #memecah menjadi array
   $list_description       = $list->find(".desc_nhl .labdate.f11");
   $list_description_array = explode(" | ", $list_description->eq($a)->text());

   #menentukan data kategory dan data date
   $data["kategory"]       = $list_description_array[0];
   $data["date"]           = $list_description_array[1];

//khusus untuk melihat data
echo "<pre>";
print_r($data);

//ajaxoptions
$data     = http_build_query($data);
$data_get = "http://localhost/index.php/Csavedb/csavedbf?" . $data;

//tampilkan data hasil dari request ajax
echo "status: " . file_get_contents($data_get) . "<br />";

}
?>
