
@section('title-page')
Data User
@endsection
@extends('index');

@section('content')

<form action="{{url('register')}}" method="post">
    @csrf
    <label >Nama</label>
    <input type="text" name="name" required>
    <br>
    <label >email</label>
    <input type="email" name="email" required>
    <br>
    <label>password</label>
    <input type="password" name="password" required>
    <br>
    <label>Dosen</label>
    <select name="id_dosen" >
        @foreach($data_dosen as $dosen)
            <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Daftar</button>
</form>

@endsection
