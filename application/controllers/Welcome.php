<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Model_autos');
    }
	public function index()
	{
		$data = array('vehiculos'=> $this->Model_autos->obtener_vehiculos());
		$this->load->view('listaAutos',$data);
	}

	public function cargar_formulario(){
		$data = array('vehiculos'=> $this->Model_autos->obtener_marcas());
		$this->load->view('formulario_Nuevo_Vehiculo',$data);
	}

	public function guardar(){
		
		$vehiculo['placa'] = $_POST['placa'];
		$vehiculo['marca'] = $_POST['marca'];
		$vehiculo['modelo'] = $_POST['modelo'];
		$this->Model_autos->guardar_vehiculo($vehiculo);
		redirect(base_url());
	}

	public function eliminar($id_vehiculo){
		$this->Model_autos->eliminar($id_vehiculo);
		redirect(base_url());
	}

	public function formulario_Actualizar($id_vehiculo){
		$data = array('vehiculo'=> $this->Model_autos->obtener_vehiculo($id_vehiculo), 'vehiculos'=> $this->Model_autos->obtener_marcas());
		$this->load->view('formularioActualizar',$data);
	}

	public function actualizar(){
		$id_vehiculo=$_POST['id'];
		$vehiculo['placa'] = $_POST['placa'];
		$vehiculo['marca'] = $_POST['marca'];
		$vehiculo['modelo'] = $_POST['modelo'];
		$this->Model_autos->actualizar($id_vehiculo,$vehiculo);
		redirect(base_url());

	}
}
