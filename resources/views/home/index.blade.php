@extends('layouts.base')

@section('content')
    <h1 align="left" style="margin-left:100px;">Новости</h1>
    <section>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-6 py-3">
                    <x-card>
                        <div class="row">
                            <div class="col-6">
                                <h2 class="h4" align="left" style="margin-left:20px; margin-top:10px;">
                                    {{ $post->title }}
                                </h2>
                            </div>
                            <div class="col-6">
                                <div align="right" style="margin-right:20px; margin-top:10px;">
                                    {{ $post->time }}
                                </div>
                         </div>                      
                        <p>
                            {{ $post->content }}
                        </p>
                        
                    </x-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
