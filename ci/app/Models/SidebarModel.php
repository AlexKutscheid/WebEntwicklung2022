<?php
namespace App\Models;
use CodeIgniter\Model;
class SidebarModel extends Model {

    public function getInfo() :array {
        $result = $this->db->query('SELECT * FROM Mitglieder');
        return $result -> getResultArray();
    }

}