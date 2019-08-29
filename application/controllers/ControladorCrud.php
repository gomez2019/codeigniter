<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorCrud extends CI_Controller {

	public function index()
	{
		$datos['notas'] = $this->ModeloCrud->getAllData();
		$this->load->view('includes/header');
		$this->load->view('VistaCrud',$datos);		
		$this->load->view('includes/footer');

	}

	public function create()
	{
		$this->ModeloCrud->createNote();
		redirect('ControladorCrud'); 
	}

	public function edit($id_notas)
	{
		$datos['notas'] = $this->ModeloCrud->getRow($id_notas);
		$this->load->view('includes/header');
		$this->load->view('VistaEdit',$datos);		
		$this->load->view('includes/footer');	

	}

	public function update($id_notas)
	{
		$this->ModeloCrud->updateRow($id_notas);
		redirect('ControladorCrud');
	}

	public function delete($id_notas)
	{
		$this->ModeloCrud->deleteRow($id_notas);
		redirect('ControladorCrud');
	}


}
