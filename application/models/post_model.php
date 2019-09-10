<?php
  class Post_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }
    public function get_people($slug = FALSE) {
      if ($slug === FALSE) {
        $query = $this->db->get('people');
        return $query->result_array();
      }
  }