<?php
/**
 *
 */
class mpermiso extends CI_Model
{

  public function mostrarPermisoCat($idTipUsu="")
  {
    $this->db->select('pc.descripcion,pc.nombre,pc.idPermiso_categoria');
    $this->db->distinct();
    $this->db->from('permiso p');
    $this->db->join('permiso_categoria pc', 'pc.idPermiso_categoria = p.idPermiso_categoria');
    $this->db->join('permiso_list lp', 'lp.idPermiso = p.idPermiso');
    $this->db->where('lp.idTipoUsuario', $idTipUsu);
    $this->db->order_by('pc.descripcion','ASC');
    $query=$this->db->get();
    if($query->num_rows() > 0 )
    {
         return $query->result();
    }
  }

  public function mostrar_by_tipo_usuario($id='')
  {
      $this->db->select('c.nombre as controlador,c.descripcion as p_nivel,p.nombPermiso as funcion,p.desPermiso as u_nivel,p.nivel,c.icono');
      $this->db->from('permiso as p');
      $this->db->join('permiso_categoria as c', 'c.idPermiso_categoria=p.idPermiso_categoria', 'inner');
      $this->db->join('permiso_list as l', 'l.idPermiso = p.idPermiso', 'inner');
      $this->db->where('l.idTipoUsuario', $id);
      $this->db->order_by('c.descripcion ASC, p.orden,p.nivel');
      $query=$this->db->get();
      if($query->num_rows() > 0 )
      {
           return $query->result();
      }
  }
}

 ?>
