<?php
$url = "http://viva.co.id";
$get = file_get_contents($url);
echo $get;
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Viva</title>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
</head>
<body>

<script>
    $(document).ready(function(){
        var list          = $(".modlist-1.article-list ul.clearenter li:not(.sponsored):not(li[style])");
        var gambar        = list.find("img:not(.img_ad)");
        var judul         = list.find("h3");
        var link          = list.find("a.title-content");
        var kategory      = list.find("h5");
        var list_kategory = list.find("div.date");
        var data          = {sumber: "http://viva.co.id", description : "-"};
        var a             = 0;

        //lakukan perulangan each untuk mengambil data berita

        $.each(list, function(key, value){
            //ambil data gambar
            data.gambar = gambar[a].attributes[2].textContent;

            //ambil data judul
            data.judul = judul[a].innerText;

            //ambil data link
            data.link = link[a].href;

            //ambil datakategory
            data.kategory = kategory[a].innerText;

            //ambil data date
            data.date = list_kategory[a].innerText;

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
