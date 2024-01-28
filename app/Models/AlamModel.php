<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamModel extends Model
{
    protected $table        = 'tb_alam'; 
    protected $primaryKey   = 'antrian'; 

    protected $useAutoIncrement = true; 
    protected $returnType = "object"; 
    protected $allowedFields = ['antrian', 'jenis', 'nama', 'alamat', 'longlang', 'foto', 'info', 'status'];

}

