
@extends('layouts.masterAdmin')

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
    @foreach ($show as $shows) 
    <tr><td> {{ $shows->Strata }} </td>
    <td> {{ $shows->Opis }} </td>
     <td ><a class = "btn btn-info btn-sm" href="{{ route('Admin.Crud.edit', $shows->id) }}">edit</a></td>
     <td><div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['Admin.Crud.destroy', $shows->id]
        ]) !!}
            {!! Form::submit('Delete this Product?', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    </div></td></tr>
     @endforeach
     
    </tbody>
   

 </table>
 
@endsection