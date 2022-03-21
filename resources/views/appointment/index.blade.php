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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                категория
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                            <div class="accordion-body">1</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                категория
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo">
                            <div class="accordion-body">1</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                категория
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
                            <div class="accordion-body">1</div>
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
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                            <td><button class="btn btn-success">1</button></td>
                        </tr>
                      </table>
                </div>
            </div>
        </div>
    </section>
@endsection