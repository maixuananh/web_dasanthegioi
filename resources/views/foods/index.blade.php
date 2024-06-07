
@extends('layouts.app')

@section('content')
<div>
    <h1 style="text-align-last:center">DANH SACH MON AN</h1>
        <a href="foods/create"class="btn btn-primary"role="button" >THEM MON</a>
    </div>


<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="sm-2 me-auto">   <div class="btn btn-success">Tên Món</div></div>

         </div><span class="btn btn-success">Số lượng</span>
          </div><span class="btn btn-success">Chức Năng</span>

    </li>
</ul>

@foreach ($foods as $food)

<ul class="list-group">

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="sm-2 me-auto">
            <div class="fw-bold">
                <a href="/foods/{{$food->id}}">
                     {{$food->name}}
                    </a>
               </div>
            {{$food->description}}
        </div>
         <span class="btn btn-secondary"> {{$food->count}}</span>
         <a class="btn btn-primary" href="foods/{{$food->id}}/edit">
            Edit
            </a>
     {{-- Delete --}}
    <form action="/foods/{{$food-> id }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </li>
</ul>
@endforeach
@endsection
