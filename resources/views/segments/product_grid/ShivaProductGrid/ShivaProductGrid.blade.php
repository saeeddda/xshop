<section class='ShivaProductGrid xshop-product-item'>
    <a class="fav-btn" data-slug="{{$product->slug}}" data-is-fav="{{$product->isFav()}}"
       data-bs-custom-class="custom-tooltip"
       data-bs-toggle="tooltip" data-bs-placement="auto" title="{{__("Add to / Remove from favorites")}}">
        <i class="ri-heart-line"></i>
        <i class="ri-heart-fill"></i>
    </a>
    <a class="compare-btn" data-slug="{{$product->slug}}"
       data-bs-custom-class="custom-tooltip"
       data-bs-toggle="tooltip" data-bs-placement="auto"
       title="{{__("Add to/ Remove from compare list")}}">
        <i class="ri-scales-3-line"></i>
    </a>
    <a href="{{$product->webUrl()}}">
        <img src="{{$product->thumbUrl()}}" alt="{{$product->name}}" loading="lazy">
        <h3>
            {{$product->name}}
        </h3>
        <div class="prices">
            @if($product->hasDiscount())
                <span class="old-price">
                    {{$product->oldPrice()}}
                </span>
            @endif
            <span class="price">
                {{$product->getPrice()}}
            </span>
        </div>
        <div class="p-2">
            <a href="{{ route('client.product-card-toggle',$product->slug) }}"
               class="btn btn-outline-primary w-100 add-to-card">
                <i class="ri-shopping-bag-3-line"></i>
                {{__("Add to card")}}
            </a>
        </div>
    </a>
</section>
