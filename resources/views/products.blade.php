@extends('layout.master')
@section('content')

@if(($title[0]) == 'Products')

<!-- Introduction --> 
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="display-4"> {{ $title[0] }} </h2>
            <br>
        </div>
    </div>
</div>

<!-- Products -->
<div class="col-12 text-center" id="allProducts">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product)
            <div class="col">
                <div class="card" id="product_card">
                    <img src="{{ URL('/img/products/' .$product['prod_img']) }}" class="card-img-top rounded" id="product_image">
                    <div class="card-body text-center">
                        <h5 class="card-title"> {{ $product['prod_name'] }} </h5>
                        <a href="/products/{{ $product['short_name'] }}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@else

<!-- Introduction --> 
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="display-4"> {{ $item['prod_name'] }} </h2>
            <br>
            <br>
        </div>

        <div class="col-lg-6">
            <img src="{{ URL('/img/products/' .$item['prod_img']) }}" class="rounded img-fluid">
            <h4>${{ $item['prod_price'] }}.00</h4>
        </div>
        <div class="col-md-12 col-lg-6" id="productDesciption">
            <p> {{ $item['prod_description'] }} </p>
            <div class="col-md-12 col-lg-12" >
                <select class="form-select">
                    @foreach ($item['prod_size'] as $size)
                        <option value="{{ $size }}"> {{ $size }} </option>
                    @endforeach
                </select>
                <br>
                <div class="form-floating">
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="5" placeholder="0">
                    <label for="quantity">Quantity</label>
                </div>
            </div>
            <br>
            <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
</div>


@endif

@endsection