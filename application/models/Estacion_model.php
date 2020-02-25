<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Estacion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get estacion by idestacion
     */
    function get_estacion($idestacion)
    {
        return $this->db->get_where('estacion',array('idestacion'=>$idestacion))->row_array();
    }
    
    /*
     * Get all estacion count
     */
    function get_all_estacion_count()
    {
        $this->db->from('estacion');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all estacion
     */
    function get_all_estacion($params = array())
    {
        $this->db->order_by('idestacion', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('estacion')->result_array();
    }
        
    /*
     * function to add new estacion
     */
    function add_estacion($params)
    {
        $this->db->insert('estacion',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function para actualizar estacion
     */
    function update_estacion($idestacion,$params)
    {
        $this->db->where('idestacion',$idestacion);
        return $this->db->update('estacion',$params);
    }
    
    /*
     * function para eliminar estacion
     */
    function delete_estacion($idestacion)
    {
        return $this->db->delete('estacion',array('idestacion'=>$idestacion));
    }
    function nro_estaciones()
    {
       // $sql = "SELECT COUNT(*) FROM estacion";

        
        $query = $this->db->count_all('estacion');
        return $query;

    }
    function buscarestacion()
    {
        $query=$this->db->get('estacion');
        return $query->result();
    }
}
