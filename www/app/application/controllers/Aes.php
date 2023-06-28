<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aes extends CI_Controller
{
      function __construct(){
    parent::__construct();
    $this->load->model('Mreportes');
    $this->load->model('Mguia');
              $this->load->model(array('muser'));
      $this->load->model(array('mpermiso'));
        $this->load->model('muser');
        if (!$this->session->userdata('login')){
            header("Location: " . base_url(). "intranet");

      }
      else {
          $id= ($this->session->userdata('idTipUsu'));
          $this->permisos = $this->muser->getPermisos($id);
    
          $this->controller='Aes';
      }

  }

public function usuarios(){
     if($this->muser->validar_permiso('usuarios',$this->controller,$this->session->userdata('idTipUsu'))){
                $data = array('title'=>'GUIA | DESTINOSGLOBAL',
                             'description' => 'Transporte de carga',
                             'keywords' => 'Transporte de carga');
                $this->load->view('vintranet/head',$data);
                $this->load->view('vintranet/header');
                $id =$this->session->userdata('idTipUsu');

                
                    $this->load->view('vintranet/notificaciones');
                $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
                $data=array('permiso'=>$result);

                $this->load->view('vintranet/metisMenu',$data);
                $idusu =$this->session->userdata('idUsu');
$datos['tip']=$this->muser->tipousu();
$datos['usu']=$this->muser->usu();
$datos['guia']=$this->muser->guia();
$datos['comp']=$this->muser->comp();
    $this->load->view('Vreportes/usuario',$datos);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }
    
    public function saveuse()
    {
    $tipo_usuario = $this->input->post('tip');
    $username = $this->input->post('usu');
    $password = $this->input->post('pass');
    $register = date("Y-m-d H:i:s");
  
   $q= $this->muser->save($username,$password,$register,$tipo_usuario);
      echo json_encode($q);
    }
    
       public function saveguia()
    {
    $id = $this->input->post();
     $q= $this->muser->saveguia($id);
      echo json_encode($q);
    }
    
           public function savefac()
    {
    $id = $this->input->post();
     $q= $this->muser->savefac($id);
      echo json_encode($q);
    }
    
             public function repusu()
    {
   
     $q= $this->muser->repusu();
      echo json_encode($q);
    }
    
             public function repguia()
    {
   
     $q= $this->muser->repguia();
      echo json_encode($q);
    }
    
          public function repcom()
    {
   
     $q= $this->muser->repcom();
      echo json_encode($q);
    }

 

}
