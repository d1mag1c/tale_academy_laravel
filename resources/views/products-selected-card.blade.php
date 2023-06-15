@extends('layout.main')
@section('content')

    <div class="products-selected-card">
        <div class="products-selected-card__img">

            <img src=
                     @if(isset($product->image))
                             {{$product->image}}
                             @else
                             '../img/blog-1.jpg'
                 @endif
                 alt="">

        </div>
        <div class="products-selected-card__content">
            <h2>{{$product->name}}</h2>
            <p>{{$product->price}} $</p>
        </div>
    </div>

@endsection
