<?php 

namespace App\Models;

use CodeIgniter\Model;

class MLaporan extends Model
{
        protected $table = 'laporan';
        
        protected $primaryKey = 'id_laporan';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_laporan','id_benda','nik','lokasi_penemuan', 'tanggal_penemuan', 'status','gambar'];

        public function getLaporan($id_laporan = null){
                
                $db = \Config\Database::connect();
                
                if ($id_laporan != null){
                        $query = $db->query("SELECT * from laporan where id_lapporan = ".$id_laporan."");   
                }
                
                else{
                        $query = $db->query("SELECT laporan.id, laporan.tanggal_laporan, laporan.tanggal_penemuan, laporan.lokasi_penemuan, laporan.status, laporan.gambar from laporan");
                }
                // dd($query);
                return $query;

        }

        public function tampillaporan(){
                $db = \Config\Database::connect();

                $builder = $db->table('laporan');
                $builder->select('pelapor.nama_pelapor, id_laporan, pelapor.nik, pelapor.alamat_pelapor,lokasi_penemuan, tanggal_penemuan, status, pelapor.nomor_hubung, laporan.gambar');
                
                $builder->join('pelapor','pelapor.nik = laporan.nik');
                $query = $builder->get();
                
                return $query;
   
        }

        public function ubahstatus($id_laporan){
                $db = \Config\Database::connect();

                $builder = $db->table('laporan');
                $builder->select('id_laporan, pelapor.nik, laporan.gambar,  pelapor.nama_pelapor, status');

                $builder->join('pelapor','pelapor.nik = laporan.nik');
                $builder->where('laporan.id_laporan ', $id_laporan);
                $query = $builder->get();
                
                return $query;
        }


        
        
}