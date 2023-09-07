<?php

namespace App\Models;

use CodeIgniter\Model;

class UserMasterModel extends Model
{
    protected $table   = 'user_master';
}

class Modelpasien extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('siswa')->get();
    }

    function simpandata($data)
    {
        return $this->db->table('siswa')->insert($data);
    }

    function hapusdata($idpasien)
    {
        return $this->db->table('siswa')->delete(['idpasien' => $idpasien]);
    }

    function ambildata($idpasien)
    {
        return $this->db->table('siswa')->getWhere(['idpasien' => $idpasien]);
    }

    function editdata($data, $idpasien)
    {
        return $this->db->table('siswa')->update($data, ['idpasien' => $idpasien]);
    }
}
