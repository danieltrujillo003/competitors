<?php
class Posts extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Latest posts';

    $data['people'] = $this->post_model->get_people();

    $this->load->view('templates/header', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($slug = NULL)
  {
    $data['person'] = $this->post_model->get_people($slug);

    if (empty($data['person'])) { // empty() function validates wether an array is empty or not
      show_404();
    }

    $data['title'] = $data['person']['nombre'];

    $this->load->view('templates/header', $data);
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }

  public function add()
  {
    $data['title'] = 'Add person';

    $this->fv->set_rules('name', 'Name', 'required');
    $this->fv->set_rules('bio', 'Bio', 'required');
    $this->fv->set_rules('position', 'Position', 'required');

    if ($this->fv->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('posts/add', $data);
      $this->load->view('templates/footer');
    } else {
      $this->post_model->add_post();
      redirect('posts');
    }
  }

  public function delete($id)
  {
    $this->post_model->delete_post($id);
    redirect('posts');
  }
}
