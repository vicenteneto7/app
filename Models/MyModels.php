<?php
namespace App\Models;
use CodeIgniter\Model;
use App\Config\Database;

class MyModel extends Model{
    protected $db;
    protected $input;
    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->input = \Config\Services::request();
    }
    public function getData($id = false) {
        if($id) {
            return $this->db->table('products')->where('id',$id)->get()->getResult();
        } else {
            return $this->db->table('products')->get()->getResult();
        }
    }
    public function insertData() {
        $data = array(
            'fullName'=>$this->input->getPost('fullName'),
            'email'=>$this->input->getPost('email'),
            'country'=>$this->input->getPost('country'),
            'state'=>$this->input->getPost('state')
        );
        $this->db->table('user-list')->insert($data);
        return $this->getData();
    }
}