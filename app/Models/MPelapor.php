<?php 

namespace App\Models;

use CodeIgniter\Model;

class MPelapor extends Model
{
        protected $table = 'pelapor';
        
        protected $primaryKey = 'nik';  
        // protected $useAutoIncrement = true;  
        protected $allowedFields = ['nik','nama_pelapor', 'alamat_pelapor','nomor_hubung'];

        // public function getPelapor($nik = null){
                
        //         $db = \Config\Database::connect();
                
        //         if ($nik != null){
        //                 $query = $db->query("SELECT * from pelapor where nik = ".$nik."");
                        
        //         }
                
        //         else{
        //                 $query = $db->query("SELECT pelapor.nik, pelapor.nama_pelapor, pelapor.alamat_pelapor, pelapor.nomor_hubung from pelapor");

        //         }
        //         // dd($query);
        //         return $query;

        // }
        
}