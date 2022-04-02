@extends('layouts.base')

@section('page.title', 'Запись на прием')

@section('content')
    <h1>Запись на прием</h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <x-categories>
                        @foreach($categories as $category)
                        <x-categories-item>
                        @if(is_null($category->parent_id))
                            <x-categories-item-title>{{ $category->name }}</x-categories-item-title>     
                        @else
                            <x-categories-item-option>{{ $category->name }}</x-categories-item-option>
                        @endif
                        </x-categories-item>
                        @endforeach
                    </x-categories>
                </div>
                <div class="col-9">
                    <table class="table table-borderless">
                        <x-calendar-header />
                        <x-calendar-row>
                            <x-calendar-button>1</x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button>7</x-calendar-button>
                        </x-calendar-row>
                        <x-calendar-row>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button>14</x-calendar-button>
                        </x-calendar-row>
                        <x-calendar-row>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                        </x-calendar-row>
                        <x-calendar-row>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                        </x-calendar-row>   
                        <x-calendar-row>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                            <x-calendar-button></x-calendar-button>
                        </x-calendar-row>  
                      </table>
                </div>
            </div>
        </div>
    </section>
    <x-modal />

    <script type="text/javascript">
          $('#calendarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var date = button.data('whatever')
            var modal = $(this)
            modal.find('.modal-title').text('Запись на ' + date)
            modal.find('.modal-body input').val(date)
          })
    </script>
@endsection