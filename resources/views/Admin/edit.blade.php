@extends('layouts.masterAdmin')




@section('content')
<h1>Edit Product - Product Name </h1>
<p class="lead">Edit this task below. <a href="{{ route('Admin.Crud.index') }}">Go back to all tasks.</a></p>
<hr>
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
{!! Form::model($Product, [
    'method' => 'PATCH',
    'route' => ['Admin.Crud.update', $Product->id]
]) !!}
    <div class="input-group">
        <span class="button input-group-addon" id="basic-addon1">-</span>
            {!! Form::text('Zysk', null,['placeholder' => 'Profit', 'class' => 'form-control']) !!}
        <span class="button input-group-addon" id="basic-addon1">+</span>
    </div>
    <br>
    
    <div class="input-group">
        <span class="button input-group-addon" id="basic-addon1">-</span>
            {!! Form::text('Strata', null,['placeholder' => 'Spending', 'class' => 'form-control']) !!}
        <span class="button input-group-addon" id="basic-addon1">+</span>
    </div>
    <br>

    <div style="width: 100%" class="input-group  ">
        {!! Form::text('Opis', null,['placeholder' => 'Description', 'class' => 'form-control']) !!}    
    </div>
    <br>
    <div class="form-group">     
      <select name="category_id" class="form-control" id="sel1">
          @foreach ($category as $value) {
        <option  value="{{ $value->id }}"> {{ $value->Category }}</option> ;
        @endforeach
    
        
      </select>
      </div>
      <div>
      {!! Form::submit('Update', ['class' => 'btn btn-default']) !!}
      </div>
  {!! Form::close() !!}
@stop