<header class="container m-auto navigation">
    <div class="navigation__block">
        <span class="navigation__logo sm:navigation__marker">{{ config('app.name')}}</span>
        <span class="sm:inline-block hidden">Web Developer</span>
    </div>

    <nav class="navigation__block">
        <a href="{{ route('home') }}" class="navigation__marker navigation__link">Welcome</a>
        <a href="{{ route('about') }}" class="navigation__link">About</a>
    </nav>
</header>
