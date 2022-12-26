<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $guarded = ['id'];

    protected $with = ['sekolah','project','biografi'];

    public function sekolah()
    {
        return $this->hasOne(Sekolah::class,'sekolah_id','id');
    }

    public function biografi()
    {
        return $this->hasOne(Biografi::class,'biografi_id','id');
    }

    public function project()
    {
        return $this->hasMany(Project::class,'project_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
