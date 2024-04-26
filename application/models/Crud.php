<?php

/**
 * Crud Model
 */
class Crud extends CI_Model
{
    public function __construct() {
        parent::__construct();
        // Load necessary libraries and helpers
        $this->load->database(); // Load the database library
    }

    public function check_credentials($username, $password) {
        // Perform database query to check user credentials
        $query = $this->db->get_where('posts', array('name' => $username, 'password' => $password));
        
        // Check if a user with the provided credentials exists
        if ($query->num_rows() == 1) {
            // User with correct credentials found
            return $query->row();
        } else {
            // User not found or invalid credentials
            return false;
        }
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($table, $data, $id)
    {
        $result = $this->db->where('id', $id)->update($table, $data);
        return $result;
    }

    public function delete($table, $id)
    {
        $result = $this->db->delete($table, ['id' => $id]);
        return $result;
    }

    public function get_records($table)
    {
        $result = $this->db->get($table)->result();
        return $result;
    }
    public function get_posts() {
        // Perform database query to fetch posts
        $query = $this->db->get('posts');

        // Check if any posts are found
        if ($query->num_rows() > 0) {
            // Return the result as an array of objects
            return $query->result();
        } else {
            // No posts found, return an empty array
            return array();
        }
    }

    public function find_record_by_id($table, $id)
    {
        $result = $this->db->get_where($table, ['id' => $id])->row();
        return $result;
    }
}