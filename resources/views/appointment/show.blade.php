@extends('layouts.appointment')
@section('appointment.content')
    <x-categories>
        @foreach($categories as $category)
            @if(is_null($category->parent_id))
                <x-categories-item>
                    <x-categories-item-title id="{{ $category->id }}">
                        {{ $category->name }}
                    </x-categories-item-title>
                    @foreach ($category->childs as $child)
                        <x-categories-item-option id="{{ $child->parent_id }}" category="{{ $child->name }}">
                            {{ $child->name }}
                        </x-categories-item-option>
                    @endforeach
                </x-categories-item>
            @endif
        @endforeach
    </x-categories>
@endsection

@section("appointment.calendar")
    <table class="table table-borderless absolute">
        <x-calendar-header />
        @foreach ($days as $day)
        <x-calendar-row>
            <x-calendar-button date="{{ $day->date->format('d.m.Y') }}">
                {{ $day->date->format('d') }}
            </x-calendar-button>
        </x-calendar-row>
        @endforeach   
    </table>

{{-- <x-modal times={{ $times }}></x-modal> --}}
@endsection

    
<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">Запись на</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="modal-select">Врач</label>
                        </div>
                        <select class="custom-select" id="modal-select">
                            
                        </select>
                    </div>
                    <div class="m-2">
                        <label for="message-text" class="form-label">Время</label>
                        <div>
                            <table>
                                @foreach ($times as $time)
                                {{dump($time)}}
                                    <button class="btn btn-success m-2">
                                        {{ $time->date->hour }}
                                    </button>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success">записаться</button>
            </div>
        </div>
    </div>
  </div>


<script type="text/javascript">
    $('#calendarModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var date = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text('Запись на ' + date)
      modal.find('.modal-body input').val(date)
    })
</script>