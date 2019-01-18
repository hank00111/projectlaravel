<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Raberu extends Model
{
    //    
    /*public  function main(){
        return $this->belongsTo('App\Main','foreign_key');
    }*/
    public function main() {
        return $this->hasMany('App\Main');
    }
}
