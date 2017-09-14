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
         var judul = $("section article.articles--iridescent-list--text-item__details.articles--iridescent-list--text-item__header aside.articles--iridescent-list--text-item__details header.articles--iridescent-list--text-item__header h4.articles--iridescent-list--text-item__title ~ span.articles--iridescent-list--text-item__datetime a.ui--a.articles--iridescent-list--text-item__title-link");

         var data = {};
         var a = 0;

         console.log("judul",judul);
         // console.log("judul",judul);
         // console.log("description",description);
         // console.log("kategory",kategory);
         // console.log("date",date);

         //ambil data judul dan link
         // $.each(judul, function(key, value){
         //   data.judul = value.innerText;
         //   data.link = value.parentElement.href;

         //   //ambil data description
         //   data.description = description[a].innerText; 
           
         //   //ambil data kategory
         //   data.kategory = kategory[a].innerText;

         //   //ambil data date
         //   console.log(a, date);
         //   if (date[a].innerText == "undefined") {
         //    data.date = "-";
         //  }else{
         //    data.date = date[a].innerText;
         //  }
           

         //   console.log(data);
         //   a++;
         // })

       })
     </script>
   </body>
 </html>
