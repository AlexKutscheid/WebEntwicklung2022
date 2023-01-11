<?php

namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model
{
    public function getInfo(): array
    {
        $result = $this->db->query('SELECT * FROM Reiter ORDER BY ID');
        return $result->getResultArray();
    }
}