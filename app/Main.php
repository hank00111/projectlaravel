<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Main extends Model
{
    //    
    protected $primaryKey = 'id';
    protected $fillable = ['id','raberu_ID','year','model', 'HP','CC_ID',];

    /*public function raberu(){

        return $this->hasOne('App\Raberu','foreign_key','index_key');
    }*/
    public function raberu() {
        return $this->belongsTo('App\Raberu');
    }

    public function CC() {
        return $this->belongsTo('App\ccdate');
    }
}
