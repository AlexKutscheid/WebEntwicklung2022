<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model
{
    public function getInfo(): array
    {
        $result = $this->db->query('
            SELECT Reiter.Name, Aufgaben.Beschreibung, Aufgaben.Aufgabenname, Mitglieder.Username
            FROM Reiter JOIN Aufgaben ON Reiter.ID = Aufgaben.ReiterID 
                JOIN AufgabenMitgliederVK ON Aufgaben.ID = AufgabenMitgliederVK.AufgabenID
                JOIN Mitglieder ON Mitglieder.ID = AufgabenMitgliederVK.MitgliederID
                    
            ');
        return $result->getResultArray();
    }
}