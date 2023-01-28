<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model
{
    public function getInfo(): array
    {
        $result = $this->db->query('
            SELECT Aufgaben.Beschreibung, Aufgaben.Aufgabenname, Aufgaben.ID, Reiter.Name, Mitglieder.Username
            FROM Aufgaben JOIN Reiter ON Reiter.ID = Aufgaben.ReiterID JOIN Mitglieder ON Mitglieder.ID = Aufgaben.ErstellerID
            
                    
            ');
        return $result->getResultArray();
    }

    public function getInfobyID($id): array
    {
        $result = $this->db->query('
            SELECT Reiter.Name, Aufgaben.Beschreibung, Aufgaben.Aufgabenname, Mitglieder.Username, Aufgaben.ID, Mitglieder.ID
            FROM Reiter JOIN Aufgaben ON Reiter.ID = Aufgaben.ReiterID 
                JOIN AufgabenMitgliederVK ON Aufgaben.ID = AufgabenMitgliederVK.AufgabenID
                JOIN Mitglieder ON Mitglieder.ID = AufgabenMitgliederVK.MitgliederID
            WHERE Aufgaben.ID = '.$id.' ');
        return $result->getResultArray();
    }

    public function deleteAufgabe($aID){
        $this->aufgaben = $this->db->table('Aufgaben');
        $this->aufgaben->where('Aufgaben.Id', $aID);
        return $this->aufgaben->delete();
    }
}