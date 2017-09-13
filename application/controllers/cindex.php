<?php /**
 *
 */
class cindex extends CI_Controller
{

  function cindexf($page = 1, $limit = 10)
  {
    //mengoper hasil query dari mindex (database) ke vindex
    $this->load->model("mindex");
    $data["hasil"] = $this->mindex->mindexf($page, $limit);

    //mengoper jumlah paging dari mindex (database) ke vindex


    //meload vindex
    $this->load->view("vindex", $data);
  }

  function index(){
    $this->cindexf();
  }
}
 ?>
