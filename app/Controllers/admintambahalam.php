<?php

namespace App\Controllers;

use App\Models\AlamModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class admintambahalam extends BaseController
{
    protected $admintambahalam;
    function __construct()
    {
        $this->admintambahalam = new AlamModel();
    }

    public function index()
    {
        $admintambahalam = new AlamModel();

        $data['tambahalamx'] = $admintambahalam->where('status', 'published')->findAll();
        $data['tambahalamx'] = $admintambahalam->findAll();
        //mengirim data ke view
        echo view('admintambahalam', $data);
    }
    public function process()
    {
        // if (!$this->validate([
        //     'antrian' => [
        //         'rules' => 'required|min_length[4]|max_length[20]|is_unique[tb_sedekah.antrian]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 20 karakter',
        //             'is_unique' => 'Antrian sudah digunakan sebelumnya',
        //         ]
        //     ],
        //     'nama' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 100 karakter',
        //         ]
        //     ],
        //     'alamat' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 100 karakter',
        //         ]
        //     ],
        //     'telpon' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 100 karakter',
        //         ]
        //     ],
        //     'jenis' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 100 karakter',

        //         ]
        //     ],
        //     'lokasi' => [
        //         'rules' => 'required|min_length[4]|max_length[100]',
        //         'errors' => [
        //             'required' => '{field} Harus diisi',
        //             'min_length' => '{field} Minimal 4 karakter',
        //             'max_length' => '{field} Maksimal 100 karakter',
        //         ]
        //     ],
        //     'berat' => [


        //     ],

        //     'keterangan' => [


        //     ],


        // ])) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // }
        $users = new AlamModel();
        $users->insert([
            'antrian' => $this->request->getVar('antrian'),
            'jenis' => $this->request->getVar('jenis'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'longlang' => $this->request->getVar('longlang'),
            'info' => $this->request->getVar('info'),
            'foto' => $this->request->getVar('foto'),
            'status' => $this->request->getVar('status')

        ]);
        return redirect()->to('/dataalam');
    }
}
