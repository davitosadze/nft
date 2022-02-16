@extends('front.layout')
@section('content')
  
<section class="flat-title-page inner">
    <div class="overlay"></div>
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading mg-bt-12">
                    <h1 class="heading text-center">{{$market_item->title}}</h1>
                </div>
                <div class="breadcrumbs style2">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">{{$market_item->category->category_name}}</a></li>
                        <li>{{$market_item->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>                    
</section>

<div class="tf-section tf-item-details">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="content-left">
                    <div class="media">
                        <img src="assets/images/box-item/images-item-details.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="content-right">
                    <div class="sc-item-details">
                        <h2 class="style2">{{$market_item->title}}</h2>
                  
                        <div class="client-infor sc-card-product">
                            <div class="meta-info">
                                <div class="author">

                                    <div class="info">
                                        <span>Owned By</span>
                                        <h6> <a href="author02.html">{{$market_item->author}}</a> </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-info">
                                <div class="item meta-price">
                                    <span class="heading">Price</span>
                                    <div class="price">
                                        <div class="price-box">
                                            <h5> {{$market_item->price}} ETH</h5>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                              
                        </div>

                        <div class="platform-links style-1">
                            
                            <ul>
                                @foreach($market_item->platforms as $platform)
                                <li class="link"><a target="_blank" href="{{$platform->link}}"><i>{{$platform->platform->title}}</i></a></li>
                                @endforeach
                                
                            </ul>
                        </div>

                        <div class="flat-tabs themesflat-tabs">
                            <ul class="menu-tab tab-title">
 
                                <li class="item-title active">
                                    <span class="inner">Info</span>
                                </li>
                                
 
                            </ul>
                            <div class="content-tab">

                                <div class="content-inner tab-content">
                                    <div class="provenance">
                                        <p>{!! $market_item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /tf item details -->

@endsection