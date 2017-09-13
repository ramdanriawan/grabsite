<?php
$url = "http://liputan6.com";
$get = file_get_contents($url);
echo $get;
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>liputan6</title>
     <script src="../node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
   </head>
   <body>

     <script>
       $(document).ready(function(){
         var gambar = $("article.articles--iridescent-list--item .articles--iridescent-list--text-item__figure-thumbnail a.ui--a.articles--iridescent-list--text-item__figure-thumbnail-link picture img.articles--iridescent-list--text-item__figure-image-lazyload.lazyloaded");
         var judul = $("article.articles--iridescent-list--item .articles--iridescent-list--text-item__details .articles--iridescent-list--text-item__header .articles--iridescent-list--text-item__title .ui--a.articles--iridescent-list--text-item__title-link .articles--iridescent-list--text-item__title-link-text");
         var description = $("article.articles--iridescent-list--item .articles--iridescent-list--text-item__summary");
         var kategory = $("article.articles--iridescent-list--item .articles--iridescent-list--text-item__category");
         var date = $("article.articles--iridescent-list--item .articles--iridescent-list--text-item__time.timeago");
         var data = {};
         var a = 0;

         console.log("gambar",gambar);
         console.log("judul",judul);
         console.log("description",description);
         console.log("kategory",kategory);
         console.log("date",date);

         //ambil data judul dan link
         $.each(judul, function(key, value){
           data.judul = value.innerText;
           data.link = value.parentElement.href;

           //ambil data description
           data.description = description[a].innerText; 
           
           //ambil data kategory
           data.kategory = kategory[a].innerText;

           //ambil data date
           console.log(a, date);
           if (date[a].innerText == "undefined") {
            data.date = "-";
          }else{
            data.date = date[a].innerText;
          }
           

           console.log(data);
           a++;
         })

       })
     </script>
   </body>
 </html>
