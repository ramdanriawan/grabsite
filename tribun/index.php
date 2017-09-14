<!--  script php untuk mengambil data update berita -->
<?php
$url = "http://www.tribunnews.com/";
$get = file_get_contents($url);
echo $get;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tribunnews</title>
    <script src="/node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
  </head>
  <body>

    <script>
      $(document).ready(function() {
        //variabel list sebagai parent data berita
      	var list = $(".p1520.art-list.pos_rel");
        var data = {sumber: "http://www.tribunnews.com/"};
        var a    = 0;

      	//buang artikel yang mengandung sponsore
      	var ads = $("li[id *= NativeAds].pos_rel.p1520");
      	ads.remove();

      	//buang artikel yang tidak memiliki gambar
      	for (i = 0; i < list.length; i++) {
      		var findGambar = list.eq(i).find("img.shou2.bgwhite");

      		if (findGambar.length == 0) {
      			list.eq(i).remove();
      		}
      	}

      	//simpan variabel data berita
        var gambar      = $(".p1520.art-list.pos_rel img.shou2.bgwhite");
        var judul       = $(".p1520.art-list.pos_rel a.f20.ln24.fbo.txt-oev-2");
        var description = $(".p1520.art-list.pos_rel .grey2.pt5.f13.ln18.txt-oev-2");
        var kategory    = $(".p1520.art-list.pos_rel a.fbo2.tsa-2");
        var date        = $(".p1520.art-list.pos_rel .foot.timeago");

        //gunakan perulangan each untuk mengambil semua data berita
        $.each(gambar, function(index, val) {
          //ambil data berita berdasarkan index variabel a
          data.gambar      = val.src;
          data.judul       = judul[a].innerText;
          data.link        = judul[a].href;
          data.description = description[a].innerText;
          data.kategory    = kategory[a].innerText;
          data.date        = date[a].title;

          //log data berita yang sudah di ambil
          console.log(data);

          //variabel ajax options
          var ajaxoptions = {
            url     : "/index.php/Csavedb/Csavedbf",
            data    : data,
            success : function(response){
              console.log("success");
            }
          }

          //lakukan ajax request untuk menyimpan data ke database
          $.ajax(ajaxoptions);

          //menambahkan nilai a;
          a++;
        });

      })
    </script>
  </body>
</html>
