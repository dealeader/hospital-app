@extends('layouts.base')

@section('content')
    <h1 align="left" style="margin-left:100px;">Новости</h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-card>
                        <div class="row">
                            <div class="col-6">
                                <h2 class="h4" align="left" style="margin-left:20px; margin-top:10px;">
                                    Новость
                                </h2>
                            </div>
                            <div class="col-6">
                                <div align="right" style="margin-right:20px; margin-top:10px;">
                                    {{ now('Y') }}
                                </div>
                            </div>
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
