<a href="/skills/{{ Str::slug($skill) }}"
    class="block flex flex-col justify-center items-center h-64 bg-gray-100 m-4 text-gray-800 hover:text-purple-800">
    <i class="fab fa-{{ $skill ?? '' }} fa-3x"></i>
    <span class="capitalize leading-loose">{{ $skill }}</span>
</a>
