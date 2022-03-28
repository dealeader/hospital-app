@extends('layouts.base')

@section('page.title', 'Запись на прием')

@section('content')
    <h1>Запись на прием</h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="outline: none; border: none; background: white;">
                                категория
                            </button>
                          </h2>
                          <ul id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                            <li>Окулист</li>
                            <li>Офтальмолог</li>
                          </ul>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="outline: none; border: none; background: white;">
                                категория
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo">
                            <ul class="accordion-body">
                                <li>Окулист</li>
                                <li>Офтальмолог</li>
                            </ul>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="outline: none; border: none; background: white;">
                                категория
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
                            <ul class="accordion-body">
                                <li>Окулист</li>
                                <li>Офтальмолог</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-9">
                    <table class="table table-borderless">
                        <th>Пн</th>
                        <th>Вт</th>
                        <th>Ср</th>
                        <th>Чт</th>
                        <th>Пт</th>
                        <th>Сб</th>
                        <th>Вс</th>
                        <tr>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                        </tr>
                        <tr>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                        </tr>
                        <tr>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                        </tr>
                        <tr>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                        </tr>
                        <tr>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                            <td><x-button-day>1</x-button-day></td>
                        </tr>
                      </table>
                </div>
            </div>
        </div>
    </section>
@endsection
