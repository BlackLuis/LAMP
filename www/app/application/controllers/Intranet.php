<?php

class Intranet extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
          
            $this->load->model(array('mpermiso'));
            // $this->load->model(array('muser'));
            $this->load->model('muser');
      }

      public function index()
      {
        if($this->session->userdata('login')){
          $data = array('title'=>'INICIO | Destinos Global',
                         'description' => 'Destinos Global especialistas en el area de transporte y logistica',
                         'keywords' => 'Destinos Global cargo, transporte,carga,logistica');
            $this->load->view('vintranet/head',$data);
            $this->load->view('vintranet/header');
            $this->load->model(array('muser'));
            $id =$this->session->userdata('idTipUsu');
            $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
            $data=array('permiso'=>$result);
            $this->load->view('vintranet/notificaciones',$data);
            $this->load->view('vintranet/metisMenu',$data);
            $this->load->view('vintranet/inicio',$data);
            $this->load->view('vintranet/footer');
          }
          else {
              $data = array('title'=>' APP | Destinos Global',
                              'description' => 'Destinos Global especialistas en el area de transporte y logistica',
                              'keywords' => 'Destinos Global cargo, transporte,carga,logistica');
            $this->load->view('vintranet/head',$data);
            $this->load->view('vintranet/header');
            $this->load->view('vintranet/login');
            //$this->load->view('guest/footer');
          }


      }

      /*CAMBIAR CONRTRASEÑA*/
      public function cambio_clave(){
            if($this->session->userdata('login')){
                  $data = array('title'=>' APP | Destinos Global',
                        'description' => 'Destinos Global especialistas en el area de transporte y logistica',
                        'keywords' => 'Destinos Global cargo, transporte,carga,logistica');
                  $this->load->view('vintranet/head',$data);
                  $this->load->view('vintranet/header');
                  $this->load->model(array('muser'));
                  $idTiU =$this->session->userdata('idTipUsu');
                  $id =$this->session->userdata('idUsu');
                  $result=$this->mpermiso->mostrar_by_tipo_usuario($idTiU);
                  
                  
                  $data=array('permiso'=>$result); 
                  $data['usuId']=$this->muser->getUsuario($id);              
                  // $this->load->view('vsoft_sop/notificaciones',$data);
                  $this->load->view('vintranet/metisMenu',$data);
                  $this->load->view('vintranet/cambio_clave');
                  $this->load->view('vintranet/footer');
            }
      }

      public function update_password(){
            $idUser=$this->input->post('usuId');
            $password=$this->input->post('pass');
            $q=$this->muser->update_password($idUser,$password);
            echo json_encode($q);
      }
}

 ?>
