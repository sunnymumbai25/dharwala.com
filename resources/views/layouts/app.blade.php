<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dharwala.com</title>
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="assets/css/skin-1.css">
    <link href="assets/plugins/swiper-master/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"> -->
    <link href="{{ asset('build/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/skin-1.css') }}">
    <link href="{{ asset('build/assets/plugins/swiper-master/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/css/style.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ asset('build/assets/js/pace.min.js')}}"></script>
    <script type="text/javascript">
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>

</head>

<body>
    <div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h3 class="modal-title-site text-center"> Login to TSHOP </h3>
            </div>
            <div class="modal-body">
            <div class="form-group login-username">
                <div>
                <input name="log" id="login-user" class="form-control input" size="20" placeholder="Enter Username"
                    type="text">
                </div>
            </div>
            <div class="form-group login-password">
                <div>
                <input name="Password" id="login-password" class="form-control input" size="20" placeholder="Password"
                    type="password">
                </div>
            </div>
            <div class="form-group">
                <div>
                <div class="checkbox login-remember">
                    <label>
                    <input name="rememberme" value="forever" checked="checked" type="checkbox">
                    Remember Me </label>
                </div>
                </div>
            </div>
            <div>
                <div>
                <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal" href="#ModalSignup"> Sign
                Up. </a> <br>
                <a href="{{ route('password.email') }}"> Lost your password? </a>
            </p>
            </div>
        </div>
        </div>
    </div>
    <div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h3 class="modal-title-site text-center"> REGISTER </h3>
            </div>
            <div class="modal-body">
            <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
                FACEBOOK </a></div>
            <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>
            <div class="form-group reg-username">
                <div>
                <input name="login" class="form-control input" size="20" placeholder="Enter Username" type="text">
                </div>
            </div>
            <div class="form-group reg-email">
                <div>
                <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                </div>
            </div>
            <div class="form-group reg-password">
                <div>
                <input name="password" class="form-control input" size="20" placeholder="Password" type="password">
                </div>
            </div>
            <div class="form-group">
                <div>
                <div class="checkbox login-remember">
                    <label>
                    <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                    Remember Me </label>
                </div>
                </div>
            </div>
            <div>
                <div>
                <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin"> Sign
                in </a></p>
            </div>
        </div>
        </div>
    </div>


      <!-- oooooooo   -->
      <div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
            <div class="pull-left ">
              <ul class="userMenu ">
                <li><a href="#"> <span class="hidden-xs">HELP</span><i
                      class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a></li>
                <li class="phone-number"><a href="callto:+12025550151"> <span> <i
                        class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs"
                      style="margin-left:5px"> +91-022-61586555 </span> </a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
            <div class="pull-right">
              <ul class="userMenu">
                <li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <i
                      class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
                <li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span> <i
                      class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup"> Create
                    Account </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ppppppppppppppppppppppp -->
     <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
        class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span>
      <span class="icon-bar"> </span></button>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
        class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00)
      </span></button>
    <a class="navbar-brand " href="{{ route('home') }}" style="color:#202808"> DHARWALA.COM
    <!-- <img src="{{ asset('images/logo.png') }}" alt="TSHOP"> -->
    </a>
    <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
      <div class="input-group">
        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
      </div>
    </div>
  </div>
  <div class="navbar-cart  collapse">
    <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
      <div class="w100 miniCartTable scroll-pane">
        <table>
          <tbody>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/3.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/2.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/5.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/3.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/3.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
            <tr class="miniCartProduct">
              <td style="width:20%" class="miniCartProductThumb">
                <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/4.jpg') }}" alt="img"> </a>
                </div>
              </td>
              <td style="width:40%">
                <div class="miniCartDescription">
                  <h4><a href="{{ route('product-details') }}"> TSHOP T shirt Black </a></h4>
                  <span class="size"> 12 x 1.5 L </span>
                  <div class="price"><span> $8.80 </span></div>
                </div>
              </td>
              <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
              <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
              <td style="width:5%" class="delete"><a> x </a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="miniCartFooter  miniCartFooterInMobile text-right">
        <h3 class="text-right subtotal"> Subtotal: $210 </h3>
        <a class="btn btn-sm btn-danger" href=""> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> 
        <a href="checkout-0.html" class="btn btn-sm btn-primary"> CHECKOUT </a>
      </div>
    </div>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"> Home </a></li>
      <li class="dropdown megamenu-fullwidth">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> New Products <b class="caret"> </b> </a>
        <ul class="dropdown-menu">
          <li class="megamenu-content ">
            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
              <li class="no-border"><p class="promo-1"><strong> NEW COLLECTION </strong></p></li>
              <li><a href="category.html"> ALL NEW PRODUCTS </a></li>
              <li><a href="category.html"> NEW TOPS </a></li>
              <li><a href="category.html"> NEW SHOES </a></li>
              <li><a href="category.html"> NEW TSHIRT </a></li>
              <li><a href="category.html"> NEW TSHOP </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
              <li><a class="newProductMenuBlock" href="{{ route('product-details') }}"> <img class="img-responsive"
                    src="{{ asset('build/assets/images/site/promo1.jpg') }}" alt="product"> <span
                    class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span> </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
              <li><a class="newProductMenuBlock" href="{{ route('product-details') }}"> <img class="img-responsive"
                    src="{{ asset('build/assets/images/site/promo2.jpg') }}" alt="product"> <span
                    class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
              <li><a class="newProductMenuBlock" href="{{ route('product-details') }}"> <img class="img-responsive"
                    src="{{ asset('build/assets/images/site/promo3.jpg') }}" alt="product"> <span
                    class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span> </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown megamenu-80width "><a data-toggle="dropdown" class="dropdown-toggle" href="#"> SHOP <b
            class="caret"> </b> </a>
        <ul class="dropdown-menu">
          <li class="megamenu-content">
            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
              <li>
                <p><strong> Women Collection </strong></p>
              </li>
              <li><a href="#"> Kameez </a></li>
              <li><a href="#"> Tops </a></li>
              <li><a href="#"> Shoes </a></li>
              <li><a href="#"> T shirt </a></li>
              <li><a href="#"> TSHOP </a></li>
              <li><a href="#"> Party Dress </a></li>
              <li><a href="#"> Women Fragrances </a></li>
            </ul>
            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
              <li>
                <p><strong> Men Collection </strong></p>
              </li>
              <li><a href="#"> Panjabi </a></li>
              <li><a href="#"> Male Fragrances </a></li>
              <li><a href="#"> Scarf </a></li>
              <li><a href="#"> Sandal </a></li>
              <li><a href="#"> Underwear </a></li>
              <li><a href="#"> Winter Collection </a></li>
              <li><a href="#"> Men Accessories </a></li>
            </ul>
            <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
              <li>
                <p><strong> Top Brands </strong></p>
              </li>
              <li><a href="#"> Diesel </a></li>
              <li><a href="#"> Farah </a></li>
              <li><a href="#"> G-Star RAW </a></li>
              <li><a href="#"> Lyle & Scott </a></li>
              <li><a href="#"> Pretty Green </a></li>
              <li><a href="#"> TSHOP </a></li>
              <li><a href="#"> TANJIM </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
              <li class="no-margin productPopItem "><a href="{{ route('product-details') }}"> <img class="img-responsive"
                    src="{{ asset('build/assets/images/site/g4.jpg') }}" alt="img"> </a> <a class="text-center productInfo alpha90"
                  href="{{ route('product-details') }}"> Eodem modo
                  typi <br>
                  <span> $60 </span> </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
              <li class="no-margin productPopItem relative"><a href="{{ route('product-details') }}"> <img
                    class="img-responsive" src="{{ asset('build/assets/images/site/g5.jpg') }}" alt="img"> </a> <a
                  class="text-center productInfo alpha90" href="{{ route('product-details') }}"> Eodem modo
                  typi <br>
                  <span> $60 </span> </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#"> PAGES <b
            class="caret"> </b> </a>
        <ul class="dropdown-menu">
          <li class="megamenu-content ProductDetailsList">
            <h3 class="promo-1 no-margin hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>

            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
              <li class="no-border">
                <p><strong> Home Pages </strong></p>
              </li>
              <li><a href="{{ route('home') }}"> Home Version 1 </a></li>
              <li><a href="index2.html"> Home Version 2 </a></li>
              <li><a href="index3.html"> Home Version 3 (BOXES) </a></li>
              <li><a href="index4.html"> Home Version 4 (LOOK 2)</a></li>
              <li><a href="index5.html"> Home Version 5 (LOOK 3)</a></li>
              <li><a href="index6.html"> Home Version 6 (STORY)</a></li>
              <li><a href="index-v-7.html"> Home Version 7 (Flat) <span class="label label-success">new</span></a>
              </li>
              <li><a href="index-header2.html"> Header Version 2 </a></li>
              <li><a href="index-header3.html"> Header Version 3 </a></li>
              <li><a href="index-logged-in.html">Topbar Logged In user menu <span
                    class="label label-success">new</span></a></li>
              <li><a href="sidebar-shopping-">Sidebar Shopping cart <span
                    class="label label-success">new</span></a></li>
            </ul>
            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
              <li class="no-border">
                <p><strong> Featured Pages </strong></p>
              </li>
              <li><a href="category.html"> Category </a></li>
              <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
              <li><a href="sub-category.html"> Sub Category </a></li>
              <li><a href="category-list.html"> Category List View </a></li>
              <li><a href="category-product-hover.html"> Category [Product Hover] </a></li>
              <li><a href="category-product-slide.html"> Category [Product Slide] </a></li>
              <li><a href=""> Cart </a></li>
              <li><a href="about-us-3.html"> About Us V3 <span class="label label-success">NEW</span> </a></li>
              <li><a href="about-us-2.html"> About Us V2 </a></li>
              <li><a href="about-us.html"> About Us V1 </a></li>
              <li><a href="contact-us.html"> Contact us </a></li>
              <li><a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a></li>
              <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>
            </ul>
            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled ">
              <li class="no-border">
                <p><strong> Product Details </strong></p>
              </li>
              <li><a href="{{ route('product-details') }}"> Product Details v1 </a></li>
              <li><a href="product-details-style2.html"> Product Details v 2 </a></li>
              <li><a href="product-details-style3.html"> Product Details v 3 (Custom Thumbnail
                  Position)</a></li>
              <li><a href="product-details-style4.html"> Product Details v 4 (with litebox)</a></li>
              <li><a href="product-details-style5.html"> Product Details v 5 (Flat) <span
                    class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-1.html"> Product Details v 5.1 <span
                    class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-2.html"> Product Details v 5.2 <span
                    class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-3.html"> Product Details v 5.3 <span
                    class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-3-fadein.html"> Product Details v 5.3.1 <small>(fadein)</small>
                  <span class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-4.html"> Product Details v 5.4 <span
                    class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-4.1-popup-video.html"> Product Details v 5.4.1 <small>(popup
                    video)</small><span class="label label-success">NEW</span> </a></li>
              <li><a href="product-details-style5-4.1-with-zoom.html"> Product Details v 5.4.1 <small>(zoom +
                    litebox)</small> <span class="label label-success">NEW</span></a></li>
            </ul>
            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
              <li class="no-border">
                <p><strong> Checkout </strong></p>
              </li>
              <li><a href="checkout-0.html"> Checkout Before </a></li>
              <li><a href="{{ route('checkout-1') }}"> checkout step 1 </a></li>
              <li><a href="{{ route('checkout-2') }}.html"> checkout step 2 </a></li>
              <li><a href="{{ route('checkout-3') }}"> checkout step 3 </a></li>
              <li><a href="{{ route('checkout-4') }}"> checkout step 4 </a></li>
              <li><a href="{{ route('checkout-5') }}"> checkout step 5 </a></li>
              <li><a href="one-page-checkout.html"> One page checkout <span class="label label-success">NEW</span>
                </a></li>
              <li><a href="thanks-for-order.html"> Thanks for order</a></li>
            </ul>
            <ul class="col-lg-1  col-sm-1 col-md-1 no-padding unstyled">
              <li class="no-border">
                <p><strong> User Account </strong></p>
              </li>
              <li><a href="account-1.html"> Account Login </a></li>
              <li><a href="route-account"> My Account </a></li>
              <li><a href="route-my-address"> My Address </a></li>
              <li><a href="route-user-information') }}"> User information </a></li>
              <li><a href="route-wishlist"> Wish List </a></li>
              <li><a href="route-order-list"> Order list </a></li>
              <li><a href="route-order-status"> Order Status </a></li>
              <li><a href="route-password.email"> Forgot Password </a></li>
            </ul>
            <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
              <li class="no-border">
                <p><strong> &nbsp; </strong></p>
              </li>
              <li><a href="blog.html"> Blog </a></li>
              <li><a href="blog-details.html"> Blog Details </a></li>
              <li><a href="single-product-modal.html"> Single Product Details Modal</a></li>
              <li><a href="single-subscribe-modal.html"> Single Subscribe Modal</a></li>
              <li><a href="error-page.html"> Error Page </a></li>
              <li><a href="blank-page.html"> Blank Page </a></li>
              <li><a href="form.html"> Basic Form Element </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="all-page-link.html" target="_blank"> All Page Link </a></li>
    </ul>
    </ul>
    <div class="nav navbar-nav navbar-right hidden-xs">
      <div class="dropdown  cartMenu "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
            class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b class="caret">
          </b> </a>
        <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
          <div class="w100 miniCartTable scroll-pane">
            <table>
              <tbody>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/3.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> TSHOP Tshirt DO9 </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $22 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/2.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> TShir TSHOP 09 </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $15 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $120 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/5.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> Tshir 2014 </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $30 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $80 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/3.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> TSHOP T shirt DO20 </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $15 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/product/4.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> T shirt Black </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $44 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $40 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
                <tr class="miniCartProduct">
                  <td style="width:20%" class="miniCartProductThumb">
                    <div><a href="{{ route('product-details') }}"> <img src="{{ asset('images/site/winter.jpg') }}" alt="img">
                      </a></div>
                  </td>
                  <td style="width:40%">
                    <div class="miniCartDescription">
                      <h4><a href="{{ route('product-details') }}"> G Star T shirt </a></h4>
                      <span class="size"> 12 x 1.5 L </span>
                      <div class="price"><span> $80 </span></div>
                    </div>
                  </td>
                  <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                  <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                  <td style="width:5%" class="delete"><a> x </a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="miniCartFooter text-right">
            <h3 class="text-right subtotal"> Subtotal: $210 </h3>
            <a class="btn btn-sm btn-danger" href="route-cart"> <i class="fa fa-shopping-cart"> </i> VIEW
              CART </a><a class="btn btn-sm btn-primary"> CHECKOUT </a>
          </div>
        </div>
      </div>
      <div class="search-box">
        <div class="input-group">
          <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- ppppppppppppppppppppppp -->
    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
      <div class="searchInputBox pull-right">
        <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
          class="search-input">
        <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
      </div>
    </div>
  </div>
      <!-- oooooooo   -->


    <main>
        @yield('content')
    </main>

    <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
            <h3> Support </h3>
            <ul>
              <li class="supportLi">

              </li>
            </ul>
          </div>
          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> Shop </h3>
            <ul>
              <li><a href="#"> Men's </a></li>
              <li><a href="#"> Women's</a></li>
              <li><a href="#"> Kids' </a></li>
              <li><a href="#">Shoes </a></li>
              <li><a href="#"> Gift Cards </a></li>
            </ul>
          </div>
          <div style="clear:both" class="hide visible-xs"></div>
          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> Information </h3>
            <ul class="list-unstyled footer-nav">
              <li><a href="#">Questions? </a></li>
              <li><a href="#"> Order Status </a></li>
              <li><a href="#"> Sizing Charts </a></li>
              <li><a href="#"> Return Policy </a></li>
              <li><a href="#"> Contact Us </a></li>
            </ul>
          </div>
          <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
            <h3> My Account </h3>
            <ul>
              <li><a href="{{ route('account') }}"> My Account </a></li>
              <li><a href="{{ route('my-address') }}"> My Address </a></li>
              <li><a href="route-wishlist"> Wish List </a></li>
              <li><a href="{{ route('order-list') }}"> Order list </a></li>
              <li><a href="{{ route('order-status') }}"> Order Status </a></li>
            </ul>
          </div>
          <div style="clear:both" class="hide visible-xs"></div>
          <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
            <h3> Stay in touch </h3>
            <ul>
              <li>
                <div class="input-append newsLatterBox text-center">
                  <input type="text" class="full text-center" placeholder="Email ">
                  <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i></button>
                </div>
              </li>
            </ul>
            <ul class="social">
              <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
              <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
              <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
              <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
              <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="pull-left"> &copy; Dharwala.com 2025. All right reserved. </p>
        <div class="pull-right paymentMethodImg">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/master_card.png') }}" alt="img">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/visa_card.png') }}" alt="img">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/paypal.png') }}" alt="img">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/american_express_card.png') }}"
            alt="img">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/discover_network_card.png') }}"
            alt="img">
          <img height="30" class="pull-right" src="{{ asset('images/site/payment/google_wallet.png') }}" alt="img">
        </div>
      </div>
    </div>
  </footer>
    
    <script type="text/javascript" src="{{ asset('build/assets/js/jquery/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('build/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/swiper-master/js/swiper.jquery.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.nextControl',
            prevButton: '.prevControl',
            keyboardControl: true,
            paginationClickable: true,
            slidesPerView: 'auto',
            autoResize: true,
            resizeReInit: true,
            spaceBetween: 0,
            freeMode: true
        });
    </script>
    <script src="{{ asset('build/assets/js/jquery.cycle2.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/js/jquery.parallax-1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/js/helper-plugins/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets//plugins/icheck-1.x/icheck.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/grids.js') }}"></script>
    <script src="{{ asset('build/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/bootstrap.touchspin.js') }}"></script>
    <script src="{{ asset('build/assets/js/home.js') }}"></script>
    <script src="{{ asset('build/assets/js/script.js') }}"></script>
</body>

</html>