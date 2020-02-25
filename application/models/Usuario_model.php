<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Aqui la funcion para el logeo
     */
    public function login($user,$clave)
    {
        
        $this->db->where("user",$user);
        $this->db->where("clave",$clave);
        $resultados=$this->db->get("usuario");
        if($resultados->num_rows()>0){
            
            return $resultados->row();
        }else{
            return false;
        }
    }
    /*
     * Aqui traemos por el id al usuario
     */
    function get_usuario($idusuario)
    {
        return $this->db->get_where('usuario',array('idusuario'=>$idusuario))->row_array();
    }
        
    /*
     * Get all usuario
     */
    function get_all_usuario()
    {
        $this->db->order_by('idusuario', 'desc');
        return $this->db->get('usuario')->result_array();
    }
        
    /*
     * function para agregar nuevo usuario
     */
    function add_usuario($params)
    {
        $this->db->insert('usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update usuario
     */
    function update_usuario($idusuario,$params)
    {
        $this->db->where('idusuario',$idusuario);
        return $this->db->update('usuario',$params);
    }
    
    /*
     * function to delete usuario
     */
    function delete_usuario($idusuario)
    {
        return $this->db->delete('usuario',array('idusuario'=>$idusuario));
    }
}
