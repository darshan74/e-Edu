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
            if (time == "420seconds") {
            video.pause();
            document.getElementById("question").value="Choose the valid format for declaration of 1D array.";
            document.getElementById("ans1").value="int a[];";
            document.getElementById("ans1").innerHTML="int a[];";
            document.getElementById("ans2").value="int n, a[n];";
            document.getElementById("ans2").innerHTML="int n, a[n];";
            document.getElementById("ans3").value="int a[60];";
            document.getElementById("ans3").innerHTML="int a[60];";
            document.getElementById("ans4").value="int a;";
            document.getElementById("ans4").innerHTML="int a;";
          } else if (time == "1332seconds") {
            video.pause();
            document.getElementById("question").value="Which of the following is true about Array?";
            document.getElementById("ans1").value="Array is a fixed size sequenced collection of data items of same data type";
            document.getElementById("ans1").innerHTML="Array is a fixed size sequenced collection of data items of same data type";
            document.getElementById("ans2").value="Array is a linear data structure where element is added from one end and removed from another end";
            document.getElementById("ans2").innerHTML="Array is a linear data structure where element is added from one end and removed from another end";
            document.getElementById("ans3").value="Array can store elements of different data types";
            document.getElementById("ans3").innerHTML="Array can store elements of different data types";
            document.getElementById("ans4").value="Array is a non-linear data structure";
            document.getElementById("ans4").innerHTML="Array is a non-linear data structure";
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
            if (time == "549seconds") {
            video.pause();
            document.getElementById("question").value="When the list as ADT is full, we create a new larger array , ____________ the size of the previous one.";
            document.getElementById("ans1").value="Triple";
            document.getElementById("ans1").innerHTML="Triple";
            document.getElementById("ans2").value="Double";
            document.getElementById("ans2").innerHTML="Double";
            document.getElementById("ans3").value="Same";
            document.getElementById("ans3").innerHTML="Same";
            document.getElementById("ans4").value="Quadruple";
            document.getElementById("ans4").innerHTML="Quadruple";
          } else if (time == "747seconds") {
            video.pause();
            document.getElementById("question").value="Time Complexity required to access element at any index in a list is ___________";
            document.getElementById("ans1").value="O(n)";
            document.getElementById("ans1").innerHTML="O(n)";
            document.getElementById("ans2").value="O(logn)";
            document.getElementById("ans2").innerHTML="O(logn)";
            document.getElementById("ans3").value="O(1)";
            document.getElementById("ans3").innerHTML="O(1)";
            document.getElementById("ans4").value="O(n2)";
            document.getElementById("ans4").innerHTML="O(n2)";
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
            if (time == "210seconds") {
            video.pause();
            document.getElementById("question").value="if a = 5;  a++;  and b = 7 ; b--; what will be a+b ?";
            document.getElementById("ans1").value="5";
            document.getElementById("ans1").innerHTML="5";
            document.getElementById("ans2").value="14";
            document.getElementById("ans2").innerHTML="14";
            document.getElementById("ans3").value="12";
            document.getElementById("ans3").innerHTML="12";
            document.getElementById("ans4").value="11";
            document.getElementById("ans4").innerHTML="11";
          } else if (time == "360seconds") {
            video.pause();
            document.getElementById("question").value="if a=10 and a*=5 what will be the output ?";
            document.getElementById("ans1").value="15";
            document.getElementById("ans1").innerHTML="15";
            document.getElementById("ans2").value="14";
            document.getElementById("ans2").innerHTML="14";
            document.getElementById("ans3").value="50";
            document.getElementById("ans3").innerHTML="50";
            document.getElementById("ans4").value="30";
            document.getElementById("ans4").innerHTML="30";
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
          } else if (time == "309seconds") {
            video.pause();
            document.getElementById("question").value="Neural network model consist of three basic layers called as_________";
            document.getElementById("ans1").value="Input process output";
            document.getElementById("ans1").innerHTML="Input process output";
            document.getElementById("ans2").value="Input hidden output";
            document.getElementById("ans2").innerHTML="Input hidden output";
            document.getElementById("ans3").value="Data knowledge decision";
            document.getElementById("ans3").innerHTML="Data knowledge decision";
            document.getElementById("ans4").value="Fact data knowledge";
            document.getElementById("ans4").innerHTML="Fact data knowledge";
          }
          break;
          case "http://localhost:8000/ML4.mp4":
            if (time == "258seconds") {
            video.pause();
            document.getElementById("question").value="Another name for mean square error is?";
            document.getElementById("ans1").value="Cost function";
            document.getElementById("ans1").innerHTML="Cost function";
            document.getElementById("ans2").value="Price function";
            document.getElementById("ans2").innerHTML="Price function";
            document.getElementById("ans3").value="Binary function";
            document.getElementById("ans3").innerHTML="Binary function";
            document.getElementById("ans4").value="Static function";
            document.getElementById("ans4").innerHTML="Static function";
          } else if (time == "1692seconds") {
            video.pause();
            document.getElementById("question").value="Computational complexity of Gradient descent is?";
            document.getElementById("ans1").value="linear in D";
            document.getElementById("ans1").innerHTML="linear in D";
            document.getElementById("ans2").value="linear in N";
            document.getElementById("ans2").innerHTML="linear in N";
            document.getElementById("ans3").value="polynomial in D";
            document.getElementById("ans3").innerHTML="polynomial in D";
            document.getElementById("ans4").value="dependent on the number of iterations";
            document.getElementById("ans4").innerHTML="dependent on the number of iterations";
          }
          break;
          case "http://localhost:8000/ML7.mp4":
            if (time == "78seconds") {
            video.pause();
            document.getElementById("question").value="The dataset used in ML are generally divided as";
            document.getElementById("ans1").value="Training, Treating";
            document.getElementById("ans1").innerHTML="Training, Treating";
            document.getElementById("ans2").value="Treating, Testing";
            document.getElementById("ans2").innerHTML="Treating, Testing";
            document.getElementById("ans3").value="Training, Testing";
            document.getElementById("ans3").innerHTML="Training, Testing";
            document.getElementById("ans4").value="Both a and b";
            document.getElementById("ans4").innerHTML="Both a and b";
          } else if (time == "372seconds") {
            video.pause();
            document.getElementById("question").value="Which method is used to check the accuracy of the model";
            document.getElementById("ans1").value="Skip";
            document.getElementById("ans1").innerHTML="Skip";
            document.getElementById("ans2").value="Train";
            document.getElementById("ans2").innerHTML="Train";
            document.getElementById("ans3").value="Score";
            document.getElementById("ans3").innerHTML="Score";
            document.getElementById("ans4").value="fit";
            document.getElementById("ans4").innerHTML="fit";
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
            if (time == "558seconds") {
            video.pause();
            document.getElementById("question").value="Which data structure doesn’t store elements at adjacent memory locations?";
            document.getElementById("ans1").value="Array";
            document.getElementById("ans1").innerHTML="Array";
            document.getElementById("ans2").value="Stack";
            document.getElementById("ans2").innerHTML="Stack";
            document.getElementById("ans3").value="Linked list";
            document.getElementById("ans3").innerHTML="Linked list";
            document.getElementById("ans4").value="Queue";
            document.getElementById("ans4").innerHTML="Queue";
          } else if (time == "1020seconds") {
            video.pause();
            document.getElementById("question").value="The nodes in the linked list consist of __________ and ___________.";
            document.getElementById("ans1").value="Head, Tail";
            document.getElementById("ans1").innerHTML="Head, Tail";
            document.getElementById("ans2").value="First element, Last element";
            document.getElementById("ans2").innerHTML="First element, Last element";
            document.getElementById("ans3").value="Data, Address of next node";
            document.getElementById("ans3").innerHTML="Data, Address of next node";
            document.getElementById("ans4").value="Pointer, Address";
            document.getElementById("ans4").innerHTML="Pointer, Address";
          }
          break;
          case "http://localhost:8000/DSA8.mp4":
            if (time == "255seconds") {
            video.pause();
            document.getElementById("question").value="What is used to implement Linked lists in C or C++?";
            document.getElementById("ans1").value="Link";
            document.getElementById("ans1").innerHTML="Link";
            document.getElementById("ans2").value="Structure";
            document.getElementById("ans2").innerHTML="Structure";
            document.getElementById("ans3").value="Head";
            document.getElementById("ans3").innerHTML="Head";
            document.getElementById("ans4").value="Node";
            document.getElementById("ans4").innerHTML="Node";
          } else if (time == "810seconds") {
            video.pause();
            document.getElementById("question").value="Which function is used to dynamically allocate memory to the node in C?";
            document.getElementById("ans1").value="Dealloc";
            document.getElementById("ans1").innerHTML="Dealloc";
            document.getElementById("ans2").value="Calloc";
            document.getElementById("ans2").innerHTML="Calloc";
            document.getElementById("ans3").value="Malloc";
            document.getElementById("ans3").innerHTML="Malloc";
            document.getElementById("ans4").value="Realloc";
            document.getElementById("ans4").innerHTML="Realloc";
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
            if (time == "84seconds") {
            video.pause();
            document.getElementById("question").value="By using which class we can get a value from a user?";
            document.getElementById("ans1").value="Abstract class";
            document.getElementById("ans1").innerHTML="Abstract class";
            document.getElementById("ans2").value="Temporary class";
            document.getElementById("ans2").innerHTML="Temporary class";
            document.getElementById("ans3").value="Scanner class";
            document.getElementById("ans3").innerHTML="Scanner class";
            document.getElementById("ans4").value="Static class";
            document.getElementById("ans4").innerHTML="Static class";
          } else if (time == "372seconds") {
            video.pause();
            document.getElementById("question").value="Which Scanner class method is used to read integer value from the user?";
            document.getElementById("ans1").value="next()";
            document.getElementById("ans1").innerHTML="next()";
            document.getElementById("ans2").value="nextInteger()";
            document.getElementById("ans2").innerHTML="nextInteger()";
            document.getElementById("ans3").value="nextInt()";
            document.getElementById("ans3").innerHTML="nextInt()";
            document.getElementById("ans4").value="readInt()";
            document.getElementById("ans4").innerHTML="readInt()";
          }
          break;
          case "http://localhost:8000/JavaTutorial8.mp4":
            if (time == "144seconds") {
            video.pause();
            document.getElementById("question").value="which of the following is a control statement?";
            document.getElementById("ans1").value="While";
            document.getElementById("ans1").innerHTML="While";
            document.getElementById("ans2").value="For";
            document.getElementById("ans2").innerHTML="For";
            document.getElementById("ans3").value="do...while";
            document.getElementById("ans3").innerHTML="do...while";
            document.getElementById("ans4").value="if";
            document.getElementById("ans4").innerHTML="if";
          } else if (time == "360seconds") {
            video.pause();
            document.getElementById("question").value="How many choices are possible when using a single if-else statement?";
            document.getElementById("ans1").value="1";
            document.getElementById("ans1").innerHTML="1";
            document.getElementById("ans2").value="2";
            document.getElementById("ans2").innerHTML="2";
            document.getElementById("ans3").value="3";
            document.getElementById("ans3").innerHTML="3";
            document.getElementById("ans4").value="4";
            document.getElementById("ans4").innerHTML="4";
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
            if (time == "138seconds") {
            video.pause();
            document.getElementById("question").value="The process of pickling in Python includes:";
            document.getElementById("ans1").value="conversion of a list into a datatable";
            document.getElementById("ans1").innerHTML="conversion of a list into a datatable";
            document.getElementById("ans2").value="conversion of a byte stream into Python object hierarchy";
            document.getElementById("ans2").innerHTML="conversion of a byte stream into Python object hierarchy";
            document.getElementById("ans3").value="conversion of a Python object hierarchy into byte stream";
            document.getElementById("ans3").innerHTML="conversion of a Python object hierarchy into byte stream";
            document.getElementById("ans4").value="conversion of a datatable into a list";
            document.getElementById("ans4").innerHTML="conversion of a datatable into a list";
          } else if (time == "300seconds") {
            video.pause();
            document.getElementById("question").value="Which of the following functions can accept more than one positional argument?";
            document.getElementById("ans1").value="pickle.dumps";
            document.getElementById("ans1").innerHTML="pickle.dumps";
            document.getElementById("ans2").value="pickle.loads";
            document.getElementById("ans2").innerHTML="pickle.loads";
            document.getElementById("ans3").value="pickle.dump";
            document.getElementById("ans3").innerHTML="pickle.dump";
            document.getElementById("ans4").value="pickle.load";
            document.getElementById("ans4").innerHTML="pickle.load";
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
            if (time == "258seconds") {
            video.pause();
            document.getElementById("question").value="Insertion and Deletion operation in Queue is known as ?";
            document.getElementById("ans1").value="Push and Pop";
            document.getElementById("ans1").innerHTML="Push and Pop";
            document.getElementById("ans2").value="Enqueue and Dequeue";
            document.getElementById("ans2").innerHTML="Enqueue and Dequeue";
            document.getElementById("ans3").value="Insert and Delete";
            document.getElementById("ans3").innerHTML="Insert and Delete";
            document.getElementById("ans4").value="None of the Above";
            document.getElementById("ans4").innerHTML="None of the Above";
          } else if (time == "1140seconds") {
            video.pause();
            document.getElementById("question").value="If the elements “A”, “B”, “C” and “D” are placed in a queue and are deleted one at a time, in what order will they be removed?";
            document.getElementById("ans1").value="ABCD";
            document.getElementById("ans1").innerHTML="ABCD";
            document.getElementById("ans2").value="DCBA";
            document.getElementById("ans2").innerHTML="DCBA";
            document.getElementById("ans3").value="DCAB";
            document.getElementById("ans3").innerHTML="DCAB";
            document.getElementById("ans4").value="ABDC";
            document.getElementById("ans4").innerHTML="ABDC";
          }
          break;
          case "http://localhost:8000/DSA6.mp4":
            if (time == "498seconds") {
            video.pause();
            document.getElementById("question").value="Average cost of accessing element in a linked list is ___________";
            document.getElementById("ans1").value="O(1)";
            document.getElementById("ans1").innerHTML="O(1)";
            document.getElementById("ans2").value="O(n2)";
            document.getElementById("ans2").innerHTML="O(n2)";
            document.getElementById("ans3").value="O(n)";
            document.getElementById("ans3").innerHTML="O(n)";
            document.getElementById("ans4").value="O(logn)";
            document.getElementById("ans4").innerHTML="O(logn)";
          } else if (time == "726seconds") {
            video.pause();
            document.getElementById("question").value="Which data structure requires extra memory for pointer variable?";
            document.getElementById("ans1").value="Queue";
            document.getElementById("ans1").innerHTML="Queue";
            document.getElementById("ans2").value="Linked list";
            document.getElementById("ans2").innerHTML="Linked list";
            document.getElementById("ans3").value="Stack";
            document.getElementById("ans3").innerHTML="Stack";
            document.getElementById("ans4").value="Array";
            document.getElementById("ans4").innerHTML="Array";
          }
          break;
          case "http://localhost:8000/DSA9.mp4":
            if (time == "180seconds") {
            video.pause();
            document.getElementById("question").value="What is the general term used for the first node of a linked list?";
            document.getElementById("ans1").value="First node";
            document.getElementById("ans1").innerHTML="First node";
            document.getElementById("ans2").value="Head";
            document.getElementById("ans2").innerHTML="Head";
            document.getElementById("ans3").value="Tail";
            document.getElementById("ans3").innerHTML="Tail";
            document.getElementById("ans4").value="Pointer";
            document.getElementById("ans4").innerHTML="Pointer";
          } else if (time == "660seconds") {
            video.pause();
            document.getElementById("question").value="Which Keyword is used instead of malloc to dynamically allocate memory in C++? ";
            document.getElementById("ans1").value="Allocate";
            document.getElementById("ans1").innerHTML="Allocate";
            document.getElementById("ans2").value="Key";
            document.getElementById("ans2").innerHTML="Key";
            document.getElementById("ans3").value="New";
            document.getElementById("ans3").innerHTML="New";
            document.getElementById("ans4").value="Alloc";
            document.getElementById("ans4").innerHTML="Alloc";
          }
          break;
          case "http://localhost:8000/JavaTutorial3.mp4":
            if (time == "693seconds") {
            video.pause();
            document.getElementById("question").value="Every Java program should have one main class and one method";
            document.getElementById("ans1").value="True";
            document.getElementById("ans1").innerHTML="True";
            document.getElementById("ans2").value="False";
            document.getElementById("ans2").innerHTML="False";
            document.getElementById("ans3").value="Both";
            document.getElementById("ans3").innerHTML="Both";
            document.getElementById("ans4").value="None of the above";
            document.getElementById("ans4").innerHTML="None of the above";
          } else if (time == "1038seconds") {
            video.pause();
            document.getElementById("question").value="Two ways of writing comments in java are ____________ and ____________";
            document.getElementById("ans1").value="<!--    >, /*    */";
            document.getElementById("ans1").innerHTML="<!--   >, /*    */";
            document.getElementById("ans2").value="//, /*      */";
            document.getElementById("ans2").innerHTML="//, /*      */";
            document.getElementById("ans3").value="**, <>";
            document.getElementById("ans3").innerHTML="**, <>";
            document.getElementById("ans4").value="//, **";
            document.getElementById("ans4").innerHTML="//, **";
          }
          break;
          case "http://localhost:8000/JavaTutorial6.mp4":
            if (time == "420seconds") {
            video.pause();
            document.getElementById("question").value=" Modulus operator, %, can be applied to which of these?";
            document.getElementById("ans1").value="Integers";
            document.getElementById("ans1").innerHTML="Integers";
            document.getElementById("ans2").value="Floating – point numbers";
            document.getElementById("ans2").innerHTML="Floating – point numbers";
            document.getElementById("ans3").value="Both Integers and floating – point numbers";
            document.getElementById("ans3").innerHTML="Both Integers and floating – point numbers";
            document.getElementById("ans4").value="None of the mentioned";
            document.getElementById("ans4").innerHTML="None of the mentioned";
          } else if (time == "504seconds") {
            video.pause();
            document.getElementById("question").value="Which of the following can be operands of arithmetic operators?";
            document.getElementById("ans1").value="Numeric";
            document.getElementById("ans1").innerHTML="Numeric";
            document.getElementById("ans2").value="Boolean";
            document.getElementById("ans2").innerHTML="Boolean";
            document.getElementById("ans3").value="Characters";
            document.getElementById("ans3").innerHTML="Characters";
            document.getElementById("ans4").value="Both Numeric & Characters";
            document.getElementById("ans4").innerHTML="Both Numeric & Characters";
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
          case "http://localhost:8000/ML3.mp4":
            if (time == "120seconds") {
            video.pause();
            document.getElementById("question").value="Linear Regression with multiple variables is also called as __________ ";
            document.getElementById("ans1").value="Multiple regression";
            document.getElementById("ans1").innerHTML="Multiple regression";
            document.getElementById("ans2").value="Multi variables";
            document.getElementById("ans2").innerHTML="Multi variables";
            document.getElementById("ans3").value="Multivariate Regression";
            document.getElementById("ans3").innerHTML="Multivariate Regression";
            document.getElementById("ans4").value="Multi integral";
            document.getElementById("ans4").innerHTML="Multi integral";
          } else if (time == "753seconds") {
            video.pause();
            document.getElementById("question").value="Which module is used to convert word to number?";
            document.getElementById("ans1").value="String to num";
            document.getElementById("ans1").innerHTML="String to num";
            document.getElementById("ans2").value="word2number";
            document.getElementById("ans2").innerHTML="word2number";
            document.getElementById("ans3").value="String2number";
            document.getElementById("ans3").innerHTML="String2number";
            document.getElementById("ans4").value="Word to num";
            document.getElementById("ans4").innerHTML="Word to num";
          }
          break;
          case "http://localhost:8000/ML6.mp4":
            if (time == "378seconds") {
            video.pause();
            document.getElementById("question").value="You want to apply one hot encoding (OHE) on the categorical feature(s). What challenges may you face if you have applied OHE on a categorical variable of training dataset?";
            document.getElementById("ans1").value="All categories of categorical variable are not present in the test dataset.";
            document.getElementById("ans1").innerHTML="All categories of categorical variable are not present in the test dataset.";
            document.getElementById("ans2").value="Frequency distribution of categories is different in train as compared to the test dataset.";
            document.getElementById("ans2").innerHTML="Frequency distribution of categories is different in train as compared to the test dataset.";
            document.getElementById("ans3").value="Train and Test always have same distribution.";
            document.getElementById("ans3").innerHTML="Train and Test always have same distribution.";
            document.getElementById("ans4").value="Both A and B";
            document.getElementById("ans4").innerHTML="Both A and B";
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
          default:
            break;
        }
    },1000);
  }

</script>
@endsection