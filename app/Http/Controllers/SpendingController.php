<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Summary;
use DB;
use Input;

class SpendingController extends Controller
{

    public function Zarobki()
    {
        
        if (Input::get('Date') !== null) {
            $date = explode('-', Input::get('Date'));
        } else {
            $date[1] = date('n');
        }
        $Zarobki = Summary::where('Strata', '>', 0)->Where(DB::raw('MONTH(created_at)'), '=', $date[1])->get();
    
    
    
        $sum =  Summary::where('Strata', '>', 0)
        ->Where(DB::raw('MONTH(created_at)'), '=', $date[1])
        ->select(DB::raw('sum(Strata) as total'), DB::raw('category_id'))
        ->groupBy(DB::raw('category_id'))
        ->get();
        $total =  Summary::where('Strata', '>', 0)
        ->Where(DB::raw('MONTH(created_at)'), '=', $date[1])
        ->select(DB::raw('sum(Strata) as total')) 
        ->get();
        $category = Summary::find(1);
        
        return view('Spending', ['Zarobki' => $Zarobki,
                                'sum' => $sum,
                                'total' => $total,
                                'category' =>$category
                                                ]);
       
    }
}
