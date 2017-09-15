<?php /**
 *
 */
class Cindex extends CI_Controller
{
  //fungsi untuk menampilkan data dan juga sebagai index awal
  function cindexf($page = 1, $limit = 10)
  {
    //mengoper hasil query dari mindex (database) ke vindex
    $this->load->model("Mindex");
    $data["hasil"] = $this->Mindex->mindexf($page, $limit);

    //meload vindex dan mengoper data $hasil
    $this->load->view("vindex", $data);
  }

  //fungsi default yang di panggi ketika fungsi lain tidak di panggil
  function index(){
    $this->cindexf();
  }

  //fungsi untuk
}
 ?>
