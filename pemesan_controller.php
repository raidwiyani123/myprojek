<?php defined('BASEPATH') OR exit('No direct sript access allowed');

class pemesan_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pemesan");
		$this->load->library('form_validation');
		$this->load->model("users");
		// if($this->users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["pemesan"] = $this->pemesan->getAll();
		$this->load->view("list_pemesan",$data);
	}
	public function add(){
		$pemesan =$this->pemesan;
		$validation = $this->form_validation;
		$validation->set_rules($pemesan->rules());

		if($validation->run())
		{
			$pemesan->save();
			$this->session->set_flashdata('succses','berhasil disimpan');
		}
		$this->load->view("new_pemesan");
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('pemesan');
		$pemesan = $this->pemesan;
		$validation =$this->form_validation;
		$validation ->set_rules($pemesan->rules());
		if($validation->run())
		{
			$post = $this ->input->post();
			$where = array(
	              'PMSN_ID' => $post['PMSN_ID']
	        );
	        $data = array(
			
	            'RSV_ID' => $post["TM_ID"],
				'GUESS' => $post["KM_ID"],
				
	           
	        );
			
			$pemesan->update($where,$data);
			$this->session->set_flashdata('succses','berhasil disimpan');

		}	
		$data["pemesan"]=$pemesan->getById($id);
		if (!$data["pemesan"]) show_404();
		$this->load->view("edit_pemesan",$data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		if($this->pemesan->delete($id)){
			redirect(site_url('pemesan_controller'));
		}
	}
}
?>