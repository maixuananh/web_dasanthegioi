
@extends('layouts.app')

@section('content')
    <h1>Them Mon An</h1>
  <form action="/foods" method="post" enctype="multipart/form-data">
    @csrf
         <input class="form-control" type="file" name="image" />
         <input class="form-control" type="text" name="name" placeholder="Enter food's name"/>
         <input class="form-control" type="text" name="description" placeholder="Enter food's description"/>
         <input class="form-control"type="text"name="count" placeholder="Enter food's count" />
         <div>
            <label>Chọn Quốc Gia</label>
             <select name="category_id">
                @foreach ($categories as $category)
            <option
             value="{{ $category->id}}">{{$category->name}}
        </option>
        @endforeach
    </select>
         <div>
        <button
              class=" btn btn-primary"type="submit"> Submit
        </button>
         </div>
  </form>
        @if($errors->any())
  <div>
    @foreach ($errors->all() as $error)
    <p class="text-danger">
        {{$error}}
    </p>
    @endforeach
  </div>
  @endif
@endsection
