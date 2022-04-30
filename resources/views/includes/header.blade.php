<header class="border-bottom py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href= {{ route('home') }} >
                    {{-- <img src="../img/Лого.png" alt=""> --}}
                    Новости
                </a>
            </div>

            @auth("web")
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href={{ route('appointment') }}>запись на прием</a></div>
                    <div class="p-2">
                        <a href={{ route('account') }}>{{ Auth::user()->first_name }}</a>
                    </div>
                </div>
            @endauth

            @guest("web")
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href={{ route('appointment') }}>запись на прием</a></div>
                    <div class="p-2"><a href={{ route('login') }}>личный кабинет</a></div>
                </div>
            @endguest

            
    </div>
</header>