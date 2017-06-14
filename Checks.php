<?php
defined('BASEPATH') or die('');

class Checks extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->checks();
  }
} ?>
