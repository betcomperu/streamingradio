<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    } 

    /*
     * Listing of usuario
     */
    function index()
    {
        $data['usuario'] = $this->Usuario_model->get_all_usuario();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'apellidos' => $this->input->post('apellidos'),
				'email' => $this->input->post('email'),
				'user' => $this->input->post('user'),
				'clave' => md5($this->input->post('clave')),
				'pais' => $this->input->post('pais'),
				'foto' => $this->input->post('foto'),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['_view'] = 'usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($idusuario)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($idusuario);
        
        if(isset($data['usuario']['idusuario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'apellidos' => $this->input->post('apellidos'),
					'email' => $this->input->post('email'),
					'user' => $this->input->post('user'),
					'clave' => md5($this->input->post('clave')),
					'pais' => $this->input->post('pais'),
					'foto' => $this->input->post('foto'),
                );

                $this->Usuario_model->update_usuario($idusuario,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($idusuario)
    {
        $usuario = $this->Usuario_model->get_usuario($idusuario);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['idusuario']))
        {
            $this->Usuario_model->delete_usuario($idusuario);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
