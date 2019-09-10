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

      $query = $this->db->get_where('people', array('slug' => $slug));
      return $query->row_array();

    }
  }