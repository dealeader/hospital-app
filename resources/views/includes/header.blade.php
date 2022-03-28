<header class="border-bottom py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href= {{ route('home') }} >
                    <img src='/img/logo.png' alt="Новости" align="left" width = "150">       
                </a>
            </div>

            <div class="">
                <div class="d-flex flex-row">
                    <div class="ms-3"><a href={{ route('appointment') }}><x-button>запись на прием</x-button></a></div>
                    <div class="ms-3" style="margin-left:20px;"><a href={{ route('login') }}><x-button>личный кабинет</x-button></a></div>
                </div>
            </div>
        </div>
    </div>
</header>
