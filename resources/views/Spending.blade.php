

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')    
@section('content')
<form class="bs-example bs-example-form" data-example-id="simple-input-groups method=post" action="../public/Spending">
<div>
 <input name="Date" value="{{ Input::get('Date') }}"  type=month> 
 </div>
 <div>
 <button type="submit" value="send" class="btn btn-default">Select</button>
      </div>
  </form>
<table class="table">
<thead>
<tr>
<th>Spending</th>
<th>Category</th>
<th>Description</th>
</tr>
<tbody>
    @foreach ($Zarobki as $Zarobek) 
    <tr><td > {{ $Zarobek->Strata }} </td>
    <td> {{ $Zarobek->Category->Category }} </td>
    <td > {{ $Zarobek->Opis }} </td> </tr>
    
 @endforeach
 @foreach ($total as $totals)
 <td > {{ $totals->total}} </td>
 @endforeach
 @foreach ($sum as $suma) 
 <tr style="display:none;"><td  class="Strata_total"> {{ $suma->total}} </td>
<td class="category_total"> {{ $suma->Category->Category}} </td>
 </tr>
 @endforeach
 </tbody>   
 </table>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
@endsection
{!! HTML::script('js/Spending.js') !!}