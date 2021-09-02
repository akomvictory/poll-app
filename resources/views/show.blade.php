@extends('layouts.app')

@section('content')

<div class="container">
<form>


  <div class="form-group">
  <form action="/view/lga method="get">

    <select  class="form-control" name="lga">
    @if(count($lga) >0)
    @foreach($lga as $lgas)
            
        <option value="{{$lgas->lga_name}} "> {{$lgas->lga_name}} </option>
    @endforeach
    @endif
   </select>
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

@php
if(isset($_GET['lga'])){
    echo $_GET['lga'];
}
@endphp
</div>

