<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class PagesModel extends CI_Model {

  public function home() 
  {
    $this->load->model('PagesModel');
    $this->load->view('home');
  }

  public function list() 
  {
    $this->load->model('PagesModel');
    $this->load->view('list');
  }

  public function detail() 
  {
    $this->load->model('PagesModel'); 
    $this->load->view('detail');
  }

  public function submit() 
  {
    $this->load->model('PagesModel'); 
    $this->load->view('submit');
  }
   public function contact() 
  {
    $this->load->model('PagesModel'); 
    $this->load->view('contact.html');
  }

}

?>
