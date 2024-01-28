<?php

namespace App\Controllers;

use App\models\PrestasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Files\UploadedFile;

class Prestasi extends BaseController
{
    protected $prestasi;
    function __construct()
    {
        $this->prestasi = new PrestasiModel();
    }
    public function index()
    {
        // $session = Session();
        // $wisata = new WisataModel();
        // //    $data['wisatax'] = $wisata->where('status', 'published')->findAll();
        // $data['wisatax'] = $wisata->findAll();
        // //mengirim data ke view
        // if($session->get('userlevelid')==1)
        // echo view('wisata-admin', $data);
        // else
        // echo view('wisata-user', $data);
        $session = Session();
        $prestasi = new PrestasiModel();
        $data['prestasix'] = $prestasi->findAll();
        $prestasix = $prestasi->findAll();
        //mengirim data ke view
    
            // echo view('wisata-user', $data);
            return view('prestasi-new', ['data' => $data, 'prestasix' => $prestasix]);
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $prestasi = new PrestasiModel();
            $dt = $prestasi->find($id);
            if (!empty($dt)) {
                $data['form'] = $dt;
                return view('prestasi-add', $data);
            }
        }
        return view('prestasi-add');
    }
    public function add()
    {
        $prestasi = new PrestasiModel();
        $data['prestasix'] = $prestasi->findAll();
        // $data['gambar'] = 'testing-from-controller';
        return view('prestasi-add', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'id_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ID Prestasi harus diisi!'
                ]
            ],
            'nama_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Prestasi harus diisi!'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        //ambil gambar
        if (empty($this->request->getFile('gambar')->getName())) {
            $namaGambar =  $this->request->getVar('old_gambar');
        } else {
            $fileGambar = $this->request->getFile('gambar');
            //pindahkan file ke folder img
            $fileGambar->move('dist/img/upl');
            //ambil nama file
            $namaGambar =  $fileGambar->getName();
            //  dd($fileGambar);
        }


        $this->prestasi->insert([
            'id_prestasi' => $this->request->getVar('id_prestasi'),
            'nama_prestasi' => $this->request->getVar('nama_prestasi'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Data wisata berhasil ditambahkan !');
        return redirect()->to('/prestasi');
    }
    function edit($id)
    {
        $dataPrestasi = $this->prestasi->find($id);
        if (empty($dataPrestasi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi tidak ditemukan !');
        }
        $data['prestasi'] = $dataPrestasi;
        return view('prestasi-edit', $data);
    }
    public function saveEdit($id)
    {
        if (!$this->validate([
            'nama_prestasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Wisata harus diisi!'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        //ambil gambar
        if (empty($this->request->getFile('gambar')->getName())) {
            $namaGambar =  $this->request->getVar('old_gambar');
        } else {
            $fileGambar = $this->request->getFile('gambar');
            //pindahkan file ke folder img
            $fileGambar->move('dist/img/upl');
            //ambil nama file
            $namaGambar =  $fileGambar->getName();
            //  dd($fileGambar);
        }
        $this->prestasi->update($id, [
            'nama_prestasi' => $this->request->getVar('nama_prestasi'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Data wisata berhasil diperbaikin !');
        return redirect()->to('/prestasi');
    }
    function delete($id)
    {
        $dataPrestasi = $this->prestasi->find($id);
        if (empty($dataPrestasi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data wisata tidak ditemukan !');
        }
        $this->prestasi->delete($id);
        session()->setFlashdata('message', 'Berhasil menghapus data wisata !');
        return redirect()->to('/prestasi');
    }
}