<?php

class Mseguimiento extends CI_Model
{
        
    public function tipdoc(){
        $this->db->select('tid_cod,
                            tid_des');
        $this->db->from('tip_docu');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }
    }

    public function serie($id=''){
        //print_r($id);
        //-- para poner unico distinto
        $this->db->distinct();
        //
        $this->db->select('serie_guia.seg_cod,
                            seg_ser');
        $this->db->from('serieg_usuario,serie_guia');
        //   $this->db->where('idUsuario',$id);
        $this->db->where('serie_guia.seg_cod=serieg_usuario.seg_cod');
        $this->db->where('est_cod',1);
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }

    }

    public function ciudad(){
        //print_r($id);
        $this->db->select('* ');
        $this->db->from('ciudad');
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }
    }

    public function provincia($id=''){
        //print_r($id);
        $this->db->select('* ');
        $this->db->from('provincia');
        $this->db->where('ciu_cod',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }

    }

    public function distrito($id=''){
        //print_r($id);
        $this->db->select('* ');
        $this->db->from('distrito');
        $this->db->where('prv_cod',$id);
        $query = $this->db->get();
            if($query->num_rows() > 0 ){
                return $query->result();
            }
    }  

    public function busguia($id=''){
        //print_r($id);
        $this->db->select('gui_cod,cl.cli_raz,concat(dp.dis_des,"-",p.prv_des,"-",c.ciu_des) inicio,concat(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) destino,g.est_cod');
        $this->db->from('guia g,distrito dp,distrito dl,provincia p,provincia p2,ciudad c,ciudad c2,cliente cl');
        $this->db->where('g.dip_cod=dp.dis_cod');
        $this->db->where('dl.dis_cod=g.dil_cod');
        $this->db->where('dp.prv_cod=p.prv_cod');
        $this->db->where('dl.prv_cod=p2.prv_cod');
        $this->db->where('p.ciu_cod=c.ciu_cod');
        $this->db->where('p2.ciu_cod=c2.ciu_cod');
        $this->db->where('cl.cli_cod=g.clp_cod');
        $this->db->where('g.est_cod != 5');
        $this->db->where('g.seg_cod',$id['serg']);
        $this->db->where('g.gui_num',$id['ndo']);

        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }

    }

    public function veriguimani($id=''){
        //print_r($id);
        $this->db->select( 'gui_cod,
                            cl.cli_raz,
                            CONCAT(dp.dis_des,"-",p.prv_des,"-",c.ciu_des) partida,
                            CONCAT(dl.dis_des,"-",p2.prv_des,"-",c2.ciu_des) llegada,
                            DATE(g.fech_ingre) as fechaingreso,
                            TIME(g.hora_ingre) as horaingreso,
                            DATE(g.fech_vuelo) as fechavuelo,
                            TIME(g.hora_vuelo) as horavuelo,
                            DATE(g.fech_llegada) as fechallegada,
                            TIME(g.hora_llegada) as horallegada,
                            gui_tot,
                            if(gui_vto>gui_pto,gui_vto,gui_pto) gui_pto,
                            gui_cto,
                            serg.seg_ser,
                            cll.cli_raz as destinatario,
                            g.gui_num,
                            g.est_cod');
        $this->db->from('guia g,
                        distrito dp,
                        distrito dl,
                        provincia p,
                        provincia p2,
                        ciudad c,
                        ciudad c2,
                        cliente cl,
                        cliente cll,
                        serie_guia serg');
        $this->db->where('g.dip_cod=dp.dis_cod');
        $this->db->where('dl.dis_cod=g.dil_cod');
        $this->db->where('dp.prv_cod=p.prv_cod');
        $this->db->where('dl.prv_cod=p2.prv_cod');
        $this->db->where('p.ciu_cod=c.ciu_cod');
        $this->db->where('p2.ciu_cod=c2.ciu_cod');
        $this->db->where('cl.cli_cod=g.clp_cod');
        $this->db->where('cll.cli_cod=g.cll_cod');
        $this->db->where('g.seg_cod=serg.seg_cod');
        $this->db->where('g.est_cod != 5');        
       
        

        if($id['tipocli'] == 1){
            if($id['tipdoc']!=0){
                $this->db->where('cl.tid_cod',$id['tipdoc']);
            }
            if($id['numRuc']!=""){
                $this->db->where('cl.cli_nud',$id['numRuc']);
            }
            if($id['numDoc']!=""){
                $this->db->where('cl.cli_nud',$id['numDoc']);
            }
        }else if($id['tipocli'] == 2){
            if($id['tipdoc']!=0){
                $this->db->where('cll.tid_cod',$id['tipdoc']);
            }
            if($id['numRuc']!=""){
                $this->db->where('cll.cli_nud',$id['numRuc']);
            }
            if($id['numDoc']!=""){
                $this->db->where('cll.cli_nud',$id['numDoc']);
            }
        }       

        if($id['flag'] == 2){
            $this->db->where('g.seg_cod',$id['ser']);
            $this->db->where('g.gui_num',$id['gui']);
        }else{
           $this->db->where('g.gui_fec',$id['fecgui']);
            if($id['ser']!=""){
                $this->db->where('g.seg_cod',$id['ser']);
            }
            
        }

        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }
    }

    public function mostrar_detmanif($id=''){
        // print_r($id);
        $this->db->select('detalle_guia.*,med_des');
        $this->db->from('detalle_guia,medida');
        $this->db->where('detalle_guia.med_cod=medida.med_cod');
        $this->db->where('gui_cod',$id);   
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result();
        }
    }
}