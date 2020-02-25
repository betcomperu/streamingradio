<?php
/* 
 * Alumno : Alberto Chávez Rodriguez
 * Curso : Computación en el Servidor
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model("Usuario_model");
	
}
	public function index()
	{
		if($this->session->has_userdata('login'))
			{
				redirect('administracion');
			}
			else{
				$this->load->view('admin/Loginv');
			}
		}
	
	public function nologeado()
	{
		$this->load->view('admin/Loginv');
	}

	public function logeo()
	{
		$user=$this->input->post('user');
		$clave=$this->input->post('clave');
		$res=$this->Usuario_model->login($user,md5($clave));
		if(!$res){
			$this->session->set_flashdata("error","Uno de los datos no es válido !!");
			redirect('login', 'refresh');
		}else{
			$data = array(
			'idusuario'=>$res->idusuario,
			'nombre'=>$res->nombre,
			'apellidos'=>$res->apellidos,
			'user'=>$res->user,
			'login'=>TRUE
			
			
			);
			$this->session->set_userdata(($data));
			redirect(base_url()."administracion");
			}
	
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
