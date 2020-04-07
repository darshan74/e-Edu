@extends('layouts.app')

@section('content')

<style>
  .split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
  }

  .left {
    left: 0;
    background-color: #111;
  }

  .right {
    right: 0;
    background-color: red;
  }

  .centered img {
    width: 150px;
    border-radius: 50%;
}

footer{
  text-align: center;
}
</style>

<header><h1>Enjoy Learning</h1></header>


@foreach($data as $data)
  <input type="hidden" name="vid" value="{{asset($data->url)}}">
@endforeach


<div class="split left">
  <div class="centered">
    <form>
      <nav>
        <ul>
          <li><input type="button" value="Video1" onclick="myFunction()"></li>
          <li><input type="button" value="Video2" onclick="myvideo()"></li>
          <li><input type="button" value="Video3" onclick="myvideo1()"></li>
        </ul>
      </nav>
    </form>
  </div>
<div>

<div class="split right">
  <div class="centered">
    <video src="" id="video" width="300px" height ="auto" alt="Welcome"  controls></video>
  </div>
</div>



<footer>copy@rights</footer>


<script >
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
@endsection