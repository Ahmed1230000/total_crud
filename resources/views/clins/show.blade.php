@extends('clins.layout')
@section('title')
Show Data
@endsection
@section('content')
<div class="alert alert-success">
    <a class="btn btn-info" href="{{route('clins.index')}}">BackTo All Data!!!</a>
</div>
@if ($message = Session::get('show'))
<div class="alert alert-info">
    {{$message}}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User_name</th>
            <th scope="col">User_emsil</th>
            <th scope="col">User_phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$clin->id}}</th>
            <td>{{$clin->user_name}}</td>
            <td>{{$clin->user_email}}</td>
            <td>{{$clin->user_phone}}</td>
        </tr>
    </tbody>
</table>
@endsection