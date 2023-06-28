<?php
class Mlogin extends CI_Model
{
    //public $keycrypt;
    public function __construct()
    {
    parent::__construct();
//    $this->keycrypt = $this->config->item("aes_encryption_key");
    }

 

    public function login($value = '')
    {
        $query = $this->db->select("per_cod,rol_cod")
                            ->from('persona')
                           ->where('UPPER(per_usu)=UPPER("'.$value['usua'].'")')
                            ->where('per_pas',$value['passw'])
                            ->get();
                            if($query->num_rows() > 0)
                            {
                                return $query->row();
                            }
    }




    
}

 ?>
