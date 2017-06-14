<?php
defined('BASEPATH') or die('');

class Dashboard_model extends CI_Model {
  public function __construct(){
    parent::__construct();
  }

  public function get_announcement(){
     $query = $this->db->get('annoucement');
     $result = $query->row();
     return $result->message;
  }

  public function get_details($number) {
    return $this->db->get_where('users', array('number' => $number))->row();
  }

  public function get_matched_donation($number) {
    return $this->db->get_where('donations', array('user' => $number, 'status' => 'pending'))->row();
  }

  public function get_matched_to_details($number) {
    return $this->db->get_where('users', array('number' => $number,))->row();
  }
  
  //delete or purge user from database
   public function purge_user($number) {
    //delete user
    if ($number!=FALSE){
    $this->db->query("DELETE FROM users WHERE user='$number'");
    $this->session->set_flashdata('cmsg', 'user has been purged, you will be rematched shortly');
    redirect(site_url('dash'));
    }
  }
  
  public function upload_proof($user, $donates_to, $bundle, $swift, $amount) {
	  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$error = array();
		$file = $_FILES['proof']['name'];
		$validextensions = array("jpeg", "jpg", "png"); //Extensions which are allowed
    $ext = explode('.', basename($file)); //explode file name from dot(.)
        $file_extension = end($ext); //store extensions in the variable
        $target_dir = "proofs/";
        $target_file = $target_dir . basename(str_replace(' ', '-', $file));
        if(empty($file)) {
            $error[] = 'No file was selected';
        } else {
        if(!in_array($file_extension, $validextensions)) {
            $error[] = 'File extension is invalid';
        }
        }

		if(count($error) == 0) {
			if(!move_uploaded_file($_FILES['proof']['tmp_name'], $target_file)) { die("File not uploaded"); }
			$this->db->insert('proofs', array('user' => $user, 'donates_to' => $donates_to, 'proof' => $file, 'bundle' => $bundle, 'swift' => $swift, 'amount' => $amount));
			echo '<div class="alert alert-success"> Proof uploaded, awaiting confirmation, call '.$donates_to.' to get confirmed quickly</div>';
	  } else {
		  foreach ($error as $errors) {
			  echo '<div class="alert alert-danger">'.$errors.'</div>';
  }
 }
}
}

public function check_proof($user, $donates_to) {
			return $this->db->get_where('proofs', array('user' => $user, 'donates_to' => $donates_to))->num_rows();
}

public function get_received_cash() {
  $number = $this->session->number;
  $query = $this->db->query("SELECT SUM(amount) AS amount_sum FROM donations WHERE donates_to='$number' AND status='confirmed'")->row_array();
  return $query['amount_sum'];

}

public function get_sent_cash() {
  $number = $this->session->number;
  $query = $this->db->query("SELECT SUM(amount) AS amount_sum FROM donations WHERE user='$number' AND status='confirmed'")->row_array();
  return $query['amount_sum'];
}

public function edit($user) {
	$name = strtoupper($this->input->post('name', true));
	$number = $this->input->post('number', true);
	$location = $this->input->post('location', true);
	return $this->db->query("UPDATE users SET name='$name', number='$number', location='$location' WHERE number='$number'");
	$this->session->set_userdata(array('number' => $number));
}

public function edit_bank($user) {
	$bank = strtoupper($this->input->post('bank_details', true));
	return $this->db->query("UPDATE users SET bank_details='$bank' WHERE number='$user'");
}

public function get_received_donations() {
	$number = $this->session->number;
	return $this->db->get_where('donations', array('donates_to' => $number))->result_array();
}

public function get_sent_donations() {
	$number = $this->session->number;
	return $this->db->get_where('donations', array('user' => $number))->result_array();
}
} ?>