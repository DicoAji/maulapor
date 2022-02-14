<?php 

namespace App\Models;

use CodeIgniter\Model;

class MBenda extends Model
{
        protected $table = 'benda';
        
        protected $primaryKey = 'id_benda';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_benda', 'id_jenis_benda','nama_benda', 'lokasi_saat_ini', 'gambar','juru_pemelihara' ];

       

        public function getBenda($id_benda = null){
                
                $db = \Config\Database::connect();
                
                if ($id_benda != null){
                        $query = $db->query("SELECT * from benda where id_benda = ".$id_benda."");
                        
                }
                
                else{
                        $query = $db->query("SELECT benda.id_benda, benda.nama_benda, benda.id_jenis_benda, benda.lokasi_saat_ini, benda.gambar, benda.juru_pemelihara from benda");

                }
                // dd($query);
                return $query;

        }

        


        public function tampiladmin(){
                $db = \Config\Database::connect();

                $builder = $db->table('benda');
                $builder->select('nama_benda, id_benda, jenisbenda.jenis_benda, juru_pemelihara,  benda.gambar, lokasi_saat_ini' );                
                $builder->join('jenisbenda', 'jenisbenda.id_jenis_benda = benda.id_jenis_benda');
                // $builder->join('laporan','laporan.id_benda = benda.id_benda');
                // $builder->join('pelapor','pelapor.nik = laporan.nik');

                // $builder->where('benda.id_benda',$id_benda);

                $query = $builder->get();
                
                return $query;


            
   
        }

        public function tampilkoleksi(){
                $db = \Config\Database::connect();
                $builder = $db->table('benda');

                $builder->select('nama_benda, benda.gambar, lokasi_saat_ini','lokasi_penemuan' , 'juru_pemelihara' );
                $builder->join('laporan','laporan.id_benda = benda.id_benda');
                $query = $builder->get();
                
                return $query;
        }
        
}