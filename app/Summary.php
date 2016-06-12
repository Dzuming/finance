<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
       protected $table = 'Summary';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
