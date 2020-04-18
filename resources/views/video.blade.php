@extends('layouts.app')

@section('content')

<h1>Enjoy Learning</h1>


@foreach($data as $data)
  <input type="hidden" name="vid" value="{{asset($data->url)}}">
@endforeach


<section>
      <nav id="video_view">
        <ul>
          <li><input type="button" value="Video1" onclick="myFunction()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></input></br>
          <li><input type="button" value="Video2" onclick="myvideo()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></br>
          <li><input type="button" value="Video3" onclick="myvideo1()" class="btn btn-success"><i class="fa fa-play" aria-hidden="true"></i></li></br>
        </ul>
      </nav>

  <article>
      <video src="app/public/poster.jpg" id="video" width="900px" height ="450px" alt="Welcome" controls></video>
  </article>

</section>
<div id="abc">
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
            if (time == "330seconds") {
            video.pause();
            document.getElementById("question").value="What is Data Structure?";
            document.getElementById("ans1").value="a way to operate data";
            document.getElementById("ans1").innerHTML="a way to operate data";
            document.getElementById("ans2").value="a way to store data";
            document.getElementById("ans2").innerHTML="a way to store data";
            document.getElementById("ans3").value="a way to organize data";
            document.getElementById("ans3").innerHTML="a way to organize data";
            document.getElementById("ans4").value="Both b and c";
            document.getElementById("ans4").innerHTML="Both b and c";
          } else if (time == "370seconds") {
            video.pause();
            document.getElementById("question").value="Representation of data structure is known as ?";
            document.getElementById("ans1").value="recursive";
            document.getElementById("ans1").innerHTML="recursive";
            document.getElementById("ans2").value="abstract data type";
            document.getElementById("ans2").innerHTML="abstract data type";
            document.getElementById("ans3").value="storage structure";
            document.getElementById("ans3").innerHTML="storage structure";
            document.getElementById("ans4").value="file structure";
            document.getElementById("ans4").innerHTML="file structure";
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
            if (time == "210seconds") {
            video.pause();
            document.getElementById("question").value="Java is _____ orientated language";
            document.getElementById("ans1").value="Object";
            document.getElementById("ans1").innerHTML="Object";
            document.getElementById("ans2").value="Subject ";
            document.getElementById("ans2").innerHTML="Subject ";
            document.getElementById("ans3").value="lessons";
            document.getElementById("ans3").innerHTML="lessons";
            document.getElementById("ans4").value="entity";
            document.getElementById("ans4").innerHTML="entity";
          } else if (time == "780seconds") {
            video.pause();
            document.getElementById("question").value="Command to check whether java is installed or not ?";
            document.getElementById("ans1").value="java.install";
            document.getElementById("ans1").innerHTML="java.install";
            document.getElementById("ans2").value="java.getinstall";
            document.getElementById("ans2").innerHTML="java.getinstall";
            document.getElementById("ans3").value="java.c";
            document.getElementById("ans3").innerHTML="java.c";
            document.getElementById("ans4").value="java.cc";
            document.getElementById("ans4").innerHTML="java.cc";
          }
          break;
          case "http://localhost:8000/JavaTutorial4.mp4":
            if (time == "565seconds") {
            video.pause();
            document.getElementById("question").value="Size of int in java is ?";
            document.getElementById("ans1").value="1 bytes";
            document.getElementById("ans1").innerHTML="1 bytes";
            document.getElementById("ans2").value="4 bytes";
            document.getElementById("ans2").innerHTML="4 bytes";
            document.getElementById("ans3").value="8 bytes";
            document.getElementById("ans3").innerHTML="8 bytes";
            document.getElementById("ans4").value="Depends on execution";
            document.getElementById("ans4").innerHTML="Depends on execution";
          } else if (time == "570seconds") {
            video.pause();
            document.getElementById("question").value="Total primitive data types in java ?";
            document.getElementById("ans1").value="6";
            document.getElementById("ans1").innerHTML="6";
            document.getElementById("ans2").value="7";
            document.getElementById("ans2").innerHTML="7";
            document.getElementById("ans3").value="8";
            document.getElementById("ans3").innerHTML="8";
            document.getElementById("ans4").value="9";
            document.getElementById("ans4").innerHTML="9";
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
            if (time == "90seconds") {
            video.pause();
            document.getElementById("question").value="Machine Learning involves?";
            document.getElementById("ans1").value="Machine learn things like humans";
            document.getElementById("ans1").innerHTML="Machine learn things like humans ";
            document.getElementById("ans2").value="Humans learn things like machine";
            document.getElementById("ans2").innerHTML="Humans learn things like machine";
            document.getElementById("ans3").value="Machine thinks like human";
            document.getElementById("ans3").innerHTML="Machine thinks like human";
            document.getElementById("ans4").value="Both a and c";
            document.getElementById("ans4").innerHTML="Both a and c";
          } else if (time == "180seconds") {
            video.pause();
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
            document.getElementById("question").value="How do you implement stack?";
            document.getElementById("ans1").value="Static";
            document.getElementById("ans1").innerHTML="Static";
            document.getElementById("ans2").value="Dynamic";
            document.getElementById("ans2").innerHTML="Dynamic";
            document.getElementById("ans3").value="Both A & B";
            document.getElementById("ans3").innerHTML="Both A & B";
            document.getElementById("ans4").value="None of these";
            document.getElementById("ans4").innerHTML="None of these";
          } else if (time == "370seconds") {
            video.pause();
            document.getElementById("question").value="On which rule does the stack data structure work ?";
            document.getElementById("ans1").value="Last in First Out";
            document.getElementById("ans1").innerHTML="Last in First Out";
            document.getElementById("ans2").value="First in First Out";
            document.getElementById("ans2").innerHTML="First in First Out";
            document.getElementById("ans3").value="First in Last Out";
            document.getElementById("ans3").innerHTML="First in Last Out";
            document.getElementById("ans4").value="Both A & C";
            document.getElementById("ans4").innerHTML="Both A & C";
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
            if (time == "900seconds") {
            video.pause();
            document.getElementById("question").value="Syntax to print in Java ?";
            document.getElementById("ans1").value="system.in();";
            document.getElementById("ans1").innerHTML="system.in();";
            document.getElementById("ans2").value="system.out.println();";
            document.getElementById("ans2").innerHTML="system.out.println();";
            document.getElementById("ans3").value="Print(f);";
            document.getElementById("ans3").innerHTML="Print(f);";
            document.getElementById("ans4").value="Print()";
            document.getElementById("ans4").innerHTML="Print()";
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
            if (time == "420seconds") {
            video.pause();
            document.getElementById("question").value="Equation for slope ?";
            document.getElementById("ans1").value="y=mx+b";
            document.getElementById("ans1").innerHTML="y=mx+b";
            document.getElementById("ans2").value="b=yx+m";
            document.getElementById("ans2").innerHTML="b=yx+m";
            document.getElementById("ans3").value="m=(x/y)+b";
            document.getElementById("ans3").innerHTML="m=(x/y)+b";
            document.getElementById("ans4").value="Both a and c";
            document.getElementById("ans4").innerHTML="Both a and c";
          } else if (time == "170seconds") {
            video.pause();
            document.getElementById("question").value="Syntax to read a .csv file ?";
            document.getElementById("ans1").value="df = read.csv(“filename.csv”)";
            document.getElementById("ans1").innerHTML="df = read.csv(“filename.csv”)";
            document.getElementById("ans2").value="df = pd.read_csv(“filename.csv”)";
            document.getElementById("ans2").innerHTML="df = pd.read_csv(“filename.csv”)";
            document.getElementById("ans3").value="df = read_csv(“filename.csv”)";
            document.getElementById("ans3").innerHTML="df = read_csv(“filename.csv”)";
            document.getElementById("ans4").value="None";
            document.getElementById("ans4").innerHTML="None";
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