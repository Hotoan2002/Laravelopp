@extends('layout')

@section('title', 'List Product')

@section('content')

<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                @foreach($categories as $cate)
                                <div class="card">
                                    <div class="card-heading active">
                                        <a href="{{ route('categories.show', $cate->id) }}">{{ $cate->name }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="99"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Price:</p>
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                        <a href="#">Filter</a>
                    </div>
                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>Shop by size</h4>
                        </div>
                        <div class="size__list">
                            <label for="xxs">
                                xxs
                                <input type="checkbox" id="xxs">
                                <span class="checkmark"></span>
                            </label>
                            <!-- Add more size labels as needed -->
                        </div>
                    </div>
                    <div class="sidebar__color">
                        <div class="section-title">
                            <h4>Shop by color</h4>
                        </div>
                        <div class="size__list color__list">
                            <label for="black">
                                Blacks
                                <input type="checkbox" id="black">
                                <span class="checkmark"></span>
                            </label>
                            <!-- Add more color labels as needed -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ $product->img }}">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li>
                                        <a href="{{ $product->img }}" class="image-popup">
                                            <span class="arrow_expand"></span>
                                        </a>
                                    </li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $product->name }}</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">${{ $product->price }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12 text-center">
                    <div class="pagination__option">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection