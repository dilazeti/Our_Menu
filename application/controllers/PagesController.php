<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {
    public function index() 
    {
        $this->load->model('PagesModel','model');
        $this->model->home();  
        // $this->load->view('home');   
    }

    public function detailrecipe()
    {
        $this->load->model('PagesModel','model');
        $this->model->detail();
        // $this->load->view('detail');
    }

    public function listmenu() 
    {
        $this->load->model('PagesModel','model');
        $this->model->list();
        // $this->load->view('list');
    }

    public function submitmenu() 
    {
        $this->load->model('PagesModel','model');
        $this->model->submit();
        // $this->load->view('submit');
    }

    public function contactus() 
    {
        $this->load->model('PagesModel','model');
        $this->model->contact();
        // $this->load->view('contact.html');
    }
}
?>