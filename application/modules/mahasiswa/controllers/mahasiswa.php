<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends MX_Controller
{
    public function __construct()
            {
                    parent::__construct();
                    $this->load->helper('url');
                    $this->load->model('mdl_mahasiswa');
            }
    public function index(){
        if(isset($_GET['grid']))
			echo $this->mdl_mahasiswa->getJson();
		else
			$this->tampil();


    }

    public function create()
	{
		if(!isset($_POST))
			show_404();

		if($this->mdl_mahasiswa->create())
			echo json_encode(array('success'=>true));
		else
			echo json_encode(array('msg'=>'Gagal memasukkan data'));
	}

        public function update($nim=null)
	{
		if(!isset($_POST))
			show_404();

		if($this->mdl_mahasiswa->update($nim))
			echo json_encode(array('success'=>true));
		else
			echo json_encode(array('msg'=>'Gagal mengubah data'));
	}
        public function delete()
	{
		if(!isset($_POST))
			show_404();

		$nim = intval(addslashes($_POST['nim']));
		if($this->mdl_mahasiswa->delete($nim))
			echo json_encode(array('success'=>true));
		else
			echo json_encode(array('msg'=>'Gagal menghapus data'));
	}

	public function tampil(){

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('add_view');
		$this->load->view('template/footer');
	}

}

