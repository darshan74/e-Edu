@extends('layouts.app')

@section('content')
<center>
<h1>Enjoy Learning</h1></center>
<form ></form>
<div id=class>
@foreach($data as $data)
<input type="hidden" value="{{asset($data->url)}}">
<center><video width="auto" height="auto" controls>
  <source src="{{asset($data->url)}}" type="video/mp4">
  Your browser does not support the video tag.
</video></center>
@endforeach
<div>
<center>
<footer>copy@rights</footer>
</center>
</form>
<script src="{{asset('js/video.js')}}"></script>
@endsection