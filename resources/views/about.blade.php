@extends('layouts.app')
@section('content')
<h1>This is About ahihi</h1>
{{-- //BLADE --}}


{{
    $x=100;
}}
@if($x>2)
<h3>
    1 is less than 2
</h3>
@elseif($x<10)
<h3> x is less than 10</h3>
@else
{
    <h3>All conditions are not match</h3>
}
@endif
{{-- unless= if not --}}
{{-- @unless(empty($name))
<h3> Name is not emty</h3>
@endunless --}}
{{--
@if(!empty($name))
<h3>Name is not empty hihi</h3>
@endif --}}
{{--
@empty(!$name)
<h3>kiem tra xem  khoi lệnh rỗng hay ko</h3>
@endempty
----------------------------------------------------------------
@empty($age)
<h3>Age is empty</h3>
@endempty
--
@isset($name)
<h3>Name has been set</h3>
@endisset

----------------------- --------------------------------
@switch($name)
    @case('Anh')
        <h3>This is Mr Anh</h3>
        @break
    @case('Beta')
        <h3>This is Beta</h3>
        @break
    @default
        <h3>No one selected</h3>
@endswitch
----------------------------------------------------------------

@for($i=0;$i<20 ;$i++)
<h3>i= {{ $i }}</h3>
@endfor
---------------------------------------------------------------- --}}


{{-- @foreach ($names as $eachName)
    <h3>Each Name : {{ $eachName }}</h3>
@endforeach
----------------------------------------------------------------
@forelse($names as $eachName)
<h3>Each Name : {{ $eachName }}</h3>
@endforelse --}}
----------------------- --------------------------------
{{$i=0}}
@while ($i<10)
<h3>i= {{$i}}   </h3>
  {{ $i++; }}
@endwhile
-------------------------------------------
@endsection
