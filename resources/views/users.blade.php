
@section('title-page')
Data User
@endsection
@extends('index');

@section('content')

<ul>
    @foreach($data_users as $user)
    <li><a href="{{url('detail_user/'.$user->id)}}">{{$user->name}}</a></li>
    @endforeach
</ul>

<form action="{{url('logout')}}" method="POST" class="d-flex" role="search">
    @csrf
    @method('DELETE')
    <button type="submit">Logout</button>
</form>

@endsection
