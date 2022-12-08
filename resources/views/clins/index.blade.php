@extends('clins.layout')
@section('title')
All Data
@endsection
@section('content')
<div class="alert alert-success">
    <a href="{{Route('clins.create')}}" class="btn btn-dark">Cearte new data !!</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
@if ($message = Session::get('Successfully'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
@if ($message = Session::get('info'))
<div class="alert alert-danger">
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
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Clins as $clin)
        <tr>
            <th scope="row">{{$clin->id}}</th>
            <td>{{$clin->user_name}}</td>
            <td>{{$clin->user_email}}</td>
            <td>{{$clin->user_phone}}</td>
            <td>
                <form method="POST" action="{{route('clins.destroy',$clin->id)}}">
                    @csrf
                    <a href="{{Route('clins.show',$clin->id)}}" class="btn btn-light">SHOW</a>
                    <a href="{{Route('clins.edit',$clin->id)}}" class="btn btn-dark">UPDATA</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Clins->links()}}

@endsection