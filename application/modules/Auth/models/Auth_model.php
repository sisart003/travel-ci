<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function validate_user($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('uusers');

        if ($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }

    public function register_user($data) {
        return $this->db->insert('uusers', $data);
    }

    // Fetch all users
    public function get_all_users() {
        return $this->db->get('uusers')->result();
    }

    public function check_login($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('uusers'); // Checking user in 'users' table
    
        if ($query->num_rows() == 1) {
            return $query->row(); // Return user data, including image
        } else {
            return false; // Invalid login
        }
    }

    // Get user by ID
    public function get_user_by_id($id) {
        return $this->db->get_where('uusers', array('id' => $id))->row();
    }

    // Update user
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('uusers', $data);
    }
    
    // Delete user
    public function delete_user($id) {
        $this->db->where('id', $id);
        return $this->db->delete('uusers');
    }
    
}
