
@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')    
@section('content')
<table class="table">
<thead>
<tr>
<th>Profit</th>
<th>Description</th>
</tr>
<tbody>
    @foreach ($Zarobki as $Zarobek) 
    <tr><td> {{ $Zarobek->Zysk }} </td>
    <td> {{ $Zarobek->Opis }} </td></tr>
     
     @endforeach
     
    </tbody>
   

 </table>
 
@endsection