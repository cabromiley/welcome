<section class="container m-auto overflow-hidden hero">
    <div class="hero__image" style="background-image: url({{ $image ?? '#' }})"></div>
    <div class="p-8 w-2/3">
        <h1 class="hero__title">{{ $title ?? 'hello title' }}</h1>
        <h2 class="hero__subtitle">{{ $subtitle ?? '' }}</h2>
        <ul class="tags">
            @foreach($skills as $skill)
            <li class="tags__item">{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</section>
