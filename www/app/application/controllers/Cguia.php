<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Cguia extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mguia');
        $this->load->model(array('muser'));
        $this->load->model(array('mpermiso'));
        $this->load->model(array('mpago'));
        if (!$this->session->userdata('login')){
            header("Location: " . base_url(). "intranet");

        }else {
            $id= ($this->session->userdata('idTipUsu'));
            $this->permisos = $this->muser->getPermisos($id);    
            $this->controller='Cguia';
        }

	}
	public function guia(){
		 if($this->muser->validar_permiso('guia',$this->controller,$this->session->userdata('idTipUsu'))){
                $data = array('title'=>'GUIA | DESTINOSGLOBAL',
                        'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                         'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
                $this->load->view('vintranet/head',$data);
                $this->load->view('vintranet/header');
                $id =$this->session->userdata('idTipUsu');

                
                    $this->load->view('vintranet/notificaciones');
                $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
                $data=array('permiso'=>$result);

                $this->load->view('vintranet/metisMenu',$data);

	$idusu =$this->session->userdata('idUsu');
    $datos['guia']=$this->Mguia->serie($idusu);
      $this->load->view('modal_cargando');
    $this->load->view('vintranet/cliente');
		$this->load->view('Vguia/registrar',$datos);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
	}

	
	public function medida(){
	
     $q=$this->Mguia->medida();
      echo json_encode($q);
	}
	 public function mostrar_clientes()
    {
        $id=$this->input->post('search');
        $q=$this->Mguia->mostrar_clientes($id);
        echo json_encode($q);
    }
    	 public function ciudad()
    {
        $q=$this->Mguia->ciudad();
        echo json_encode($q);
    }
     	 public function provincia()
    {
    	$id=$this->input->post('id');
        $q=$this->Mguia->provincia($id);
        echo json_encode($q);
    }
       	 public function distrito()
    {
    	$id=$this->input->post('id');
        $q=$this->Mguia->distrito($id);
        echo json_encode($q);
    }
    
    public function registrar(){
        $id=$this->input->post();
        $q=$this->Mguia->registrar($id);
        echo json_encode($q);
    }


 public function guiafalt(){
        $id=$this->input->post();
        $q=$this->Mguia->guiafalt($id);
        echo json_encode($q);
    }

public function excel_guia(){

  $spreadsheet = new Spreadsheet(); 
   $data = $this->input->post('id');
$info=$this->Mguia->excel_guia($data);

   if(count($info) > 0){

       $cab = $info['cab'];
       $det = $info['det'];
  $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Guia');

      $contador=14;

        $spreadsheet->setActiveSheetIndex(0)->mergeCells('B7:C7');
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('D7:E7');
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('B10:E10');
         $spreadsheet->setActiveSheetIndex(0)->mergeCells('F10:I10');
         $spreadsheet->setActiveSheetIndex(0)->mergeCells('B11:D11');
         $spreadsheet->setActiveSheetIndex(0)->mergeCells('G11:H11');
         $spreadsheet->setActiveSheetIndex(0)->mergeCells('F12:I12');
         $spreadsheet->setActiveSheetIndex(0)->mergeCells('B12:E12');
          $spreadsheet->setActiveSheetIndex(0)->mergeCells('B14:E14');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('B15:E15');
              $spreadsheet->setActiveSheetIndex(0)->mergeCells('B16:E16');
                $spreadsheet->setActiveSheetIndex(0)->mergeCells('B17:E17');
           $spreadsheet->setActiveSheetIndex(0)->mergeCells('B18:H18');
           $spreadsheet->setActiveSheetIndex(0)->mergeCells('B19:H19');
           $spreadsheet->setActiveSheetIndex(0)->mergeCells('B20:H20');
      
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(4);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(16);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(13);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(6);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(8);
         $spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(21);
          $spreadsheet->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
          $spreadsheet->getActiveSheet()->getRowDimension('3')->setRowHeight(13);
           $spreadsheet->getActiveSheet()->getRowDimension('4')->setRowHeight(14);
           $spreadsheet->getActiveSheet()->getRowDimension('5')->setRowHeight(9);
           $spreadsheet->getActiveSheet()->getRowDimension('6')->setRowHeight(0);
            $spreadsheet->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
             $spreadsheet->getActiveSheet()->getRowDimension('8')->setRowHeight(15);
              $spreadsheet->getActiveSheet()->getRowDimension('9')->setRowHeight(9);
               $spreadsheet->getActiveSheet()->getRowDimension('10')->setRowHeight(16);
 $spreadsheet->getActiveSheet()->getRowDimension('11')->setRowHeight(15);
 $spreadsheet->getActiveSheet()->getRowDimension('12')->setRowHeight(14);
  $spreadsheet->getActiveSheet()->getRowDimension('13')->setRowHeight(16);
   $spreadsheet->getActiveSheet()->getRowDimension('14')->setRowHeight(20);
     $spreadsheet->getActiveSheet()->getRowDimension('15')->setRowHeight(15);
     $spreadsheet->getActiveSheet()->getRowDimension('16')->setRowHeight(15);

        $spreadsheet->getActiveSheet()->setCellValue("B7", $cab->gui_fec);
         $spreadsheet->getActiveSheet()->setCellValue("D7", $cab->gui_fec);
            $spreadsheet->getActiveSheet()->setCellValue("B10", $cab->cli_raz);
                $spreadsheet->getActiveSheet()->setCellValue("F10",  $cab->cli_razl);
                  $spreadsheet->getActiveSheet()->setCellValue("B11",$cab->cli_nud. "-". $cab->telp. "-".$cab->celp);
                   $spreadsheet->getActiveSheet()->setCellValue("G11",$cab->cli_nudl."-". $cab->tell."-".$cab->cell);
        $spreadsheet->getActiveSheet()->setCellValue("B12", $cab->partida);
        $spreadsheet->getActiveSheet()->setCellValue("F12", $cab->llegada);
            foreach($det as $l){
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", strtoupper($l->deg_des));
         $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $l->deg_can);
         $spreadsheet->getActiveSheet()->setCellValue("G{$contador}",$l->med_des."          ".$l->deg_pes);
          $spreadsheet->getActiveSheet()->setCellValue("H{$contador}","KG." );
          $spreadsheet->getActiveSheet()->setCellValue("I{$contador}",$l->deg_pev." KG." );
        $contador++;
    }
    $cuenta3=$contador+9;
     $spreadsheet->getActiveSheet()->setCellValue("B{$cuenta3}", $cab->gui_gcl);
     $cuenta2=$contador+10;
      $spreadsheet->getActiveSheet()->setCellValue("B{$cuenta2}", $cab->gui_obs);
     $cuenta=$contador+7;
     $cuenta1=$contador+8;
      $spreadsheet->getActiveSheet()->setCellValue("D{$cuenta}", "USUARIO:");
      $spreadsheet->getActiveSheet()->setCellValue("D{$cuenta1}", "F.PAGO:");
       $spreadsheet->getActiveSheet()->setCellValue("D{$cuenta3}", "Transporte:");
      $spreadsheet->getActiveSheet()->setCellValue("E{$cuenta}", $cab->usuario);
      $spreadsheet->getActiveSheet()->setCellValue("E{$cuenta1}",$cab->tpa_des);
      $spreadsheet->getActiveSheet()->setCellValue("E{$cuenta3}",$cab->trs_des);
             $estiloTituloReporte = array(
   
        
            'alignment' => array(
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
              
                'wrap' => TRUE
            )
        );
        
        $spreadsheet->getActiveSheet()->getStyle('B10:E10')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('B11:D11')->applyFromArray($estiloTituloReporte);
         $spreadsheet->getActiveSheet()->getStyle('B12:E12')->applyFromArray($estiloTituloReporte);

       $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'GUIA'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');  // download file 


     }else{
       echo 'No se han encontrado reporte';
        exit;
     }
}

        public function factura(){
         if($this->muser->validar_permiso('factura',$this->controller,$this->session->userdata('idTipUsu'))){
                $data = array('title'=>'FACTURA | DESTINOS GLOBAL',
                   'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                         'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
                $this->load->view('vintranet/head',$data);
                $this->load->view('vintranet/header');
                $id =$this->session->userdata('idTipUsu');
                   $this->load->view('vintranet/notificaciones');
                $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
                $data=array('permiso'=>$result);
                $this->load->view('vintranet/metisMenu',$data);
                $this->load->view('modal_cargando');
                 $idusu =$this->session->userdata('idUsu');
                 
    $medio_pago=$this->mpago->mostrar_medio_pago();
                $tipo_tarjeta=$this->mpago->mostrar_tipo_tarjeta();
                $banco=$this->mpago->mostrar_banco();
                $data=array('medio_pago'=>$medio_pago,'tipo_tarjeta'=>$tipo_tarjeta,'banco'=>$banco);
                $this->load->view('Vguia/modal_medio_pago',$data);
                
  $ser=$this->Mguia->serie($idusu);
                $lineas=$this->Mguia->mostrar_linea();
 $data=array('linea'=>$lineas,'guia'=>$ser);
  $this->load->view('vintranet/cliente');
        $this->load->view('Vguia/factura',$data);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
    }

               public function serie_comprobante()
    {
        $id=$this->input->post('id');
        $q=$this->Mguia->serie_comprobante($id);
        echo json_encode($q);
    }

                 public function verigui()
    {
        $id=$this->input->post();
        $q=$this->Mguia->verigui($id);
        echo json_encode($q);
    }


            public function item_lnegocio()
    {
        $id=$this->input->post('id');
        $q=$this->Mguia->item_lnegocio($id);
        echo json_encode($q);
    }
                public function registrar_comproemit()
    {
        $id=$this->input->post();
        $q=$this->Mguia->registrar_comproemit($id);
        echo json_encode($q);
    }


    public function seguimiento(){
        if($this->muser->validar_permiso('seguimiento',$this->controller,$this->session->userdata('idTipUsu'))){
            $data = array('title'=>'SEGUIMIENTO | DESTINOS GLOBAL',
                        'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                        'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
            $this->load->view('vintranet/head',$data);
            $this->load->view('vintranet/header');
            $id =$this->session->userdata('idTipUsu');
            $this->load->view('vintranet/notificaciones');
            $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
            $data=array('permiso'=>$result);

            $this->load->view('vintranet/metisMenu',$data);
            $this->load->view('modal_cargando');
            $idusu =$this->session->userdata('idUsu');
            $datos['guia']=$this->Mguia->serie($idusu);
            $this->load->view('Vguia/seguimiento',$datos);
            $this->load->view('vintranet/footer');
        }else{
            header("Location: " . base_url(). "intranet");
        }
    }

    public function busguia(){
        $id=$this->input->post();
        $q=$this->Mguia->busguia($id);
        echo json_encode($q);
    }

    //modifica el estado del seguimiento(guia)
    public function modest(){
        $id=$this->input->post();
        $q=$this->Mguia->modest($id);
        echo json_encode($q);
    }

    public function modfeching(){
        $id=$this->input->post();
        $q=$this->Mguia->modfeching($id);
        echo json_encode($q);
    }
    public function modhoraing(){
        $id=$this->input->post();
        $q=$this->Mguia->modhoraing($id);
        echo json_encode($q);
    }

    public function modfechvuel(){
        $id=$this->input->post();
        $q=$this->Mguia->modfechvuel($id);
        echo json_encode($q);
    }
    public function modhoravuel(){
        $id=$this->input->post();
        $q=$this->Mguia->modhoravuel($id);
        echo json_encode($q);
  
    }

    public function modfechlleg(){
        $id=$this->input->post();
        $q=$this->Mguia->modfechlleg($id);
        echo json_encode($q);
    }
    public function modhoralleg(){
        $id=$this->input->post();
        $q=$this->Mguia->modhoralleg($id);
        echo json_encode($q);
  
    }
    //




    

    function do_upload(){
        $config['upload_path']="./files/seguimiento";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name'] = $this->input->post('cod');
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
 
            // $title= $this->input->post('title');
            //$image= $data['upload_data']['file_name']; 
             
            //$result= $this->upload_model->save_upload($title,$image);
            echo json_decode(true);
        }
 
    }

    public function regcliente(){
        $id=$this->input->post();
        $q=$this->Mguia->regcliente($id);
        echo json_encode($q);
    }

   public function text_cab(){

        $data = $this->input->post('id');
    $info=$this->Mguia->text_cab($data);
    $ruc='20513171065';
    $tip=$info->tic_sun;
    $ser=$info->sec_ser;
    $num=str_pad($info->coe_num, 8, "0", STR_PAD_LEFT);
    $file=$ruc."-".$tip."-".$ser."-".$num;
        header('Content-Type: text/plain');
header('Content-Disposition: attachment;filename='.$file.'.cab'); 
header('Cache-Control: no-store,no-cache,must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expire:0');

$handle=fopen('php://output','w');
$hora=date("H:i:s");
fwrite($handle,"0101|".$info->coe_fec."|".$hora."|-|000|".$info->tid_sun."|".$info->cli_nud."|".$info->cli_raz."|PEN|".$info->coe_igv."|".$info->coe_vve."|".$info->coe_pve."|0.00|0.00|0.00|".$info->coe_pve."|2.1|2.0|");

fclose($handle);
exit;
    }

public function envio_sunat(){

  $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJydWMiOiIyMDEyMzQ1Njc4OSIsInR5cGUiOiJzeXMiLCJkYXRlIjoxNTQwMjIwMzI4fQ.rk9dhDjYrFTIlvsZRog05_XgvFUQgVfprRanQJqzXio";
$txt = "CAB|1001|01|F021|00004340|2019-12-08|6|20600055519|TI SOLUCIONES|carrenojuan670@gmail.com,juanco_93@hotmail.com|PEN||||262.33||||47.22|||47.22|262.33|309.55|||||||||||||||||3.31\nDET|ZZ|2|C0001||carga aerea de las guias 002-152,002-99|126.94||45.7|10|||149.79|253.88||253.88|18|45.7||\nDTR|4.00|4.36|0001-232323|014|001\nEXT|005|Cal. Bernardo O’Higgins Nro. 899 Int. 505 Pueblo Libre\nEXT|006|Operación sujeta al sistema de pago de obligaciones tributarias D.Legislativo 940-Cta Banco de La Nacion N°00-000-529991 Tasa 12%";

$header = array();
$header[] = 'Content-type: text/plain';
$header[] = 'Authorization: Bearer '.$token;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://factesol.net.pe/api/V2/doc/ventas?send=true");
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS,  $txt);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
$result = curl_exec ($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close ($ch);

if($httpcode == 200){
    $json =array('Ruc'=>'20600055519','TipoDocumento'=>'01','Serie'=>'F021','Correlativo'=>'00004339');

$header1 = array();
$header1[] = 'Content-type: application/json';
$header1[] = 'Authorization: Bearer '.$token;

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, "https://factesol.net.pe/api/mail/emaildoc");
//https://factesol.net.pe/api/venta/status
curl_setopt($ch1, CURLOPT_HEADER, true);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch1, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true );
 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
$result1 = curl_exec ($ch1);
$httpcode1 = curl_getinfo($ch1, CURLINFO_HTTP_CODE);
curl_close ($ch1);
echo json_encode($result1);
}

 
    }


       public function text_det(){

        $data = $this->input->post('id');
    $info=$this->Mguia->text_det($data);
    $ruc='20513171065';
    $tip=$info->tic_sun;
    $ser=$info->sec_ser;
    $num=str_pad($info->coe_num, 8, "0", STR_PAD_LEFT);
    $file=$ruc."-".$tip."-".$ser."-".$num;
        header('Content-Type: text/plain');
header('Content-Disposition: attachment;filename='.$file.'.det'); 
header('Cache-Control: no-store,no-cache,must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expire:0');

$handle=fopen('php://output','w');

$hora=date("H:i:s");
fwrite($handle,"NIU|1|".$info->lin_cos."|".$info->lnc_cos."|".$info->coe_des."|".$info->coe_vve."|".$info->coe_igv."|1000|".$info->coe_igv."|".$info->coe_vve."|IGV|VAT|10|18|-|0.00|0.00|0.00|0.00|0.00|0.00|-|0.00|0.00|0.00|0.00|0.00|-|0.00|0.00|0.00|0.00|0.00|".$info->coe_pve."|".$info->coe_vve."|0.00|");

fclose($handle);
exit;
    }

    public function fac_pdf(){
         $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJydWMiOiIyMDEyMzQ1Njc4OSIsInR5cGUiOiJzeXMiLCJkYXRlIjoxNTQwMjIwMzI4fQ.rk9dhDjYrFTIlvsZRog05_XgvFUQgVfprRanQJqzXio";
   $json =array('Ruc'=>'20600055519','TipoDocumento'=>'01','Serie'=>'F021','Correlativo'=>'00004337');

$header1 = array();
$header1[] = 'Content-type: application/json';
$header1[] = 'Authorization: Bearer '.$token;

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, "https://factesol.net.pe/api/venta/pdf");
curl_setopt($ch1, CURLOPT_HEADER, true);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch1, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true );
//curl_setopt($ch1, CURLOPT_BINARYTRANSFER, true);
 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
$result1 = curl_exec ($ch1);
header('Cache-Control: public'); 
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="new.pdf"');
header('Content-Length: '.strlen($result1));
echo $result1;
curl_close ($ch1);
    }

     public function fac_xml(){
         $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJydWMiOiIyMDEyMzQ1Njc4OSIsInR5cGUiOiJzeXMiLCJkYXRlIjoxNTQwMjIwMzI4fQ.rk9dhDjYrFTIlvsZRog05_XgvFUQgVfprRanQJqzXio";
   $json =array('Ruc'=>'20600055519','TipoDocumento'=>'01','Serie'=>'F021','Correlativo'=>'00004337');

$header1 = array();
$header1[] = 'Content-type: application/json';
$header1[] = 'Authorization: Bearer '.$token;

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, "https://factesol.net.pe/api/venta/xml");
curl_setopt($ch1, CURLOPT_HEADER, true);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch1, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true );
//curl_setopt($ch1, CURLOPT_BINARYTRANSFER, true);
 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
$result1 = curl_exec ($ch1);
header('Cache-Control: public'); 
header('Content-type: application/xml');
header('Content-Disposition: attachment; filename="new.xml"');
header('Content-Length: '.strlen($result1));
echo $result1;
curl_close ($ch1);
    }


        public function manifiesto(){
            if($this->muser->validar_permiso('manifiesto',$this->controller,$this->session->userdata('idTipUsu'))){
                    $data = array('title'=>'MANIFIESTO| DESTINOS GLOBAL',
                            'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                            'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
                    $this->load->view('vintranet/head',$data);
                    $this->load->view('vintranet/header');
                    $id =$this->session->userdata('idTipUsu');

                    
                        $this->load->view('vintranet/notificaciones');
                    $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
                    $data=array('permiso'=>$result);

                    $this->load->view('vintranet/metisMenu',$data);
                    $this->load->view('modal_cargando');
                $idusu =$this->session->userdata('idUsu');
                $datos['guia']=$this->Mguia->serie($idusu);
                $this->load->view('Vguia/manifiesto',$datos);
                $this->load->view('vintranet/footer');
            }else {
                    header("Location: " . base_url(). "intranet");
            }
        }
        
        public function mostrar_detmanif(){
            $id=$this->input->post('id');
            $q=$this->Mguia->mostrar_detmanif($id);
            echo json_encode($q);
        }
    
                  public function grabmani()
    {
        $id=$this->input->post();
        $q=$this->Mguia->grabmani($id);
        echo json_encode($q);
    }
    
    
      public function envio_sunat_factpro(){

       $data = $this->input->post('id');
$info=$this->Mguia->envio_sunat($data);

  $cab = $info['cab'];
       $det = $info['det'];
       $cuo = $info['cuo'];
         $maxven = $info['maxven'];
        if($cab->coe_metpag==0){
            $nom="Contado";
            $ven=$cab->coe_fec;
        }else{
            
             $nom="Credito";
              $ven=$maxven->fecha_ven;
        }
if($cab->coe_pde>0){
    $codope="1001";
}else{
     $codope="0101";
}
  $token = "z15z7BHwegPLJghwrqEcH29CzIfXaQ7JruTYbo1ATlkpE2Cbe9";

$header = array();
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: Bearer '.$token;

$json = array();
$json =array('serie_documento'=>$cab->sec_ser ,'numero_documento'=>$cab->coe_num,'fecha_de_emision'=>$cab->coe_fec,
    'hora_de_emision'=>'00:00','codigo_tipo_operacion'=>$codope,'codigo_tipo_documento'=>$cab->tic_sun,'codigo_tipo_moneda'=>$cab->tip_mon,
   'fecha_de_vencimiento'=>$ven,
   'numero_orden_de_compra'=>'0','nombre_almacen'=>'1');
$json['datos_del_emisor']=array('codigo_del_domicilio_fisca'=>'000');
$json['datos_del_cliente_o_receptor']= array('codigo_tipo_documento_identidad'=>$cab->tid_sun,'numero_documento'=>$cab->cli_nud,
    'apellidos_y_nombres_o_razon_social'=>$cab->cli_raz,'codigo_pais'=>'PE','ubigeo'=>$cab->dis_ubi,'direccion'=>$cab->cli_dir,
    'correo_electronico'=>'empresa@empresa.com','telefono'=>'9999999999');
$json['totales']=array('total_exportacion'=>'0.00','total_operaciones_gravadas'=>$cab->coe_vve,'total_operaciones_inafectas'=>'0.00',
'total_operaciones_exoneradas'=>'0.00','total_operaciones_gratuitas'=>'0.00','total_igv'=>$cab->coe_igv,'total_impuestos'=>$cab->coe_igv,
'total_valor'=>$cab->coe_vve,'total_venta'=>$cab->coe_pve);

foreach($det as $row)
  {
      $json['items'][] = $row;
  }

  $json['additional_information']=$cab->coe_obs;
$json['termino_de_pago']=array('descripcion'=>$nom,'tipo'=>$cab->coe_metpag);

if($cab->coe_metpag==1){
    
  foreach($cuo as $row1)
  {
      $json['venta_al_credito'][] = $row1;
  }  
    
}

if($codope=="1001"){
    if($cab->lnc_cod==1){
      $codlin="037";
    }else{
        $codlin="027";
    }
    $json['detraccion']=array('codigo'=>$codlin,'porcentaje'=>$cab->coe_pde,'monto'=>$cab->coe_mde,'codigo_metodo_pago'=>'009','cuenta_bancaria'=>'00-007-078706','nombre_cuenta_bancaria'=>'BANCO DE LA NACION');


}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://destinosglobal.siaperu.xyz/api/documents");
curl_setopt($ch, CURLOPT_HEADER, false);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_FOLLOWLOCATION , true );

 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

$result1 = curl_exec ($ch);
$resultphp=json_decode($result1, true);
//print_r($resultphp);
$pdf= $resultphp['links']['pdf'];
header('location:'.$pdf);
curl_close ($ch);



 
    }


    public function ruc()
     {
        $ruc = $this->input->post('ruc');
 /* $data = file_get_contents("https://api.sunat.cloud/ruc/".$ruc);
 $info = json_decode($data, true);

 if($data==='[]' || $info['fecha_inscripcion']==='--'){
 	$datos = array(0 => 'nada');
 	echo json_encode($datos);*/
 	
 	
 	$curl = curl_init();

$data = [
    'token' => 'p08r3tHJmVkjoKL14bALXo7rzqjFxbZItPDbdu2DnPT6FQVy4W80Z3gUZR0g',
    'ruc' => $ruc
];

$post_data = http_build_query($data);

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.migo.pe/api/v1/ruc",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $post_data,
));

$data = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;

 	
 	
 }else{
 
 	echo $data;
     }
      }
      
 public function dni()
     {
        $ruc = $this->input->post('ruc');
 /* $data = file_get_contents("https://api.sunat.cloud/ruc/".$ruc);
 $info = json_decode($data, true);

 if($data==='[]' || $info['fecha_inscripcion']==='--'){
 	$datos = array(0 => 'nada');
 	echo json_encode($datos);*/
 	
 	
 	$curl = curl_init();

$data = [
    'token' => 'p08r3tHJmVkjoKL14bALXo7rzqjFxbZItPDbdu2DnPT6FQVy4W80Z3gUZR0g',
    'dni' => $ruc
];

$post_data = http_build_query($data);

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.migo.pe/api/v1/dni",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $post_data,
));

$data = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;

 	
 	
 }else{
 
 	echo $data;
     }
      }
     
     
      
      
      
      
              public function pagos(){
         if($this->muser->validar_permiso('pagos',$this->controller,$this->session->userdata('idTipUsu'))){
                $data = array('title'=>'PAGOS | DESTINOS GLOBAL',
                   'description' => 'DESTINOS GLOBAL especialistas en el area de transporte y logistica',
                         'keywords' => 'DESTINOS GLOBAL, transporte,carga,logistica');
             $this->load->view('vintranet/head',$data);
                $this->load->view('vintranet/header');
                $id =$this->session->userdata('idTipUsu');

                
                    $this->load->view('vintranet/notificaciones');
                $result=$this->mpermiso->mostrar_by_tipo_usuario($id);
                $data=array('permiso'=>$result);

                $this->load->view('vintranet/metisMenu',$data);
                $this->load->view('modal_cargando');
    $idusu =$this->session->userdata('idUsu');
    $medio_pago=$this->mpago->mostrar_medio_pago();
                $tipo_tarjeta=$this->mpago->mostrar_tipo_tarjeta();
                $banco=$this->mpago->mostrar_banco();
                $data=array('medio_pago'=>$medio_pago,'tipo_tarjeta'=>$tipo_tarjeta,'banco'=>$banco);
                $this->load->view('Vguia/modal_medio_pago',$data);
   

        $this->load->view('Vguia/pagos');
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
    }
    
                public function ver_pagos()
    {
        $id=$this->input->post();
        $q=$this->Mguia->ver_pagos($id);
        echo json_encode($q);
    }


       public function registrar_pago()
    {
        $id=$this->input->post();
        $q=$this->mpago->registrar_medio_pago($id,$id['idcomppago']);
        echo json_encode($q);
    }
    
                public function companula()
    {
        $id=$this->input->post();
        $q=$this->Mguia->companula($id);
        echo json_encode($q);
    }
    
    
              public function tran_emp()
    {
        $id=$this->input->post();
        $q=$this->Mguia->tran_emp($id);
        echo json_encode($q);
    }
    
                 public function veriguimani()
    {
        $id=$this->input->post();
        $q=$this->Mguia->veriguimani($id);
        echo json_encode($q);
    }

      public function reenvio_sunat_factpro(){

       $data = $this->input->post('id');
$info=$this->Mguia->envio_sunat($data);

  $cab = $info['cab'];
       $det = $info['det'];
       $cuo = $info['cuo'];
        $maxven = $info['maxven'];
        if($cab->coe_metpag==0){
            $nom="Contado";
            $ven=$cab->coe_fec;
        }else{
            
             $nom="Credito";
              $ven=$maxven->fecha_ven;
        }
        if($cab->coe_pde>0){
    $codope="1001";
}else{
     $codope="0101";
}

  $token = "z15z7BHwegPLJghwrqEcH29CzIfXaQ7JruTYbo1ATlkpE2Cbe9";

$header = array();
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: Bearer '.$token;

$json = array();
$json =array('serie_documento'=>$cab->sec_ser ,'numero_documento'=>$cab->coe_num,'fecha_de_emision'=>$cab->coe_fec,
    'hora_de_emision'=>'00:00','codigo_tipo_operacion'=>'0101','codigo_tipo_documento'=>$cab->tic_sun,'codigo_tipo_moneda'=>$cab->tip_mon,
    'fecha_de_vencimiento'=>$ven,
    'numero_orden_de_compra'=>'0','nombre_almacen'=>'1');
$json['datos_del_emisor']=array('codigo_del_domicilio_fisca'=>'000');
$json['datos_del_cliente_o_receptor']= array('codigo_tipo_documento_identidad'=>$cab->tid_sun,'numero_documento'=>$cab->cli_nud,
    'apellidos_y_nombres_o_razon_social'=>$cab->cli_raz,'codigo_pais'=>'PE','ubigeo'=>$cab->dis_ubi,'direccion'=>$cab->cli_dir,
    'correo_electronico'=>'empresa@empresa.com','telefono'=>'9999999999');
$json['totales']=array('total_exportacion'=>'0.00','total_operaciones_gravadas'=>$cab->coe_vve,'total_operaciones_inafectas'=>'0.00',
'total_operaciones_exoneradas'=>'0.00','total_operaciones_gratuitas'=>'0.00','total_igv'=>$cab->coe_igv,'total_impuestos'=>$cab->coe_igv,
'total_valor'=>$cab->coe_vve,'total_venta'=>$cab->coe_pve);

foreach($det as $row)
  {
      $json['items'][] = $row;
  }

  $json['additional_information']=$cab->coe_obs;
$json['termino_de_pago']=array('descripcion'=>$nom,'tipo'=>$cab->coe_metpag);

if($cab->coe_metpag==1){
    
  foreach($cuo as $row1)
  {
      $json['venta_al_credito'][] = $row1;
  }  
    
}

//if($codope=="1001"){
  //  if($cab->lnc_cod==1){
   //   $codlin="037";
//    }else{
  //      $codlin="027";
    //}
    //$json['detraccion']=array('codigo'=>$codlin,'porcentaje'=>$cab->coe_pde,'monto'=>$cab->coe_mde,'codigo_metodo_pago'=>'009','cuenta_bancaria'=>'00-007-078706','nombre_cuenta_bancaria'=>'BANCO DE LA NACION');


//}
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://destinosglobal.siaperu.xyz/api/documents");
curl_setopt($ch, CURLOPT_HEADER, false);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_FOLLOWLOCATION , true );

 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

$result1 = curl_exec ($ch);
$resultphp=json_decode($result1, true);
print_r($resultphp);


curl_close ($ch);



 
    }
    
    
    
          public function view_arch_est_factpro(){

       $data = $this->input->post('id');
       $tag = $this->input->post('tag');
$info=$this->Mguia->envio_sunat($data);

   $cab = $info['cab'];
   print_r($cab);
  $token = "z15z7BHwegPLJghwrqEcH29CzIfXaQ7JruTYbo1ATlkpE2Cbe9";

$header = array();
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: Bearer '.$token;

$json = array();
$json =array('operacion'=>'consultar_comprobante' ,'tipo_de_comprobante'=>$cab->tic_sun,'serie'=>$cab->sec_ser,
    'numero'=>$cab->coe_num);



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://destinosglobal.siaperu.xyz/api/documents/status");
curl_setopt($ch, CURLOPT_HEADER, false);    // we want headers
//curl_setopt($ch, CURLOPT_NOBODY, true);  
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS,  json_encode($json));
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_FOLLOWLOCATION , true );

 //curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

$result1 = curl_exec ($ch);
$resultphp=json_decode($result1, true);
//print_r($resultphp);
if($tag==1){
$pdf= $resultphp['links']['pdf'];
}else if($tag==2){
  $pdf= $resultphp['links']['xml']; 
}else if($tag==3){
     $pdf= $resultphp['links']['cdr']; 
}
header('location:'.$pdf);

curl_close ($ch);



 
    }
    
    
    
          public function verclientes()
    {
        
        $q=$this->Mguia->verclientes();
        echo json_encode($q);
    }
    
    public function analifacexc(){
        $spreadsheet = new Spreadsheet(); 
    //$llamadas = $this->llamada_model->listarPorCliente($id_cliente);
         $id=$this->input->post();
  
    $informacion = $this->Mguia->ver_pagos($id);
    if(count($informacion) > 0){
        //Cargamos la librería de excel.
        $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Analisis');
        //Contador de filas
        $contador = 3;
        $sumconta=0;
        //Le aplicamos ancho las columnas.
        $styleArray = array('borders' => array(
            'outline' => array('style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => 'FFFF0000'),),),);
        //$spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:Q1');
        $spreadsheet->getActiveSheet()->setCellValue("A1", 'ANALISIS DE PAGOS');
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
         $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(20);
           $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(20);
             $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(200);
                 $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(10);
                  $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(20);
           $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(20);
             $spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(20);
                 $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
      
        //Le aplicamos negrita a los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
         $spreadsheet->getActiveSheet()->getStyle("I{$contador}")->getFont()->setBold(true);
            $spreadsheet->getActiveSheet()->getStyle("J{$contador}")->getFont()->setBold(true);
               $spreadsheet->getActiveSheet()->getStyle("K{$contador}")->getFont()->setBold(true);
                    $spreadsheet->getActiveSheet()->getStyle("L{$contador}")->getFont()->setBold(true);
                      $spreadsheet->getActiveSheet()->getStyle("M{$contador}")->getFont()->setBold(true);
                        $spreadsheet->getActiveSheet()->getStyle("N{$contador}")->getFont()->setBold(true);
                          $spreadsheet->getActiveSheet()->getStyle("O{$contador}")->getFont()->setBold(true);
                            $spreadsheet->getActiveSheet()->getStyle("P{$contador}")->getFont()->setBold(true);
                              $spreadsheet->getActiveSheet()->getStyle("Q{$contador}")->getFont()->setBold(true);
      
        //Definimos los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", 'Fecha');
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", 'Serie');
         $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", 'Numero');
        $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", 'Ciente');
        $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", 'VV');
        $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", 'IGV');
        $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", 'PV');
        $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", 'Estado');
          $spreadsheet->getActiveSheet()->setCellValue("I{$contador}", 'Motivo/Nro NC');
           $spreadsheet->getActiveSheet()->setCellValue("J{$contador}", 'Descripcion');
             $spreadsheet->getActiveSheet()->setCellValue("K{$contador}", 'Mone.comp.');
               $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", 'Fec.Pag.');
                 $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", 'Mone.Pag.');
                    $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", 'Efectivo');   
                         $spreadsheet->getActiveSheet()->setCellValue("O{$contador}", 'Tarjeta');  
                           $spreadsheet->getActiveSheet()->setCellValue("P{$contador}", 'Deposito');  
                                    $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}", 'Transferencia');         
                           
       
        //Definimos la data del cuerpo.
     
        foreach($informacion as $l){
           //Incrementamos una fila más, para ir a la siguiente.

        if($l->est_cod==9){
           $est='Pendiente de pago'; 
           
            }else  if($l->est_cod==5){
           $est='Anulacion'; 
             }  else if($l->est_cod==11){
           $est='NC'; 
           
           
           
        }else{
            $est='Cancelado'; 
        }


           $contador++;
 
           $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", $l->coe_fec);
           $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", $l->sec_ser);
           $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", $l->coe_num);
           $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", $l->cli_raz);
           $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", $l->coe_vve);
           $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $l->coe_igv);
           $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", $l->coe_pve);
           $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", $est);
            $spreadsheet->getActiveSheet()->setCellValue("I{$contador}",$l->coe_mot);
             $spreadsheet->getActiveSheet()->setCellValue("J{$contador}",$l->coe_des);
               $spreadsheet->getActiveSheet()->setCellValue("K{$contador}",$l->tip_mon);
       $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", $l->fec_pago);
           $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", $l->moneda);
           $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", $l->efectivo);
            $spreadsheet->getActiveSheet()->setCellValue("O{$contador}",$l->tarjeta);
             $spreadsheet->getActiveSheet()->setCellValue("P{$contador}",$l->deposito);
               $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}",$l->transferencia);           
     
        }


    



        //le ponemos estilo a nuestra hoja excel

        $estiloTituloReporte = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,
                'italic'    => false,
                'strike'    => false,
                'size' =>14,
                'color'     => array(
                    'rgb' => '607d8b'
                )
            ),
            'borders' => array(
                'bottom' => array(
                    'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                        'color' => array(
                            'rgb' => '8bc34a')
                )
            ),
            'alignment' => array(
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'rotation' => 0,
                'wrap' => TRUE
            )
        );

        $estiloTituloColumnas = array(
            'font' => array(
                'name'  => 'Arial',
                'bold'  => true,
                'color' => array(
                    'rgb' => '000'
                )
            ),
            'fill' => array(
                'type'       => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
          'rotation'   => 90,
                'startcolor' => array(
                    'rgb' => 'c47cf2'
                ),
                'endcolor' => array(
                    'argb' => 'FF431a5d'
                )
            ),
            'borders' => array(
                'top' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '000'
                    )
                ),
                'bottom' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK ,
                    'color' => array(
                        'rgb' => '000'
                    )
                )
            ),
            'alignment' =>  array(
                'horizontal'=> \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'  => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrap'      => TRUE
            )
        );


   $estilodet = array(
            'font' => array(
            
                'size' =>8,
                'color' => array(
                    'argb' => '000'
                )
            ),
            'fill' => array(
                'type'       => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
          'rotation'   => 90,
                'startcolor' => array(
                    'argb' => 'c47cf2'
                ),
                'endcolor' => array(
                    'argb' => 'FF431a5d'
                )
            ),
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM ,
                    'color' => array(
                        'argb' => '000'
                    )
                ),
                'bottom' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK ,
                    'color' => array(
                        'argb' => '000'
                    )
                )
            ),
            'alignment' =>  array(
                'horizontal'=> \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'  => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrap'      => TRUE
            )
        );




        $spreadsheet->getActiveSheet()->getStyle('A1:Q1')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A3:Q3')->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle('A4:Q'.$contador)->applyFromArray($estilodet);

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'Analisis'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');  // download file 


     }else{
        echo 'No se han encontrado llamadas';
        exit;
     }
  }

	}