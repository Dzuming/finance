<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Summary;

class ProfitController extends Controller
{

    public function Zarobki()
    {
        $Zarobki = Summary::where('Zysk', '>', 0)->get();
        $category = Summary::find(1);
        
        return view('Profit', ['Zarobki' => $Zarobki,
                            'category' =>$category
            ]);
        
    }
}
