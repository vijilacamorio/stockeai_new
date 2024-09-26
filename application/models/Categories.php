<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Categories extends CI_Model {



    public function __construct() {

        parent::__construct();

    }



    //customer List
 public function getcatname($cat_id){

$this->db->select('category_name')->from('product_category')->where('created_by',$this->session->userdata('user_id'))->where('category_name',$cat_id)->where('status', 1);
echo $this->db->last_query();      
$query = $this->db->get()->row();
        return $query->category_name;


 }
    public function category_list() {

        $this->db->select('*');

        $this->db->from('product_category');
        $this->db->where('created_by',$this->session->userdata('user_id'));

        $this->db->where('status', 1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        }

        return false;

    }



    //customer List

    public function category_list_product($id) {

        $this->db->select('*');

        $this->db->from('product_category');

       $this->db->where('created_by',$id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        }

        return true;

    }



    //customer List

    public function category_list_count() {

        $this->db->select('*');

        $this->db->from('product_category');
        $this->db->where('created_by',$this->session->userdata('user_id'));
        $this->db->where('status', 1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->num_rows();

        }

        return false;

    }



  



    //Count customer

    public function category_entry($data) {
 
        $this->db->select('*');

        $this->db->from('product_category');
        $this->db->where('created_by', $data['created_by']);
        $this->db->where('status', 1);

        $this->db->where('category_name', $data['category_name']);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return FALSE;

        } else {

            $this->db->insert('product_category', $data);

            $this->db->select('category_id,category_name');

        $this->db->from('product_category');
        $this->db->where('created_by', $data['created_by']);
        $this->db->where('status', 1);
         $query = $this->db->get();
         if ($query->num_rows() > 0) {

            return $query->result_array();

        }
        }

    }



    //Retrieve customer Edit Data

    public function retrieve_category_editdata($category_id) {

        $this->db->select('*');

        $this->db->from('product_category');

        $this->db->where('created_by',$this->session->userdata('user_id'));

        $this->db->where('category_id', $category_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        }

        return false;

    }



    //Update Categories

    public function update_category($data, $category_id) {

        $this->db->where('category_id', $category_id);

        $this->db->update('product_category', $data);

        return true;

    }



    // Delete customer Item

    public function delete_category($category_id) {

        $this->db->where('category_id', $category_id);

        $this->db->delete('product_category');

        return true;

    }



}

