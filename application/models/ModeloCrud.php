<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloCrud extends CI_Model 
{

	public function getAllData()

		{
			return $this->db->get_where('notas',array('estado' => 1))->result();
		}

	public function createNote()
		{

			$datos = array
				(
					'titulo' => $this->input->post('titulo'),
					'contenido' => $this->input->post('contenido')
				);

			$this->db->insert('notas',$datos);
		}
		
	public function getRow($id_notas)
		{
			return $this->db->get_where('notas', array('id_notas' => $id_notas))->row();
		}

	public function updateRow($id_notas)
		{
			$datos = array
				(
					'titulo' => $this->input->post('titulo'),
					'contenido' => $this->input->post('contenido')
				);

			$this->db->where('id_notas',$id_notas);
			$this->db->update('notas',$datos);
		}
	public function deleteRow($id_notas)
		{
			$this->db->set('estado',0);
			$this->db->where('id_notas',$id_notas);
			$this->db->update('notas');
		}

}
