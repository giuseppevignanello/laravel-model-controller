<header>
    <div class="logo text-center py-2 bg-danger">
        <img src="{{ Vite::asset('resources/img/ciak-logo.png') }}" alt="logo-ciack">
    </div>
    <nav class="nav justify-content-center ">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-danger text-white' : '' }} "
            href="{{ route('home') }}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-danger text-white' : '' }}"
            href="{{ route('about') }}">About</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-danger text-white' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>
    </nav>
</header>
