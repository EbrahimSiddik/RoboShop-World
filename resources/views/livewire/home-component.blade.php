<main id="main">

    <style>
        .category-banner {
            padding: 15px 0 0 0;
            display: flex;
        }

         /* Categories */
        .Categories {
            /* padding: 0 20px 0 0; */
            margin-right: 15px;
            height: 60%;
            width: 20%;
            font-size: 16px;
            margin-left: 50px;
            z-index: 2;
            background-color: #F7F7F7;
        }

        /* .Categories ul {
            margin-left: 10px;
        }*/

        .Categories ul li {
            list-style-type: none;
            list-style: none;
            font-weight: bold;
            padding: 0px;
            cursor: pointer;
            color: #1A2C4D;
        } 

        .Categories ul li:hover {
            color: rgb(72, 193, 240);
        }
    </style>

     <!-- Category and Banner --> 
    <div class="category-banner">
        <!-- Categories-->
        <div class="Categories">
          <ul style="background-color: #1A2C4D; padding: 8px;">
            <li style="font-size: 20px; color: white; "><i class="fas fa-bars"></i>  Categories</li>
          </ul>
          <ul style="padding: 0 10px;">
            @foreach ($side_categories as $side_category)
                <a href="{{route('product.category', ['category_slug'=>$side_category->slug])}}"><li style="margin-top: -9px;">{{$side_category->name}}</li></a>
                <hr style="margin-top: -3px; border-width: 2px;">
            @endforeach
          </ul>
        </div>
        <div class="container" style="margin-top: -10px;">
            <div class="wrap-main-slide" style="max-width: 850px;">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    <div class="item-slide">
                        <img src="{{asset('asset/banner/banner_01.png')}}" alt="" class="img-slide" >
                    </div>
                    <div class="item-slide">
                        <img src="{{asset('asset/banner/banner_02.jpeg')}}" alt="" class="img-slide">
                    </div>
                    <div class="item-slide">
                        <img src="{{asset('asset/banner/banner_03.jpeg')}}" alt="" class="img-slide">
                    </div>
                </div>
            </div>
  
        </div> 
    </div>  
  
        <!-- Banner Slider -->
        
        </div>

    <div class="container">

        <!--MAIN SLIDE-->
        {{-- <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_01.png')}}" alt="" class="img-slide">
                </div>
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_02.jpeg')}}" alt="" class="img-slide">
                </div>
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_03.jpeg')}}" alt="" class="img-slide">
                </div>
            </div>
        </div> --}}

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_banner_1.jpeg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_banner_2.jpeg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        {{-- Features --}}
        <div>
            <style>
                /* Feature */
                #feature {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }

                #feature img {
                    /* width: 180px;
                    height: 90px; */
                }

                #feature .fe-box{
                    width: 235px;
                    height: 140px;
                    text-align: center;
                    margin-top: 20px;
                    padding: 3px 10px;
                    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
                    border: 2px solid rgb(72, 193, 240);
                }

                #feature .fe-box.fe-box.fe-box.fe-box:hover{
                    box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
                }

                #feature .fe-box p{
                    font-size: 11px;
                    padding: 9px 8px 6px 8px;
                    line-height: 1;
                    color: #fafafa;
                    font-weight: bold;
                    background-color: #1A2C4D;
                    background-size: 240px;
                }
            </style>

            <!-- Features -->
            <section id="feature" class="section-p1">
                <div class="fe-box">
                    <img src="asset/fast-delivery.png" alt="">
                    <p>Delivery within 48 Hours</p>
                </div>
                
                <div class="fe-box">
                    <img src="asset/free-shiping.jpeg" alt=" ">
                    <p>FREE SHIP-ON ORDER OVER ৳3000</p>
                </div>
                <div class="fe-box">
                    <img src="asset\24_7.jpeg" alt="" >
                    <p>24/7 Support</p>
                </div>
                <div class="fe-box">
                    <img src="asset/gift.png" alt="" >
                    <p style="margin-top: 10px;">GIFT ON ORDER OVER ৳2500</p>
                </div>
        
            </section>
        </div>

        <!--On Sale-->
        @if($sproducts->count()>0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="{{Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s')}}"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    @foreach ($sproducts as $product)
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" style="height: 220px;" alt="{{$product->name}}"></figure>
                                </a>

                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><ins><p class="product-price">৳{{$product->sale_price}}</p></ins><del><p class="product-price">৳{{$product->regular_price}}</p></del></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endif

        
        <!--Featured Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Featured Products</h3>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($fproducts as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" style="height: 220px;" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">featured</span>
                                            </div>
                                            {{-- <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div> --}}
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/wide_banner_2.jpeg')}}" style="height: 150px; width: 1170px;" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($lproducts as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" style="height: 220px;" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            {{-- <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div> --}}
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/wide_banner_1.jpeg')}}" style="height: 150px; width: 1170px;" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($categories as $key=>$category)
                            <a href="#category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">
                        @foreach($categories as $key=>$category)
                        <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                               
                                    @php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    @endphp

                                    @foreach ($c_products as $c_product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('product.details', ['slug'=>$c_product->slug])}}" title="{{$c_product->name}}">
                                                    <figure><img src="{{ asset('asset/product_image')}}/{{$c_product->image}}" style="height: 220px;" alt="{{$product->name}}"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('product.details', ['slug'=>$c_product->slug])}}" class="product-name"><span>{{$c_product->name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">৳{{$c_product->regular_price}}</span></div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>		

        <div class="our-team-info">
            <h4 class="title-box">বিজ্ঞানপুর যাদের সার্ভ করেছে</h4>
            <div class="our-staff">
                <div 
                    class="slide-carousel owl-carousel style-nav-1 equal-container" 
                    data-items="5" 
                    data-loop="false" 
                    data-nav="true" 
                    data-dots="false"
                    data-margin="30"
                    data-responsive='{"0":{"items":"1"},"480":{"items":"3"},"768":{"items":"4"},"992":{"items":"4"},"1200":{"items":"4"}}' >

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Md.Ebrahim Zain">
                                <figure><img src="asset/uni_logo/kuet.png" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
                            </a>
                        </div>
                        <div class="info" style="text-align: center;">
                            <b class="name">KUET</b>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Md.Ebrahim Zain">
                                <figure><img src="asset/uni_logo/buet.png" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
                            </a>
                        </div>
                        <div class="info" style="text-align: center;">
                            <b class="name">BUET</b>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Md.Ebrahim Zain">
                                <figure><img src="asset/uni_logo/kuetr.png" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
                            </a>
                        </div>
                        <div class="info" style="text-align: center;">
                            <b class="name">KUET Mars Rover</b>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Md.Ebrahim Zain">
                                <figure><img src="asset/uni_logo/buetr.png" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
                            </a>
                        </div>
                        <div class="info" style="text-align: center;">
                            <b class="name">BUET Robotics Society</b>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="Md.Ebrahim Zain">
                                <figure><img src="asset/uni_logo/ruet.png" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
                            </a>
                        </div>
                        <div class="info" style="text-align: center;">
                            <b class="name">RUET</b>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</main>
