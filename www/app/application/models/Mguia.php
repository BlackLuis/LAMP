<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mguia extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function medida()
    {//print_r($id);
        $this->db->select('* ');
          $this->db->from('medida');


        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }


    public function mostrar_clientes($id='')
    {//print_r($id);
  $this->db->select('cli_cod,cli_raz razon,cli_nud,cli_dir direccion,concat(distrito.dis_des,"-",provincia.prv_des,"-",ciudad.ciu_des) ubicacion,provincia.prv_cod,ciudad.ciu_cod,distrito.dis_cod,distrito.dis_des,provincia.prv_des,tid_cod');
          $this->db->from('cliente,provincia,distrito,ciudad');
          $this->db->where('cliente.dis_cod=distrito.dis_cod');
          $this->db->where('distrito.prv_cod=provincia.prv_cod');
          $this->db->where('provincia.ciu_cod=ciudad.ciu_cod');
          $this->db->where('est_cod=1');
          
          
          $where  = "(cli_raz LIKE '%".$id."%' OR ";

$where .= "cli_nud LIKE '%".$id."%')";
$this->db->where($where);

           $this->db->order_by('cli_raz asc');
           $this->db->limit('30');


        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
 public function ciudad()
    {//print_r($id);
        $this->db->select('* ');
          $this->db->from('ciudad');


        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
     public function provincia($id='')
    {//print_r($id);
        $this->db->select('* ');
          $this->db->from('provincia');
          $this->db->where('ciu_cod',$id);


        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }

         public function distrito($id='')
    {//print_r($id);
        $this->db->select('* ');
          $this->db->from('distrito');
          $this->db->where('prv_cod',$id);


        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }

         public function serie($id='')
    {//print_r($id);
        $this->db->select('serie_guia.seg_cod,seg_ser');
          $this->db->from('serieg_usuario,serie_guia');
          $this->db->where('idUsuario',$id);
          $this->db->where('serie_guia.seg_cod=serieg_usuario.seg_cod');
          $this->db->where('est_cod',1);
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
    
      public function verificar_guia($ser='',$num='')
  {

        $this->db->select('*');
                $this->db->from('guia');
    
    $this->db->where('seg_cod',$ser);
    $this->db->where('gui_num',$num);

             $query = $this->db->get();
            return $query->row();
  }

     public function registrar($value=''){
          //print_r($value);  
          $nro = $this->verificar_guia($value['serg'],$value['numgia']);

          if($nro==null){
               $data = array(
                    'gui_pup' => $value['pup'],
                    'gui_pul' => $value['pup2'],
                    'gui_tot' => $value['tot_general'],
                    'gui_num'=>$value['numgia'],
                    'clp_cod' => $value['clicod'],
                    'cll_cod' => $value['clicod2'],
                    'dip_cod' => $value['dis'],
                    'dil_cod' => $value['dis2'],
                    'est_cod' => 3,
                    'seg_cod' => $value['serg'],
                    'idUsuario' => $this->session->userdata('idUsu'),
                    'gui_fer' => date("Y-m-d H:i:s"),
                    'gui_fec' =>$value['fecemi'],
                    'gui_gcl' =>$value['gcli'],
                    'gui_obs' =>$value['obs'],
                    'trs_cod' =>$value['tit'],
                    'tpa_cod' =>$value['pag'],
                    'gui_cto' =>$value['tot_cant'],
                    'gui_pto' =>$value['tot_peso'],
                    'gui_vto' =>$value['tot_psv'],
               );

               $q=$this->db->insert('guia', $data);
               $idguia=$this->db->insert_id();

               $Item =json_decode($value['arrayDet']);
               foreach ($Item as $key ) {
                    $data = array(
                         'deg_des' => $key->des,
                         'deg_can' => $key->cant,
                         'deg_tip' => $key->codpes,
                         'deg_pes' => $key->pes,
                         'deg_peu' => $key->pu,
                         'deg_sub' => $key->tot,
                         'med_cod' => $key->codmed,
                         'gui_cod' => $idguia,
                         'deg_pev' => $key->psv
                    );
                    $q=$this->db->insert('detalle_guia', $data);           
               }
          
               //aca
               $data2 = array(
                    'idUsuario' => $this->session->userdata('idUsu'),
                    'seg_fec' => date("Y-m-d"),
                    'seg_hor' => date("H:i:s"),
                    'gui_cod' => $idguia,
                    'est_cod' => 3
               );

               $q2=$this->db->insert('seguimiento', $data2);
               //fin

             $dataup = array(
                    'cog_est' => 12
                    // 'hora_ingre' => date("Y-m-d H:i:s",strtotime($value['horaing']))                    
               );
               $this->db->where('cog_gui', $value['numgia']);
                 $this->db->where('cog_ser', $value['serg']);
               $this->db->update('CONTROL_GUIA', $dataup);

               $this->db->select('concat(seg_ser,"-",gui_num) gui,gui_cod');
               $this->db->from('guia as g');
               $this->db->join('serie_guia as s', 's.seg_cod = g.seg_cod', 'inner');
               $this->db->where('gui_cod',$idguia);
               $query = $this->db->get();
               return $query->row();

            

            

          }else{
               return null;
          }      
     }


     public function consulta_correlativo($value=''){
          $this->db->select('seg_num');
          $this->db->where('seg_cod', $value);
          $query=$this->db->get('serie_guia');
          $nro =$query->row()->seg_num;
          
          $this->db->set('seg_num', $nro +1);
          $this->db->where('seg_cod', $value);
          $this->db->update('serie_guia');

          return $nro;
     }

     public function busguia($id=''){
          //print_r($id);
          $this->db->select(  'gui_cod,
                              cl.cli_raz,
                              CONCAT(dp.dis_des,"-",p.prv_des,"-",c.ciu_des) inicio,
                              DATE(g.fech_ingre) as fechaingreso,
                              TIME(g.hora_ingre) as horaingreso,
                              DATE(g.fech_vuelo) as fechavuelo,
                              TIME(g.hora_vuelo) as horavuelo,
                              DATE(g.fech_llegada) as fechallegada,
                              TIME(g.hora_llegada) as horallegada,
                              CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) destino,
                              clle.cli_raz as destinatario,
                              g.est_cod');
          $this->db->from('guia g,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,cliente cl,cliente clle');
          $this->db->where('g.dip_cod=dp.dis_cod');
          $this->db->where('dl.dis_cod=g.dil_cod');
          $this->db->where('dp.prv_cod=p.prv_cod');
          $this->db->where('dl.prv_cod=p2.prv_cod');
          $this->db->where('p.ciu_cod=c.ciu_cod');
          $this->db->where('p2.ciu_cod=c2.ciu_cod');
          $this->db->where('cl.cli_cod=g.clp_cod');
          $this->db->where('clle.cli_cod=g.cll_cod');
          $this->db->where('g.est_cod != 5');
          $this->db->where('g.seg_cod',$id['serg']);
          $this->db->where('g.gui_num',$id['ndo']);

          $query = $this->db->get();
          if($query->num_rows() > 0 ){
               return $query->result();
          }
     }

     public function modfeching($value=''){
          // print_r($value.'feching');
          if($value != null){
               $data = array(
                    'fech_ingre' => date("Y-m-d",strtotime($value['feching']))
                    // 'fech_ingre' => date("Y-m-d H:i:s",strtotime($value['feching']))
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }
     public function modhoraing($value=''){
          if($value != null){
               $data = array(
                    'hora_ingre' => $value['horaing']
                    // 'hora_ingre' => date("Y-m-d H:i:s",strtotime($value['horaing']))                    
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }

     public function modfechvuel($value=''){
          if($value != null){
               $data = array(
                    'fech_vuelo' => date("Y-m-d",strtotime($value['fechvuel']))
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }
     public function modhoravuel($value=''){
          if($value != null){
               $data = array(
                    'hora_vuelo' => $value['horavuel']                  
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }

     public function modfechlleg($value=''){
          if($value != null){
               $data = array(
                    'fech_llegada' => date("Y-m-d",strtotime($value['fechlleg']))
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }
     public function modhoralleg($value=''){
          if($value != null){
               $data = array(
                    'hora_llegada' => $value['horalleg']                  
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
          }
          return true;
     }

     public function modest($value=''){
          //print_r($value.'karem');
          if($value != null){
               $data = array(
                    'est_cod' => $value['est']
               );
               $this->db->where('gui_cod', $value['id']);
               $this->db->update('guia', $data);
               $data2 = array(    
                    'idUsuario' => $this->session->userdata('idUsu'),
                    'seg_fec' => date("Y-m-d"),
                    'seg_hor' => date("H:i:s"),
                    'gui_cod' => $value['id'],
                    'est_cod' => $value['est'] 

                    // 'fech_ingre' => $value['feching'],
                    // 'hora_ingre' => $value['horaing'],
                    // 'fech_vuelo' => $value['fechvuel'],                  
                    // 'hora_vuelo' => $value['horavuel'],
                    // 'fech_llegada' => $value['fechlleg'],
                    // 'hora_llegada' => $value['horalleg']                    /

               );
               $q2=$this->db->insert('seguimiento', $data2);
          }
          return true;
     }

            public function serie_comprobante($id='')
    {//print_r($id);
        $this->db->select('serie_comprobante.sec_cod,sec_ser');
          $this->db->from('seriecom_usuario,serie_comprobante');
          $this->db->where('idUsuario',$this->session->userdata('idUsu'));
          $this->db->where('tic_cod',$id);
          $this->db->where('serie_comprobante.sec_cod=seriecom_usuario.sec_cod');
          $this->db->where('est_cod',1);
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }

                public function mostrar_linea()
    {//print_r($id);
        $this->db->select('*');
          $this->db->from('linea_negocio');
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }

         public function verigui($id='')
    {//print_r($id);
  $this->db->select('gui_cod,cl.cli_raz,concat(dp.dis_des,"-",p.prv_des,"-",c.ciu_des) partida,concat(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_tot,gui_pto,gui_cto');
          $this->db->from('guia g,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,cliente cl');
          $this->db->where('g.dip_cod=dp.dis_cod');
          $this->db->where('dl.dis_cod=g.dil_cod');
          $this->db->where('dp.prv_cod=p.prv_cod');
          $this->db->where('dl.prv_cod=p2.prv_cod');
           $this->db->where('p.ciu_cod=c.ciu_cod');
         $this->db->where('p2.ciu_cod=c2.ciu_cod');
        $this->db->where('cl.cli_cod=g.clp_cod');
        $this->db->where('g.est_cod != 5');
        $this->db->where('g.seg_cod',$id['ser']);
        $this->db->where('g.gui_num',$id['gui']);
         $this->db->where('g.coe_cod is null');

        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->row();
         }

    }

            public function item_lnegocio($id='')
    {//print_r($id);
        $this->db->select('*');
          $this->db->from('lnegocio_concep');
          $this->db->where('lin_cod',$id);
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
      public function regcliente($value='')
  {//print_r($value);
  
if($value['cli_raz']=="" ){
$raz= $value['cli_app']." ".$value['cli_apm']." ".$value['cli_nom'];
}else{
$raz=$value['cli_raz'];
}

      $data = array(
     'cli_app'  =>  $value['cli_app'],
'cli_apm' =>  $value['cli_apm'],
'cli_nom' =>  $value['cli_nom'],
'cli_raz' => $raz,
'cli_dir' =>  $value['cli_dir'],
'cli_tel' =>  $value['cli_tel'],
'cli_cel' =>  $value['cli_cel'],
'cli_nud' =>  $value['cli_nud'],
'cli_cor' =>  $value['cli_cor'],
'tid_cod' =>  $value['tid_cod'],
'tip_cod' =>  $value['tip_cod'],
'est_cod' => 1,
'dis_cod' =>  $value['dis_cod']

      );

      $q=$this->db->insert('cliente', $data);
      $id=$this->db->insert_id();

 
            return $id;
      
  }
  
        public function verificar_guia_fact($cod='')
  {

        $this->db->select('*');
                $this->db->from('guia');
        $this->db->where('gui_cod',$cod);
   $this->db->where('coe_cod is null');
             $query = $this->db->get();
            return $query->row();
  }

    public function registrar_comproemit($value='')
     {//print_r($value);
     
     $w=0;
       $Item2 =json_decode($value['arrayDet']);
      foreach ($Item2 as $key2 ) {
            $nro = $this->verificar_guia_fact($key2->cod);
            
            if($nro==null){
               $w=1;
                
            }
           
           
      }
     
     if($w==0){
        
     
     
  if($value['tip_mon']=="USD"){
      $monsoldol=$value['pvece']*4;
  }else{
         $monsoldol=$value['pvece'];
      
  }

     if($value['ite']==1 && $monsoldol>700){
            $coe_pde=12;
            $coe_mde=$value['pvece']*0.12;
            $coe_tot=$value['pvece']-$coe_mde;
        }else if($value['ite']!=1 && $monsoldol>400){
            $coe_pde=4;
            $coe_mde=$value['pvece']*0.04;
            $coe_tot=$value['pvece']-$coe_mde;
            
        }else{
            
            $coe_pde=0;
            $coe_mde=0.00;
            $coe_tot=$value['pvece'];
        }

      $nro = $this->serie_comemit($value['sec']);

      $data = array(
       'coe_fec' => $value['fec'],
            'coe_num' => $nro,
            'coe_des' => $value['desarea'],
            'coe_vve'=>$value['vvece'],
        'coe_igv' => $value['igvce'],
    'coe_pve' => $value['pvece'],
 'sec_cod' => $value['sec'],
 'lnc_cod' => $value['ite'],
            //'est_cod' => 3,
            'cli_cod' => $value['clicod'],
            'idUsuario' => $this->session->userdata('idUsu'),
         'coe_fer' => date("Y-m-d H:i:s"),
         'tip_mon' => $value['tip_mon'],
         'coe_metpag' => $value['mep'],
         'coe_pde'=>$coe_pde,
         'coe_mde'=>$coe_mde,
         'coe_tot'=>$coe_tot,
         'coe_obs'=>$value['obsarea']
      );

      $q=$this->db->insert('comprob_emitidos', $data);
      $idcomemi=$this->db->insert_id();
      
  $this->db->set('sec_num', $nro +1);
  $this->db->where('sec_cod', $value['sec']);
  $this->db->update('serie_comprobante');
  
      $Item =json_decode($value['arrayDet']);
      foreach ($Item as $key ) {
        $this->db->set('coe_cod', $idcomemi);
      $this->db->where('gui_cod', $key->cod);
      $this->db->update('guia');
           
      }
      if($value['mep']==1){
      $Item2 =json_decode($value['array_cuo']);
      foreach ($Item2 as $key2 ) {
  $data2 = array(
       'cuc_fec' => $key2->fecha,
            'cuc_num' => $key2->item,
            'cuc_mon' => $key2->monto,
            'coe_cod'=>$idcomemi,
      
      );

      $q=$this->db->insert('cuo_comp', $data2);
      //$idcomemi=$this->db->insert_id();
      }
      }
      
      

          $this->db->select('concat(sec_ser,"-",coe_num) comemit,coe_cod cod');
                $this->db->from('comprob_emitidos as ce');
    $this->db->join('serie_comprobante as sc', 'sc.sec_cod = ce.sec_cod', 'inner');
    $this->db->where('coe_cod',$idcomemi);
             $query = $this->db->get();
            return $query->row();
      
  }
     else{
         
         return null;
         
     }
     }

  public function serie_comemit($value='')
  {
      $this->db->select('sec_num');
      $this->db->where('sec_cod', $value);
      $query=$this->db->get('serie_comprobante');
      $nro =$query->row()->sec_num;
      return $nro;
  }

           public function excel_guia($id='')
    {//print_r($id);
  $this->db->select('gui_cod,cl.cli_raz,cl.cli_nud,cl2.cli_raz as cli_razl,cl2.cli_nud as cli_nudl,concat(gui_pup," ",dp.dis_des,"-",p.prv_des,"-",c.ciu_des) partida,concat(gui_pul," ",dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_fec,gui_gcl,cl.cli_cel celp,cl2.cli_cel cell,cl.cli_tel telp,cl2.cli_tel tell,u.usuario,tip.tpa_des,gui_obs,trap.trs_des');
          $this->db->from('guia g,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,cliente cl,cliente cl2,usuario u,tip_pago tip,transporte trap');
          $this->db->where('g.dip_cod=dp.dis_cod');
          $this->db->where('dl.dis_cod=g.dil_cod');
          $this->db->where('dp.prv_cod=p.prv_cod');
          $this->db->where('dl.prv_cod=p2.prv_cod');
           $this->db->where('p.ciu_cod=c.ciu_cod');
         $this->db->where('p2.ciu_cod=c2.ciu_cod');
        $this->db->where('cl.cli_cod=g.clp_cod');
        $this->db->where('cl2.cli_cod=g.cll_cod');
        $this->db->where('u.idUsuario=g.idUsuario');
         $this->db->where('tip.tpa_cod=g.tpa_cod');
            $this->db->where('trap.trs_cod=g.trs_cod');
        $this->db->where('g.gui_cod',$id);
         $query = $this->db->get();


 $this->db->select('d.*,m.med_des');
          $this->db->from('detalle_guia d,medida m');
 $this->db->where('m.med_cod=d.med_cod');
        $this->db->where('d.gui_cod',$id);
         $query2 = $this->db->get();


         if($query->num_rows() > 0 )
         {
               return array("cab"=>$query->row(),"det"=>$query2->result());
         }

    }

                public function text_cab($id='')
    {//print_r($id);
        $this->db->select('coe_fec,coe_vve,coe_pve,coe_igv,cli_raz,cli_nud,tid_sun,sec_ser,coe_num,tic_sun');
          $this->db->from('comprob_emitidos,cliente,tip_docu,serie_comprobante,tipo_comprobante');
          $this->db->where('comprob_emitidos.cli_cod=cliente.cli_cod');
           $this->db->where('tip_docu.tid_cod=cliente.tid_cod');
            $this->db->where('comprob_emitidos.sec_cod=serie_comprobante.sec_cod');
              $this->db->where('tipo_comprobante.tic_cod=serie_comprobante.tic_cod');
             $this->db->where('coe_cod',$id);   


            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->row();
         }

    }

                    public function text_det($id='')
    {//print_r($id);
        $this->db->select('coe_fec,coe_vve,coe_pve,coe_igv,sec_ser,coe_num,tic_sun,coe_des,lin_cos,lnc_cos');
          $this->db->from('comprob_emitidos,serie_comprobante,tipo_comprobante,linea_negocio,lnegocio_concep');
               $this->db->where('comprob_emitidos.sec_cod=serie_comprobante.sec_cod');
              $this->db->where('tipo_comprobante.tic_cod=serie_comprobante.tic_cod');
               $this->db->where('comprob_emitidos.lnc_cod=lnegocio_concep.lnc_cod');
               $this->db->where('linea_negocio.lin_cod=lnegocio_concep.lin_cod');
             $this->db->where('coe_cod',$id);   


            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->row();
         }

    }
    
     public function mostrar_detmanif($id=''){//print_r($id);
        $this->db->select('detalle_guia.*,med_des');
          $this->db->from('detalle_guia,medida');
          $this->db->where('detalle_guia.med_cod=medida.med_cod');
             $this->db->where('gui_cod',$id);   
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }
     }
    
     public function grabmani($value=''){
          //print_r($id);
           if($value['flagten']==1){
          $data = array(
               'man_fec' => $value['fec_tot'],           
               'man_pes' => $value['tot_peso'],
               'man_can'=>$value['tot_cant'],
               'dil_cod'=>$value['hpul'],
               'dip_cod'=>$value['hpup'],
               'trv_cod'=>$value['emp_vi'],
               'man_nfa'=>$value['numfac'],
               'man_ors'=>$value['ordser'],
               'man_cos'=>$value['cost'],            
               'idUsuario' => $this->session->userdata('idUsu'),
               'man_fer' => date("Y-m-d H:i:s")
          );
              
          }else{
                  $data = array(
              'man_fec' => $value['fec_tot'],          
               'man_pes' => $value['tot_peso'],
               'man_can'=>$value['tot_cant'],
               'dil_cod'=>$value['hpul'],
               'dip_cod'=>$value['hpup'],
              // 'trv_cod'=>$value['emp_vi'],
               //'man_nfa'=>$value['numfac'],
               //'man_ors'=>$value['ordser'],
               //'man_cos'=>$value['cost'],            
               'idUsuario' => $this->session->userdata('idUsu'),
               'man_fer' => date("Y-m-d H:i:s")
          ); 
              
          }
          $q=$this->db->insert('MANIFIESTO', $data);
          $idman=$this->db->insert_id();
          $Item =json_decode($value['arrayDet']);
          foreach ($Item as $key ) {
               $this->db->set('man_cod', $idman);
               $this->db->where('gui_cod', $key->cod);
               $this->db->update('guia');
          }    
          
              $Item2 =json_decode($value['arraynDet']);
          foreach ($Item2 as $key2 ) {
               $this->db->set('man_cod', $idman);
               $this->db->where('deg_cod', $key2);
               $this->db->update('detalle_guia');
          }   
          
          
          return $idman;
     }
    
                  public function envio_sunat($id='')
    {//print_r($id);
        $this->db->select('coe_fec,coe_vve,coe_pve,coe_igv,cli_raz,cli_nud,tid_sun,sec_ser,coe_num,tic_sun,cli_dir,dis_ubi,cli_cor,tip_mon,coe_metpag,coe_pde,coe_mde,coe_tot,coe_obs,lnc_cod');
          $this->db->from('comprob_emitidos,cliente,tip_docu,serie_comprobante,tipo_comprobante,distrito');
          $this->db->where('comprob_emitidos.cli_cod=cliente.cli_cod');
          $this->db->where('cliente.dis_cod=distrito.dis_cod');
           $this->db->where('tip_docu.tid_cod=cliente.tid_cod');
            $this->db->where('comprob_emitidos.sec_cod=serie_comprobante.sec_cod');
              $this->db->where('tipo_comprobante.tic_cod=serie_comprobante.tic_cod');

             $this->db->where('coe_cod',$id);   
            $query = $this->db->get();
           

     $this->db->select('coe_cod as codigo_interno,coe_des as descripcion," " as codigo_producto_sunat,"ZZ" as unidad_de_medida,"1" as cantidad ,coe_vve as valor_unitario,"01" as codigo_tipo_precio,coe_pve as precio_unitario,"10" as codigo_tipo_afectacion_igv, coe_vve  as total_base_igv, "18" as porcentaje_igv, coe_igv as total_igv, coe_igv as total_impuestos, coe_vve as total_valor_item,coe_pve as total_item ');
          $this->db->from('comprob_emitidos');

             $this->db->where('coe_cod',$id);   
          $query2 = $this->db->get();
          
          
             $this->db->select("concat('Cuota',LPAD(cuc_num,3,'0')) as cuota,cuc_fec as fecha_de_pago,cuc_mon as importe");
          $this->db->from('cuo_comp');
             $this->db->where('coe_cod',$id);   
          $query3 = $this->db->get();
          
          
          
             $this->db->select("MAX(cuc_fec) as fecha_ven");
          $this->db->from('cuo_comp');
             $this->db->where('coe_cod',$id);  
                 $query4 = $this->db->get();
          

            if($query->num_rows() > 0 )
         {
               return array("cab"=>$query->row(),"det"=>$query2->result(),"cuo"=>$query3->result(),"maxven"=>$query4->row());
         }

    }
    
    
                 public function ver_pagos($id='')
    {//print_r($id);
        $this->db->select('coe_cod,coe_fec,sec_ser,coe_des,coe_num,coe_vve,tip_mon,coe_igv,coe_pve,coe_mot,comprob_emitidos.est_cod,cli_raz, comprob_emitidos.coe_pve-ifnull(sum(ecomp_pago.monto),0.00) pendiente,
SUM(CASE
        WHEN FK_idTipo = 1 THEN monto
        ELSE 0.00
    END) AS efectivo,
    SUM(CASE
        WHEN FK_idTipo = 2 or FK_idTipo = 3 THEN monto
        ELSE 0.00
    END) AS tarjeta,
     SUM(CASE
        WHEN FK_idTipo = 4 THEN monto
        ELSE 0.00
    END) AS deposito,
     SUM(CASE
        WHEN FK_idTipo = 5 THEN monto
        ELSE 0.00
    END) AS transferencia, CAST(if(fec_transa="0000-00-00",fecha,fec_transa) AS DATE) as fec_pago,moneda');
    
    
          $this->db->from('comprob_emitidos');
           $this->db->join('serie_comprobante',"serie_comprobante.sec_cod=comprob_emitidos.sec_cod","inner");
           $this->db->join('cliente',"cliente.cli_cod=comprob_emitidos.cli_cod","inner");
     $this->db->join('ecomp_pago',"ecomp_pago.FK_idEcomp=comprob_emitidos.coe_cod","left");
          
              if($id['fec']!=""){

             $this->db->where('coe_fec>=',$id['fec']);   
              $this->db->where('coe_fec<=',$id['fecfin']);
          }
       
          
          if($id['num']!=""){
           $this->db->where('coe_num',$id['num']);
          }
           if($id['est_fac']!=""){
          
              $this->db->where('comprob_emitidos.est_cod',$id['est_fac']);
          }
          
            if($id['cli']!=""){
          
              $this->db->where('comprob_emitidos.cli_cod',$id['cli']);
          }
          $this->db->group_by('comprob_emitidos.coe_cod');
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
    
                      public function tran_emp($id='')
    {//print_r($id);
        $this->db->select('*');
          $this->db->from('transporte_via');
        
          
             $this->db->where('trs_cod',$id['id']);   
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
    
           public function veriguimani($id='')
    {//print_r($id);
  $this->db->select('gui_cod,cl.cli_raz,concat(dp.dis_des,"-",p.prv_des,"-",c.ciu_des) partida,concat(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_tot,if(gui_vto>gui_pto,gui_vto,gui_pto) gui_pto,gui_cto,serg.seg_ser,g.gui_num');
          $this->db->from('guia g,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,cliente cl,serie_guia serg');
          $this->db->where('g.dip_cod=dp.dis_cod');
          $this->db->where('dl.dis_cod=g.dil_cod');
          $this->db->where('dp.prv_cod=p.prv_cod');
          $this->db->where('dl.prv_cod=p2.prv_cod');
           $this->db->where('p.ciu_cod=c.ciu_cod');
         $this->db->where('p2.ciu_cod=c2.ciu_cod');
        $this->db->where('cl.cli_cod=g.clp_cod');
        $this->db->where('g.seg_cod=serg.seg_cod');
        $this->db->where('g.est_cod != 5');

        $this->db->where('g.seg_cod',$id['ser']);
        $this->db->where('g.gui_num',$id['gui']);
  

        $query = $this->db->get();
          if($query->num_rows() > 0 )
         {
        $id= $query->row();
        
          $this->db->select('deg_cod');
          $this->db->from('detalle_guia');
          $this->db->where('gui_cod',$id->gui_cod);
         // $this->db->where('man_cod',null);
          $query2 = $this->db->get();
          return array("cab"=>$query->row(),"det"=>$query2->result());
          
         }
        
       //  if($query->num_rows() > 0 )
         //{
             
           //  return $query->result();
             //return array("cab"=>$query->result(),"det"=>$query2->result());
        // }

    }
    
               public function verclientes()
    {//print_r($id);
  $this->db->select('*');
          $this->db->from('cliente');
          $this->db->order_by('cli_raz');
            $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
    
                           public function companula($value='')
    {//print_r($id);
             $data = array(
       'coe_mot' => $value['motianula'],
       'est_cod' => $value['tipanula']
         
      );

             $this->db->where('coe_cod', $value['idanula']);
$this->db->update('comprob_emitidos', $data);

if($value['guianula']==5){

     $datas = array(
              'est_cod' => '5'
        
          );
          $this->db->where('coe_cod', $value['idanula']);
$this->db->update('guia', $datas);
}else{
  
    $datas = array(
              'coe_cod' => null
        
          );
          $this->db->where('coe_cod', $value['idanula']);
$this->db->update('guia', $datas);
    
}
          
 return 1;
}

 
    
           public function guiafalt($id='')
    {//print_r($id);
  $this->db->select('*');
          $this->db->from('CONTROL_GUIA');
          $this->db->where('cog_ser',$id['ser']);
     $this->db->where('cog_est',1);

        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }


      }
