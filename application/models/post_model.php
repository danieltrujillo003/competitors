<?php
class Post_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_people($slug = FALSE)
  {
    if ($slug === FALSE) {
      $this->db->order_by('position', 'ASC'); // Could be also 'DESC' and 'RANDOM'
      $query = $this->db->get('people');
      return $query->result_array();
    }

    $query = $this->db->get_where('people', array('slug' => $slug));
    return $query->row_array();
  }

  public function add_post()
  {
    $slug = url_title($this->input->post('name'));

    $data = array(
      'nombre' => $this->input->post('name'),
      'slug' => $slug,
      'bio' => $this->input->post('bio'),
      'position' => $this->input->post('position'),
    );

    return $this->db->insert('people', $data);
  }

  public function delete_post($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('people');
    return true;
  }
}
