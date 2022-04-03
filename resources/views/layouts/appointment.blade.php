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
                @yield('appointment.content2')
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