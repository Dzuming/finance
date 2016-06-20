<?php

namespace App\Http\ViewComposers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Budget;

class RecentModifiedComposer extends Controller
{

    public function compose(View $view)
    {
        $Budget = Budget::select('Budget')->orderBy('id', 'desc')->take(1)->get();
        $view->with('Budget', $Budget);
        
    }
}
