<?php defined('BASEPATH') OR exit('No direct sript access allowed');

class tamu_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("tamu");
		$this->load->library('form_validation');
		$this->load->model("users");
		// if($this->users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["tamu"] = $this->tamu->getAll();
		$this->load->view("list_tamu",$data);
	}
	public function add(){
		$tamu =$this->tamu;
		$validation = $this->form_validation;
		$validation->set_rules($tamu->rules());

		if($validation->run())
		{
			$tamu->save();
			$this->session->set_flashdata('succses','berhasil disimpan');
		}
		$this->load->view("new_tamu");
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('tamu');
		$tamu = $this->tamu;
		$validation =$this->form_validation;
		$validation ->set_rules($tamu->rules());
		if($validation->run())
		{
			$post = $this ->input->post();
			$where = array(
	              'TM_ID' => $post['TM_ID']
	        );
	        $data = array(
			
	            'PG_ID' => $post["PG_ID"],
				'TM_NAMA' => $post["TM_NAMA"],
				'TM_ALAMAT' => $post["TM_ALAMAT"],
				'TM_JK' => $post["TM_JK"],
				'TM_NOTLP' => $post["TM_NOTLP"],
				
	           
	        );
			
			$tamu->update($where,$data);
			$this->session->set_flashdata('succses','berhasil disimpan');

		}	
		$data["tamu"]=$tamu->getById($id);
		if (!$data["tamu"]) show_404();
		$this->load->view("edit_tamu",$data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		if($this->tamu->delete($id)){
			redirect(site_url('tamu_controller'));
		}
	}
}
?>