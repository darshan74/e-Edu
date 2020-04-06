@extends('layouts.app')

@section('content')

<center>
      <h2><i>Enjoy Learning</i></h2></center>
<form >
<div id=class>
@foreach($data as $data)
<input type="hidden" name="vid" value="{{asset($data->url)}}">
@endforeach
<div>
<p id="hello"></p>
<input type="button" value="ENJOY BABIES" onclick="myFunction()">
<input type="button" value="Next" onclick="myvideo()">
<input type="button" value="Next" onclick="myvideo1()">
</form>
<center>
<video src="" id="video" width="auto" height ="auto" controls></video>
<footer>copy@rights</footer>
</center>
<script>
  function myFunction() {
  var x = document.getElementsByName("vid")[0].getAttribute("value"); 
  document.getElementById("video").src =x;
}
function myvideo() {
  var x = document.getElementsByName("vid")[1].getAttribute("value"); 
  document.getElementById("video").src =x;
}
function myvideo1() {
  var x = document.getElementsByName("vid")[2].getAttribute("value"); 
  document.getElementById("video").src =x;
}

</script>
  </div>
</div>

@endsection