@extends('layout.app')
@section('content')

    <div class="post">
        <div class="post__img">

                <img src=
                         @if(isset($post->image))
                                 {{$post->image}}
                                 @else
                                 '../img/blog-1.jpg'
                     @endif
                     alt="">

        </div>
        <div class="post__content">
            <h2>{{$post->title}}</h2>
            <p>{{$post->text}}</p>
        </div>
        <div class="post__content__date">
            <ul>
                <li><a href="#">Admin </a></li>
                <li>{{$post->publication_date}}</li>
            </ul>
        </div>
    </div>


@endsection
