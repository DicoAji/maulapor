<?php

namespace App\Controllers;
use App\Models\MBenda;
use App\Models\MLaporan;
use App\Models\MPelapor;
use App\Models\MJenisBenda;

class Admin extends BaseController


{
    protected $MBenda;
    protected $MLaporan;
    protected $MPelapor;
    protected $MJenisBenda;
    public function __construct(){
        $this->MBenda = new MBenda();
        $this->MLaporan = new MLaporan();
        $this->MPelapor = new MPelapor();
        $this->MJenisBenda = new MJenisBenda();
        $this->db = \Config\Database::connect();
    }
    public function indeks()
    {
        $query = $this->MBenda->tampiladmin();
        $benda = $query->getResultArray();
        $data = [
            'benda' => $benda,
            'title' => 'Beranda | Admin-MauLapor'
        ];
        return view('admin/index',$data);
    }
    public function laporan()
    {
        $query = $this->MLaporan->tampillaporan();
        $laporan = $query->getResultArray();
        $data = [
            'laporan' => $laporan,
            'title' => 'Laporan | Admin-MauLapor'
        ];
        return view('admin/laporan',$data);
    }
    public function tambah()
    {
        $jenisbenda = $this->MJenisBenda->findAll();
        $data = [
            'title' => 'Tambah | Admin-MauLapor',
            'jenisbenda' => $jenisbenda
        ];
        return view('admin/tambah',$data);
    }

    // seeting lagi di myauth
    public function login()
    {
        $data = [
            'title' => 'Login | Admin-MauLapor',
        ];
        return view('admin/login',$data);
    }
    public function lupapassword()
    {
        $data = [
            'title' => 'Lupa  Password | Admin-MauLapor',
            
        ];
        return view('admin/lupapassword',$data);
    }
   
    // add benda
    public function tambahbenda(){
        $image = $this->request->getFile('gambar');
        if ($image->getError() == 4) {
            $namaImage = '';
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/benda');
        }
       

        $this->MBenda->insert([
            'nama_benda' => $this->request->getVar('namabenda'),
            'id_jenis_benda' => $this->request->getVar('jenisbenda'),
            'lokasi_saat_ini' => $this->request->getVar('lokasisaatini'),
            'juru_pemelihara' => $this->request->getVar('jupel'),
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $namaImage
        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('add-msg-barang', 'Data berhasil ditambahkan.');
        return redirect()-> to ('Admin/indeks');
    }
    public function tambahkategori(){
        $this->MJenisBenda->insert([
            'jenis_benda' => $this->request->getVar('jenisbenda'),
           
        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('add-msg-barang', 'Data berhasil ditambahkan.');
        return redirect()-> to ('Admin/tambah');
    }
    // delete
    public function delete($id_benda){

        $this->MBenda->delete($id_benda);
        return redirect()-> to ('Admin/indeks');

    }
    public function hapuslaporan($id_laporan){

        $this->MLaporan->delete($id_laporan);
        return redirect()-> to ('Admin/laporan');

    }
    // ke halaman ubahdata
    public function ubahdata($id_benda){
        $jenisbenda = $this->MJenisBenda->findAll();
        $query = $this->MBenda->tampilubahdata($id_benda);
        $benda = $query->getFirstRow('array');
        // dd($benda);
       $data=[
           'benda' => $benda,
           'jenisbenda' => $jenisbenda,
           'title' => 'Ubah Data  | Admin-MauLapor'
       ];
        return view('/Admin/ubahdata',$data);
        //ke halaman admin uabahdata

    }
    // Update data
    public function update($id_benda){
        $image = $this->request->getFile('gambar');
        $imagelama = $this->request->getVar('gambarlama');
        if ($image->getError() == 4) {
            $namaImage = $imagelama;
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/benda',$namaImage);
            //hapus file lama
            unlink('assets/img/benda/'. $this->request->getVar('gambarlama'));
        }
        $this->MBenda->save([
            'id_benda' => $id_benda,
            'nama_benda' => $this->request->getVar('namabenda'),
            'lokasi_saat_ini' => $this->request->getVar('lokasisaatini'),
            'juru_pemelihara' => $this->request->getVar('jupel'),
            'id_jenis_benda' => $this->request->getVar('jenisbenda'),
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $namaImage
        ]);
        return redirect()-> to ('Admin/indeks');
    }

    // ubah laporan
    public function ubahlaporan($id_laporan){
        $query = $this->MLaporan->ubahstatus($id_laporan);
        $laporan = $query->getFirstRow('array');
       $data=[
           'laporan' => $laporan,
           'title' => 'Ubah Laporan  | Admin-MauLapor'
       ];
        return view('/Admin/ubahstatus',$data);
    }

    // updatestatus
    public function updatestatus($id_laporan){
       
        $this->MLaporan->save([
            'id_laporan' => $id_laporan,
            'nama_pelapor' => $this->request->getVar('pelapor'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()-> to ('Admin/laporan');
    }
}
