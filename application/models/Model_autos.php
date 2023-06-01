<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_autos extends CI_Model {

	public function obtener_vehiculos(){
        return $this->db->query('SELECT c.id_vehiculo, c.placa, m.descripcion, c.modelo FROM marcas AS m, carros AS c WHERE c.marca=m.id_marca')->result();
    }

    public function obtener_marcas(){
        return $this->db->get('marcas')->result();
    }

    public function guardar_vehiculo($vehiculo){
        $this->db->insert('carros', $vehiculo);
    }

    public function eliminar($id_vehiculo){
        $this->db->where('id_vehiculo', $id_vehiculo);
        $this->db->delete('carros');
    }

    public function obtener_vehiculo($id_vehiculo){
        $this->db->where('id_vehiculo', $id_vehiculo);
        return $this->db->get('carros')->row();
    }

    public function actualizar($id_vehiculo, $vehiculo){
        $this->db->where('id_vehiculo', $id_vehiculo);
        $this->db->update('carros', $vehiculo);
    }
}
