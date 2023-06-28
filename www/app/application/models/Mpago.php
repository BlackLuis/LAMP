<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpago extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function mostrar_medio_pago()
  {
      $query = $this->db->get('tipo_medio_pago');
      if($query->num_rows() > 0 )
      {
           return $query->result();
      }
  }

  public function mostrar_tipo_tarjeta()
  {
      $query = $this->db->get('tipo_tarjeta');
      if($query->num_rows() > 0 )
      {
           return $query->result();
      }
  }

  public function mostrar_banco()
  {
      $query = $this->db->get('banco');
      if($query->num_rows() > 0 )
      {
           return $query->result();
      }
  }

  public function registrar_medio_pago($value='',$idDoc_venta='')
  {
      $fecha ='';
      $momento='E';
   

      if (isset($value['fecha_doc'])) {
          $fecha = $value['fecha_doc'];
      }
      else {
          $fecha =date("Y-m-d");
      }


      $lista_pago =json_decode($value['array_pago']);
      foreach ($lista_pago as $key) {
          $data = array(
              'FK_idTipo' => $key->medio_pago,
              'FK_idEcomp' => $idDoc_venta,
              'monto' => $key->monto,
              'fecha' =>$fecha,
              'momento' =>$momento,
              'fec_transa' => $key->fecha,
              'moneda' => $key->moneda,
              'idusu' => $this->session->userdata('idUsu')
          );
          $this->db->insert('ecomp_pago', $data);
          $idPago=$this->db->insert_id();

          switch ($key->medio_pago) {
              case '4':
                  $data = array(
                        'FK_idPago' => $idPago,
                        'FK_idBanco' => $key->banco,
                        'nro_doc_cobro' => $key->nro_doc,
                        // 'fecha_emision' => $key->fecha
                  );
                  $this->db->insert('ecomp_medio_no_efectivo', $data);
                  break;
                  
                  case '5':
                  $data = array(
                        'FK_idPago' => $idPago,
                        'FK_idBanco' => $key->banco,
                        'nro_doc_cobro' => $key->nro_doc,
                        // 'fecha_emision' => $key->fecha
                  );
                  $this->db->insert('ecomp_medio_no_efectivo', $data);
                  break;
                  
              case '2':
                  $data = array(
                        'FK_idPago' => $idPago,
                        'FK_idTipo_tarjeta' => $key->tipo_tarjeta,
                        'FK_idBanco' => $key->banco,
                        'nro_doc_cobro' => $key->nro_doc,
                        // 'fecha_emision' => $key->fecha,
                        // 'hora_emision' => $key->hora
                  );
                  $this->db->insert('ecomp_medio_no_efectivo', $data);
                  break;
              case '3':
                  $data = array(
                        'FK_idPago' => $idPago,
                        'FK_idTipo_tarjeta' => $key->tipo_tarjeta,
                        'FK_idBanco' => $key->banco,
                        'nro_doc_cobro' => $key->nro_doc,
                        // 'fecha_emision' => $key->fecha,
                        // 'hora_emision' => $key->hora
                  );
                  $this->db->insert('ecomp_medio_no_efectivo', $data);
                  break;
              default:
                  break;
          }

      }


      $this->db->set('est_cod', $value['flagest']);
      $this->db->where('coe_cod',$idDoc_venta);
      $this->db->update('comprob_emitidos');

      return $idPago;
  }

}
