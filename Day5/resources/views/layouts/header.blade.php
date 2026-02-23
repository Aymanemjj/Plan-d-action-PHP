    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        @if (Auth::user()->role->name == 'user')
                            <x-nav-link :href="route('article.create')">
                                {{ __('Write') }}
                            </x-nav-link>
                        @endif
                        <x-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-nav-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    @endauth
                    @guest
                        <x-nav-link href="/login">
                            {{ __('LogIn') }}
                        </x-nav-link>
                        <x-nav-link href="/register">
                            {{ __('Register') }}
                        </x-nav-link>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
