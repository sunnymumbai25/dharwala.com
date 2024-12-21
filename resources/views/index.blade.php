@extends('layouts.app')

@section('content')
<div class="banner banner-boxes">
  <div class="slider-content"><span class="prevControl sliderControl"> <i class="fa fa-angle-left fa-3x "></i></span> <span class="nextControl sliderControl"> <i class="fa fa-angle-right fa-3x "></i></span>
    <div class="swiper-container swiper-container-h">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-2x">
          <div class="box-slider-content">
            <div class="box-text">
              <h1>NEW COLLECTION</h1>
              <p>Veggies es bonus vobis, proinde vos postulo essum magis
                kohlrabi welsh onion daikon amaranth.</p>
              <a class="btn btn-stroke-light"> SHOP NOW</a></div>
            <div class="box-content-overly"> </div>
            <a href="#" class="box-img"> <img src="{{ asset('images/slider/box/1.jpg') }}" alt="img"></a></div>
        </div>
        <div class="swiper-slide slide-2x">
          <div class="slider-box-top">
            <div class="box-slider-content">
              <div class="box-text-table">
                <div class="box-text-cell">
                  <h1 class="bolder-style light"><a href="#">SALE</a></h1>
                  <span class="bolder-sub"> <a href="#"> EXTRA 80% OFF </a> </span></div>
              </div>
              <div class="box-content-overly"> </div>
              <a href="#" class="box-img"> <img src="{{ asset('images/slider/box/2a.jpg') }}" alt="img"></a></div>
          </div>
          <div class="slider-box-bottom">
            <div class="box-slider-content">
              <div class="box-price-tag"><span class="price">$200</span></div>
              <a href="#" class="box-img"> <img src="{{ asset('images/slider/box/2b.jpg') }}" alt="img"> </a>
              <div class="box-content-overly"><a href="#" class="box-blank-url"> </a></div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-2x">
          <div class="box-slider-content">
            <div class="box-text bottom-align">
              <h1>MEN COLLECTION</h1>
              <a class="btn btn-stroke-light"> SHOP NOW</a></div>
            <a href="#" class="box-img"> <img src="{{ asset('images/slider/box/3.jpg') }}" alt="img"></a>
            <div class="box-content-overly"><a href="#" class="box-blank-url"> </a></div>
          </div>
        </div>
        <div class="swiper-slide slide-4x">
          <div class="box-4in a">
            <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/4a.jpg') }}" alt="img"></a>
              <div class="box-content-overly"><a href="#" class="box-blank-url"> </a></div>
            </div>
          </div>
          <div class="box-4in b">
            <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/4b.jpg') }}" alt="img"></a>
              <div class="box-content-overly"><a href="#" class="box-blank-url"> </a></div>
            </div>
          </div>
          <div class="box-4in c">
            <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/4c.jpg') }}" alt="img"></a>
              <div class="box-content-overly box-content-overly-white">
                <div class="box-text-table">
                  <div class="box-text-cell"><a class="btn btn-stroke-dark"> VIEW DEAL</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-4in d">
            <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/4d.jpg') }}" alt="img"></a>
              <div class="box-content-overly box-content-overly-white">
                <div class="box-text-table">
                  <div class="box-text-cell"><a class="btn btn-stroke-dark"> VIEW DEAL</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-2x">
          <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/6.jpg') }}" alt="img"></a>
            <div class="box-content-overly box-content-overly-white">
              <div class="box-text-table">
                <div class="box-text-cell ">
                  <div class="box-text-cell-inner dark">
                    <h1>New Summer Look</h1>
                    <p>Veggies es bonus vobis, proinde vos postulo essum magis
                      kohlrabi welsh onion daikon amaranth.</p>
                    <a class="btn btn-stroke-dark"> SHOP NOW</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-2x">
          <div class="slider-box-top">
            <div class="box-slider-content">
              <div class="box-content-overly box-content-overly-white">
                <div class="box-text-table">
                  <div class="box-text-cell"><span class="price dealprice"> $ 120 </span> <a class="btn btn-stroke-dark"> VIEW DEAL</a></div>
                </div>
              </div>
              <a href="#" class="box-img"> <img src="{{ asset('images/slider/box/7b.jpg') }}" alt="img"></a></div>
          </div>
          <div class="slider-box-bottom">
            <div class="box-4in c">
              <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/7b1.jpg') }}" alt="img"></a>
                <div class="box-content-overly box-content-overly-white">
                  <div class="box-text-table">
                    <div class="box-text-cell"><span class="price"> $ 450 </span> <a class="btn btn-stroke-dark"> VIEW DEAL</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-4in d">
              <div class="box-slider-content"><a href="#" class="box-img"> <img src="{{ asset('images/slider/box/7b2.jpg') }}" alt="img"></a>
                <div class="box-content-overly box-content-overly-white">
                  <div class="box-text-table">
                    <div class="box-text-cell"><span class="price"> $ 680 </span> <a class="btn btn-stroke-dark"> VIEW DEAL</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide-1x">
          <div class="box-slider-content"><a href="#" class="box-img last-child-slide"> <img src="{{ asset('images/slider/box/5.jpg') }}" alt="img"></a>
            <div class="box-content-overly box-content-overly-white">
              <div class="box-text-table">
                <div class="box-text-cell ">
                  <div class="box-text-cell-inner dark">
                    <h1>Discover it</h1>
                    <p>Veggies es bonus vobis, proinde vos postulo essum magis
                      kohlrabi welsh onion daikon amaranth.</p>
                    <a class="btn btn-stroke-dark"> SHOP NOW</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box-pagination swiper-pagination"></div>
    </div>
  </div>
</div>
<div class="container main-container">
  <div class="row featuredPostContainer globalPadding style2">
    <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>
    <div id="productslider" class="owl-carousel owl-theme">
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/34.jpg') }}" alt="img" class="img-responsive"></a>
            <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
          </div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">consectetuer adipiscing </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/30.jpg') }}" alt="img" class="img-responsive"></a>
            <div class="promotion"><span class="discount">15% OFF</span></div>
          </div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">luptatum zzril delenit</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/36.jpg') }}" alt="img" class="img-responsive"></a>
            <div class="promotion"><span class="new-product"> NEW</span></div>
          </div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">eleifend option </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/9.jpg') }}" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">mutationem consuetudium </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/12.jpg') }}" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">sequitur mutationem </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/13.jpg') }}" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">consuetudium lectorum.</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/21.jpg') }}" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">parum claram</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/24.jpg') }}" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">duis dolore </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
      <div class="item">
        <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
          <div class="image">
            <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
            <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/15.jpg') }}" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="{{ route('product-details') }}">feugait nulla facilisi</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span></div>
          <div class="price"><span>$25</span></div>
          <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="parallax-section parallax-image-1">
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="parallax-content clearfix">
          <h1 class="parallaxPrce"> $200 </h1>
          <h2 class="uppercase">FREE INTERNATIONAL SHIPPING! Get Free Shipping Coupons</h2>
          <h3> Energistically develop parallel mindshare rather than premier deliverables. </h3>
          <div style="clear:both"></div>
          <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> SHOP NOW </a></div>
      </div>
    </div>
  </div>
</div>
<div class="container main-container">
  <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
    <h3 class="section-title style2 text-center"><span>FEATURES PRODUCT</span></h3>
    <div class="container">
      <div class="row xsResponse">
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/30.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">aliquam erat volutpat</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/31.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="discount">15% OFF</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">ullamcorper suscipit lobortis </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/34.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="new-product"> NEW</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/12.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">humanitatis per</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/33.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">Eodem modo typi</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/10.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">sequitur mutationem </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/37.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">consuetudium lectorum.</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/35.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">parum claram</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/13.jpg') }}" alt="img" class="img-responsive"></a></div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">duis dolore </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/21.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">aliquam erat volutpat</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/14.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="discount">15% OFF</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">ullamcorper suscipit lobortis </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product"> <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left"> <i class="glyphicon glyphicon-heart"></i> </a>
            <div class="image">
              <div class="quickview"> <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a> </div>
              <a href="{{ route('product-details') }}"><img src="{{ asset('images/product/17.jpg') }}" alt="img" class="img-responsive"></a>
              <div class="promotion"><span class="new-product"> NEW</span></div>
            </div>
            <div class="description">
              <h4><a href="{{ route('product-details') }}">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span></div>
            <div class="price"><span>$25</span></div>
            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="load-more-block text-center"><a class="btn btn-thin" href="#"> <i class="fa fa-plus-sign">+</i> load more products</a></div>
      </div>
    </div>
  </div>
  <hr class="no-margin-top">
  <div class="width100 section-block ">
    <div class="row featureImg">
      <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="{{ asset('images/site/new-collection-1.jpg') }}" class="img-responsive" alt="img"></a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="{{ asset('images/site/new-collection-2.jpg') }}" class="img-responsive" alt="img"></a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="{{ asset('images/site/new-collection-3.jpg') }}" class="img-responsive" alt="img"></a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6"><a href="category.html"><img src="{{ asset('images/site/new-collection-4.jpg') }}" class="img-responsive" alt="img"></a> </div>
    </div>
  </div>
  <div class="width100 section-block">
    <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-left"></i> </a></h3>
    <div class="row">
      <div class="col-lg-12">
        <ul class="no-margin brand-carousel owl-carousel owl-theme">
          <li><a><img src="{{ asset('images/brand/1.gif') }}" alt="img"></a></li>
          <li><img src="{{ asset('images/brand/2.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/3.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/4.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/5.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/6.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/7.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/8.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/1.gif') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/2.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/3.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/4.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/5.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/6.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/7.png') }}" alt="img"></li>
          <li><img src="{{ asset('images/brand/8.png') }}" alt="img"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="parallax-section parallax-image-2">
  <div class="w100 parallax-section-overley">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="parallax-content clearfix">
            <h1 class="xlarge"> Trusted Seller 500+ </h1>
            <h5 class="parallaxSubtitle"> Lorem ipsum dolor sit amet consectetuer </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog" aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> </div>
  </div>
@endsection
