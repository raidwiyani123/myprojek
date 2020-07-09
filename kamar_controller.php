<?php defined('BASEPATH') OR exit('No direct sript access allowed');

class kamar_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("kamar");
		$this->load->library('form_validation');
		$this->load->model("users");
		// if($this->users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["kamar"] = $this->kamar->getAll();
		$this->load->view("list_kamar",$data);
	}
	public function add(){
		$kamar =$this->kamar;
		$validation = $this->form_validation;
		$validation->set_rules($kamar->rules());

		if($validation->run())
		{
			$kamar->save();
			$this->session->set_flashdata('succses','berhasil disimpan');
		}
		$this->load->view("new_kamar");
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('kamar');
		$kamar = $this->kamar;
		$validation =$this->form_validation;
		$validation ->set_rules($kamar->rules());
		if($validation->run())
		{
			$post = $this ->input->post();
			$where = array(
	              'KM_ID' => $post['KM_ID']
	        );
	        $data = array(
			
	            'KM_NO' => $post["KM_NO"],
				'KM_LOKASI' => $post["KM_LOKASI"],
				'FASILITAS' => $post["FASILITAS"],
				'HARGA' => $post["HARGA"],
				'KM_KAPASITAS' => $post["KM_KAPASITAS"],
				
				
	           
	        );
			
			$kamar->update($where,$data);
			$this->session->set_flashdata('succses','berhasil disimpan');

		}	
		$data["kamar"]=$kamar->getById($id);
		if (!$data["kamar"]) show_404();
		$this->load->view("edit_kamar",$data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		if($this->kamar->delete($id)){
			redirect(site_url('kamar_controller'));
		}
	}
}
?>