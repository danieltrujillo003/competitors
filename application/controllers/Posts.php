<?php 
  class Posts extends CI_Controller {
    public function index() {
      $data['title'] = 'Latest posts';

      $data['people'] = $this->post_model->get_people();

      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer');
    }
  }