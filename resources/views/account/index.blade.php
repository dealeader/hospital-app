@extends('layouts.base')

@section('title', 'Личный кабинет')

@section('content')
    <h1>Личный кабинет</h1>

    <img src="#" alt="аватар">
    <p>{{ $user->first_name }}</p>
    <p>#{{ $user->document }}</p>
    <h2>Записи на прием</h2>
    <ul class="list-group list-group-flush">
        @foreach ($times as $time)
            <li class="list-group-item ">>
                {{ $time->doctor->first_name }}
                {{ $time->doctor->second_name }} -
                {{ $time->doctor->category->name }} -
                <b>{{ $time->date->format('h:i, d M, Y') }}</b>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('logout') }}" class="">Выйти</a>

@endsection
