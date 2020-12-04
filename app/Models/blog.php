<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class blog extends Model
{    
    protected $table='blogs';
    protected $primaryKey = 'id';
    const CREATED_AT = 'publication_date';
    protected $dateFormat = 'Y-m-d';
    protected $connection = 'mysql';
    
    public $fillable = [
        'id_user',
        'title',
        'description'
    ];
    
    protected $casts = [
        'id_user' =>'integer',
        'title' => 'string',
        'description' => 'string'
    ];

    public function usuario(){
        return $this->belongsTo('app\Models\User', 'id', 'id_user');
    }
    
    public function scopeActualUser($query){
        return $query->where('id_user','=',Auth::user()->id);
    }
}