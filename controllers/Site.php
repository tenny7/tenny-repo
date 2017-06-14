<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function index()
	{
		$this->header('Welcome To My Site');
		$data['site_name'] = $this->site_name;
		$this->load->view('home');
		$this->footer();
	}

	public function about() {
		$this->header('About | '.$this->site_name);
		$data['site_name'] = $this->site_name;
		$this->load->view('about');
		$this->footer();
	}

	public function faq() {
		$this->header('FAQ | '.$this->site_name);
		$data['site_name'] = $this->site_name;
		$this->load->view('faq');
		$this->footer();
	}
	public function support() {
		$this->header('Contact Support | '.$this->site_name);
		$data['site_name'] = $this->site_name;
		$this->load->view('support');
		$this->footer();
	}

	public function login() {

		$this->header('Login');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()) {
			if ($this->core_model->login()) {
				$query = $this->db->get_where('users', array('number' => $number));
				$result = $query->row_array();

				$name = $result['name'];
				$bank_details = $result['bank_details'];
				$session_data = array('number' => $_POST['number'], 'loggedin' => TRUE, 'name' => $name);
				$this->session->set_userdata($session_data);

				redirect(site_url('dash'));

			}
			elseif ($this->db->get_where('users', array('number' => $this->input->post('number'), 'is_blocked' => 'true'))->num_rows() > 0) {
				$this->session->set_flashdata('error', 'Account has been blocked, contact suppport');
			} else {
				$this->session->set_flashdata('error', 'Login failed');

			}

			$this->load->view('login');

		} else {

			$this->load->view('login');

		}
	}

	public function register() {
		$this->header('Register | '.$this->site_name);
		$data['site_name'] = $this->site_name;
		$this->form_validation->set_rules('name', 'Fullname', 'required');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('bundle', 'Bundle', 'required');
		$this->form_validation->set_rules('bank_details', 'Bank Details', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[password]');
		if($this->form_validation->run()) {
		$this->core_model->register();
		//register session
		$session_data = array('number' => $_POST['number'], 'loggedin' => TRUE, 'name' => $_POST['name'], 'bank_details' => $_POST['bank_details']);
		$this->session->set_userdata($session_data);
		$this->session->set_flashdata('msg2', 'Successfully registered');
		redirect(site_url('spillover'));
		$this->load->view('register');
	} else {
		$this->load->view('register');
	}
		$this->footer();
	}

	public function logout() {

		$data = array('number', 'loggedin', 'name');
		$this->session->unset_userdata($data);

		redirect('login');
	}

}
