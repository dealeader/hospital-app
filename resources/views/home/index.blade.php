@extends('layouts.base')

@section('content')
    <h1>Main</h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-card>
                        <h2 class="h4">Новость</h2>
                        <div>
                            {{ now('Y') }}
                        </div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, sint!
                        </p>
                    </x-card>
                </div>
            </div>
        </div>
    </section>
@endsection