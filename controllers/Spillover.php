<?php
defined('BASEPATH') or die('Error');

class Spillover extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->is_restricted();
    $this->load->library('session');
  }
  public function index() {
    $this->load->model('Spillover_model');
    $this->header('Spillover');
    $this->Spillover_model->match_user();
    $data['msg'] = $this->session->flashdata('msg');
    $this->load->view('spillover', $data);
    $this->footer();
  }
} ?>
