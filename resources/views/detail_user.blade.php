
@section('title-page')
Detail User
@endsection
@extends('index');

@section('content')


<table border="1">
    <tr>
        <td>Nama</td>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <td>Dosen</td>
        <td>{{$user->dosen->nama}}</td>
    </tr>
</table>

@endsection
