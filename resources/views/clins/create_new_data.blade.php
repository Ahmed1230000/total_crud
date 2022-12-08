@extends('clins.layout')
@section('title')
Create Data
@endsection
@section('content')

<div class="alert alert-info ">
    <a href="{{Route('clins.index')}}" class="btn btn-link">Show All Data!!</a>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Please Enter All Data!!</strong>
    @foreach ($errors->all() as $errors)
    <ul>
        <li>!{{$errors}}!</li>
    </ul>
    @endforeach
</div>
@endif

<form method="POSt" action="{{route('clins.store')}}">
    @csrf
    <div class="mb-3">
        <label for="user_name" class="form-label">user_name</label>
        <input type="text" name="user_name" class="form-control" id="user_name" aria-describedby="user_name">
        <div id="user_name" class="form-text">Enter Your Name</div>
    </div>
    <div class="mb-3">
        <label for="user_email" class="form-label">user_email</label>
        <input type="email" name="user_email" class="form-control" id="user_email">
        <div id="user_email" class="form-text">Enter Your email</div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="user_phone">Enter your Phone</label>
        <input type="number" name="user_phone"  class="form-control" id="user_phone">
        <div id="user_phone" class="form-text">Enter Your phone</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection