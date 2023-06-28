<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Seguimiento extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Mseguimiento');
        $this->load->model(array('muser'));
        $this->load->model(array('mpermiso'));
        // if (!$this->session->userdata('login')){
        //     header("Location: " . base_url(). "intranet");

        // }else {
            // $id= ($this->session->userdata('idTipUsu'));
            $this->permisos = $this->muser->getPermisos(73);    
            $this->controller='Seguimiento';
        // }
	}

    public function manifiesto(){
        // if($this->muser->validar_permiso('manifiesto',$this->controller,$this->session->userdata('idTipUsu'))){
            $data = array('title'=>'MANIFIESTO| DESTINOS GLOBAL',
                        'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                        'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
            $this->load->view('vintranet/head',$data);
            $this->load->view('vintranet/header');
            // $id =$this->session->userdata('idTipUsu');

               
            // $this->load->view('vintranet/notificaciones');
            // $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
            // $data=array('permiso'=>$result);

            
            $this->load->view('modal_cargando');
            // $idusu =$this->session->userdata('idUsu');
            $idusu =73;
            $datos['guia']=$this->Mseguimiento->serie($idusu); //$datos['guia']=$this->Mguia->serie($idusu);
            $datos['tipdoc']=$this->Mseguimiento->tipoDoc();
            $this->load->view('v_publica/seguimiento',$datos);
            $this->load->view('vintranet/footer');
        // } else {
        //     header("Location: " . base_url(). "intranet");
        // }
    }

    public function ciudad(){
        $q=$this->Mseguimiento->ciudad();
        echo json_encode($q);
    }

    public function veriguimani(){
        $id=$this->input->post();
        $q=$this->Mseguimiento->veriguimani($id);
        echo json_encode($q);
    }

    public function mostrar_detmanif(){
        $id=$this->input->post('id');
        $q=$this->Mseguimiento->mostrar_detmanif($id);
        echo json_encode($q);
    }

    public function index(){
        // if($this->muser->validar_permiso('seguimiento',$this->controller,$this->session->userdata('idTipUsu'))){
            $data = array('title'=>'SEGUIMIENTO | DESTINOS GLOBAL',
                        'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                            'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
            $this->load->view('vintranet/head',$data);
            $this->load->view('vintranet/header');
            // $id =$this->session->userdata('idTipUsu');

            // $this->load->view('vintranet/notificaciones');
            // $result=$this->mpermiso->mostrar_by_tipo_usuario(73);
            // $data=array('permiso'=>$result);
            
            $this->load->view('modal_cargando');
            $idusu =73;
            $datos['guia']=$this->Mseguimiento->serie($idusu);
            $datos['tipdoc']=$this->Mseguimiento->tipdoc();
            $this->load->view('v_publica/seguimiento',$datos);
            $this->load->view('vintranet/footer');
        // }else {
            // header("Location: " . base_url(). "intranet");
        // }
    }

    public function busguia(){
        $id=$this->input->post();
        $q=$this->Mseguimiento->busguia($id);
        echo json_encode($q);
    }

	public function webhook(){
	  
$data = file_get_contents("php://input");
$event = json_decode($data, true);
if(isset($event)){
	//Here, you now have event and can process them how you like e.g Add to the database or generate a response
	$file = 'log.txt';  
	$data =json_encode($event)."\n";  
	file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}

	}
	
}