<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Web extends CI_Controller{
    function __construct()
    {

        parent::__construct();
        $this->load->model('Estacion_model');
          $this->load->library("pagination");
    }

    function index()
    {
    	//$params['limit'] = RECORDS_PER_PAGE; 
    	$params['limit'] = 10;
    	$config['num_links'] = 2; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $data['estacion'] = $this->Estacion_model->get_all_estacion($params);
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url();
        $config['total_rows'] = $this->Estacion_model->get_all_estacion_count();
        $this->pagination->initialize($config);
        $data['estaciones']=$this->Estacion_model->nro_estaciones();

        $this->load->view('publico/web',$data);
        

             
     


	}

    
}
