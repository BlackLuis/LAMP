<?php
/**
 *
 */
class Mreportes extends CI_Model
{
   public function __construct()
    {
        parent::__construct();
    }
    public function verguiarep($id='')
    {//print_r($id);
        $this->db->select('gui_fec,gui_cod,gui_pup,gui_pul,gui_tot,gui_num,clp.cli_raz razp,cll.cli_raz razl,CONCAT(dp.dis_des,"-",p.prv_des, "-",c.ciu_des) partida,CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_cto,gui_pto,sg.seg_ser,t.trs_des,tp.tpa_des,comprob_emitidos.est_cod,comprob_emitidos.coe_cod,
        concat(serie_comprobante.sec_ser,"-",comprob_emitidos.coe_num) as fac,g.est_cod as segui,g.gui_obs,g.gui_gcl');
          $this->db->from('guia g,cliente clp,cliente cll,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,serie_guia sg,
    transporte t,tip_pago tp');
    $this->db->join('comprob_emitidos','g.coe_cod = comprob_emitidos.coe_cod','left');
    $this->db->join('serie_comprobante','serie_comprobante.sec_cod = comprob_emitidos.sec_cod','left');
             $this->db->where('g.clp_cod = clp.cli_cod');
          $this->db->where('g.cll_cod = cll.cli_cod');
          $this->db->where('g.dip_cod = dp.dis_cod');
          $this->db->where('dl.dis_cod = g.dil_cod');
          $this->db->where('dp.prv_cod = p.prv_cod');
          $this->db->where('dl.prv_cod = p2.prv_cod');
          $this->db->where('p.ciu_cod = c.ciu_cod');
          $this->db->where('p2.ciu_cod = c2.ciu_cod');
          $this->db->where('sg.seg_cod = g.seg_cod');
          $this->db->where('t.trs_cod = g.trs_cod');
          $this->db->where('tp.tpa_cod = g.tpa_cod');
                     if($id['fec']!=""){

             $this->db->where('g.gui_fec>=',$id['fec']);   
              $this->db->where('g.gui_fec<=',$id['fecfin']);
          }
          
             if($id['cli']!=""){
           $this->db->where('g.cll_cod',$id['cli']);
          }
          
          if($id['ser']!=""){
           $this->db->where('g.seg_cod',$id['ser']);
          }
          
          if($id['num']!=""){
           $this->db->where('g.gui_num',$id['num']);
          }
           if($id['est_fac']=="1"){
          
              $this->db->where('comprob_emitidos.est_cod',null);
          }else if($id['est_fac']=="2"){
              $this->db->where('comprob_emitidos.est_cod',9);
          }else if($id['est_fac']=="3"){
              $this->db->where('comprob_emitidos.est_cod',10);
          }
          
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }



        public function vermanirep($id='')
    {//print_r($id);
        $this->db->select('g.*,
                          DATE_FORMAT(date(g.man_fec),"%d/%m/%Y") fecha,
                          CONCAT(dp.dis_des,"-",p.prv_des, "-",c.ciu_des) partida,
                          CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,
                          t2.trs_des,tv.trv_des');
          $this->db->from('MANIFIESTO g');

 $this->db->join('distrito dp',"g.dip_cod = dp.dis_cod","inner");
  $this->db->join('distrito dl',"dl.dis_cod = g.dil_cod","inner");
   $this->db->join('provincia p',"dp.prv_cod = p.prv_cod","inner");
   $this->db->join('provincia p2',"dl.prv_cod = p2.prv_cod","inner");       
      $this->db->join('ciudad c',"p.ciu_cod = c.ciu_cod","inner");   
        $this->db->join('ciudad c2',"p2.ciu_cod = c2.ciu_cod","inner");     
            $this->db->join('transporte_via tv',"tv.trv_cod= g.trv_cod","left");     
           $this->db->join('transporte t2',"tv.trs_cod= t2.trs_cod","left");    
    
         // $this->db->where('date(g.man_fec)',$id['fec']);
           $this->db->where('g.est_cod',1);
             $this->db->where('date(g.man_fec)>=',$id['fec']);   
              $this->db->where('date(g.man_fec)<=',$id['fecfin']);
          
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }


        public function verguiamani($id='')
    {//print_r($id);
        $this->db->select('dtg.deg_cod,dtg.deg_des,dtg.deg_pes,dtg.deg_can,gui_fec,g.gui_cod,gui_pup,gui_pul,gui_tot,gui_num,clp.cli_raz razp,cll.cli_raz razl,CONCAT(dp.dis_des,"-",p.prv_des, "-",c.ciu_des) partida,CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_cto,if(gui_vto>gui_pto,gui_vto,gui_pto) gui_pto,sg.seg_ser,t.trs_des,tp.tpa_des');
          $this->db->from('guia g,cliente clp,cliente cll,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,serie_guia sg,
    transporte t,tip_pago tp,detalle_guia dtg');
          $this->db->where('g.gui_cod = dtg.gui_cod');
         $this->db->where('g.clp_cod = clp.cli_cod');
          $this->db->where('g.cll_cod = cll.cli_cod');
          $this->db->where('g.dip_cod = dp.dis_cod');
          $this->db->where('dl.dis_cod = g.dil_cod');
          $this->db->where('dp.prv_cod = p.prv_cod');
          $this->db->where('dl.prv_cod = p2.prv_cod');
          $this->db->where('p.ciu_cod = c.ciu_cod');
          $this->db->where('p2.ciu_cod = c2.ciu_cod');
          $this->db->where('sg.seg_cod = g.seg_cod');
          $this->db->where('t.trs_cod = g.trs_cod');
          $this->db->where('tp.tpa_cod = g.tpa_cod');
           $this->db->where('dtg.man_cod',$id['id']);
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }
 public function excel_mani($id='')
    {//print_r($id);
   $query= $this->db->query('SELECT gui_fec fecha
,concat(s.seg_ser,"-",gui_num) guia,
deg_can bul,
deg_pes peso,
deg_pev peso_vol,
a.cli_raz REMITENTE,
b.cli_raz CONSIGNATARIO,
dl.deg_des CONTENIDO,
dis.dis_des DESTINO,
gui_pul DIRECCION,
b.cli_cel TELEFONO,
concat(sc.sec_ser,"-",ce.coe_num) FACT,
if(tmp.descripcion is null and (ce.coe_metpag=0 or ce.coe_metpag is null),"pendiente",if(ce.coe_metpag=0,"pago","Credito")) statuss,
ce.tip_mon MONEDA,
dl.`deg_sub` costo,
tmp.descripcion F_PAGO,
tmp.banco BANCO,
tmp.nro OPERACION,
tmp.fec_transa,
mani.man_nfa fact,
mani.man_ors orden,
mani.man_cos costo_orden,
trv.trv_des transporte,
tra.trs_des tip_trans,
tpa.tpa_des
FROM guia g 
INNER JOIN tip_pago tpa on tpa.tpa_cod=g.tpa_cod
INNER JOIN serie_guia s on s.seg_cod=g.seg_cod 
inner join cliente a on a.cli_cod=g.`clp_cod` 
inner join cliente b on b.cli_cod=g.`cll_cod`
inner join detalle_guia dl on g.gui_cod=dl.gui_cod
inner join distrito dis on dis.dis_cod=g.`dil_cod`
left join comprob_emitidos ce on ce.coe_cod=g.coe_cod
left join serie_comprobante sc on sc.sec_cod=ce.sec_cod
left join (select GROUP_CONCAT(tmp2.descripcion) descripcion ,GROUP_CONCAT(ecp.fec_transa) fec_transa,GROUP_CONCAT(ecp.monto) monto ,ecp.FK_idEcomp ,GROUP_CONCAT(ban.descripcion) banco,GROUP_CONCAT(emne.nro_doc_cobro) nro
from ecomp_pago ecp 
inner join tipo_medio_pago tmp2 on tmp2.idTipo=ecp.FK_idTipo
LEFT join ecomp_medio_no_efectivo emne on emne.FK_idPago=ecp.idPago
left join banco ban on ban.idBanco=emne.FK_idBanco
group by ecp.FK_idEcomp) tmp   on tmp.FK_idEcomp=ce.coe_cod
left join `MANIFIESTO` mani on dl.`man_cod`= mani.man_cod
left JOIN transporte_via trv on mani.`trv_cod`=trv.trv_cod 
LEFT join transporte tra on tra.trs_cod=trv.trs_cod
where  mani.est_cod=1 and  dl.man_cod ='.$id['id']);


  
         
return $query->result();

    }
    
      public function modifidet($id='')
    {
     $data = array(
              'deg_des' =>  $id['desc'],
              'deg_can' =>  $id['can'],
           
              'deg_pes' =>  $id['pes'],
              'deg_peu' => $id['pru'],
              'deg_sub' =>  $id['subtpt'],
              'med_cod' =>  $id['med'],
              'deg_pev' =>  $id['psv']
          );
          $this->db->where('deg_cod', $id['coddetgui']);
$this->db->update('detalle_guia', $data);

$this->db->select('sum(deg_sub) tot,sum(deg_can) cantot,sum(deg_pes) pestot,sum(deg_pev) psvtot');
    $this->db->from('detalle_guia');
    $this->db->where('gui_cod', $id['codgui']);
    $this->db->group_by('gui_cod');
      $query = $this->db->get();
    $j= $query->row();
        

     $data = array(
              'gui_tot' =>  $j->tot,
              'gui_pto' =>  $j->pestot,
           
              'gui_cto' =>  $j->cantot,
              'gui_vto' => $j->psvtot,
           
          );
          $this->db->where('gui_cod', $id['codgui']);
$this->db->update('guia', $data);           
 return $this->db->affected_rows();
    }
    
      public function vercliente($id='')
    {//print_r($id);
        $this->db->select('cliente.*,tid_des,tip_des,if(est_cod=1,"Activo","Eliminado") estado');
          $this->db->from('cliente,tip_docu,tip_pers');
         $this->db->where('cliente.tid_cod = tip_docu.tid_cod');
          $this->db->where('cliente.tip_cod = tip_pers.tip_cod');
     
    if($id['nrodoc']!=''){
        if($id['bup']==1){
           $this->db->like('cliente.cli_nud',$id['nrodoc']);
    }else{
         $this->db->like('cliente.cli_raz',$id['nrodoc']);
    }
          }
    $this->db->order_by('cli_raz');
    $this->db->limit(10);
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }    
    
     public function modicliente($id='')
    {
     $data = array(
              'cli_nud' =>  $id['cli_nud'],
              'cli_raz' =>  $id['cli_raz'],
           
              'cli_dir' =>  $id['cli_dir'],
              'cli_tel' => $id['cli_tel'],
              'cli_cel' =>  $id['cli_cel'],
              'cli_cor' =>  $id['cli_cor'],
              'tid_cod' =>  $id['tid_cod'],
              'tip_cod' =>  $id['tip_cod'],
              'est_cod' =>  $id['est_cod']
          );
          $this->db->where('cli_cod', $id['cod']);
$this->db->update('cliente', $data);
          
 return $this->db->affected_rows();
    } 
    
       public function eligui($id='')
    {
     $data = array(
              'est_cod' => '5',
        
          );
          $this->db->where('gui_cod', $id['id']);
$this->db->update('guia', $data);
          
 return 1;
    } 
    
    
    public function excel_mani2($id='')
    {//print_r($id);
    
    if($id['id']==1){
        $where ='and disman.dis_cod=1452';
        
    }else{
        
          $where ='and disman.dis_cod!=1452';
    }
  $query= $this->db->query('SELECT gui_fec fecha
,concat(s.seg_ser,"-",gui_num) guia,
deg_can bul,
deg_pes peso,
deg_pev peso_vol,
a.cli_raz REMITENTE,
b.cli_raz CONSIGNATARIO,
dl.deg_des CONTENIDO,
dis.dis_des DESTINO,
gui_pul DIRECCION,
b.cli_cel TELEFONO,
concat(sc.sec_ser,"-",ce.coe_num) FACT,
if(tmp.descripcion is null and (ce.coe_metpag=0 or ce.coe_metpag is null),"pendiente",if(ce.coe_metpag=0,"pago","Credito")) statuss,
ce.tip_mon MONEDA,
dl.`deg_sub` costo,
tmp.descripcion F_PAGO,
tmp.banco BANCO,
tmp.nro OPERACION,
tmp.fec_transa,
mani.man_nfa fact,
mani.man_ors orden,
mani.man_cos costo_orden,
trv.trv_des transporte,
tra.trs_des tip_trans,
tpa.tpa_des
FROM guia g 
INNER JOIN tip_pago tpa on tpa.tpa_cod=g.tpa_cod
INNER JOIN serie_guia s on s.seg_cod=g.seg_cod 
inner join cliente a on a.cli_cod=g.`clp_cod` 
inner join cliente b on b.cli_cod=g.`cll_cod`
inner join detalle_guia dl on g.gui_cod=dl.gui_cod
inner join distrito dis on dis.dis_cod=g.`dil_cod`
left join comprob_emitidos ce on ce.coe_cod=g.coe_cod
left join serie_comprobante sc on sc.sec_cod=ce.sec_cod
left join (select GROUP_CONCAT(tmp2.descripcion) descripcion ,GROUP_CONCAT(ecp.fec_transa) fec_transa,GROUP_CONCAT(ecp.monto) monto ,ecp.FK_idEcomp ,GROUP_CONCAT(ban.descripcion) banco,GROUP_CONCAT(emne.nro_doc_cobro) nro
from ecomp_pago ecp 
inner join tipo_medio_pago tmp2 on tmp2.idTipo=ecp.FK_idTipo
LEFT join ecomp_medio_no_efectivo emne on emne.FK_idPago=ecp.idPago
left join banco ban on ban.idBanco=emne.FK_idBanco
group by ecp.FK_idEcomp) tmp   on tmp.FK_idEcomp=ce.coe_cod
left join `MANIFIESTO` mani on dl.`man_cod`= mani.man_cod
LEFT JOIN distrito disman on disman.dis_cod=mani.`dil_cod`
left JOIN transporte_via trv on mani.`trv_cod`=trv.trv_cod 
LEFT join transporte tra on tra.trs_cod=trv.trs_cod
where mani.est_cod=1 and mani.man_fec between  "'.$id['fec'].'" and  "'.$id['fecfin'].'"
'.$where.'');


  
         
return $query->result();
  

    }
    
    
         public function editmani($value='')
    {
     $data = array(
               'trv_cod'=>$value['emp_vi'],
               'man_nfa'=>$value['numfac'],
               'man_ors'=>$value['ordser'],
               'man_cos'=>$value['cost'], 
          );
          $this->db->where('man_cod', $value['idman']);
$this->db->update('MANIFIESTO', $data);
          
 return $this->db->affected_rows();
    } 



     public function guiastot($id='')
         {//print_r($id);
              $val=$id['serg'];
                $this->db->select('cog_gui NumerosFaltantes,cog_est');
                $this->db->from('CONTROL_GUIA');
      $this->db->where('cog_ser',$val);

    $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }
    }
    
    
       public function agguia($id='')
    {
         $val=$id['ser'];
          $query= $this->db->query('call agregarcorrelativo('.$val.',50)') ;
        return $this->db->insert_id();
    }
    
    
    
               public function verdetgui($id='')
    {//print_r($id);
  $this->db->select('gui_cod');
          $this->db->from('guia g');
        
        $this->db->where('g.est_cod != 5');

        $this->db->where('g.seg_cod',$id['serg']);
        $this->db->where('g.gui_num',$id['guinum']);
  

        $query = $this->db->get();
          if($query->num_rows() > 0 )
         {
        $id= $query->row();
        
     $this->db->select('detalle_guia.*,med_des');
          $this->db->from('detalle_guia,medida');
          $this->db->where('detalle_guia.med_cod=medida.med_cod');
          $this->db->where('gui_cod',$id->gui_cod);
          $query2 = $this->db->get();
          return $query2->result();
          
         }
        
       //  if($query->num_rows() > 0 )
         //{
             
           //  return $query->result();
             //return array("cab"=>$query->result(),"det"=>$query2->result());
        // }

    }
    
    
    
         public function anadguimani($id='')
    {
        $pes=0.00;
        $cant=0;
               $Item2 =json_decode($id['arraynDet']);
          foreach ($Item2 as $key2 ) {
               $this->db->set('man_cod', $id['mani']);
               $this->db->where('deg_cod', $key2);
               $this->db->update('detalle_guia');
               
               
                  $this->db->select('if(deg_pev>deg_pes,deg_pev,deg_pes) gui_pto,deg_can gui_cto');
          $this->db->where('deg_cod',$key2);
               $query=$this->db->get('detalle_guia');
          $pes +=$query->row()->gui_pto;
           $cant +=$query->row()->gui_cto;
               
               
          }  
        
           $this->db->select('man_pes,man_can');
         $this->db->where('man_cod', $id['mani']);
          $query=$this->db->get('MANIFIESTO');
          $pesman =$query->row()->man_pes;
           $cantman =$query->row()->man_can;
           
           
           
              $data2 = array(
              'man_pes' =>  $pes + $pesman,
          'man_can' =>  $cant + $cantman,
          );
          $this->db->where('man_cod', $id['mani']);
            
$this->db->update('MANIFIESTO', $data2);
    return $this->db->affected_rows();
    } 
    
    
    
        public function elimani($id='')
    {
         $val=$id['idmaneli'];
         
         
          $data2 = array(
              'man_cod' =>  null,
         
          );
          $this->db->where('man_cod', $val);
      
$this->db->update('detalle_guia', $data2);
         
  $data = array(
              'est_cod' => 5,
         
          );
           $this->db->where('man_cod', $val);
$this->db->update('MANIFIESTO', $data);
          
 return $this->db->affected_rows();
    }
    

    
         public function eliguimani($id='')
    {
     $data = array(
              'man_cod' =>  null,
         
          );
          $this->db->where('deg_cod', $id['id']);
      
$this->db->update('detalle_guia', $data);
      $val= $this->db->affected_rows();    
      
      if($val>0){
             $this->db->select('if(deg_pev>deg_pes,deg_pev,deg_pes) gui_pto,deg_can gui_cto');
          $this->db->where('deg_cod', $id['id']);
               $query=$this->db->get('detalle_guia');
          $pes =$query->row()->gui_pto;
           $cant =$query->row()->gui_cto;
           
           $this->db->select('man_pes,man_can');
         $this->db->where('man_cod', $id['mani']);
          $query=$this->db->get('MANIFIESTO');
          $pesman =$query->row()->man_pes;
           $cantman =$query->row()->man_can;
           
           
           
              $data2 = array(
              'man_pes' =>   $pesman - $pes,
          'man_can' =>   $cantman - $cant,
          );
          $this->db->where('man_cod', $id['mani']);
            
$this->db->update('MANIFIESTO', $data2);
  
      }
 return  $val;
    }
    

        public function verguicli($id='')
    {//print_r($id);
        $this->db->select('gui_fec,g.gui_cod,gui_pup,gui_pul,gui_tot,gui_num,clp.cli_raz razp,cll.cli_raz razl,CONCAT(dp.dis_des,"-",p.prv_des, "-",c.ciu_des) partida,CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,gui_cto,if(gui_vto>gui_pto,gui_vto,gui_pto) gui_pto,sg.seg_ser,dtg.deg_des,dtg.deg_can,dtg.deg_pes,dtg.deg_peu,dtg.deg_sub,dtg.deg_pev');
          $this->db->from('guia g,cliente clp,cliente cll,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,serie_guia sg,
    detalle_guia dtg');
         $this->db->where('g.clp_cod = clp.cli_cod');
          $this->db->where('g.cll_cod = cll.cli_cod');
          $this->db->where('g.dip_cod = dp.dis_cod');
          $this->db->where('dl.dis_cod = g.dil_cod');
          $this->db->where('dp.prv_cod = p.prv_cod');
          $this->db->where('dl.prv_cod = p2.prv_cod');
          $this->db->where('p.ciu_cod = c.ciu_cod');
          $this->db->where('p2.ciu_cod = c2.ciu_cod');
          $this->db->where('sg.seg_cod = g.seg_cod');
                $this->db->where('dtg.gui_cod = g.gui_cod');
     
           $this->db->where('clp_cod',$id['id']);
            $this->db->order_by("g.gui_cod" , "asc");
              $this->db->limit(20);
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }    
    
    
    
    public function repcuadre_diario($id='')
    {//print_r($id);
  $fecha=  $id['fec'];
    $query= $this->db->query('SELECT idusu,usuario,SUM(CASE WHEN FK_idTipo = 1 and moneda="soles" THEN monto  ELSE 0.00 END) AS efectivo_soles,
    SUM(CASE WHEN FK_idTipo = 1 and moneda="dolares" THEN monto ELSE 0.00 END) AS efectivo_dolares,
    SUM(CASE WHEN (FK_idTipo = 2 or FK_idTipo = 3) and moneda="soles" THEN monto ELSE 0.00 END) AS tarjeta_soles,
    SUM(CASE WHEN (FK_idTipo = 2 or FK_idTipo = 3) and moneda="dolares" THEN monto ELSE 0.00 END) AS tarjeta_dolares,
     SUM(CASE WHEN FK_idTipo = 4 and moneda="soles" THEN monto ELSE 0.00 END) AS deposito_soles,
     SUM(CASE WHEN FK_idTipo = 4 and moneda="dolares" THEN monto ELSE 0.00 END) AS deposito_dolares
     ,SUM(CASE WHEN FK_idTipo = 5 and moneda="soles" THEN monto ELSE 0.00  END) AS transferencia_soles,
    SUM(CASE WHEN FK_idTipo = 5 and moneda="dolares" THEN monto ELSE 0.00 END) AS transferencia_dolares
         FROM ecomp_pago inner join usuario on idusu=idUsuario
   where fec_transa = "'.$fecha.'"
    GROUP BY idusu');

return $query->result();
  

    }
    
     public function verdetpago($id='')
    {//print_r($id);
        $this->db->select('a.coe_fec,b.sec_ser,a.coe_num,c.cli_raz,a.coe_des,d.monto,d.moneda,e.descripcion medio');
  $this->db->from('comprob_emitidos a');
 $this->db->join('serie_comprobante b',"a.sec_cod=b.sec_cod","inner");
  $this->db->join('cliente c',"a.cli_cod=c.cli_cod","inner");
   $this->db->join('ecomp_pago d',"d.FK_idEcomp=a.coe_cod","inner");
   $this->db->join('tipo_medio_pago e',"e.idTipo=d.FK_idTipo","inner");       
    $this->db->where('d.fec_transa',$id['fec']);
    $this->db->where('d.idusu',$id['id']);   
    $this->db->where('a.est_cod !=',"5"); // LACB_271022
        $query = $this->db->get();
         if($query->num_rows() > 0 )
         {
              return $query->result();
         }

    }    
    
    
     
    public function repcuadre_diario_usuario_pdf($id='')
    {//print_r($id);
  $fecha=  $id['fec'];
    $usu= $id['id'];
    $query= $this->db->query('SELECT idusu,usuario,SUM(CASE WHEN moneda="soles" THEN monto  ELSE 0.00 END) AS soles,SUM(CASE WHEN moneda="dolares" THEN monto  ELSE 0.00 END) AS dolares,
 CASE WHEN FK_idTipo = 1 THEN "Efectivo"
 		when FK_idTipo = 2 or FK_idTipo = 3 then "Tarjeta"
        when FK_idTipo = 4 then "Deposito"
        when FK_idTipo = 5 then "Tranferencia"
 end as tipo
 
         FROM ecomp_pago inner join usuario on idusu=idUsuario
   where fec_transa = "'.$fecha.'" and idusu="'.$usu.'" 
    GROUP BY  CASE WHEN FK_idTipo = 1 THEN "Efectivo"
 		when FK_idTipo = 2 or FK_idTipo = 3 then "Tarjeta"
        when FK_idTipo = 4 then "Deposito"
        when FK_idTipo = 5 then "Tranferencia"
        end');

     $this->db->select('usuario');
          $this->db->from('usuario');
         $this->db->where('idusuario',$usu);
 $query2 = $this->db->get();
 
     $this->db->select('usuario');
          $this->db->from('usuario');
         $this->db->where('idusuario',$this->session->userdata('idUsu'));
 $query3 = $this->db->get();

return array("det"=>$query->result(),"cab"=>$query2->row(),"cab2"=>$query3->row());
  

    }
    

}

 ?>