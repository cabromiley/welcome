@extends('layout.app')

@section('body-attr', 'class="bg-gray-100 h-screen antialiased leading-none"')

@section('body')
@include('components.hero', [
'image' => asset('img/me.jpg'),
'alt' => 'Me',
'title' => 'Curtis Bromiley',
'subtitle' => 'Web Developer',
'skills' => [ 'PHP', 'JS', 'Laravel', 'Vue.js', 'Tailwind', 'Sass' ]
])
@endsection
