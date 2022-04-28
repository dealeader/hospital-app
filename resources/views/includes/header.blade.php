<header class="border-bottom py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href= {{ route('home') }} >
                    {{-- <img src="../img/Лого.png" alt=""> --}}
                    Новости
                </a>
            </div>

            <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href={{ route('appointment') }}>запись на прием</a></div>
                    <div class="p-2"><a href={{ route('login') }}>личный кабинет</a></div>
        </div>
    </div>
</header>