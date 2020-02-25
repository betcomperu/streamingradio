<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Estacion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estacion_model');
          $this->load->library("pagination");
    } 

    /*
     * Listing of estacion
     */
    function index()
    {
        $params['limit'] = 10; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('estacion/index?');
        $config['total_rows'] = $this->Estacion_model->get_all_estacion_count();
        $this->pagination->initialize($config);

        $data['estacion'] = $this->Estacion_model->get_all_estacion($params);
         $web['estacion'] = $this->Estacion_model->get_all_estacion($params);
        
        $data['estaciones']=$this->Estacion_model->nro_estaciones();
        $data['_view'] = 'estacion/index';
        $this->load->view('layouts/main',$data);
        
    
    }

    /*
     * Adding a new estacion
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'categoria' => $this->input->post('categoria'),
				'nombrestacion' => $this->input->post('nombrestacion'),
				'detallestacion' => $this->input->post('detallestacion'),
				'url' => $this->input->post('url'),
				'pais' => $this->input->post('pais'),
            );
            
            $estacion_id = $this->Estacion_model->add_estacion($params);
            redirect('estacion/index');
        }
        else
        {            
            $data['_view'] = 'estacion/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a estacion
     */
    function edit($idestacion)
    {   
        // check if the estacion exists before trying to edit it
        $data['estacion'] = $this->Estacion_model->get_estacion($idestacion);
        
        if(isset($data['estacion']['idestacion']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'categoria' => $this->input->post('categoria'),
					'nombrestacion' => $this->input->post('nombrestacion'),
					'detallestacion' => $this->input->post('detallestacion'),
					'url' => $this->input->post('url'),
					'pais' => $this->input->post('pais'),
                );

                $this->Estacion_model->update_estacion($idestacion,$params);            
                redirect('estacion/index');
            }
            else
            {
                $data['_view'] = 'estacion/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The estacion you are trying to edit does not exist.');
    } 

    /*
     * Deleting estacion
     */
    function remove($idestacion)
    {
        $estacion = $this->Estacion_model->get_estacion($idestacion);

        // check if the estacion exists before trying to delete it
        if(isset($estacion['idestacion']))
        {
            $this->Estacion_model->delete_estacion($idestacion);
            redirect('estacion/index');
        }
        else
            show_error('The estacion you are trying to delete does not exist.');
    }


    
}
