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
}