<?php
  use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Creportes extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Mreportes');
    $this->load->model('Mguia');
              $this->load->model(array('muser'));
      $this->load->model(array('mpermiso'));
        if (!$this->session->userdata('login')){
            header("Location: " . base_url(). "intranet");

      }
      else {
          $id= ($this->session->userdata('idTipUsu'));
          $this->permisos = $this->muser->getPermisos($id);
    
          $this->controller='Creportes';
      }

  }

public function repguia(){
     if($this->muser->validar_permiso('repguia',$this->controller,$this->session->userdata('idTipUsu'))){
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
$datos['guia']=$this->Mguia->serie($idusu);
    $this->load->view('Vreportes/repguia',$datos);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }
   public function verguiarep()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->verguiarep($id);
        echo json_encode($q);
    }


    public function repmanifiesto(){
     if($this->muser->validar_permiso('repmanifiesto',$this->controller,$this->session->userdata('idTipUsu'))){
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
$datos['guia']=$this->Mguia->serie($idusu);
      $this->load->view('Vreportes/repmanifiesto',$datos);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }


  public function repsegguia(){
     if($this->muser->validar_permiso('repsegguia',$this->controller,$this->session->userdata('idTipUsu'))){
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
$datos['guia']=$this->Mguia->serie($idusu);
    $this->load->view('Vreportes/repsegguia',$datos);
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }

  public function guiastot()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->guiastot($id);
        echo json_encode($q);
    }


  public function vermanirep()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->vermanirep($id);
        echo json_encode($q);
    }

 public function verguiamani()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->verguiamani($id);
        echo json_encode($q);
    }
    
     public function eligui()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->eligui($id);
        echo json_encode($q);
    }
    
    
     public function anadguimani()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->anadguimani($id);
        echo json_encode($q);
    }
    
         public function verdetgui()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->verdetgui($id);
        echo json_encode($q);
    }
    
       public function eliguimani()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->eliguimani($id);
        echo json_encode($q);
    }
    
    

   public function clientesrepo(){
     if($this->muser->validar_permiso('clientesrepo',$this->controller,$this->session->userdata('idTipUsu'))){
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

    $this->load->view('Vreportes/Clientes');
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }
    
     public function vercliente()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->vercliente($id);
        echo json_encode($q);
    }
    
       public function modicliente()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->modicliente($id);
        echo json_encode($q);
    }
    
          public function editmani()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->editmani($id);
        echo json_encode($q);
    }
    
              public function agguia()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->agguia($id);
        echo json_encode($q);
    }
    
                public function elimani()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->elimani($id);
        echo json_encode($q);
    }
    
        public function verguicli()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->verguicli($id);
        echo json_encode($q);
    }
      public function excel_mani(){
        $spreadsheet = new Spreadsheet(); 
    //$llamadas = $this->llamada_model->listarPorCliente($id_cliente);
         $id=$this->input->post();
  
    $informacion = $this->Mreportes->excel_mani($id);
    if(count($informacion) > 0){
        //Cargamos la librería de excel.
        $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Manifiesto');
        //Contador de filas
        $contador = 3;
        $sumconta=0;
        //Le aplicamos ancho las columnas.
        $styleArray = array('borders' => array(
            'outline' => array('style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => 'FFFF0000'),),),);
        //$spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:H1');
        $spreadsheet->getActiveSheet()->setCellValue("A1", 'Manifiesto: M00'.$id['id']);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(40);
         $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(40);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(40);
            $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(40);
    
        //Le aplicamos negrita a los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
         $spreadsheet->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
        
        //Definimos los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", 'Guia');
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", 'Bulto');
         $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", 'Peso');
        $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", 'Peso_vol');
        $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", 'Remitente');
        $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", 'Consignatario');
        $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", 'Destino');
        $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", 'Contenido');
        //Definimos la data del cuerpo.
        $pes=0;
        $bul=0;
         $pesvol=0;
        foreach($informacion as $l){
           //Incrementamos una fila más, para ir a la siguiente.
   $pes=$pes+$l->peso;
            $bul=$bul+$l->bul;
              $pesvol=$pesvol+$l->peso_vol;
           $contador++;
          
           //Informacion de las filas de la consulta.
           $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", $l->guia);
           $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", $l->bul);
           $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", $l->peso);
           $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", $l->peso_vol);
           $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", $l->REMITENTE);
           $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $l->CONSIGNATARIO);
           $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", $l->DESTINO);
             $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", $l->CONTENIDO);
     
        }


      $sumconta=$contador+2;
         $spreadsheet->getActiveSheet()->setCellValue("B{$sumconta}", $bul);
          $spreadsheet->getActiveSheet()->setCellValue("C{$sumconta}", $pes);
             $spreadsheet->getActiveSheet()->setCellValue("D{$sumconta}", $pesvol);
   


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




        $spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A3:H3')->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle('A4:H'.$contador)->applyFromArray($estilodet);

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'manifiesto'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');  // download file 


     }else{
        echo 'No se han encontrado llamadas';
        exit;
     }
  }

 public function modifidet()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->modifidet($id);
        echo json_encode($q);
    }
    
    
  public function excel_mani2(){
        $spreadsheet = new Spreadsheet(); 
    //$llamadas = $this->llamada_model->listarPorCliente($id_cliente);
         $id=$this->input->post();
  
    $informacion = $this->Mreportes->excel_mani2($id);
    if(count($informacion) > 0){
        //Cargamos la librería de excel.
        $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Manifiesto');
        //Contador de filas
        $contador = 3;
        $sumconta=0;
        //Le aplicamos ancho las columnas.
        $styleArray = array('borders' => array(
            'outline' => array('style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => 'FFFF0000'),),),);
        //$spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:Y1');
        $spreadsheet->getActiveSheet()->setCellValue("A1", 'Manifiesto: '.$id['fec']);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(50);
         $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(10);
               $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(10);
                $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(50);
         $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(10);
          $spreadsheet->getActiveSheet()->getColumnDimension('R')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('S')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('T')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('U')->setWidth(10);
               $spreadsheet->getActiveSheet()->getColumnDimension('V')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('W')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('X')->setWidth(10);
    $spreadsheet->getActiveSheet()->getColumnDimension('Y')->setWidth(10);
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
        $spreadsheet->getActiveSheet()->getStyle("R{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("S{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("T{$contador}")->getFont()->setBold(true);
                $spreadsheet->getActiveSheet()->getStyle("U{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("V{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("W{$contador}")->getFont()->setBold(true);
          $spreadsheet->getActiveSheet()->getStyle("X{$contador}")->getFont()->setBold(true);
                $spreadsheet->getActiveSheet()->getStyle("Y{$contador}")->getFont()->setBold(true);
  ;
  ;
        //Definimos los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", 'Fecha');
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", 'Guia');
        $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", 'Bul');
         $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", 'Peso');
        $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", 'Peso_vol');
        $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", 'Remitente');
        $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", 'Consignatario');
          $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", 'Contenido');
        $spreadsheet->getActiveSheet()->setCellValue("I{$contador}", 'Destino');
        $spreadsheet->getActiveSheet()->setCellValue("J{$contador}", 'Direccion');
        $spreadsheet->getActiveSheet()->setCellValue("K{$contador}", 'Telefono');
        $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", 'fect');
         $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", 'F.Pag.Guia');
         $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", 'Moneda');
          $spreadsheet->getActiveSheet()->setCellValue("O{$contador}", 'Costo');
          $spreadsheet->getActiveSheet()->setCellValue("P{$contador}", 'F.Pago');
            $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}", 'Banco');
             $spreadsheet->getActiveSheet()->setCellValue("R{$contador}", 'Fec Pag');
             $spreadsheet->getActiveSheet()->setCellValue("S{$contador}", 'Operacion');
            $spreadsheet->getActiveSheet()->setCellValue("T{$contador}", 'Fact');
            $spreadsheet->getActiveSheet()->setCellValue("U{$contador}", 'Orden');
            $spreadsheet->getActiveSheet()->setCellValue("V{$contador}", 'Cost.Orden');
            $spreadsheet->getActiveSheet()->setCellValue("W{$contador}", 'Transporte');
           $spreadsheet->getActiveSheet()->setCellValue("X{$contador}", 'Tipo');
            $spreadsheet->getActiveSheet()->setCellValue("Y{$contador}", 'status');

      

   $pes=0;
        $bul=0;
         $pesvol=0;
          
          foreach($informacion as $l){
                $pes=$pes+$l->peso;
            $bul=$bul+$l->bul;
              $pesvol=$pesvol+$l->peso_vol;
              $contador++;
           //Informacion de las filas de la consulta.
           $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", $l->fecha);
            $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", $l->guia);
           $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", $l->bul);
           $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", $l->peso);
           $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", $l->peso_vol);
            $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $l->REMITENTE);
           $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", $l->CONSIGNATARIO);
            $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", $l->CONTENIDO);
           $spreadsheet->getActiveSheet()->setCellValue("I{$contador}", $l->DESTINO);
           $spreadsheet->getActiveSheet()->setCellValue("J{$contador}", $l->DIRECCION);
           $spreadsheet->getActiveSheet()->setCellValue("K{$contador}", $l->TELEFONO);
            $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", $l->FACT);
                 $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", $l->tpa_des);
            $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", $l->MONEDA);
           $spreadsheet->getActiveSheet()->setCellValue("O{$contador}", $l->costo);
           $spreadsheet->getActiveSheet()->setCellValue("P{$contador}", $l->F_PAGO);
           $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}", $l->BANCO);
            $spreadsheet->getActiveSheet()->setCellValue("R{$contador}", $l->fec_transa);
            $spreadsheet->getActiveSheet()->setCellValue("S{$contador}", $l->OPERACION);
           $spreadsheet->getActiveSheet()->setCellValue("T{$contador}", $l->fact);
            $spreadsheet->getActiveSheet()->setCellValue("U{$contador}", $l->orden);
           $spreadsheet->getActiveSheet()->setCellValue("V{$contador}", $l->costo_orden);
           $spreadsheet->getActiveSheet()->setCellValue("W{$contador}", $l->transporte);
           $spreadsheet->getActiveSheet()->setCellValue("X{$contador}", $l->tip_trans);
             $spreadsheet->getActiveSheet()->setCellValue("Y{$contador}", $l->statuss);
    
        }



      $sumconta=$contador+2;
         $spreadsheet->getActiveSheet()->setCellValue("C{$sumconta}", $bul);
          $spreadsheet->getActiveSheet()->setCellValue("D{$sumconta}", $pes);
             $spreadsheet->getActiveSheet()->setCellValue("E{$sumconta}", $pesvol);


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




        $spreadsheet->getActiveSheet()->getStyle('A1:Y1')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A3:Y3')->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle('A4:Y'.$contador)->applyFromArray($estilodet);

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'manifiesto'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');  // download file 


     }else{
        echo 'No se han encontrado llamadas';
        exit;
     }
  }
  
  
     
  public function excel_manirep2(){
        $spreadsheet = new Spreadsheet(); 
    //$llamadas = $this->llamada_model->listarPorCliente($id_cliente);
         $id=$this->input->post();
  
    $informacion = $this->Mreportes->excel_mani($id);
    if(count($informacion) > 0){
        //Cargamos la librería de excel.
        $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Manifiesto');
        //Contador de filas
        $contador = 3;
        $sumconta=0;
        //Le aplicamos ancho las columnas.
        $styleArray = array('borders' => array(
            'outline' => array('style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => 'FFFF0000'),),),);
        //$spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:Y1');
        $spreadsheet->getActiveSheet()->setCellValue("A1", 'Manifiesto: M00'.$id['id']);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(50);
         $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(10);
               $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(10);
                $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(50);
         $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(10);
          $spreadsheet->getActiveSheet()->getColumnDimension('R')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('S')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('T')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('U')->setWidth(10);
               $spreadsheet->getActiveSheet()->getColumnDimension('V')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('W')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('X')->setWidth(10);
          $spreadsheet->getActiveSheet()->getColumnDimension('Y')->setWidth(10);
 
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
        $spreadsheet->getActiveSheet()->getStyle("R{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("S{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("T{$contador}")->getFont()->setBold(true);
                $spreadsheet->getActiveSheet()->getStyle("U{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("V{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("W{$contador}")->getFont()->setBold(true);
          $spreadsheet->getActiveSheet()->getStyle("X{$contador}")->getFont()->setBold(true);
           $spreadsheet->getActiveSheet()->getStyle("Y{$contador}")->getFont()->setBold(true);
  ;
  ;
        //Definimos los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", 'Fecha');
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", 'Guia');
        $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", 'Bul');
         $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", 'Peso');
        $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", 'Peso_vol');
        $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", 'Remitente');
        $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", 'Consignatario');
          $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", 'Contenido');
        $spreadsheet->getActiveSheet()->setCellValue("I{$contador}", 'Destino');
        $spreadsheet->getActiveSheet()->setCellValue("J{$contador}", 'Direccion');
        $spreadsheet->getActiveSheet()->setCellValue("K{$contador}", 'Telefono');
        $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", 'fect');
         $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", 'F.pag.Guia');
         $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", 'Moneda');
          $spreadsheet->getActiveSheet()->setCellValue("O{$contador}", 'Costo');
          $spreadsheet->getActiveSheet()->setCellValue("P{$contador}", 'F.Pago');
            $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}", 'Banco');
             $spreadsheet->getActiveSheet()->setCellValue("R{$contador}", 'Fec Pag');
             $spreadsheet->getActiveSheet()->setCellValue("S{$contador}", 'Operacion');
            $spreadsheet->getActiveSheet()->setCellValue("T{$contador}", 'Fact');
            $spreadsheet->getActiveSheet()->setCellValue("U{$contador}", 'Orden');
            $spreadsheet->getActiveSheet()->setCellValue("V{$contador}", 'Cost.Orden');
            $spreadsheet->getActiveSheet()->setCellValue("W{$contador}", 'Transporte');
           $spreadsheet->getActiveSheet()->setCellValue("X{$contador}", 'Tipo');
               $spreadsheet->getActiveSheet()->setCellValue("Y{$contador}", 'status');

      

   $pes=0;
        $bul=0;
         $pesvol=0;
          
          foreach($informacion as $l){
                $pes=$pes+$l->peso;
            $bul=$bul+$l->bul;
              $pesvol=$pesvol+$l->peso_vol;
              $contador++;
           //Informacion de las filas de la consulta.
           $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", $l->fecha);
            $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", $l->guia);
           $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", $l->bul);
           $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", $l->peso);
           $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", $l->peso_vol);
            $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $l->REMITENTE);
           $spreadsheet->getActiveSheet()->setCellValue("G{$contador}", $l->CONSIGNATARIO);
            $spreadsheet->getActiveSheet()->setCellValue("H{$contador}", $l->CONTENIDO);
           $spreadsheet->getActiveSheet()->setCellValue("I{$contador}", $l->DESTINO);
           $spreadsheet->getActiveSheet()->setCellValue("J{$contador}", $l->DIRECCION);
           $spreadsheet->getActiveSheet()->setCellValue("K{$contador}", $l->TELEFONO);
            $spreadsheet->getActiveSheet()->setCellValue("L{$contador}", $l->FACT);
                 $spreadsheet->getActiveSheet()->setCellValue("M{$contador}", $l->tpa_des);
            $spreadsheet->getActiveSheet()->setCellValue("N{$contador}", $l->MONEDA);
           $spreadsheet->getActiveSheet()->setCellValue("O{$contador}", $l->costo);
           $spreadsheet->getActiveSheet()->setCellValue("P{$contador}", $l->F_PAGO);
           $spreadsheet->getActiveSheet()->setCellValue("Q{$contador}", $l->BANCO);
            $spreadsheet->getActiveSheet()->setCellValue("R{$contador}", $l->fec_transa);
            $spreadsheet->getActiveSheet()->setCellValue("S{$contador}", $l->OPERACION);
           $spreadsheet->getActiveSheet()->setCellValue("T{$contador}", $l->fact);
            $spreadsheet->getActiveSheet()->setCellValue("U{$contador}", $l->orden);
           $spreadsheet->getActiveSheet()->setCellValue("V{$contador}", $l->costo_orden);
           $spreadsheet->getActiveSheet()->setCellValue("W{$contador}", $l->transporte);
           $spreadsheet->getActiveSheet()->setCellValue("X{$contador}", $l->tip_trans);
        $spreadsheet->getActiveSheet()->setCellValue("Y{$contador}", $l->statuss);
        }



      $sumconta=$contador+2;
         $spreadsheet->getActiveSheet()->setCellValue("C{$sumconta}", $bul);
          $spreadsheet->getActiveSheet()->setCellValue("D{$sumconta}", $pes);
             $spreadsheet->getActiveSheet()->setCellValue("E{$sumconta}", $pesvol);


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




        $spreadsheet->getActiveSheet()->getStyle('A1:Y1')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A3:Y3')->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle('A4:Y'.$contador)->applyFromArray($estilodet);

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'manifiesto'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');  // download file 


     }else{
        echo 'No se han encontrado llamadas';
        exit;
     }
  }
  
  
  public function hojaEnBlanco()
{
     //Se agrega la clase desde thirdparty para usar FPDF
     require_once APPPATH.'third_party/fpdf/fpdf.php';
        
     $pdf = new FPDF($orientation='P',$unit='mm', array(70,57));
 $pdf->AddPage();
$pdf->SetFont('Arial','B',8);    //Letra Arial, negrita (Bold), tam. 20
$textypos = 5;
$pdf->setY(2);
$pdf->setX(2);
$pdf->Cell(5,$textypos,"NOMBRE DE LA EMPRESA");
$pdf->SetFont('Arial','',5);    //Letra Arial, negrita (Bold), tam. 20
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(5,$textypos,'-------------------------------------------------------------------');
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(5,$textypos,'CANT.  ARTICULO       PRECIO               TOTAL');

$total =0;
$off = $textypos+6;
$producto = array(
	"q"=>1,
	"name"=>"Computadora Lenovo i5",
	"price"=>100
);
$productos = array($producto, $producto, $producto, $producto, $producto );
foreach($productos as $pro){
$pdf->setX(2);
$pdf->Cell(5,$off,$pro["q"]);
$pdf->setX(6);
$pdf->Cell(35,$off,  strtoupper(substr($pro["name"], 0,12)) );
$pdf->setX(20);
$pdf->Cell(11,$off,  "$".number_format($pro["price"],2,".",",") ,0,0,"R");
$pdf->setX(32);
$pdf->Cell(11,$off,  "$ ".number_format($pro["q"]*$pro["price"],2,".",",") ,0,0,"R");

$total += $pro["q"]*$pro["price"];
$off+=6;
}
$textypos=$off+6;

$pdf->setX(2);
$pdf->Cell(5,$textypos,"TOTAL: " );
$pdf->setX(38);
$pdf->Cell(5,$textypos,"$ ".number_format($total,2,".",","),0,0,"R");

$pdf->setX(2);
$pdf->Cell(5,$textypos+6,'GRACIAS POR TU COMPRA ');

     $pdf->Output('paginaEnBlanco.pdf' , 'I' );
}
 
  public function cuadre_diario(){
     if($this->muser->validar_permiso('cuadre_diario',$this->controller,$this->session->userdata('idTipUsu'))){
                $data = array('title'=>'CUADRE | DESTINOSGLOBAL',
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

    $this->load->view('Vreportes/cuadre_diario');
         $this->load->view('vintranet/footer');
            }
        else {
            header("Location: " . base_url(). "intranet");
        }
  }
 
   public function repcuadre_diario()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->repcuadre_diario($id);
        echo json_encode($q);
    }
    
      public function verdetpago()
    {
      $id=$this->input->post();
        $q=$this->Mreportes->verdetpago($id);
        echo json_encode($q);
    }
    
    
    
     public function pdf_cuadrediarioUsuario()
{
    
      $id=$this->input->post();
        $q=$this->Mreportes->verdetpago($id);
         $info=$this->Mreportes->repcuadre_diario_usuario_pdf($id);
          
             $cab = $info['cab'];
             $cab2 = $info['cab2'];
       $det = $info['det'];
     
        
       // print_r($q);
     //Se agrega la clase desde thirdparty para usar FPDF
     require_once APPPATH.'third_party/fpdf/fpdf.php';
        
   
 $pdf = new FPDF($orientation='L',$unit='mm', 'A4');

 $pdf->AddPage();
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(20);
$pdf->setX(130);
// Agregamos los datos de la empresa
$pdf->Cell(3,5,"CUADRE DIARIO");
$pdf->Image('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjTJJmB8UyBwguaAbLkwG0lhXG8byrxzAfCipUE8hnws5pw_ly21ertfrOX7lnFvAt-8M&usqp=CAU','10','5',30,30,'PNG');
$pdf->SetFont('Arial','B',10);    
$pdf->setY(35);$pdf->setX(30);
$pdf->Cell(5,$textypos,"USUARIO:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(45);$pdf->setX(30);
$pdf->Cell(5,$textypos,$cab->usuario);


// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(35);$pdf->setX(140);
$pdf->Cell(5,$textypos,"RECIBE:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(45);$pdf->setX(140);
$pdf->Cell(5,$textypos,$cab2->usuario);


// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(35);$pdf->setX(250);
$pdf->Cell(5,$textypos,"FECHA");
$pdf->SetFont('Arial','',10);    
$pdf->setY(45);$pdf->setX(250);
$pdf->Cell(5,$textypos,$id['fec']);
$pdf->setY(50);$pdf->setX(145);


/// Apartir de aqui empezamos con la tabla de productos
$pdf->setY(60);$pdf->setX(160);
    $pdf->Ln();
/////////////////////////////
//// Array de Cabecera
$header = array("Fecha", "Comprobante","Cliente","Moneda","Monto","Medio");


    // Column widths
    $w = array(30, 50, 100, 25, 25, 40);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    foreach($q as $row)
    {
        $pdf->Cell($w[0],6,$row->coe_fec,1);
        $pdf->Cell($w[1],6,$row->sec_ser."-".$row->coe_num,1);
        $pdf->cell($w[2],6,$row->cli_raz,'1');
        $pdf->Cell($w[3],6,$row->moneda,'1');
        $pdf->Cell($w[4],6,number_format($row->monto,2,".",","),'1');
        $pdf->Cell($w[5],6,$row->medio,'1');

        $pdf->Ln();
       // $total+=$row[3]*$row[2];

    }
/////////////////////////////
//// Apartir de aqui esta la tabla con los subtotales y totales

/////////////////////////////

 
/////////////////////////////


$pdf->SetFont('Arial','B',20);    


$pdf->Cell(5,20,"Resumen: ");

$pdf->SetFont('Arial','',10);    
//$pdf->setY($yposdinamic+20);
    $pdf->setX(10);
      $pdf->Ln();
$header2 = array("Medio", "soles","Dolares");

    // Column widths
    $w2 = array(30, 30, 30);
    // Header
    for($i=0;$i<count($header2);$i++)
        $pdf->Cell($w2[$i],7,$header2[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    foreach($det as $row2)
    {
        $pdf->Cell($w2[0],6,$row2->tipo,1);
      $pdf->Cell($w2[1],6,number_format($row2->soles,2,".",","),'1');
        $pdf->Cell($w2[2],6,number_format($row2->dolares,2,".",","),'1');
        

        $pdf->Ln();
       // $total+=$row[3]*$row[2];

    }

$pdf->output();
}



 public function excel_cuadrediarioUsuario(){
            $spreadsheet = new Spreadsheet(); 
   $id=$this->input->post();
        $q=$this->Mreportes->verdetpago($id);
         $info=$this->Mreportes->repcuadre_diario_usuario_pdf($id);
          
             $cab = $info['cab'];
             $cab2 = $info['cab2'];
       $det = $info['det'];
     
    if(count($info) > 0){
        //Cargamos la librería de excel.
        $spreadsheet->setActiveSheetIndex(0);
        $spreadsheet->getActiveSheet()->setTitle('Reporte Caja Chica');
        //Contador de filas
        $contador = 3;
        $sumconta=0;
        //Le aplicamos ancho las columnas.
        $styleArray = array('borders' => array(
            'outline' => array('style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => 'FFFF0000'),),),);
        //$spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:F1');
        $spreadsheet->getActiveSheet()->setCellValue("A1", 'Reporte de '.$cab->usuario);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(50);
         $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(12);
     
        //Le aplicamos negrita a los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
       
        //Definimos los títulos de la cabecera.
        $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", 'Fecha');
        $spreadsheet->getActiveSheet()->setCellValue("B{$contador}", 'Comprobante');
        $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", 'Cliente');
         $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", 'Moneda');
        $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", 'Monto');
        $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", 'Medio');
       
      

          foreach($q as $row){
        
              $contador++;
           //Informacion de las filas de la consulta.
           $spreadsheet->getActiveSheet()->setCellValue("A{$contador}", $row->coe_fec);
            $spreadsheet->getActiveSheet()->setCellValue("B{$contador}",$row->sec_ser."-".$row->coe_num);
               $spreadsheet->getActiveSheet()->setCellValue("C{$contador}", $row->cli_raz);
           $spreadsheet->getActiveSheet()->setCellValue("D{$contador}", $row->moneda);
           $spreadsheet->getActiveSheet()->setCellValue("E{$contador}", number_format($row->monto,2,".",","));
            $spreadsheet->getActiveSheet()->setCellValue("F{$contador}", $row->medio);
            }

$sumconta2=$contador+6;
$sumconta1=$contador+5;
      $sumconta=$contador+5;
      
             $spreadsheet->getActiveSheet()->getStyle("C{$sumconta}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("D{$sumconta}")->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle("E{$sumconta}")->getFont()->setBold(true);
         $spreadsheet->getActiveSheet()->setCellValue("C{$sumconta}", 'Medio');
        $spreadsheet->getActiveSheet()->setCellValue("D{$sumconta}", 'Soles');
        $spreadsheet->getActiveSheet()->setCellValue("E{$sumconta}", 'Dolares');
      
       foreach($det as $row2)
    {
       $sumconta++;
         $spreadsheet->getActiveSheet()->setCellValue("C{$sumconta}", $row2->tipo);
          $spreadsheet->getActiveSheet()->setCellValue("D{$sumconta}", number_format($row2->soles,2,".",","));
             $spreadsheet->getActiveSheet()->setCellValue("E{$sumconta}", number_format($row2->dolares,2,".",","));

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




        $spreadsheet->getActiveSheet()->getStyle('A1:F1')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A3:F3')->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle('A4:F'.$contador)->applyFromArray($estilodet);

 
        $spreadsheet->getActiveSheet()->getStyle("C{$sumconta1}:E{$sumconta1}")->applyFromArray($estiloTituloColumnas);
        $spreadsheet->getActiveSheet()->getStyle("C{$sumconta2}:E{$sumconta}")->applyFromArray($estilodet);

          $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'Reporte_caja'; // set filename for excel file to be exported
 
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