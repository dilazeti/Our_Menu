<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MenuModel extends CI_Model {

        // public function display()
        // {
        //     $query = $this->db->get('menu');
        //     return $query->result();
        // }

        // public function insert($data) 
        // {
        //     return $this->db->insert('menu', $data);
        // }

        public function insertMenu()
        {
            $this->db->select('*');
            $this->db->from('menu');
            $query = $this->db->get();
            return $query->result();
        }

        public function getDetail()
        {
            $this->db->select('*');
            $this->db->from('recipe_details');
            $query = $this->db->get();
            return $query->result();
        }

        public function submitMenu($NewMenu)
        {
            return $this->db->insert('menu',$NewMenu);
        }

        public function editMenu($id, $UpdateMenu)
        {
            $this->db->where('id', $id);
            $this->db->update('menu', $UpdateMenu);
        }

        public function detailMenu($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('menu');
            return $query->row();
        }

        public function deleteMenu($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('menu');
        }
    } 
?>