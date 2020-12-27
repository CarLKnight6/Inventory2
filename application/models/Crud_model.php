<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'product_name' => $this->input->post('product_name'),
            'product_price' => $this->input->post('product_price'),
            'product_quantity' => $this->input->post('product_quantity'),
            'product_supplier' => $this->input->post('product_supplier'),
            'product_description' => $this->input->post('product_description')
        );
        $this->db->insert('tbl_products', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM tbl_products');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM tbl_products WHERE `product_id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'product_name' => $this->input->post('product_name'),
            'product_price' => $this->input->post('product_price'),
            'product_quantity' => $this->input->post('product_quantity'),
            'product_supplier' => $this->input->post('product_supplier'),
            'product_description' => $this->input->post('product_description')
        );
        $this->db->where('product_id', $id);
        $this->db->update('tbl_products', $data);
    }

    function deleteData($id) {
        $this->db->where('product_id', $id);
        $this->db->delete('tbl_products');
    }

}
