<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MenuModel');
    }

    public function index() 
    {
        $recordMenu = $this->MenuModel->insertMenu();
        // echo "<pre>";
        // echo print_r($recordMenu);
        // echo "</pre>";
        $data = array('menu_list' => $recordMenu);
        $this->load->view('list', $data);
    }

    public function detail() 
        {
            $recordDetail = $this->MenuModel->getDetail();
            $data = array('recipe_list' => $recordDetail);
            $this->load->view('detail', $data);
            }
    // public function input()
    // {
    //     $this->load->view('submit');
    // }

    public function insert()
    {
        $menu_name = $this->input->post('menu_name');
        $prep = $this->input->post('prep');
        $cook = $this->input->post('cook');
        $author = $this->input->post('author');

        $NewMenu = array (
            'menu_name' => $menu_name,
            'prep' => $prep,
            'cook' => $cook,
            'author' => $author,
        );

        // echo "<pre>";
        // echo print_r($NewMenu);
        // echo "</pre>";

        $this->MenuModel->submitMenu($NewMenu);
        redirect (base_url('lists'));
    }

    public function edit($id)
    {
        $recordMenu = $this->MenuModel->detailMenu($id);
        $data = array('menu_detail' => $recordMenu);

        // echo "<pre>";
        // echo print_r($recordMenu);
        // echo "</pre>";

        $this->load->view('edit', $data);
    }

    public function update($id)
    {
        $menu_name = $this->input->post('menu_name');
        $prep = $this->input->post('prep');
        $cook = $this->input->post('cook');
        $author = $this->input->post('author');

        $UpdateMenu = array (
            'menu_name' => $menu_name,
            'prep' => $prep,
            'cook' => $cook,
            'author' => $author,
        );

        $this->MenuModel->editMenu($id, $UpdateMenu);
        redirect (base_url('lists'));
    }

    public function delete($id)
    {
        $this->MenuModel->deleteMenu($id);
        redirect (base_url('lists'));
    }
}

?>
