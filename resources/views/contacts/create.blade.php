
@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contacts Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" placeholder="write your name"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" placeholder="write your address"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="write your phone"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop