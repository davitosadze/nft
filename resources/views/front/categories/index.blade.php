@extends('front.layout')
@section('title', $category->category_name)
@section('content')
    <section class="flat-title-page inner">
        <div class="overlay"></div>
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading mg-bt-12">
                        <h1 class="heading text-center">{{ $category->category_name }}</h1>
                    </div>
                    <div class="breadcrumbs style2">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>{{ $category->category_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tf-section sc-explore-1">
        <div class="themesflat-container">
            <div class="row">

                @foreach ($market as $market_item)
                    <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="sc-card-product">
                            <div class="card-media">

                                <a href="{{ route('item-details', $market_item->id) }}"><img
                                        src="{{ $market_item->image }}" alt="Image"></a>
                            </div>
                            <div class="card-title">
                                <h5 class="style2"><a href="item-details.html">{{ $market_item->title }}</a>
                                </h5>
                            </div>
                            <div class="meta-info">
                                <div class="author">

                                    <div class="info">
                                        <span>Owned By</span>
                                        <h6> <a href="author02.html">{{ $market_item->author }}</a> </h6>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>Price</span>
                                    <h5> {{ $market_item->price }} ETH</h5>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <a href="{{ route('item-details', $market_item->id) }}"
                                    class="sc-button style bag fl-button pri-3"><span>Details</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 wrap-inner load-more text-center">
                    <a href="#" id="loadmore" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
