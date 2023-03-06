@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
        <div class="card-body">
            <h5 class="card-title">Name : {{ $contacts->name }}</h5>
            <p class="card-text">Address : {{ $contacts->address }}</p>
            <p class="card-text">Phone : {{ $contacts->mobile }}</p>
            <img src="{{ asset($contacts->photo) }}" alt="Contact photo">
        </div>
       
    </hr>
  
  </div>
</div>
 
@stop