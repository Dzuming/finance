<?php

namespace App\Http\Controllers;

use App\Category;
use App\Summary;
use App\Budget;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class insertCashController extends Controller
{
    
    public function store(Request $request)
    {
        $insertCash = new Summary;
        $insertBudget = new Budget;
        $Budget = Budget::select('Budget')->orderBy('id', 'desc')->take(1)->get();
        foreach ($Budget as $Bud );
        {
            $Budgets = $Bud->Budget;
        }

        $insertCash->Zysk = $request->input('Zysk');
        $insertCash->Strata = $request->input('Strata');
        $insertCash->category_id = $request->input('Category');
         $insertCash->Opis = $request->input('Opis');
        $insertCash->save();
         $insertBudget->Budget =  (float) $Budgets + $request->input('Zysk') - $request->input('Strata') ;
           $insertBudget->save();
           return redirect('insertCash');
        	return view('insertCash', ['$Budgets' =>$Budgets
            ]);
       
       
    }
    public function category()
    {
        $category = Category::get();
        return view('insertCash', ['category' =>$category
            ]);
    }

}
