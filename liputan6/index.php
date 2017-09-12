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
         var judul = $(".articles--iridescent-list--item .articles--iridescent-list--text-item__title-link-text");
         var description = $(".articles--iridescent-list--item .articles--iridescent-list--text-item__summary");
         var kategory = $(".articles--iridescent-list--item .articles--iridescent-list--text-item__category");
         var date = $(".articles--iridescent-list--item .articles--iridescent-list--text-item__time.timeago");
         var data = {};

         console.log(judul);
         console.log(description);
         console.log(kategory);
         console.log(date);

         //ambil data judul dan link
         $.each(judul, function(key, value){
           data.judul = value.innerText;
           data.link = value.parentElement.href;

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
