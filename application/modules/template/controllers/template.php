
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller
{
    function __construct() {
    parent::__construct();
    }

     function index(){

     	$this->load->view('layouts');
     }


    function data_mahasiswa(){
        $this->load->view('layouts');
    }
}
