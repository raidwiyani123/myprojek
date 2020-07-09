<?php defined('BASEPATH') OR exit('No direct sript access allowed');

class pegawai_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pegawai");
		$this->load->library('form_validation');
		$this->load->model("users");
		// if($this->users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["pegawai"] = $this->pegawai->getAll();
		$this->load->view("list_pegawai",$data);
	}
	public function add(){
		$pegawai =$this->pegawai;
		$validation = $this->form_validation;
		$validation->set_rules($pegawai->rules());

		if($validation->run())
		{
			$pegawai->save();
			$this->session->set_flashdata('succses','berhasil disimpan');
		}
		$this->load->view("new_pegawai");
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('pegawai');
		$pegawai = $this->pegawai;
		$validation =$this->form_validation;
		$validation ->set_rules($pegawai->rules());
		if($validation->run())
		{
			$post = $this ->input->post();
			$where = array(
	              'PG_ID' => $post['PG_ID']
	        );
	        $data = array(
			
	            'PG_NAMA' => $post["PG_NAMA"],
				'PG_JENISKELAMIN' => $post["PG_JENISKELAMIN"],
				'PG_ALAMAT' => $post["PG_ALAMAT"],
				'PG_TLP' => $post["PG_TLP"],
				
				
	           
	        );
			
			$pegawai->update($where,$data);
			$this->session->set_flashdata('succses','berhasil disimpan');

		}	
		$data["pegawai"]=$pegawai->getById($id);
		if (!$data["pegawai"]) show_404();
		$this->load->view("edit_pegawai",$data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		if($this->pegawai->delete($id)){
			redirect(site_url('pegawai_controller'));
		}
	}
}
?>