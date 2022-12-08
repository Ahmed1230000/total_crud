@extends('clins.layout')
@section('title')
Edit Data
@endsection
@section('content')

<div class="alert alert-info ">
    <a href="{{Route('clins.index')}}" class="btn btn-link">CANCEL!!</a>
</div>
<form action="{{route('clins.update',$clin->id)}}" method="POSt">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" class="form-control" value="{{$clin->id}}" id="name" aria-describedby="id">
    <div class="mb-3">
        <label for="user_name" class="form-label">user_name</label>
        <input type="text" name="user_name" class="form-control" value="{{$clin->user_name}}" id="user_name" aria-describedby="user_name">
        <div id="user_name" class="form-text">Enter Your Name</div>
    </div>
    <div class="mb-3">
        <label for="user_email" class="form-label">user_email</label>
        <input type="email" name="user_email" class="form-control" value="{{$clin->user_email}}" id="user_email">
        <div id="user_email" class="form-text">Enter Your email</div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="user_phone">Enter your Phone</label>
        <input type="number" name="user_phone" value="{{$clin->user_phone}}" class="form-control" id="user_phone">
        <div id="user_phone" class="form-text">Enter Your phone</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection