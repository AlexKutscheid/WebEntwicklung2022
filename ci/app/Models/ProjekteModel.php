<?php
namespace App\Models;
use CodeIgniter\Model;
class ProjekteModel extends Model {

    public function getProjects() :array {
        $result = $this->db->query('SELECT * FROM Projekte');
        return $result -> getResultArray();
    }
    public function insertNewProject(){
        $this->projects = $this->db->table('Projekte');
        var_dump($_SESSION);
        $this->projects->insert(array('Name' => $_POST['Projektname'], 'Beschreibung' => $_POST['Projektbeschreibung'], 'ErstellerID' => $_SESSION['sessUserID']));
    }


}