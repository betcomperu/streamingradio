<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Administracion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estacion_model');
        
    }

    function index()
    {
    	if ($this->session->userdata('login')) {
    		$data['estaciones']=$this->Estacion_model->nro_estaciones();
            $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    	}else{
    		$this->load->view('admin/Loginv');
    	}
        

    }
}
