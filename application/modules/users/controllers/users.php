<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index() {
		$this->load->view('template');


        if ($this->input->post('submit')) {
            $userid = $this->input->post('userid');
            $passid = $this->input->post('passid');

            $user = $this->users_model->checkLogin($userid, $passid);
            if (!empty($user)) {
                $sessionData['id'] = $user->id;
                $sessionData['userid'] = $user->userid;
                $sessionData['level_user'] = $user->level_user;
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);
                if ($this->session->userdata('level_user') == 1) {
                    redirect('mahasiswa');
                } else {
                    redirect('template');
                }
            }
        }


function logout()
	{
		$this->session->sess_destroy();
        redirect('users/users');
	}



        }

}

