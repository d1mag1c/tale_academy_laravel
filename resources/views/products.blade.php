@extends('layout.main')
@section('content')


    <section class="products">

        <div class="products-categories">
            <p class="products-categories__title">Категории:</p>
            @foreach($categories as $category)

                <a href="">

                    {{$category}}

                </a>

            @endforeach
        </div>

        <div class="products-content">

            @foreach($products as $product)
                @include('products-card')
            @endforeach

        </div>


    </section>

@endsection
