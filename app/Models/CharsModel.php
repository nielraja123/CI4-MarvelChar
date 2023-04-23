<?php 
namespace App\Models;

use CodeIgniter\Model;

class CharsModel extends Model{
    protected $table = 'chars';
    protected $useTimeStamps = true;

    public function getChars($slug = false){
        if ($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug'=>$slug])->first();
    }
}
?>