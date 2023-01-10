<?php
namespace App\Models;
use CodeIgniter\Model;
class MitgliederModel extends Model {

    public function login(){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->select('Password');
        $this->mitglieder->where('Mitglieder.Username', $_POST['username']);

        return $this->mitglieder->get()->getRowArray();
    }
    public function getInfo() :array {
        $result = $this->db->query('SELECT * FROM Mitglieder');
        return $result -> getResultArray();
    }

}