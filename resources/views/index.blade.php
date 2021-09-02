@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
 
    <tr> 
       
       <td> Party Abbreviation </td> 
       <td> Party Score </td> 
       <td> Polling Unit Name</td>
       <td> Polling Unit Number </td>
 
    </tr>

    @if(count($polling) >0)
    @foreach($polling as $pollings)
                     
    <tr> 
    
       <td>  {{$pollings->party_abbreviation}} </td> 
       <td> {{$pollings->party_score}}</td> 
       <td> {{$pollings->polling_unit_name}}</td> 
       <td> {{$pollings->polling_unit_number}} </td>
 
    </tr>
 
    @endforeach
    @endif
</table>
</div>
@endsection
