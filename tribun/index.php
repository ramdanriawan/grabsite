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
    <script src="../node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
  </head>
  <body>

    <script>
      $(document).ready(function(){
        var list = $(".p1520.art-list.pos_rel");
        var gambar = $(".p1520.art-list.pos_rel img.shou2.bgwhite");
        var judul = $(".p1520.art-list.pos_rel a.f20.ln24.fbo.txt-oev-2");

        //buang iklan yang mengganggu
        var ads = $("li[id *= NativeAds].pos_rel.p1520");
        ads.remove();

        //lakukan perulangan untuk membuang artikel yang tidak memiliki gambar
        for (i = 0; i < list.length; i++) {
          var findGambar = list.eq(i).find("img.shou2.bgwhite");

          if (findGambar.length == 0) {
            list.eq(i).remove();
          }
        }

        //gunakan perulangan each untuk mengambil semua data berita
        console.log(list);

     })
    </script>
  </body>
</html>
