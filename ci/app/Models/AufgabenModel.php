<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model
{
    public function getInfo(): array
    {
        $result = $this->db->query('SELECT * FROM Aufgaben ORDER BY ID');
        return $result->getResultArray();
    }
}