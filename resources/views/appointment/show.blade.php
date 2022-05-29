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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="{{ $day->date->format('d.m.Y') }}">
                {{ $day->date->format('d') }}
            </button>
        </x-calendar-row>
        @endforeach   
    </table>

{{-- <x-modal times={{ $times }}></x-modal> --}}
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Запись на</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="modal-select">Врач</label>       
                        </div>
                        <select class="custom-select" id="modal-select">
                            @foreach ($doctors as $doctor)
                                <option>{{ $doctor->second_name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="m-2">
                        <label for="message-text" class="form-label">Время</label>
                        <div>
                            <table>
                                @foreach ($times as $time)
                                    <div class="m-2">
                                        <input name="dzen" type="radio" value="nedzen" id="message-text"> {{ $time->date->format('d.m.Y H:i') }}
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Записаться</button>
      </div>
    </div>
  </div>
</div>


<script>
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBody = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'Запись на ' + recipient
  modalBody.value = recipient 
})
</script>