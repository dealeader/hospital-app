<header class="border-bottom py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href= {{ route('home') }} >
                    {{-- <img src="../img/Лого.png" alt=""> --}}
                    Новости
                </a>
            </div>

            <div class="">
                <ul class="d-flex list-unstyled ">
                    <li class="ms-3"><a href={{ route('appointment') }}>запись на прием</a></li>
                    <li class="ms-3"><a href={{ route('login') }}>личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>