    <footer class="footer">
      <!--  menu bagian kiri -->
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-tabs nav-justified">
            <li><a class="active" href="about.php">About Us</a></li>
            <li><a href="#menu2">Privacy Policy</a></li>
            <li><a href="#menu3">Contact Us</a></li>
            <li><a href="#menu4">Sitemap</a></li>
          </ul>
        </div>

      <!--  menu bagian kanan -->
        <div class="col-md-6">
          <ul class="nav nav-tabs pull-right">
            <li><a href="http://fb.com/ramdan.riawan2">Facebook</a></li>
            <li><a href="http://instagram.com/ramdanriawan">Instagram</a></li>
            <li><a href="http://line.com">Line</a></li>
            <li><a href="http://api.whatsapp.com">WhatsApp</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="text-uppercase text-center">
          &copy;My Site <?php echo date("Y" );?>
        </div>
      </div>
    </footer>

    <script>
      $(document).ready(function() {
          var form_jump  = $(".form-jump");
          var input_jump = $(".input-jump");

          form_jump.submit(function(event) {
            event.preventDefault();
            window.location.href = `<?php echo base_url();?>${input_jump.val()}/<?php echo $hasil["jumlah_limit"];?>`;
          });

          var select_limit = $(".select-limit");
          select_limit.change(function(event) {
            event.preventDefault();
            window.location.href = `<?php echo base_url().$hasil["page"];?>/${$(this).val()}`;
          });
      });
    </script>
  </body>
</html>
