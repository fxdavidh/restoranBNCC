@extends('layout.template')
@section('content')

<form action="{{url('restoran')}}" method="POST">
    @csrf
    <label for="">Nama</label>
    <input type="text" name="name">
    {{$errors->first('name')}}
    <label for="">Deskripsi</label>
    <input type="text" name="description">
    {{$errors->first('description')}}
    <label for="">Harga</label>
    <input type="text" name="price">
    {{$errors->first('price')}}
    <button type="submit">Save</button>
</form>

@endsection