<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_users() {
        return $this->db->get("users")->result();
    }

    public function get_user($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function get_user_by_id($id) {
        return $this->db->get_where("users", ["id" => $id])->row();
    }

    public function get_user_by_email($email) {
        return $this->db->get_where("users", ["email" => $email])->row();
    }
    

    public function insert_user($data) {
        // Hash password before inserting
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where("id", $id);
        return $this->db->update("users", $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}