@extends('layouts.app')
@section('titolo', 'home')

@section('content')
    <section class="my-container students">
        <div class="my-cards">
            @foreach ($data as $student)
            <div class="student-box">
                <div class="student">
                    <img src="{{$student->img}}" class="card-img-top" alt="{{$student->name}}">
                    <a class="name" href="{{ route('Student.slug', ['slug'=>$student->slug])}}"><h5 class="name">{{$student->name}}</h5></a>
                    <h6>Assunt{{ ($student->genere == 'f' ? 'a' : 'o')}} da {{$student->azienda}}</h6>
                    <p class=""><small class="">{{$student->anni}} anni</small></p>
                    <p class="">{{$student->descrizione}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection