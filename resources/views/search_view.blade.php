@foreach ($allResults as $result)
    <div class="row row_item">
        <div class="col-sm-4">
            <figure>
                <a href="jacascript:void(0);">
                    <img class="img-fluid lazy"
                        src="https://i.dummyjson.com/data/products/{{ rand(1, 20) }}/thumbnail.jpg"
                        data-src="https://i.dummyjson.com/data/products/{{ rand(1, 20) }}/thumbnail.jpg" alt="">
                </a>
            </figure>
        </div>
        <div class="col-sm-8">
            <a href="javascript:void(0);">
                <h3>{{ $result['name'] }}</h3>
            </a>
            <p>{{ $result['description'] }}</p>
            <div class="price_box">
                <span class="new_price">{{ $result['price'] }}</span>
            </div>
        </div>
    </div>
@endforeach

<!-- /row_item -->
<div class="pagination__wrapper">
    {{ $allResults->links() }}
</div>
