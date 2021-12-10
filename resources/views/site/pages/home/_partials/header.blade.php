<header class="main-header">
    <div class="c-container relative">
        <div class="flex flex-col lg:flex-row flex-wrap items-center md:py-2 lg-py-0">
            <div class="w-full md:w-1/5">
                <span>{{ config('app.name') }}</span>
            </div>
            <div class="md:w-4/5 hidden md:block text-right">
                <nav class="nav">
                    <a data-scroll href="#about" class="nav__link">O Que é ? </a>
                    <a data-scroll href="#features" class="nav__link">Funcionalidades </a>
                    <a data-scroll href="#pricing" class="nav__link">Preço</a>
                    @if (Route::has('login'))
                        @guest
                            <a data-scroll href="{{ route('login') }}" class="nav__link">Login</a>
                            @else
                                <a href="{{ route('logout') }}" class="menu-link link-black-100 px-3 fs-8"
                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Logout
                                </a>
                        @endguest
                    @endif
                    <div>
                        <a data-scroll href="#contact"
                            class="nav__link button button--secondary button--border button--rounded ml-8">
                            Converse com a Gente
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                    </form>
                </nav>
            </div>
        </div>
    </div>
</header>
