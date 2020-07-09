<?php defined('BASEPATH') OR exit('No direct sript access allowed');

class reservasi_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("reservasi");
		$this->load->library('form_validation');
		$this->load->model("users");
		// if($this->users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["reservasi"] = $this->reservasi->getAll();
		$this->load->view("list_reservasi",$data);
	}
	public function add(){
		$reservasi =$this->reservasi;
		$validation = $this->form_validation;
		$validation->set_rules($reservasi->rules());

		if($validation->run())
		{
			$reservasi->save();
			$this->session->set_flashdata('succses','berhasil disimpan');
		}
		$this->load->view("new_reservasi");
	}
	public function edit($id=null)
	{
		if(!isset($id)) redirect('reservasi');
		$reservasi = $this->reservasi;
		$validation =$this->form_validation;
		$validation ->set_rules($reservasi->rules());
		if($validation->run())
		{
			$post = $this ->input->post();
			$where = array(
	              'RSV_ID' => $post['RSV_ID']
	        );
	        $data = array(
			
	            'TM_ID' => $post["TM_ID"],
				'KM_ID' => $post["KM_ID"],
				'TGL_CHECKIN' => $post["TGL_CHECKIN"],
				'TGL_CHECKOUT' => $post["TGL_CHECKOUT"],
                'TGL_PESAN' => $post["TGL_PESAN"],
                'LAMA_MENGINAP' => $post["LAMA_MENGINAP"],
				
				
	           
	        );
			
			$reservasi->update($where,$data);
			$this->session->set_flashdata('succses','berhasil disimpan');

		}	
		$data["reservasi"]=$reservasi->getById($id);
		if (!$data["reservasi"]) show_404();
		$this->load->view("edit_reservasi",$data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		if($this->reservasi->delete($id)){
			redirect(site_url('reservasi_controller'));
		}
	}
}
?>