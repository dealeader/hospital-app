<header class="border-bottom py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <div class="p-2">
                    <a href= {{ route('home') }} >
                        {{-- <img src="../img/Лого.png" alt=""> --}}
                        Новости
                    </a>
                </div>
            </div>

            @auth("web")

                @if (Auth::user()->role == 'doctor')
                    <div class="d-flex ">
                        <div class="p-2">
                            <a href={{ route('admin.newsposts.index') }}>посты</a>
                        </div>
                        <div class="p-2">
                            <a href={{ route('admin.users.index') }}>пользователи</a>
                        </div>
                        <div class="p-2">
                            <a href={{ route('admin.categories.index') }}>категории</a>
                        </div>
                        <div class="p-2">
                            <a href={{ route('admin.times.index') }}>время записи</a>
                        </div>
                    </div>
                @endif

                <div class="d-flex">
                    <div class="p-2">
                        <a class="btn btn-success" href={{ route('appointment') }}>запись на прием</a>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-success" href={{ route('account') }}>{{ Auth::user()->first_name }}</a>
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
