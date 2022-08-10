<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }


    public function scopeSearch($query, array $search)
    {
        if(isset($search['search'] ) ? $search['search'] : false)
        {
            return $query->leftJoin('jurusans', 'students.jurusan_id', '=', 'jurusans.id')->where('jurusan_name', 'like', '%'. $search['search'] .'%');
        }
    }
}