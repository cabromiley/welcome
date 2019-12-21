@include('components.header', [ 'text' => 'Skills' ])


<div class="container m-auto flex flex-wrap">
    @php
    $skills = [ 'php', 'js', 'laravel', 'vuejs', 'tailwind', 'sass' ]
    @endphp
    @foreach($skills as $skill)
    <div class="w-1/3">
        @include('components.skill-card', [ 'skill' => $skill ])
    </div>
    @endforeach
</div>
