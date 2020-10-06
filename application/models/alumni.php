<?php defined('BASEPATH') or exit('No direct script access allowed');
class Alumni extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getalumni()
	{
		$query = $this->db->get('info');
		return $query->result();
	}
	function updatework()
	{
	}
	function updatecontact($data, $a_id)
	{
		$this->db->where('a_id', $a_id);
		$this->db->update('info', $data);
	}
	function regisalumni($data)
	{
		$this->db->insert('info', $data);
	}
}
