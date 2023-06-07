@extends('layout.app')
@section('blog')

    @foreach($articles as $post)
        <div class="post">
            <div class="post__img">
                <a href="">
                    <img src=
                             @if(isset($post->image))
                                     {{$post->image}}
                                     @else
                                     'img/blog-1.jpg'
                         @endif
                         alt="">
                </a>
            </div>
            <div class="post__content">
                <h2><a href="">{{$post->title}}</a></h2>
                <p>{{$post->text}}</p>
            </div>
            <div class="post__content__date">
                <ul>
                    <li><a href="#">Admin </a></li>
                    <li>{{$post->publication_date}}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection
