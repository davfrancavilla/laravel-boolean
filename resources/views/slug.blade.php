@extends('layouts.app')
@section('titolo', 'home')

@section('content')
    <section class="my-container students">
        <div class="my-cards">
            <div class="student-box">
                <div class="student">
                    <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
                    <h5 class="name">{{$student['nome']}}</h5>
                    <h6>Assunt{{ ($student['genere'] == 'f' ? 'a' : 'o')}} da {{$student['azienda']}}</h6>
                    <p class=""><small class="">{{$student['anni']}} anni</small></p>
                    <p class="">{{$student['descrizione']}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection