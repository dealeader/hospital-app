@extends('layouts.base')

@section('page.title', 'Запись на прием')

@section('content')

<h1>Запись на прием</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @yield('appointment.content')
            </div>
            <div class="col-9">
                @yield('appointment.form')
            </div>
        </div>
    </div>
</section>



@endsection


