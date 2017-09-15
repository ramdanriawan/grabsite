<?php 
$url = "http://detik.com";
$get = file_get_contents($url);

echo $get;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<script src="/node_modules/jquery/dist/jquery.js"></script>
 	<title>Detik Grab</title>
 </head>
 <body>
 
 <script>
 $(document).ready(function(){
 	var list  = $("ul.list_feed#newsfeed-container li:not(.native_newsfeed_video_judul):not(.newsfeed-ads):not(.widget_mid):not(.more_news)");
 	var gambar = list.find(".img_con a img");
 	var judul = list.find(".desc_nhl a h2");
 	var link = list.find(".desc_nhl a");
 	var data = {sumber: "http://detik.com"};
 	var a = 0;

 	//description di dapat dari nextSibling.textContent
 	var description = list.find(".desc_nhl .labdate.f11");

 	//gunakan fungsi each untuk mengambil data update setiap berita
 	$.each(list, function(key, value){
 		//menentukan gambar
 		data.gambar = gambar[a].src;

 		//menentukan judul
 		data.judul = judul[a].innerText;

 		//menentukan link
 		data.link = link[a].href;

 		//menentukan description
 		data.description = description[a].nextSibling.textContent;

 		//menentukan description kategory dan date
 			//memecah menjadi array
	 		var list_description = list.find(".desc_nhl .labdate.f11");
	 		var list_description_array = list_description[a].innerText.split(" | ");

	 		//menentukan data kategry dan date
	 		data.kategory = list_description_array[0];
	 		data.date = list_description_array[1];

 		//menyimpan data berita yang sudah di dapat ke database
 			//ajaxoptions
 			var ajaxoptions = {
 				url : "/index.php/Csavedb/csavedbf",
 				data: data,
 				success: function(response){
 					console.log(response);
 				}
 			}

 			//lakukan request ajax
 			$.ajax(ajaxoptions);

 		//menambahkan nilai a setiap kali slesai input ke database
 		a++;
 	})
 })

 </script>
 </body>
 </html>