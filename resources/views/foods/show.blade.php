
@extends('layouts.app')

@section('content')
    <h1>Thong Tin Chi Tiet</h1>
    <h3>Tên: {{$food->name}}</h3>
    <img src="{{asset('images/'.$food->image_path)}}"
    alt="">
    <h3>Số Lượng: {{$food->count}}</h3>
    <h3>Mô tả:  {{$food->description}}</h3>
    <h3>Quốc Gia: {{$food->category->name}}</h3>

@endsection

