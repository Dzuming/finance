<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Category;
use App\Summary;
use App\Budget;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    public function index()
    {
        $show = Summary::get();
        $category = Summary::find(1);
        
        return view('Admin/index', ['show' => $show,
                            'category' =>$category
            ]);
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = Category::get();
        // load the create form (app/views/nerds/create.blade.php)
        return view('Admin/create', ['category' =>$category
            ]);
    }
    public function store(Request $request)
    {
        $insertBudget = new Budget;
        $Budget = Budget::select('Budget')->orderBy('id', 'desc')->take(1)->get();
        foreach ($Budget as $Bud );
        {
            $Budgets = $Bud->Budget;
        }
        $input = $request->all();

        Summary::create($input);
        
         $insertBudget->Budget =  (float) $Budgets + $request->input('Zysk') - $request->input('Strata') ;
           $insertBudget->save();
           Session::flash('flash_message', 'Product successfully added!');
           return redirect()->back();
    }
    public function edit($id)
{
    $Product = Summary::findOrFail($id);
    $category = Category::get();
    return view('Admin/edit', ['Product' => $Product,
                            'category' =>$category
            ]);
}
public function update($id, Request $request)
{
    $Product = Summary::findOrFail($id);
    $input = $request->all();

    $Product->fill($input)->save();

    Session::flash('flash_message', 'Task successfully updated!');

    return redirect()->back();
    return view('Admin/edit', ['Product' => $Product,
                            'category' =>$category
            ]);
}
    public function destroy($id)
    {  
    $insertBudget = new Budget;
    $Budget = Budget::select('Budget')->orderBy('id', 'desc')->take(1)->get();
    foreach ($Budget as $Bud );
        {
            $Budgets = $Bud->Budget;
        }
    $productDelete = Summary::findOrFail($id);
    $insertBudget->Budget =  (float) $Budgets - $productDelete->Zysk + $productDelete->Strata ;
    $insertBudget->save();
    $productDelete->delete();
    
    

    
    Session::flash('flash_message', 'Task successfully deleted!');
        return redirect()->back();

    }
}
