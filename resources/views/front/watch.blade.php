@extends('layout.inner')
@section('content')
    <div class="men">
        <div class="container">
            <div class="col-md-9 single_top">
                <div class="single_left">
                    <div class="labout span_1_of_a1">

                        <div class="flexslider">

                            <ul class="slides">
                                @foreach($product->image as $image)
                                <li data-thumb="{{url('uploads',$image->name)}}">
                                    <img src="{{url('uploads',$image->name)}}" />
                                </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cont1 span_2_of_a1 simpleCart_shelfItem">
                        <h1>{{$product->name}}</h1>
                        <p class="availability">Availability: <span class="color">{{$product->available}}</span></p>
                        <div class="price_single">
                            <span class="reducedfrom">${{$product->price_before}}</span>
                            <span class="amount item_price actual">${{$product->price}}</span><a href="#">click for offer</a>
                        </div>
                        <h2 class="quick">Quick Overview:</h2>
                        <p class="quick_desc"> {{$product->overview}}</p>
                        <div class="wish-list">
                            <ul>
                                <li class="wish"><a href="{{route('check.wishlist',$product->id)}}">Add to Wishlist</a></li>
                                <li class="compare"><a href="#">Add to Compare</a></li>
                            </ul>
                        </div>
                        <ul class="size">
                            <h3>Length</h3>
                            <li><a href="#">32</a></li>
                            <li><a href="#">34</a></li>
                        </ul>
                        <div class="quantity_box">
                            <ul class="product-qty">
                                <span>Quantity:</span>
                                <select name="qty">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </ul>
                            <ul class="single_social">
                                <li><a href="#"><i class="fb1"> </i> </a></li>
                                <li><a href="#"><i class="tw1"> </i> </a></li>
                                <li><a href="#"><i class="g1"> </i> </a></li>
                                <li><a href="#"><i class="linked"> </i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <a href="{{route('cart.addItems',$product->id)}}" class="btn btn-primary btn-normal btn-inline btn_form button item_add item_1" target="_self">Add to cart</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                        <li><a href="#">{{$product->description}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 tabs">
                <h3 class="m_1">Related Products</h3>

                @foreach($related_products as $product)

                <ul class="product">
                    @foreach($product->image as $image)
                    <li class="product_img"><img src="{{url('uploads',$image->name)}}" class="img-responsive" alt=""/></li>
                    @break
                    @endforeach
                    <li class="product_desc">
                        <h4><a href="#">{{$product->name}}</a></h4>
                        <p class="single_price">${{$product->price}}</p>
                        <a href="{{route('check.wishlist',$product->id)}}" class="link-cart">Add to Wishlist</a>
                        <a href="{{route('cart.addItems',$product->name)}}" class="link-cart">Add to Cart</a>
                    </li>
                    <div class="clearfix"> </div>

                </ul>
                @endforeach
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection