<?php include "header.php"; ?>
<!-- script php untuk melihat $hasil untuk di proses -->
<?php //echo "<pre>";print_r($hasil); /*print_r($_SERVER);*/ /*print_r($_GET);*/ echo "</pre>";?>

<main class="main col-md-7">
  <content class="content">
    <div class="row data">
      <!-- Text Berita Terbaru -->
      <div class="col-md-6 pull-left">
        <h2 class="terbaru text-capitalize">Berita Terbaru</h2>
      </div>

      <!-- Menu Filter -->
      <div class="col-md-6 pull-right limit">
        <form class="pull-right form-inline" action="index.html" method="post">
            <strong>Limit: </strong><select class="form-control select-limit" name="limit">
              <!--  script php untuk menentukan paging yang telah terpilih -->
              <?php
              $selected = "selected";

              for ($i=10; $i <= 50; $i+= 10) {
                //cek jika yang dipilih user adalah limit yang sekarang
                if ($i == $hasil["jumlah_limit"]) {
                  echo "<option value='$i' $selected>$i</option>";
                }else {
                  echo "<option value='$i'>$i</option>";
                }
              }
              ?>
          </select>
        </form>
      </div>
    </div>

    <!-- list artikel -->
<?php foreach ($hasil["data"] as $key => $value) {
echo <<<EOD
    <artikel class="artikel">
      <div class="row">
        <!--  gambar -->
        <div class="col-md-3 pull-left thumbnail">
          <img src="$value->gambar" alt="$value->judul" title="$value->judul">
        </div>

        <!--  artikel -->
        <div class="col-md-9 artikle pull-right">
          <!-- judul artikel -->
          <div class="col-md-12">
            <h3><a href="$value->link" target="_blank">$value->judul</a></h3>
          </div>

          <!-- isi artikel -->
          <div class="col-md-12">
            $value->description
          </div>

          <!--  data update -->
          <div class="col-md-12">
            <ul class="nav nav-pills dibaca">
              <li><a href="#" target="_blank">$value->kategory</a></li>
              <li><a href="#" target="_blank">$value->date</a></li>
              <li><a href="$value->sumber" target="_blank">$value->sumber</a></li>
            </ul>
          </div>
        </div>
      </div>
    </artikel>
EOD;
}?>

  </content>

  <div class="row bungkus">
    <div class="col-md-12">
      <ul class="pagination pagination-sm text-center">
        <!--  tampilkan paging khusus page pertam -->
        <?php
        //base url
        $base_url = base_url();

        //pengaturan page
        if($hasil["page"] != 1){
          //tampilkan page untuk page pertama
          echo "<li><a href='{$base_url}1/$hasil[jumlah_limit]'>==1==</a></li>";

          //page sebelumnya
          $page_prev = $hasil["page"] - 1;
          echo "<li><a href='{$base_url}{$page_prev}/$hasil[jumlah_limit]'><<< Prev</a></li>";
        }

          //perulangan for untuk menentukan jumlah paging
          for($i = $hasil["page"]; $i <= $hasil["page"] + 7 && $i <= $hasil["jumlah_paging"]; $i++) {
            //statement if untuk menentukan class active atau tidak
            if ($i == $hasil["page"]) {
              echo "<li class='active'><a href='$base_url$i/$hasil[jumlah_limit]'>$i</a></li>";
            }else {
              echo "<li><a href='$base_url$i/$hasil[jumlah_limit]'>$i</a></li>";
            }

          }

          //page selanjutnya && page last
          if ($hasil["page"] < $hasil["jumlah_paging"]) {
              $page_next = $hasil["page"] + 1;
              $page_last = $hasil["jumlah_paging"];
              echo "<li><a href='{$base_url}{$page_next}/$hasil[jumlah_limit]'>Next >>></a></li>";
              echo "<li><a href='{$base_url}{$page_last}/$hasil[jumlah_limit]'>==$page_last==</a></li>";
          }

         ?>

         <!--  untuk membuat jump page sesuai keinginan user -->
         <li class="pull-right clearfix">
           <form class="form-inline form-jump">
             <div class="input-group col-xs-12">
               <input class="form-control input-sm input-jump" id="form-jump" type="number" placeholder="Jump" min="1" max="<?php echo $hasil["jumlah_paging"];?>" step="1" value="<?php echo $hasil["page"];?>"/>
             </div>
           </form>
         </li>

         <!--  untuk menentukan page of jumlah data -->
         <?php echo  "<li><a class='jumlah_data'>Page: <b>$hasil[page]</b> of $hasil[jumlah_paging], total $hasil[jumlah_data] data</a></li>"; ?>
      </ul>
    </div>
  </div>
</main>

<?php include "footer.php"; ?>
