<?php
$url = "http://detik.com";
$get = file_get_contents($url);
echo $get;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detik</title>
    <script src="/node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
  </head>
  <body>

    <script>
      $(document).ready(function() {
       //parent dari list berita
       var list = $("ul.list_feed#newsfeed-container li:not(.native_newsfeed_video_judul):not(.newsfeed-ads):not(.widget_mid):not(.more_news)");


      });
    </script>
  </body>
</html>
