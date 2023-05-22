@extends('layout')

@section('title', 'List Product')

@section('content')
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".women">Women’s</li>
                    <li data-filter=".men">Men’s</li>
                    <li data-filter=".kid">Kid’s</li>
                    <li data-filter=".accessories">Accessories</li>
                    <li data-filter=".cosmetic">Cosmetics</li>
                </ul>
            </div>
        </div>
        <div class="row isotope-grid">
            @foreach ($productList as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{url($product->img)}}" alt="IMG-PRODUCT">

                        <a href=""
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('products.show', $product->id)}}"
                                class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$product ->name}}
                            </a>

                            <span class="stext-105 cl3">
                                ${{$product->price}}
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png"
                                    alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection