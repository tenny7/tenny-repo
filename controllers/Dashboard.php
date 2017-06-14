<?php
defined('BASEPATH') or die('Direct access is not allowed');

class Dashboard extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('dashboard_model');
    $this->is_restricted();
	//$this->is_matched();
	$this->checks();
    $this->_user = $this->session->number;
  }

  public function index() {
    $this->header2('Dashboard');
    $data['name'] = $this->dashboard_model->get_details($this->_user)->name;
    $data['bank'] = $this->dashboard_model->get_details($this->_user)->bank_details;
    $data['received_cash'] = $this->dashboard_model->get_received_cash();
    $data['sent_cash'] = $this->dashboard_model->get_sent_cash();
    $data['bundle'] = $this->dashboard_model->get_details($this->_user)->bundle;
    $data['swift'] = $this->dashboard_model->get_details($this->_user)->swift;
    $data['matches'] = $this->dashboard_model->get_details($this->_user)->matches;
    $data['eligible'] = $this->dashboard_model->get_details($this->_user)->eligible;
    @$donates_to = $this->dashboard_model->get_matched_donation($this->_user)->donates_to;
    //USer to donate to, details
    @$data['d_name'] = $this->dashboard_model->get_matched_to_details($donates_to)->name;
    @$data['d_number'] = $this->dashboard_model->get_matched_to_details($donates_to)->number;
    @$data['d_bank'] = $this->dashboard_model->get_matched_to_details($donates_to)->bank_details;
    @$data['amount'] = $this->dashboard_model->get_matched_donation($this->_user)->amount;
    @$data['d_bundle'] = $this->dashboard_model->get_matched_donation($this->_user)->bundle;
    @$data['d_swift'] = $this->dashboard_model->get_matched_donation($this->_user)->swift;
    @$data['time'] = $this->dashboard_model->get_matched_donation($this->_user)->time;
    $this->load->view('dashboard', $data);
    $this->footer2();
  }

  public function confirm_proof($number) {
    //update donation to confirmed``
    $this->db->query("UPDATE donations SET status='confirmed' WHERE user='$number'");
    //enable user to receive donations
    $this->db->query("UPDATE users SET eligible='true', spill_status='true' WHERE number='$number'");

    $this->session->set_flashdata('cmsg', 'Payment has been confirmed confirmed');
    redirect(site_url('dash'));
  }

  public function reject_proof($number) {
    //delete proof
    $this->db->query("DELETE FROM donations WHERE user='$number'");
    $this->session->set_flashdata('cmsg', '<strong>User has been Purged, You will be rematched to recieve shortly</strong>');
    $this->db->query("UPDATE users SET eligible='false', spill_status='false' WHERE number='$number'");
    
    
    $number = $this->session->number; 	
    $this->db->query("UPDATE users SET eligible='true',matches=matches+1 , spill_status='true' WHERE number='$number'");
    
    redirect(site_url('dash'));
  }
  
    public function recycle() {
    $number = $this->session->number;
    $bundle = $this->dashboard_model->get_details($number)->bundle;
    $swift = $this->dashboard_model->get_details($number)->swift;
    //check user bundle and swift first
    $query = $this->db->query("SELECT * FROM users WHERE number='$number' AND bundle='$bundle' AND swift='$swift' AND matches='0' AND is_blocked='false' AND eligible='true'");
    $result = $query->num_rows();
    if($result > 0) {
    //update swift
    if($swift === 'Swift 1') {
      $this->db->query("UPDATE users SET  eligible='false', spill_status='true', matches='2' WHERE number='$number' AND bundle='$bundle'");
    }
    $this->session->set_flashdata('msg', 'Swift Upgraded, now donate to get eligible');
    redirect(site_url('spillover'));
    $this->load->view('dashboard');
  }
}
 
  
   public function rematch() {
    $number = $this->session->number;
    $bundle = $this->dashboard_model->get_details($number)->bundle;
    $swift = $this->dashboard_model->get_details($number)->swift;
    //check user bundle and swift first
    $query = $this->db->query("SELECT * FROM users WHERE number='$number' AND bundle='$bundle' AND swift='$swift' AND matches!='0' AND is_blocked='false' AND eligible='false'");
    $result = $query->num_rows();
    if($result > 0) {
    //update swift
    if($swift === 'Swift 1') {
      $this->db->query("UPDATE users SET  eligible='false', spill_status='true', matches='2' WHERE number='$number' AND bundle='$bundle'");
    }
    $this->session->set_flashdata('msg', 'Swift Upgraded, now donate to get eligible');
    redirect(site_url('spillover'));
    $this->load->view('dashboard');
  }
}
 
  
  

  public function upgrade_swift() {
    $number = $this->session->number;
    $bundle = $this->dashboard_model->get_details($number)->bundle;
    $swift = $this->dashboard_model->get_details($number)->swift;
    //check user bundle and swift first
    $query = $this->db->query("SELECT * FROM users WHERE number='$number' AND bundle='$bundle' AND swift='$swift' AND matches='0' AND is_blocked='false' AND eligible='false' AND spill_status='false'");
    $result = $query->num_rows();
     
    if($result > 0) {
    //update swift
   
    if($swift == 'Swift 1') {
      $this->db->query("UPDATE users SET swift='Swift 2', eligible='false', spill_status='true', matches='3' WHERE number='$number' AND bundle='$bundle'");
    }

    if($swift == 'Swift 2') {
      $this->db->query("UPDATE users SET swift='Swift 3', eligible='false', spill_status='true', matches='4' WHERE number='$number' AND bundle='$bundle'");
    }

    $this->session->set_flashdata('msg', 'Swift Upgraded, now donate to get eligible');
    redirect(site_url('spillover'));
  }
}

public function upgrade_bundle(){
    $number = $this->session->number;
    $bundle = $this->dashboard_model->get_details($number)->bundle;
    $swift = $this->dashboard_model->get_details($number)->swift;
    //update bundle
    $queryB = $this->db->query("SELECT * FROM users WHERE number='$number' AND bundle='$bundle' AND swift='Swift 3' AND matches='0' AND spill_status='false' AND is_blocked='false'");
    $resultB = $queryB->num_rows();
    if($resultB > 0) {

    if($bundle === 'bundle_one') {
      $this->db->query("UPDATE users SET bundle='bundle_two', swift='Swift 1', eligible='false', spill_status='true', matches='2' WHERE number='$number'");
    } elseif ($bundle === 'bundle_two') {
      $this->db->query("UPDATE users SET bundle='bundle_three', swift='Swift 1', eligible='false', spill_status='true', matches='2' WHERE number='$number'");
    } elseif ($bundle === 'bundle_three') {
      $this->db->query("UPDATE users SET bundle='bundle_four', swift='Swift 1', eligible='false', spill_status='true', matches='2' WHERE number='$number'");
    } elseif($bundle === 'bundle_four') {
      $this->db->query("UPDATE users SET bundle='bundle_one', swift='Swift 1', eligible='false', spill_status='true', matches='2' WHERE number='$number'");
    }

    $this->session->set_flashdata('msg', 'Bundle Upgraded, now donate to get eligible');
    redirect(site_url('spillover'));
  }
}


	public function edit() {
		$header['name'] = $this->dashboard_model->get_details($this->_user)->name;
		$this->header2('Edit Profile', $header);
		$this->form_validation->set_rules('name', 'Full name', 'required|trim');
		$this->form_validation->set_rules('number', 'Phone Number', 'required|trim');
		$this->form_validation->set_rules('location', 'Location', 'required|trim');
		
		if ($this->form_validation->run() == TRUE) {
			
			$this->dashboard_model->edit($this->_user);
			$this->session->set_flashdata('success_msg', 'Modified Successfully');
		}
		$data['details'] = $this->db->get_where('users', array('number' => $this->_user))->row();
		$this->load->view('edit', $data);
		$this->footer2();
	}
	
	public function editbank() {
		$header['name'] = $this->dashboard_model->get_details($this->_user)->name;
		$this->header2('Edit Bank Details', $header);
		$this->form_validation->set_rules('bank_details', 'Bank Details', 'required|trim');
		
		if ($this->form_validation->run() == TRUE) {
			
			$this->dashboard_model->edit_bank($this->_user);
			$this->session->set_flashdata('success_msg', 'Modified Successfully');
		}
		$data['details'] = $this->db->get_where('users', array('number' => $this->_user))->row();
		$this->load->view('editbank', $data);
		$this->footer2();
	}
	
	public function received_donations() {
		$this->header2('Recieved Donations');
		$data['donations'] = $this->dashboard_model->get_received_donations();
		$this->load->view('received_donations', $data);
		$this->footer2();
	}
	
	public function sent_donations() {
		$this->header2('Recieved Donations');
		$data['donations'] = $this->dashboard_model->get_sent_donations();
		$this->load->view('sent_donations', $data);
		$this->footer2();
	}
	
	
} ?>