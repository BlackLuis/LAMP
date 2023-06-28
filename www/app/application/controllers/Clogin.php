<?php
class Clogin extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      $this->load->model(array('Mlogin'));

    }


  function index(){
    $this->load->view('header');
  $this->load->view('Vadmin/Vpersona');
    $this->load->view('Vlogin');
  }

  public function login()
  {
    $data = $this->input->post();
    // print_r($data);
    //$password = $this->input->post('password');


    $fila = $this->Mlogin->login($data);
    // print_r($fila);
        if($fila != null)
        {
            $Usuario =array(
                  'usuario' => $fila->per_cod,
                  'rol' =>$fila->rol_cod,
                  'login'=>true,
                 
                    );
                    $this->session->set_userdata($Usuario);
                    // header("Location: " . base_url(). "intranet");

        }
        echo json_encode($fila);
    }

  public function logout()
  {
    $array_sesiones = array('usuario' => '', 'rol' => '','login' => 'false');
      $this->session->unset_userdata($array_sesiones);
      $this->session->sess_destroy();
      header("Location: " . base_url() . "Clogin");
    }


}

 ?>
