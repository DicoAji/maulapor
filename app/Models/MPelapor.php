<?php 

namespace App\Models;

use CodeIgniter\Model;

class MPelapor extends Model
{
        protected $table = 'pelapor';
        
        protected $primaryKey = 'nik';  
        // protected $useAutoIncrement = true;  
        protected $allowedFields = ['nik','nama_pelapor', 'alamat_pelapor','nomor_hubung'];  
}