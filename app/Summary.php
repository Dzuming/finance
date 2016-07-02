<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
       protected $table = 'Summary';
       protected $fillable = [
        'Zysk',
        'Strata',
        'Opis',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
