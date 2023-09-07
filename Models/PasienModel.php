<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    // definisi variable
    protected $table      = 'siswa';
    protected $primaryKey = 'idpasien';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['idpasien ', 'nmpasien', 'alpasien', 'tplahir ', 'tglahir', 'penjamin'];
}
