@extends('front.layout')
@section('content')
    

<section class="flat-title-page style2">
    <img class="bgr-gradient gradient1" src="{{ asset('front/assets/images/backgroup-secsion/bg-gradient1.png') }}" alt="">
    <img class="bgr-gradient gradient2" src="{{ asset('front/assets/images/backgroup-secsion/bg-gradient2.png') }}" alt="">
    <img class="bgr-gradient gradient3" src="{{ asset('front/assets/images/backgroup-secsion/bg-gradient3.png') }}" alt="">
    <div class="shape item-w-16"></div>
    <div class="shape item-w-22"></div>
    <div class="shape item-w-32"></div>
    <div class="shape item-w-48"></div>
    <div class="shape style2 item-w-51"></div>
    <div class="shape style2 item-w-51 position2"></div>
    <div class="shape item-w-68"></div>
    <div class="overlay"></div>
    <div class="swiper-container mainslider home auctions">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-item">	
                    <div class="themesflat-container ">
                        <div class="wrap-heading flat-slider flex">
                            <div class="content">
                                <h2 class="heading">Discover, find,
                                </h2>	
                                <h1 class="heading mb-style"><span class="tf-text s1">Sell extraordinary</span>                                          
                                </h1>
                                <h1 class="heading">Monster NFTs</h1>
                                <p class="sub-heading mg-t-29 mg-bt-44">Marketplace for monster character cllections non fungible token NFTs
                                </p>
                                <div class="flat-bt-slider flex style2">
                                    <a href="explore-1.html" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
                                    </span></a>
                                    <a href="create-item.html" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Create
                                    </span></a>
                                </div>
                            </div>
                            <div class="image">
                                <img class="img-bg" src="{{ asset('front/assets/images/backgroup-secsion/img-bg-sliderhome2.png') }}" alt="Image">
                                <img src="{{ asset('front/assets/images/box-item/imgslider2.png') }}" alt="Image">

                                
                            </div>
                        </div>
                        
                    </div>					                           
                </div><!-- item-->
            </div>
            <div class="swiper-slide">
                <div class="slider-item">	
                    <div class="themesflat-container">
                        <div class="wrap-heading flat-slider text-center two">
                            <h2 class="heading">Discover, and collect
                            </h2>	
                            <h1 class="heading"><span class="tf-text s1">extraordinary</span>
                                <span>Monster NFTs</span>
                            </h1>
                            <p class="sub-heading mg-t-29 mg-bt-50">Marketplace for monster character cllections non fungible token NFTs
                            </p>
                            <div class="flat-bt-slider flex">
                                <a href="explore-1.html" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
                                </span></a>
                                <a href="create-item.html" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Create
                                </span></a>
                            </div>
                        </div>
                    </div>					                           
                </div><!-- item-->
            </div>
            <div class="swiper-slide">
                <div class="slider-item">	
                    <div class="themesflat-container flex">
                        <div class="image three">

                            
    
                            <img src="{{ asset('front/assets/images/box-item/imgslider-3.png') }}" alt="Image">
                            <img class="img-bg" src="{{ asset('front/assets/images/backgroup-secsion/img-bg-sliderhome3.png') }}" alt="Image">
                        </div>
                        <div class="wrap-heading flat-slider h3 three">
                            <h2 class="heading">Discover, and collect
                            </h2>	
                            <h2 class="heading">extraordinary</h2>
                            <h2 class="heading h3"><span class="fill">Monster </span>NFTs</h2>
                            <p class="sub-heading mt-29 mb-35">Marketplace for monster character cllections non fungible token NFTs
                            </p>
                            <div class="flat-bt-slider flex style2">
                                <a href="explore-1.html" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
                                </span></a>
                                <a href="create-item.html" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Create
                                </span></a>
                            </div>
                        </div>
                    </div>					                           
                </div><!-- item-->
            </div>
        </div>     
        <div class="swiper-pagination"></div>               
    </div>    
    <div class="swiper-button-next btn-slide-next active"></div>
    <div class="swiper-button-prev btn-slide-prev"></div>                   
</section>

<section class="tf-section live-auctions style3 pad-b-54 no-pt-mb mobie-pb-70">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-soft">
                    <div class="soft-left">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                        
                                <span class="inner">Category</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">
                                <div class='sort-filter category active'>
                                    
                                    <span><img src="{{ asset('front/assets/images/icon/menu.png') }}" alt="" /> All</span>
                                    <i class="fal fa-check"></i>
                                </div>
                            </a>
                            @foreach($categories as $category)
                                <a data-id="{{$category->id}}" class="dropdown-item category-item">
                                    <div class='sort-filter category category{{$category->id}}'>
                                        <span>{{-- <img src="assets/images/icon/rainbow.png" alt="" /> --}}{{$category->category_name}}</span>
                                        <i class="fal fa-check"></i>
                                    </div>
                                </a>
                            @endforeach
                            
                            </div>
                        </div>
                        
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section live-auctions style3 pad-b-54 no-pt-mb mobie-pb-70">
    <div class="themesflat-container">
        
        @foreach($market as $item)
        @if(count($item->market))
        <div class="row">
            <div class="col-md-12">
                <div class="heading-live-auctions mg-bt-21">
                    <h2 class="tf-title pad-l-7">
                        {{$item->category_name}}</h2>
                    <a href="explore-3.html" class="exp style2">EXPLORE MORE</a>
                </div>
            </div>
            
            @foreach($item->market as $market_item)
            <div class="fl-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="sc-card-product">
                    <div class="card-media">
                        
                        <a href="{{ route('item-details', $market_item->id) }}"><img src="{{ $market_item->image }}" alt="Image"></a>
                    </div>
                    <div class="card-title">
                        <h5 class="style2"><a href="item-details.html">{{$market_item->title}}</a></h5>
                    </div>
                    <div class="meta-info">
                        <div class="author">

                            <div class="info">
                                <span>Owned By</span>
                                <h6> <a href="author02.html">{{$market_item->author}}</a> </h6>
                            </div>
                        </div>
                        <div class="price">
                            <span>Price</span>
                            <h5> {{$market_item->price}} ETH</h5>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <a href="{{ route('item-details', $market_item->id) }}" class="sc-button style bag fl-button pri-3"><span>Details</span></a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12 wrap-inner load-more text-center mg-t-4">
                <a href="#" id="loadmore" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
            </div>
        </div>
        @endif
        @endforeach

    </div>
</section>
@endsection
@section('js')

@parent('js')
    <script src="{{ asset('front/assets/filter/filter.js') }}"></script>
@endsection