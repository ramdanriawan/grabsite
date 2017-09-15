<?php
$url = "http://kompas.com";
$get = file_get_contents($url);

echo $get;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="/node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
    <title>Test Kompass.com</title>
  </head>
  <body>

    <script>
      $(document).ready(function(){
        var latest   = $(".article__list.clearfix:not(.article__list--video) .article__link");
        var date     = $(".article__list.clearfix:not(.article__list--video) .article__date");
        var kategory = $(".article__list.clearfix:not(.article__list--video) .article__subtitle.article__subtitle--inline");
        var gambar   = $(".article__list.clearfix:not(.article__list--video) .article__list__asset.clearfix .article__asset img");
        var data     = {sumber: "http://www.kompas.com"};
        var a        = 0;
        // console.log(latest); console.log(date); console.log(kategory); console.log(gambar);

        //menentukan isi data
        $.each(latest, function(key, value){
          //menentukan link dan judul
          data.link     = value.href;
          data.judul    = value.innerText;
          console.log(data.judul);

          //menentukan tanggal
          data.date     = date[a].innerText;
          console.log(data.date);

          //menentukan kategory
          data.kategory = kategory[a].innerText;
          console.log(data.kategory);

          //menentukan gambar
          data.gambar   = gambar[a].src;
          console.log(data.gambar);

          //untuk melihat isi data
          console.log(data); console.log(a);

          //lakukan request ajax
          var url = "/index.php/Csavedb/csavedbf";

          $.ajax({
            url : url,
            data: data,
            success: function(response){
              console.log(response);
            }
          })

          //menambahkan nilai a;
          a++;
        })

      })
    </script>
  </body>
</html>
