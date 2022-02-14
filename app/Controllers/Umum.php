<?php

namespace App\Controllers;

use App\Models\MBenda;
use App\Models\MLaporan;
use App\Models\MPelapor;


class Umum extends BaseController
{
    protected $MBenda;
    protected $MLaporan;
    protected $MPelapor;



    public function __construct(){
        $this->MBenda = new MBenda();
        $this->db = \Config\Database::connect();

        $this->MLaporan = new MLaporan();
        $this->db = \Config\Database::connect();
        
        $this->MPelapor = new MPelapor();
        $this->db = \Config\Database::connect();
    }


    public function indexumum()
    {
        // $query = $this->MBenda->getBenda();
        $data = [
            'title' => 'Beranda-MauLapor',
            
        ];
        return view('public/index',$data);
    }


    public function koleksi()
    {
        $query = $this->MBenda->getBenda();
        // $query = $this->MBenda->tampilkoleksi();
        $benda = $query->getResultArray();
        $data = [
            'benda' => $benda,
            'title' => 'Koleksi-MauLapor',
            
        ];
        return view('public/koleksi',$data);
    }
    public function laporkan()
    {
        $data = [
            'title' => 'Laporkan-MauLapor',
            
        ];
        return view('public/laporkan',$data);
    }



    // detail
    public function detail($id){

        $benda = $this->MBenda->find($id);
        // dd($pegawai);
       $data=[
           'benda' => $benda
       ];
        return view('/public/modal', $data);

    }



    // tambah laporan
    public function tambahlaporan(){

        // $db =  \Config\Database::connect();

        $image = $this->request->getFile('gambar');
        if ($image->getError() == 4) {
            $namaImage = '';
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/gambarlaporan');
        }
     
        $this->MPelapor->insert([
            'nama_pelapor'  => $this->request->getVar('nama'),
            'nik'  => $this->request->getVar('nik'),
            'alamat_pelapor'  => $this->request->getVar('alamat'),
            'nomor_hubung'  => $this->request->getVar('nomor'),
        ]);

      

        $this->MLaporan->save([
            'lokasi_penemuan' => $this->request->getVar('lokasi'),
            'nik'  => $this->request->getVar('nik'),
            'tanggal_penemuan' => $this->request->getVar('tanggal'),
            'status' => 'belum',
            'gambar' => $namaImage

        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
        return redirect()-> to ('Umum/laporkan');
    }



    
}
