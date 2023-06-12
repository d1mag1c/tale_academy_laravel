@extends('layout.app')
@section('content')

    @foreach($articles as $post)
        <div class="post" id="{{$post->id}}">
            <div class="post__img">
                <a href="{{route('blog.show', $post->slug)}}">
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
                <h2><a href="{{route('blog.show', $post->slug)}}">{{$post->title}}</a></h2>
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
