<?php
class Muser extends CI_Model
{
    public $keycrypt;
    public function __construct(){
        parent::__construct();
        $this->keycrypt = $this->config->item("aes_encryption_key");
       
    }

    public function getUser($nickname = ''){
        $this->db->select('*');
        $this->db->from('usuario u');
        $this->db->join('tipo_usuario t', 'u.idTipoUsuario = t.idTipoUsuario',"INNER");
        $this->db->where('UPPER(u.usuario)=UPPER("'.$nickname.'")' );
        $query = $this->db->get();
        return $query->row();
    }

    public function getPermisos($idTipo = ''){
        $this->db->select('p.nombPermiso,p.desPermiso,p.idPermiso_categoria');
        $this->db->from('tipo_usuario t');
        $this->db->join('permiso_list l', 'l.idTipoUsuario = t.idTipoUsuario',"INNER");
        $this->db->join('permiso p', 'l.idPermiso = p.idpermiso',"INNER");
        $this->db->where('t.idTipoUsuario',$idTipo );
        $this->db->order_by('p.orden','ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return ($query->result());
        }
    }

    public function getUsuario($id=""){
        $this->db->select('*,u.password as pass');
        $this->db->from('usuario u');
        // $this->db->join('tipo_usuario t', 'u.idTipoUsuario = t.idTipoUsuario',"INNER");
        $this->db->where('u.idUsuario='.$id);
        
        $query = $this->db->get();
        return $query->row();

        // $query = $this->db->get();
        // if($query->num_rows() > 0 ){
        //     return $query->result();
        // }
    }

    public function update_password($idUser,$password){
        $pass = $this->db->escape($password);
        $this->db->set('password', "AES_ENCRYPT({$pass},'$this->keycrypt')", FALSE);
        $this->db->where( 'idUsuario' ,  $idUser );
        $this->db->update( 'usuario' );
        return $pass;
    }

    // AES_DECRYPT(crypt_str, key_str);
    public function save($username,$password,$register,$tipo_usuario){
        $pass = $this->db->escape($password);
        $this->db->set('usuario', $username);
        $this->db->set('idTipoUsuario', $tipo_usuario);
        $this->db->set('password', "AES_ENCRYPT({$pass},'$this->keycrypt')", FALSE);
        $this->db->set('fecha_registro', $register);
        $this->db->insert("usuario");
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
   

    public function get()
    {
        $query = $this->db->select("idUsuario,
                            AES_DECRYPT(username, '$this->keycrypt') as username,
                            AES_DECRYPT(password, '$this->keycrypt') as password,
                            AES_DECRYPT(fecha_registro, '$this->keycrypt') as fecha_registro")
                            ->from("usuario")
                            ->get();

                            if($query->num_rows() > 0)
                            {
                                return $query->result();
                            }
    }

    public function getUser_aes($value = '')
    {
        $query = $this->db->select("t.idTipoUsuario,u.email,u.idUsuario,u.usuario,
                            u.fecha_registro as fecha_registro")
                            ->from('usuario as u')
                            ->join('tipo_usuario t', 'u.idTipoUsuario = t.idTipoUsuario',"INNER")
                            ->where('UPPER(u.usuario)=UPPER("'.$value['nickname'].'")')
                            ->where("AES_DECRYPT(u.password, '".$this->keycrypt."')='".$value['password']."'")
                            ->get();
                            if($query->num_rows() > 0)
                            {
                                return $query->row();
                            }
    }

    public function validar_clave($pass = '')
    {
        $query = $this->db->select("u.usuario")
                            ->from('usuario as u')
                            ->where("u.idUsuario",$this->session->userdata('idUsu'))
                            ->where("AES_DECRYPT(u.password, '$this->keycrypt')=",$pass)
                            ->get();
                            if($query->num_rows() > 0)
                            {
                                return true;
                            }
                            return false;
    }

    public function cambiar_clave($password){
        $pass = $this->db->escape($password);
        $this->db->set('password', "AES_ENCRYPT({$pass},'$this->keycrypt')", FALSE);
        $this->db->set('fecha_cambio_password', date('Y-m-d H:i:s'));
        $this->db->where( 'idUsuario' ,  $this->session->userdata('idUsu') );
        $this->db->update( 'usuario' );
    }

    public function resetear_clave($data=''){
        $pass = $this->db->escape($data['pass_nueva']);
        $this->db->set('password', "AES_ENCRYPT({$pass},'$this->keycrypt')", FALSE);
        $this->db->set('fecha_cambio_password', date('Y-m-d H:i:s'));
        $this->db->where( 'usuario' ,  $data['usuario'] );
        $this->db->update( 'usuario' );
    }

    public function mostrar_correo_usuario($id='')
    {
        $this->db->select('email');
        $this->db->from('usuario');
        $this->db->where('idUsuario', $id );
        $query = $this->db->get();
             return $query->row();
    }

    public function mostrar_usuario_trabajador($id = '')
    {
        $this->db->select('t.*');
        $this->db->from('usuario u');
        $this->db->join('trabajador t', 'u.idUsuario = t.idUsuario',"INNER");
        $this->db->where('u.idUsuario', $id );
        $query = $this->db->get();
             return $query->row();
    }

    public function validar_permiso($permiso='',$controller='',$idTipo='')
    {//print_r($permiso.''.$controller.''.$idTipo.'');
        $this->db->select('p.nombPermiso,p.desPermiso,p.idPermiso_categoria');
        $this->db->from('tipo_usuario t');
        $this->db->join('permiso_list l', 'l.idTipoUsuario = t.idTipoUsuario',"INNER");
        $this->db->join('permiso p', 'l.idPermiso = p.idpermiso',"INNER");
        $this->db->join('permiso_categoria c', 'c.idPermiso_Categoria = p.idPermiso_categoria',"INNER");
        $this->db->where('t.idTipoUsuario',$idTipo );
        $this->db->where('p.nombPermiso',$permiso );
        $this->db->where('c.nombre',$controller );
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return true;
        }
        else {
            return false;
        }
    }
    
        public function tipousu()
    {
        $this->db->select('*');
        $this->db->from('tipo_usuario');
    
        $query = $this->db->get();
             return $query->result();
    }
    
           public function usu()
    {
        $this->db->select('*');
        $this->db->from('usuario');
    
        $query = $this->db->get();
             return $query->result();
    }
    
             public function guia()
    {
        $this->db->select('*');
        $this->db->from('serie_guia');
    
        $query = $this->db->get();
             return $query->result();
    }
    
                public function comp()
    {
        $this->db->select('*');
        $this->db->from('serie_comprobante');
    
        $query = $this->db->get();
             return $query->result();
    }
                    public function saveguia($id)
    {
      
    $this->db->set('seg_cod', $id['gui1']);
    $this->db->set('idUsuario', $id['usu1']);

    $this->db->insert("serieg_usuario");
    $insert_id = $this->db->insert_id();

   return  $insert_id;
    }
    
                        public function savefac($id)
    {
      
    $this->db->set('sec_cod', $id['com2']);
    $this->db->set('idUsuario', $id['usu2']);

    $this->db->insert("seriecom_usuario");
    $insert_id = $this->db->insert_id();

   return  $insert_id;
    }
    
    public function repusu(){
        $this->db->select('u.usuario,t.descTipoUsu');
        $this->db->from('usuario u');
        $this->db->join('tipo_usuario t', 'u.idTipoUsuario = t.idTipoUsuario',"INNER");
       
        $query = $this->db->get();
        return $query->result();
    }
    
       public function repguia()
    {
        $this->db->select('u.usuario,s.seg_ser');
        $this->db->from('serieg_usuario t');
        $this->db->join('usuario u', 'u.idUsuario = t.idUsuario',"INNER");
        $this->db->join('serie_guia s', 's.seg_cod = t.seg_cod',"INNER");
        $query = $this->db->get();
             return $query->result();
    }
    
      public function repcom()
    {
        $this->db->select('u.usuario,s.sec_ser');
        $this->db->from('seriecom_usuario t');
        $this->db->join('usuario u', 'u.idUsuario = t.idUsuario',"INNER");
        $this->db->join('serie_comprobante s', 's.sec_cod = t.sec_cod',"INNER");
        $query = $this->db->get();
             return $query->result();
    }
    
}

 ?>
