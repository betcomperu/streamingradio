<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {

    	if($this->session->has_userdata('idestacion'))
			{
				redirect('administracion','refresh');
			}
			else{
				redirect('login');
			}
    		//$data['view'] = 'admin/dashboard/index';
			//$this->load->view('dashboard', $data);
			
		



/*

    	if (isset('$this->session->userdata('nombre');')) {
    		$data['_view'] = 'dashboard';
            $this->load->view('layouts/main',$data);
    	}else{
    		echo "no se puede ingresar a este apartado";
    	}*/

    }
}
