@extends('layouts.app')

@section('content')

<h1>Enjoy Learning</h1>


@foreach($data as $data)
  <input type="hidden" name="vid" value="{{asset($data->url)}}">
@endforeach


<section>
      <nav id="vedio_view">
        <ul>
          <li><input type="button" value="Video1" onclick="myFunction()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></input></br>
          <li><input type="button" value="Video2" onclick="myvideo()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></br>
          <li><input type="button" value="Video3" onclick="myvideo1()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></br>
        </ul>
      </nav>


  <article>
      <video src="app/public/poster.jpg" id="video" width=auto height ="500px" alt="Welcome" controls></video>
  </article>

</section>

<div id="time"></div>
<div class="form-group">
<i class="fa fa-question-circle-o" aria-hidden="true"></i> <label for="question_label">Question</label>
<input type="text" class="form-control" id="question" name="questionans" value="" readonly></div>
<div class="form-group">
<i class="fa fa-check-square-o" aria-hidden="true"></i> <label for="option">Select your choice</label>
<select class="custom-select custom-select-md mb-3" name="choice" required>
<option value="" selected>Select answer</option>
<option value="" id="ans1"></option>
<option value="" id="ans2"></option>
<option value="" id="ans3"></option>
<option value="" id="ans4"></option>
</select>
</div>


<footer>copy@rights</footer>


<script >
function myFunction() {
    var x = document.getElementsByName("vid")[0].getAttribute("value"); 
    document.getElementById("video").src =x;
    var video= document.getElementById("video");
      video.play();
      console.log(video.currentTime);
      setInterval(function(){
        console.log(video.currentTime);
        var unit= "seconds";
        var time=Math.round(video.currentTime)+unit;
        document.getElementById("time").innerHTML=time;
        switch (x) {
          case "http://localhost:8000/DSA1.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA4.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA7.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial1.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial4.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial7.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML1.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML4.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML7.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          default:
            break;
        }
    },1000);
  }
  function myvideo() {
    var x = document.getElementsByName("vid")[1].getAttribute("value"); 
    document.getElementById("video").src =x;
    var video= document.getElementById("video");
      video.play();
      console.log(video.currentTime);
      setInterval(function(){
        console.log(video.currentTime);
        var unit= "seconds";
        var time=Math.round(video.currentTime)+unit;
        document.getElementById("time").innerHTML=time;
        switch (x) {
          case "http://localhost:8000/DSA2.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA5.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA8.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial2.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial5.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial8.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML2.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML5.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML8-1.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          default:
            break;
        }
    },1000);
  }
  function myvideo1() {
    var x = document.getElementsByName("vid")[2].getAttribute("value"); 
    document.getElementById("video").src =x;
    var video= document.getElementById("video");
      video.play();
      console.log(video.currentTime);
      setInterval(function(){
        console.log(video.currentTime);
        var unit= "seconds";
        var time=Math.round(video.currentTime)+unit;
        document.getElementById("time").innerHTML=time;
        switch (x) {
          case "http://localhost:8000/DSA3.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA6.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/DSA9.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial3.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial6.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/JavaTutorial9.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML3.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML6.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          case "http://localhost:8000/ML8-2.mp4":
            if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="success";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          } else if (time == "180seconds") {
            document.getElementById("question").value="success1";
            document.getElementById("ans1").value="Darshan";
            document.getElementById("ans1").innerHTML="Darshan";
            document.getElementById("ans2").value="naheed";
            document.getElementById("ans2").innerHTML="naheed";
            document.getElementById("ans3").value="shreya";
            document.getElementById("ans3").innerHTML="shreya";
            document.getElementById("ans4").value="Daku";
            document.getElementById("ans4").innerHTML="Daku";
          }
          break;
          default:
            break;
        }
    },1000);
  }

</script>
@endsection