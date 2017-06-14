<?php
defined('BASEPATH') or die('Direct access to script is not allowed');

class Admin extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index() {
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run()) {

				if($this->admin_model->login()) {
					$data = array('email' => $this->input->post('email', true), 'admin_logged' => true);
					$this->session->set_userdata($data);
					redirect(site_url('admin/dashboard'));
				} else {
					$this->session->set_flashdata('error_msg', 'Incorrect Email or Password');
				}
		}

		$this->load->view('admin/index');

	}


	public function dashboard() {
		$this->admin_restricted();
		$this->admin_header('Dashboard');
		$data['total_users'] = $this->db->count_all('users');
		$data['total_donations'] = $this->db->query("SELECT SUM(amount) AS amount_sum FROM donations")->row_array();
		$this->load->view('admin/dash', $data);
		$this->admin_footer();
	}

	public function announcement() {
		$this->admin_restricted();
		$this->admin_header('Announcement');
		$this->form_validation->set_rules('announcement', 'Announcement', 'required|trim');
		if($this->form_validation->run()) {
			$this->admin_model->update_announcement();
			$this->session->set_flashdata('msg', 'Success');
		}
		$g = $this->db->get('annoucement')->row();
		$data['announcement'] = $g->message;
		$this->load->view('admin/announcement', $data);
		$this->admin_footer();
	}

	public function add_user() {
		$this->admin_restricted();
		$this->admin_header('Add User');
		$this->form_validation->set_rules('name', 'Fullname', 'required');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('bundle', 'Bundle', 'required');
		$this->form_validation->set_rules('eligible', 'Eligible', 'required');
		$this->form_validation->set_rules('bank_details', 'Bank Details', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()) {
			$this->load->model('core_model');
			$this->core_model->adminregister();
			$this->session->set_flashdata('msg', 'Success');
		}
		$g = $this->db->get('annoucement')->row();
		$data['announcement'] = $g->message;
		$this->load->view('admin/add_user', $data);
		$this->admin_footer();
	}
	

	public function all_users() {
		$this->admin_restricted();
		$this->admin_header('All User');
		$data['users'] = $this->db->get('users')->result_array();
		$this->load->view('admin/all_users', $data);
		$this->admin_footer();
	}

	public function edit($id) {

		$this->admin_restricted();
		$this->admin_header('Edit User');
		$this->form_validation->set_rules('name', 'Fullname', 'required');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('bundle', 'Bundle', 'required');
		$this->form_validation->set_rules('eligible', 'Eligible', 'required');
		$this->form_validation->set_rules('bank_details', 'Bank Details', 'required');
		$passQ = $this->db->get_where('users', array('id' => $id))->row_array();
		$pass = $passQ['password'];
		if($this->form_validation->run()) {
			$this->admin_model->edit($id, $pass);
			$this->session->set_flashdata('msg', 'Success');
		}
		$data['p'] = $this->db->get_where('users', array('id' => $id))->row_array();
		$data['id'] = $id;
		$this->load->view('admin/edit', $data);
		$this->admin_footer();

}

	public function block($id) {
		$this->db->query("UPDATE users SET is_blocked='true' WHERE id='$id'");
		$this->session->set_flashdata('success_msg', 'User has been blocked');
		redirect(site_url('admin/all_users'));
	}

	public function unblock($id) {
		$this->db->query("UPDATE users SET is_blocked='false' WHERE id='$id'");
		$this->session->set_flashdata('success_msg', 'User has been unblocked');
		redirect(site_url('admin/all_users'));
	}

	public function delete($id) {
		$this->db->query("DELETE FROM users WHERE id='$id'");
		$this->session->set_flashdata('success_msg', 'User has been deleted');
		redirect(site_url('admin/all_users'));
	}

	public function all_donations() {
		$this->admin_restricted();
		$this->admin_header('All Donations');
		$data['donations'] = $this->db->get('donations')->result_array();
		$this->load->view('admin/all_donations', $data);
		$this->admin_footer();
	}

	public function approve($id) {
		$this->db->query("UPDATE donations SET status='confirmed' WHERE id='$id'");
		$this->session->set_flashdata('success_msg', 'Donation has been approved');
		redirect(site_url('admin/all_donations'));
	}

	public function disapprove($id) {
		$this->db->query("UPDATE donations SET status='cancelled' WHERE id='$id'");
		$this->session->set_flashdata('success_msg', 'Donation has been disapproved');
		redirect(site_url('admin/all_donations'));
	}

	public function change_pass() {
		$this->admin_restricted();
		$this->admin_header('Change Details');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ( $this->form_validation->run() ) {
			$email = $this->input->post('email', true);
			$pass = $this->input->post('password', true);
			
			$this->db->query("UPDATE admin SET email='$email', password='$password' WHERE id='1'");
			$this->session->set_flashdata('success_msg', 'Password has been changed');
		}
		$this->load->view('admin/change_pass');
		$this->admin_footer();
	}
}