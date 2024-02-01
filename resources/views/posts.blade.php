@extends('layouts.main')
@section('container')
    {{-- <h2>Judul</h2>
    <h5>Asai</h5>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis ducimus neque, saepe praesentium id sint nam non
        modi! Laudantium assumenda quibusdam ex culpa facilis sunt animi. Iure esse aperiam cum!</p> --}}

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post['slug'] }}"> {{ $post['title'] }} </a>
            </h2>
            <h5>By: {{ $post['author'] }} </h5>
            <p> {{ $post['body'] }} </p>
        </article>
    @endforeach
@endsection
