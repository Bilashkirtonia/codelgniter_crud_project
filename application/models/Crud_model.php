<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{
    
    public function AllProduct(){
        $product = $this->db->get('user_data');

        if($product){
            return $product->result();
        }
    }

    public function insertData($data){
        $query = $this->db->insert('user_data' , $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }
    

    public function editData($id){
        $this->db->where('id',$id);
        $query = $this->db->get('user_data');

        if($query){
            return $query->row();
        }
    }


    public function updateData($data,$id){
        $this->db->where('id',$id);
        $query = $this->db->update('user_data',$data);

        if($query){
            return true;
        }else{
            return false;
        }
    }


    public function deleteData($id){
        $this->db->where('id',$id);
        $query = $this->db->delete('user_data');

        if($query){
            return true;
        }else{
            return false;
        }
    }
}