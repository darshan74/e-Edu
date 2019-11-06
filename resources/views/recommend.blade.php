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
                <div class="card-header"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                 Course Recommendation</div>

                <div class="card-body">
                    <script>
                        $(window).on('load', function () {
                            setTimeout(function() {
                                $(".wait").fadeOut("slow");
                                $(".recom").fadeIn(500);
                            }, 5000);
                        });
                    </script>
                    <div class="wait">
                        <h3> Please wait while we calculate your result and recommend courses for you. </h3>
                        <img src="{{asset('preloader.gif')}}" alt="preloader" class="center">
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                        <div class="recom" style="display:none;">
                            <h3> Based on your current evaluation, the recommended course for you is <span
                                style="color:red">{{$data}}.</span> </h3>
                        </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
