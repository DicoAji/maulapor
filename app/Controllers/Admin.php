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
    public function index()
    {
        $query = $this->MBenda->tampiladmin();
        $benda = $query->getResultArray();
        // dd($benda);
        
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
        // dd($laporan);
       
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
            'gambar' => $namaImage

    
        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
        return redirect()-> to ('Admin/index');
    }
    // delete
    public function delete($id_benda){

        $this->MBenda->delete($id_benda);
        return redirect()-> to ('Admin/index');

    }
    public function hapuslaporan($id_laporan){

        $this->MLaporan->delete($id_laporan);
        return redirect()-> to ('Admin/laporan');

    }
    // ke halaman ubahdata
    public function ubahdata($id){

        // $jenisbenda = $this->MJenisBenda->findAll();

        $benda = $this->MBenda->find($id);
        // dd($pegawai);
       $data=[
           'benda' => $benda,
        //    'jenisbenda' => $jenisbenda,
           'title' => 'Ubah Data  | Admin-MauLapor'
       ];
        return view('/Admin/ubahdata',$data);
        //ke halaman admin uabahdata

    }
    // Update data
    public function update($id){
        $image = $this->request->getFile('gambar');
        $imagelama = $this->request->getVar('gambarlama');
        // dd($imagelama);
        if ($image->getError() == 4) {
            $namaImage = $imagelama;
            // $namaImage = $this->request->getVar('gambarlama');
        } else {
            $namaImage = $image->getName();
            $image->move('assets/img/benda',$namaImage);
            //hapus file lama
            unlink('assets/img/benda/'. $this->request->getVar('gambarlama'));
        }

        $this->MBenda->save([
            'id' => $id,
            'nama_benda' => $this->request->getVar('namabenda'),
            'penemu' => $this->request->getVar('penemu'),
            'lokasi_penemuan' => $this->request->getVar('lokasipenemuan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_penemuan' => $this->request->getVar('tanggalpenemuan'),
            'alamat' => $this->request->getVar('alamat'),
            'gambar' => $namaImage
        ]);
        // $this->MBenda->update($id,$data);
        return redirect()-> to ('Admin/index');
    }


    // ubah laporan
    public function ubahlaporan($id_laporan){
        $query = $this->MLaporan->ubahstatus($id_laporan);
        $laporan = $query->getFirstRow('array');
        // dd($laporan);


        // $laporan = $this->MLaporan->find($id_laporan);
        // dd($laporan);
       $data=[
           'laporan' => $laporan,
           'title' => 'Ubah Laporan  | Admin-MauLapor'
       ];
        return view('/Admin/ubahstatus',$data);
        //ke halaman admin uabahdata

    }

    // updatestatus
    public function updatestatus($id_laporan){
       
        $this->MLaporan->save([
            'id_laporan' => $id_laporan,
            'nama_pelapor' => $this->request->getVar('pelapor'),
            'status' => $this->request->getVar('status')
        ]);
        // $this->MBenda->update($id,$data);
        return redirect()-> to ('Admin/laporan');
    }



    
}
