@extends('layout.template')
@section('content')

<form action="{{url('restoran/'.$restoran->id)}}" method="POST">
@csrf
{{method_field('PUT')}}
<label for="">Nama</label>
<input type="text" name="name" value='{{$restoran->name}}'>
{{$errors->first('name')}}
<label for="">Description</label>
<input type="text" name="description" value='{{$restoran->description}}'>
{{$errors->first('description')}}
<label for="">Harga</label>
<input type="text" name="price" value='{{$restoran->price}}'>
{{$errors->first('price')}}
<button type="submit">Save</button>
</form>

@endsection