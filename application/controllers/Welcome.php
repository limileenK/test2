<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('alumni');
	}


	public function getalumni()
	{
		$data['query'] = $this->alumni->getalumni();
		echo "<pre>",
			print_r($data),
			"</pre>";
	}

	public function updatework()
	{
	}
	public function updatecontact()
	{
		$a_id = 3;
		$data = array(

			'fname' => "muangman",
			'password' => "151515"
		);
		// $a_id = $this->input->get("a_id",3);
		$this->alumni->updatecontact($data, $a_id);
	}
	public function regisalumni()
	{
		$data = array(
			'fname' => "siwakorn",
			'lname' => "ramraueng",
			'idcard' => "1100400953886",
			'email' => "614259048@webmail.npru.ac.th",
			'password' => "12345678"
		);
		$this->alumni->regisalumni($data);
	}
}
