<?php
$url = "http://kompas.com";
$get = file_get_contents($url);

echo $get;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
    <title>Test Kompass.com</title>
  </head>
  <body>

    <script>
      $(document).ready(function(){
        var latest = $(".article__list.clearfix .article__link");
        var date =  $(".article__list.clearfix .article__date");
        var kategory = $(".article__list.clearfix .article__subtitle.article__subtitle--inline");

        var data = {};
        // console.log(latest);
        // console.log(date);
        // console.log(kategory);
        $.each(latest, function(key, value){
          //menentukan link dan judul
          data.link = value.href;
          data.judul = value.innerText;

          //menentukan tanggal
          $.each(date, function(key, value){
            data.date = value.innerText;
          })

          //menentukan kategory
          $.each(kategory, function(key, value){
            data.kategory = value.innerText;
          })

          console.log(data);
          //masukkan ke database
          $.ajax({
            url : "msavedb.php",
            data: data,
            success: function(response){
              console.log(response);
            }
          })

          //
        })

      })
    </script>
  </body>
</html>
