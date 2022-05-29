@extends('layouts.base')

@section('page.title', 'Время записи')

@section('content')
    <h2 class="h4">Все записи/<a href="{{ route('admin.times.create') }}">создать</a></h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($times as $time)
                @if(is_null($time->parent_id))
                <div class=" col-4 p-12 mt-3">
                    <x-card>
                        <x-card-header>
                            <a href="{{ route('admin.times.show', $time->id) }}">
                                {{ $time->date->toDateString() }}
                            </a>
                        </x-card-header>
                        <x-card-body>
                            <div>
                                @foreach($time->childs as $child)
                                    <div>
                                        <a href="{{ route('admin.times.show', $child->id) }}">
                                            {{ $child->date->toTimeString() }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </x-card-body>
                    </x-card>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
