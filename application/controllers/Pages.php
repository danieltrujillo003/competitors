<?php 
  class Pages extends CI_Controller {
    public function view($page = 'home') {
      if(!page_exists(APP_PATH.'views/pages/'.$page.'.php')) {
        show_404();
      }

      $data['title'] = ucfirst($page);

      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    }
  }