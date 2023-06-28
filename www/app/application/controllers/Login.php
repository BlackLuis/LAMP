<?php
/**
 *
 */
class Login extends CI_Controller
{
    function __construct()
    {
      parent::__construct();
      $this->load->model(array('muser'));

    }

  public function index()
  {
    $data = $this->input->post();
    // print_r($data);
    //$password = $this->input->post('password');


    $fila = $this->muser->getUser_aes($data);
    // print_r($fila);
        if($fila != null)
        {
            $Usuario =array(
                  'usuario' => $fila->usuario,
                  'idUsu' =>$fila->idUsuario,
                  'login'=>true,
                  'idTipUsu'=>$fila->idTipoUsuario
                    );
                    $this->session->set_userdata($Usuario);
                    // header("Location: " . base_url(). "intranet");

        }
        echo json_encode($fila);
    }

    public function index_anterior()
    {
      $nickname = $this->input->post('nickname');
      $password = $this->input->post('password');

      $this->load->model('muser');
      $fila = $this->muser->getUser($nickname);

      if($fila != null)
      {
        if($fila->clave == $password)
        {

          $Usuario =array(
                'usuario' => $fila->usuario,
                'idUsu' =>$fila->idUsuario,
                'login'=>true,
                'idTipUsu'=>$fila->idTipoUsuario

                  );
                  $this->session->set_userdata($Usuario);

                    header("Location: " . base_url(). "intranet");
        }
        else{
          header("Location: " . base_url() . "intranet");
        }
      }
      else{
        echo "no encontro";
      }
      }

    public function logout()
    {
      $array_sesiones = array('idUsu' => '', 'email' => '','login' => 'false','idTipUsu' => '');
      $this->session->unset_userdata($array_sesiones);
      $this->session->sess_destroy();
      header("Location: " . base_url() . "intranet");
    }

    public function cambiar_clave()
    {
        $id=$this->input->post('pass_nueva');
        $q=$this->muser->cambiar_clave($id);
        echo json_encode($q);
    }

    public function mostrar_clave($value='')
    {
        $id=$this->input->post('pass_actual');
        $q=$this->muser->validar_clave($id);
        echo json_encode($q);
    }

    public function verificar_login()
    {
      $data = $this->input->post();
      // print_r($data);
      //$password = $this->input->post('password');


      $fila = $this->muser->getUser_aes($data);
      // print_r($fila);
          if($fila != null)
          {
              $Usuario =array(
                    'usuario' => $fila->usuario,
                    'idUsu' =>$fila->idUsuario,
                    'login'=>true,
                    'idTipUsu'=>$fila->idTipoUsuario
                      );
                      $this->session->set_userdata($Usuario);
                      // header("Location: " . base_url(). "intranet");

          }
          echo json_encode($fila);
      }




}

 ?>
