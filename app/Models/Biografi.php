<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biografi extends Model
{
    use HasFactory;
    protected $table = 'biografi';
    protected $guarded = ['id'];

    public function portofolio()
    {
        return $this->belongsTo(portofolio::class,'id','biografi_id');
    }
}
