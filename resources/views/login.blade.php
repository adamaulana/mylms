
@section('title-page')
Register
@endsection
@extends('index');

@section('content')

@if(Session::has('status'))
<h1>
    {{ Session::get('status') }}
</h1>
@endif

<form action="{{url('login')}}" method="post">
    @csrf
    <label >email</label>
    <input type="email" name="email" required>
    <br>
    <label>password</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Daftar</button>
</form>

@endsection
