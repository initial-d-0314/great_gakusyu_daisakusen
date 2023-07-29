<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function  getByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at',"DESC")->limit($limit_count)->get();
        #orderbyでソート、limitで件数を制限(以降は捨てる)
    }
    
    public function getPaginateByLimit(int $limit_count=10){
        // updated_atで降順に並べたあと、limitで件数制限をかけてページネーション
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
