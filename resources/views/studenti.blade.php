@extends('layouts.app')
@section('titolo', 'home')

@section('content')
    <section class="my-container students">
        <div class="my-cards">
            @foreach ($data as $student)
            <div class="student-box">
                <div class="student">
                    <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
                    <div class="">
                    <h5 class="name">{{$student['nome']}}</h5>
                    <p class="">{{$student['descrizione']}}</p>
                    <p class=""><small class="">{{$student['anni']}} anni</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection