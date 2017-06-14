<?php

defined('BASEPATH') or die('Direct access not allowed');

class Spillover_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->user = $this->session->number;
    $this->bank_details = $this->session->bank_detail;
  }

  public function bundle_tables($bundle) {

    if($bundle === 'Bundle One 5k') {
      return 'bundle_one';
    } elseif ($bundle === 'Bundle Two 10k') {
      return 'bundle_two';
    } elseif ($bundle === 'Bundle Three 25k') {
      return 'bundle_three';
    } elseif ($bundle === 'Bundle Four 50k') {
      return 'bundle_four';
    }
  }


  public function match_user() {

    //lets validate some ish

    $check_q = $this->db->query("SELECT user FROM donations WHERE user='$this->user' AND status='pending' LIMIT 1");

    if($check_q->num_rows() > 0) {
      $this->session->set_flashdata('msg', 'You had already been matched');
	    redirect(site_url('dash'));
    }

    //lets get the bundle first
    $queryD = $this->db->get_where('users', array('number' => $this->user));
    $resultD = $queryD->row_array();
    $bundleD = $resultD['bundle'];
    $swiftD = $resultD['swift'];
    $name=$resultD['name'];
    $check_d = $this->db->query("SELECT * FROM donations WHERE user='$this->user' AND bundle='$bundleD' AND swift='$swiftD' AND status='pending' OR status='confirmed' LIMIT 1")->num_rows();
    //lets get the bundle first
    $query = $this->db->get_where('users', array('number' => $this->user));
    $result = $query->row_array();
    $bundle = $result['bundle'];
    $bundle_swift = $result['swift'];
    
   
    
    //now fetch the number of match for a swift
    $b_query = $this->db->query("SELECT * FROM $bundle WHERE package_name='$bundle_swift'");
    $b_result = $b_query->row_array();

    $swift_match = $b_result['matches'];

    $swift_money = $b_result['package_requires'];

    //now search for user's available for donation

    $donation_query = $this->db->query("SELECT * FROM users WHERE NOT(number = '$this->user') AND matches != '0' AND bundle='$bundle' AND swift='$bundle_swift' AND eligible='true' AND is_blocked='false' ORDER BY id  ASC LIMIT 1");
    $donation_result = $donation_query->row_array();

    $swift = $donation_result['swift'];

    if ($donation_result > 0) {
		//count the match of that user to donate to
		$count = $donation_result['matches'] - 1;
		//update the count
		$this->db->query("UPDATE users SET matches='$count' WHERE number='{$donation_result['number']}'");
        $data = array(
        'user' => $this->user,
        'donates_to' => $donation_result['number'],
        'bundle' => $bundle,
        'swift' => $swift,
        'amount' => $swift_money,
        'status' => 'Pending',
        'name'=>$name
      );
      $this->db->insert('donations', $data);
      $this->db->query("UPDATE users SET spill_status='false' WHERE number='$this->user'");
      $this->session->set_flashdata('msg', "<h3 style='color:white;'>You have been matched to pay {$donation_result['name']}, <br> a sum of {$swift_money} <br> Bank details: {$donation_result['bank_details']}, <br> Go to your dashboard to see more.");
    } else {
      $this->session->set_flashdata('msg', 'There are no empty slots, try again in few minutes');
    }
    
  }
}