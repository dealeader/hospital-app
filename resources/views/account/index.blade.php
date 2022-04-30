@extends('layouts.base')

@section('title', 'Личный кабинет')

@section('content')
    <h1>Личный кабинет</h1>
    
    <img src="#" alt="аватар">
    <p>{{ $user->first_name }}</p>
    <p>#{{ $user->document }}</p>
    <h2>Записи на прием</h2>
    <ul>
        @foreach ($times as $time)
            <li class="list">>
                {{ $time->category->doctor->qualification_id }} -
                {{ $time->category->doctor->first_name }} 
                {{ $time->category->doctor->second_name }} -
                <b>{{ $time->date->format('h:i, d M, Y') }}</b>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('logout') }}" class="">Выйти</a>
    
@endsection