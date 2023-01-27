<?php
namespace App\Models;
use CodeIgniter\Model;
class MitgliederModel extends Model {

    public function getUser(){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->select('*');
        $this->mitglieder->where('Mitglieder.Username', $_POST['username']);

        return $this->mitglieder->get()->getRowArray();
    }

    public function getUserByID($id){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->select('*');
        $this->mitglieder->where('Mitglieder.ID', $id);

        return $this->mitglieder->get()->getRowArray();
    }
    public function getInfo() :array {
        $result = $this->db->query('SELECT * FROM Mitglieder');
        return $result -> getResultArray();
    }

    public function sessionData(){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->select('Username');
        $this->mitglieder->select('ID');
        $this->mitglieder->select('EMail');
        $this->mitglieder->where('Mitglieder.Username', $_POST['username']);
        return $this->mitglieder->get()->getResultArray();
    }

    public function insertNewUser(){
        $this->mitglieder = $this->db->table('Mitglieder');
        $password = $_POST['passwort'];
        $hashedpw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
        $this->mitglieder->insert(array('Username' => $_POST['username'], 'Password' => $hashedpw, 'EMail' => $_POST['email']));
    }

    public function deleteUser ($id){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->where('Mitglieder.Id', $id);
        return $this->mitglieder->delete();
    }

    public function editUser($username, $email, $passwordNew, $id){
        $this->mitglieder = $this->db->table('Mitglieder');
        $this->mitglieder->where('Mitglieder.ID', $id);


        if( $passwordNew!= null && $email != null){
            $password = $passwordNew;
            $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
            return $this->mitglieder->update(array('Username' => $username, 'EMail' => $email, 'Password' => $hashed_pw));
        }
        else if($passwordNew ==null){
            return $this->mitglieder->update(array('Username' => $username, 'EMail' => $email));
        }
        else if($email==null){
            $password = $passwordNew;
            $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
            return $this->mitglieder->update(array('Username' => $username, 'Password' => $hashed_pw));
        }
    }
}