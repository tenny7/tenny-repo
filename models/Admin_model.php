<?php
defined('BASEPATH') or die();

class Admin_model extends CI_Model {

      public function __construct() {
        parent::__construct();
        $this->load->database();
      }

      public function login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        

        $query = $this->db->get_where('admin', array('email' => $email, 'password' => $password))->num_rows();

        if($query > 0) {
          return true;
        } else {
          return false;
        }
      }

      public function update_announcement() {
        $annoucement = $this->input->post('announcement', true);
        return $this->db->query("UPDATE annoucement SET message='$annoucement' WHERE id='1'");
      }

      public function edit($id, $pass) {
        $name = strtoupper($this->input->post('name', true));
        $phone_number = $this->input->post('number', true);
        $location = $this->input->post('location', true);
        $eligible = $this->input->post('eligible', true);
        $bank = strtoupper($this->input->post('bank_details', true));
        if(empty($this->input->post('password', true))) {
          $password = $pass;
        } else {
        $password = hash('ripemd128', $this->input->post('password', true));
        }
        $bundle = $this->input->post('bundle', true);


        $data = array('
        name' => $name,
        'number' => $phone_number,
        'location' => $location,
        'eligible' => $eligible,
        'bank_details' => $bank,
        'password' => $password,
        'bundle' => $bundle
      );
        return $this->db->query("UPDATE users SET name='$name', location='$location', eligible='$eligible', bank_details='$bank', password='$password', bundle='$bundle' WHERE id='$id'");
      }
} ?>