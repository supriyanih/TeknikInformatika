<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends MY_Model
{
	public function __construct() {
        parent::__construct();
        parent::set_tabel('user', 'id');
    }

    public function checkLogin($username, $password) {
        return parent::get_by(array(
                    'userid' => $username,
                    'passid' => $password,
        ));
    }

}
