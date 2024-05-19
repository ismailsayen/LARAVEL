<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['created_at','updated_at'];
    protected $fillable=[
        'name',
        'email',
        'password',
        'bio',
        'image'
    ];
    public function getRouteKeyName()
    {
        return 'id';
    }
     // pour les affecté une image par defaut au cas ou l'image est null
     public function getImageAttribute($value){
        return $value??'profiles/default.png';
    }

}
