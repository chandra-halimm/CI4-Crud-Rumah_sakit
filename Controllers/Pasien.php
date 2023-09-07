<?php

namespace App\Controllers;

use App\Models\Modelpasien;

class Pasien extends BaseController
{
    public function index()
    {

        $pasien = model('App\Models\PasienModel');

        $data['pasien'] = $pasien->orderBy('idpasien', 'desc')->findAll();

        $psn = new Modelpasien();
        $data = [
            'tampildata' => $psn->tampildata()->getResult()
        ];

        echo view('viewtampilpasien', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo view('viewformtambah');
    }

    public function simpandata()
    {
        if ($this->request->getMethod() === 'post') {
            $pasien = model('App\Models\PasienModel');
            $data = [
                'nmpasien' => $this->request->getPost('nmpasien'),
                'alpasien' => $this->request->getPost('alpasien'),
                'tplahir' => $this->request->getPost('tplahir'),
                'tglahir' => $this->request->getPost('tglahir'),
                'penjamin' => $this->request->getPost('penjamin'),

            ];

            $pasien->Insert($data);
            return redirect()->to(base_url() . '/Pasien');
        }
    }


    function hapus()
    {
        $uri = service('uri');
        $idpasien = $uri->getSegment('3');

        $psn = new Modelpasien();

        $psn->hapusdata($idpasien);

        return redirect()->to('/pasien/index');
    }

    function formedit()
    {
        helper('form');
        $uri = service('uri');
        $idpasien = $uri->getSegment('3');

        $psn = new Modelpasien();

        $ambildata = $psn->ambildata($idpasien);

        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();
            $data = [
                'idpasien' => $idpasien,
                'nmpasien' => $row->nmpasien,
                'alpasien' => $row->alpasien,
                'tplahir' => $row->tplahir,
                'tglahir' => $row->tglahir,
                'penjamin' => $row->penjamin,
            ];

            echo view('viewfromedit', $data);
        }
    }

    function updatedata()
    {
        $idpasien = $this->request->getPost('idpasien');
        $data = [
            'nmpasien' => $this->request->getPost('nmpasien'),
            'alpasien' => $this->request->getPost('alpasien'),
            'tplahir' => $this->request->getPost('tplahir'),
            'tglahir' => $this->request->getPost('tglahir'),
            'penjamin' => $this->request->getPost('penjamin'),

        ];

        $psn = new Modelpasien();

        $simpan = $psn->editdata($data, $idpasien);

        if ($simpan) {
            return redirect()->to('/pasien/index');
        }
    }
}
