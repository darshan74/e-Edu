@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test your skills!</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{route('check-score')}}" method="POST" id="eval-form">
                    @csrf
                        @if($data->isEmpty())
                            <h4> No Questions exist at the moment. </h4>
                            <script>
                            $(document).ready(function() {
                               $("#eval-form > .actions a, #submitButton").prop('disabled',true); 
                            });
                            </script>
                        @endif
                        @foreach($data as $data)
                        <div class="form-group">
                            <label for="question_label">Question {{$loop->iteration}}</label>
                            <input type="text" class="form-control" id="question" name="question{{$data->id}}"
                                 value="{{$data->question}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="option">Select your choice</label>
                            <select class="custom-select custom-select-md mb-3" name="choice{{$data->id}}" required>
                                <option selected>Select answer</option>
                                <option value="{{$data->correct_option}}">{{$data->correct_option}}</option>
                                <option value="{{$data->other_option1}}">{{$data->other_option1}}</option>
                                <option value="{{$data->other_option2}}">{{$data->other_option2}}</option>
                                <option value="{{$data->other_option3}}">{{$data->other_option3}}</option>
                            </select>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="submitButton">Check my score!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
