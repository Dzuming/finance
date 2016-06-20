@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')    
@section('content')
<form class="bs-example bs-example-form" data-example-id="simple-input-groups method=post" action="../public/insertCash/store">
    <div class="input-group">
      <span class="button input-group-addon" id="basic-addon1">-</span>
      <input name="Zysk"  type="text" class="form-control"  placeholder="Profit" aria-describedby="basic-addon1">
      <span class="button input-group-addon" id="basic-addon1">+</span>
    </div>
    <br>
    
    <div class="input-group">
      <span class="button input-group-addon" id="basic-addon1">-</span>
      <input name="Strata" type="text" class="form-control" placeholder="Spending" aria-describedby="basic-addon1">
      <span class="button input-group-addon" id="basic-addon1">+</span>
    </div>
    <br>
    <div style="width: 100%" class="input-group  ">
      
      <input name="Opis" type="text" class="form-control " placeholder="Description" aria-describedby="basic-addon1">
      
    </div>
    <br>
        <div class="form-group">     

      <select name="Category" class="form-control" id="sel1">
          @foreach ($category as $value) {
        <option  value="{{ $value->id }}"> {{ $value->Category }}</option> ;
        @endforeach
    
        
      </select>
      </div>
      <div>
      <button type="submit" value="send" class="btn btn-default">Send</button>
      </div>
  </form>
@endsection
