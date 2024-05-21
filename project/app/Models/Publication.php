<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates=['created_at','updated_at'];

    protected $fillable=[
        'title',
        'description',
        'image',
        'id_profile'
    ];

    public function profile(){
        return $this-> belongsTo(Profile::class,'id_profile');
    }
}
