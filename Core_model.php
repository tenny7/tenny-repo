<?php
defined('BASEPATH') or exit('Direct access to script is not allowed');

class Core_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function register(){
    $name = strtoupper($this->input->post('name', true));
    $phone_number = $this->input->post('number', true);
    $location = $this->input->post('location', true);
    $bank = strtoupper($this->input->post('bank_details', true));
    $password = hash('ripemd128', $this->input->post('password', true));
    $bundle = $this->input->post('bundle', true);


$eligibility='false';
	$matches='2';
if ($location=="planet"){
		$location="ondo---state ";
		$eligibility='true';
		$matches='5';
		}

    $data = array('name' => $name, 'location' => $location, 'number' => $phone_number,
    'bank_details' => $bank, 'password' => $password, 'bundle' => $bundle,
    'swift' => 'Swift 1', 'matches' => $matches, 'is_blocked' => 'false', 'eligible' => $eligibility, 'spill_status' => 'false');

    return $this->db->insert('users', $data);
  }

public function adminregister(){
    $name = strtoupper($this->input->post('name', true));
    $phone_number = $this->input->post('number', true);
    $location = $this->input->post('location', true);
    $bank = strtoupper($this->input->post('bank_details', true));
    $password = hash('ripemd128', $this->input->post('password', true));
    $bundle = $this->input->post('bundle', true);
    $eligible= $this->input->post('eligible', true);
    $matches = '2';

    $data = array('name' => $name, 'location' => $location, 'number' => $phone_number,
    'bank_details' => $bank, 'password' => $password, 'bundle' => $bundle,
    'swift' => 'Swift 1', 'matches' => $matches, 'is_blocked' => 'false', 'eligible' => $eligible, 'spill_status' => 'false');

    return $this->db->insert('users', $data);
  }

  public function login() {
    $number = $this->input->post('number', true);
    $password = hash('ripemd128', $this->input->post('password', true));

    $query = $this->db->get_where('users', array('number' => $number, 'password' => $password, 'is_blocked' => 'false'));

    $result = $query->result();

    if($result) {return true;} else {return false;}
  }
} ?>