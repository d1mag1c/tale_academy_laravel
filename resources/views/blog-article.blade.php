@extends('layout.app')
@section('content')

    <div class="post">
        <div class="post__img">

            <img src=
                     @if(isset($article->image))
                             {{$article->image}}
                             @else
                             '../img/blog-1.jpg'
                 @endif
                 alt="">

        </div>
        <div class="post__content">
            <h2>{{$article->title}}</h2>
            <p>{{$article->text}}</p>
        </div>
        <div class="post__content__date">
            <ul>
                <li><a href="#">Admin </a></li>
                <li>{{$article->publication_date}}</li>
            </ul>
        </div>
    </div>
    <section class="article-comments">
        @foreach($article->comments as $comment)
            @include('blog-article-comments')
        @endforeach

    </section>

@endsection
