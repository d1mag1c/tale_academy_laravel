<a href="{{route('product.show', $product->slug)}}">
<div class="products-card">
    <div class="products-card__image">
        <img src="{{$product->image}}" alt="">
    </div>
    <div class="products-card__title">
        <p>{{$product->name}}</p>
    </div>
    <div class="products-card__price">
        <p>{{$product->price}} $</p>
    </div>
</div>
</a>
