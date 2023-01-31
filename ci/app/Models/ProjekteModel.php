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
        return $this->projects->insert(array('Name' => $_POST['Projektname'], 'Beschreibung' => $_POST['Projektbeschreibung'], 'ErstellerID' => $_SESSION['sessUserID']));
    }

    public function editProject($pName, $pDesc, $pCreatorID, $pID){

        $this->projekte = $this->db->table('Projekte');
        $this->projekte->where('Projekte.ID', $pID);

        if( $pName!= null && $pCreatorID != null){

            return $this->projekte->update(array('Name' => $pName, 'Beschreibung' => $pDesc, 'ErstellerID' => $pCreatorID));
        }
    }

    public function getProjectByName($pName){
        $this->projekte = $this->db->table('Projekte');
        $this->projekte->select('*');
        $this->projekte->where('Projekte.Name', $pName);

        return $this->projekte->get()->getRowArray();
    }

    public function deleteProject($pID, $pName, $pDesc, $pCreat){
        $this->projekte = $this->db->table('Projekte');
        $this->projekte->where('Projekte.ID', $pID);
        return $this->projekte->delete();
    }

}