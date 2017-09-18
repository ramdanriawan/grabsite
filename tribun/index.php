<?php
//require library phpQuery
require_once("../phpquery/phpQuery/phpQuery.php");

//data utama berita
$url  = "http://www.tribunnews.com/";
$get  = file_get_contents($url);
$dom  = phpQuery::newDocument($get);
$list = pq(".p1520.art-list.pos_rel");
$ads  = pq("li[id *= NativeAds].pos_rel.p1520");

//buang artikel yang mengandung ads
$ads->remove();

//buang artikel yang tidak memiliki gambar
foreach ($list as $a => $value) {
 $findGambar = $list->eq($a)->find("img.shou2.bgwhite");

		if ($findGambar->length == 0) {
			$list->eq($a)->remove();
		}
	}

 //simpan variabel data berita yang sudah di dapat
  $gambar      = pq(".p1520.art-list.pos_rel img.shou2.bgwhite");
  $judul       = pq(".p1520.art-list.pos_rel a.f20.ln24.fbo.txt-oev-2");
  $description = pq(".p1520.art-list.pos_rel .grey2.pt5.f13.ln18.txt-oev-2");
  $kategory    = pq(".p1520.art-list.pos_rel a.fbo2.tsa-2");
  $date        = pq(".p1520.art-list.pos_rel .foot.timeago");

  //gunakan preulangan foreach untuk mengambil semua data berita
  foreach ($gambar as $a => $value) {
   //ambil data berita berdasarkan index variabel $a
   $data = [
     "sumber"      => $url,
     "gambar"      => str_replace(" ", "", $gambar->eq($a)->attr("src")),
     "judul"       => $judul->eq($a)->text(),
     "link"        => $judul->eq($a)->attr("href"),
     "description" => $description->eq($a)->text(),
     "kategory"    => $kategory->eq($a)->text(),
     "date"        => $date->eq($a)->attr("title")
   ];

  #mengambil data waktu untuk sorting berdasarkan waktu (in milisecond)
  $data["sorting"] = strtotime(substr($data["date"], -8, 5));

   //khusus untuk print data
   print "<pre>";
   print_r($data);

   //variabel ajax options
   $data           = http_build_query($data);
   $data_get       = "http://localhost/index.php/Csavedb/csavedbf?" . $data;

//tampilkan data hasil dari request ajax
  echo "status: " . file_get_contents($data_get) . "<br />";
  }
 ?>
