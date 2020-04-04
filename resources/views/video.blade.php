@extends('layouts.app')

@section('content')

@foreach($data as $data)
<video width="320" height="240" controls autoplay>
  <source src="{{$data->url}}" type="video/mp4">
  Your browser does not support the video tag.
</video>
@endforeach

@endsection