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
        var judul = $(".p1520.art-list.pos_rel a.f20.ln24.fbo.txt-oev-2");
        // var link = $(".p1520.art-list.pos_rel a.p1520.art-list.pos_rel");
        var description = $(".p1520.art-list.pos_rel .grey2.pt5.f13.ln18.txt-oev-2");
        var kategory = $(".p1520.art-list.pos_rel .fbo2.tsa-2");
        var date = $(".p1520.art-list.pos_rel .foot.timeago");
        var data = {};

        console.log(judul);
        console.log(description);
        console.log(kategory);
        console.log(date);

        //ambil data judul dan link
        $.each(judul, function(key, value){
          data.judul = value.innerText;
          data.link = value.href;

          //ambil data description
          $.each(description, function(key, value){
            data.description = value.innerText;
          })

          //ambil data kategory
          $.each(kategory, function(key, value){
            data.kategory = value.innerText;
          })

          //ambil data date
          $.each(date, function(key, value){
            data.date = value.innerText;
          })

          console.log(data);
        })

      })
    </script>
  </body>
</html>
