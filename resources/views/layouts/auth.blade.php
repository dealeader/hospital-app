@extends('layouts.base')

@section('page.title', 'Авторизация')

@section('content')
    <h1>Личный кабинет</h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    @yield('auth.content')
                </div>
            </div>
        </div>
    </section>
@endsection