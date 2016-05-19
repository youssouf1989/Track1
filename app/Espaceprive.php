<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espaceprive extends Model
{
    //


    public $table='espace_prive';

    protected $fillable=['espacePriveID','identifiant','motDePasse'];
    public $timestamps = false;

    protected  $primarykey = 'espacePriveID';

    public function getKeyName(){
        return "espacePriveID";
    }
    public function Client()
    {
        return $this->hasOne('App\Client');
    }
}


