<?php

namespace App\Models;
use App\Models\Dosen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "dosens";

    public function mhs(){
        return $this->hasMany(User::class,'id_dosen');
    }
}
