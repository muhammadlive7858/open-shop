@extends('layouts.client')

@section('content')

<div class="main-row ">
    <div class="container">
        <div class="row">
            <div class="main-col col-sm-12 col-md-12">
                <div class="row sub-row">
                    <div class="sub-col col-sm-12 col-md-12">
                        <div class="ma-corporate-about">
                            <div class="col ">
                                <div class="block-wrapper wrapper1">
                                    <div class="text-des">
                                        <p>Free Shipping</p>
                                        <span>Free shipping on all US order</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="block-wrapper wrapper2">
                                    <div class="text-des">
                                        <p>Support 24/7</p>
                                        <span>Contact us 24 hours a day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="block-wrapper wrapper3">
                                    <div class="text-des">
                                        <p>100% Money Back</p>
                                        <span>You have 30 days to Return</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="block-wrapper wrapper4">
                                    <div class="text-des">
                                        <p>90 Days Return</p>
                                        <span>If goods have problems</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="block-wrapper wrapper5">
                                    <div class="text-des">
                                        <p>Payment Secure</p>
                                        <span>We ensure secure payment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt_tabsproduct_module tabs-category-slider module-nav2 tabs-style1"
                            id="product_module521">
                            <div class="module-title">

                                <h2>Our products</h2>
                                <div class="box-tab">
                                    <ul class="tab-heading tabs-categorys">
                                        {{-- <li>
                                            <a data-toggle="pill" href="#tab-5210">
                                                <span>{{ $tavar->name }} &amp; {{ $tavar->shop_price }}</span>
                                            </a>
                                        </li> --}}
                                        @forelse($Bolimlar as $bolim)
                                            <li>
                                                <a data-toggle="pill" href="#tab-5210">
                                                    <span>{{ $bolim->name }} &amp;
                                                        {{ $bolim->description }}</span>
                                                </a>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-521  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-5210">

                                                <!-- Grid -->
                                                @forelse($tavarlar as $tavar)
                                                    <div class="row_items ">

                                                        <div class="product-layout grid-style ">
                                                            <div class="product-thumb transition">
                                                                <div class="item">
                                                                    <div class="item-inner">

                                                                        <div
                                                                            class="image images-container">
                                                                            <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141"
                                                                                class="product-image">
                                                                                <img class="img-r"
                                                                                    src="{{ asset($tavar->image) }}"
                                                                                    alt="{{ $tavar->name }}" />
                                                                                <img src="{{ asset($tavar->image) }}"
                                                                                    alt="{{ $tavar->name }}"
                                                                                    title="{{ $tavar->name }}"
                                                                                    class="img-responsive has-rotator" />
                                                                            </a>
                                                                            <div class="box-label">
                                                                                <div
                                                                                    class="label-product label_new">
                                                                                    <span>{{ $tavar->chegirma }}</span>
                                                                                </div>

                                                                            </div>

                                                                            {{-- <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List">
                                                                                <span>Add to Wish List
                                                                                </span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                ><span>Compare this Product</span></button>
                                                                        </div> --}}
                                                                            <div class="quickview"><button
                                                                                    class="button btn-quickview"
                                                                                    type="button"
                                                                                    title="Quick View"><span>Quick
                                                                                        View</span></button>
                                                                            </div>
                                                                        </div><!-- image -->
                                                                        <div class="caption">

                                                                            <p
                                                                                class="manufacture-product">
                                                                                <a
                                                                                    href="#">Apple</a>
                                                                            </p>
                                                                            <h4 class="product-name"><a
                                                                                    href="#">
                                                                                    {{ $tavar->name }}</a>
                                                                            </h4>

                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating0">
                                                                                        rating</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="price-box">
                                                                                <label>Price:</label>
                                                                                <p class="regular-price">
                                                                                    <span
                                                                                        class="price">{{ $tavar->shop_price }}</span>
                                                                                </p>
                                                                                <p class="price-tax"><span
                                                                                        class="price">Ex
                                                                                        Tax:
                                                                                        {{ $tavar->shop_price = $tavar->shop_price - ($tavar->shop_price / 100) * $tavar->chegirma }}</span>
                                                                                </p>
                                                                            </div>

                                                                            <button
                                                                                class="button btn-cart"
                                                                                type="button"
                                                                                title="Add to Cart"
                                                                                onclick="cart.add('141');"><span>Add
                                                                                    to Cart</span></button>
                                                                        </div><!-- caption -->
                                                                    </div>
                                                                </div>
                                                            </div><!-- product-thumb -->
                                                        </div><!-- product-layout -->
                                                    </div>
                                                @empty
                                                @endforelse



                                            </div>

                                            <div class="tab-container-521  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-5211">

                                                <!-- Grid -->

                                                @forelse($tavarlar as $tavar)
                                                    <div class="row_items ">

                                                        <div class="product-layout grid-style ">
                                                            <div class="product-thumb transition">
                                                                <div class="item">
                                                                    <div class="item-inner">

                                                                        <div
                                                                            class="image images-container">
                                                                            <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142"
                                                                                class="product-image">
                                                                                <img src="{{ $tavar->image }}"
                                                                                    alt="{{ $tavar->name }}"
                                                                                    title="{{ $tavar->name }}"
                                                                                    class="img-responsive " />
                                                                            </a>
                                                                            <div class="box-label">
                                                                                <div
                                                                                    class="label-product label_new">
                                                                                    <span>New</span>
                                                                                </div>
                                                                                <div
                                                                                    class="label-product label_sale">
                                                                                    <span>-2% </span>
                                                                                </div>

                                                                            </div>

                                                                            <div class="action-links">

                                                                                <button
                                                                                    class="button btn-wishlist"
                                                                                    type="button"
                                                                                    title="Add to Wish List"
                                                                                    onclick="wishlist.add('142');"><span>Add
                                                                                        to Wish
                                                                                        List</span></button>
                                                                                <button
                                                                                    class="button btn-compare"
                                                                                    type="button"
                                                                                    title="Compare this Product"
                                                                                    onclick="compare.add('142');"><span>Compare
                                                                                        this
                                                                                        Product</span></button>
                                                                            </div>
                                                                            <div class="quickview"><button
                                                                                    class="button btn-quickview"
                                                                                    type="button"
                                                                                    title="Quick View"
                                                                                    onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142')"><span>Quick
                                                                                        View</span></button>
                                                                            </div>
                                                                        </div><!-- image -->
                                                                        <div class="caption">

                                                                            <p
                                                                                class="manufacture-product">
                                                                                <a href="">HTC</a>
                                                                            </p>
                                                                            <h4 class="product-name"><a
                                                                                    href="">
                                                                                    {{ $tavar->name }}</a>
                                                                            </h4>

                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating0">
                                                                                        rating</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="price-box">
                                                                                <label>Price:</label>
                                                                                <p class="special-price">
                                                                                    <span
                                                                                        class="price">{{ $tavar->shop_price }}</span>
                                                                                </p>
                                                                                <p class="old-price"><span
                                                                                        class="price">{{ $tavar->shop_price }}</span>
                                                                                </p>
                                                                                <p class="price-tax"><span
                                                                                        class="price">Ex
                                                                                        Tax:
                                                                                        {{ $tavar->shop_price }}</span>
                                                                                </p>
                                                                            </div>

                                                                            <button
                                                                                class="button btn-cart"
                                                                                type="button"
                                                                                title="Add to Cart"
                                                                                onclick="cart.add('142');"><span>Add
                                                                                    to Cart</span></button>
                                                                        </div><!-- caption -->
                                                                    </div>
                                                                </div>
                                                            </div><!-- product-thumb -->
                                                        </div><!-- product-layout -->
                                                    </div>
                                                @empty
                                                @endforelse




                                            </div>

                                            <div class="tab-container-521  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-5212">

                                                <!-- Grid -->

                                                <div class="row_items ">

                                                    <div class="product-layout grid-style ">
                                                        <div class="product-thumb transition">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=143"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/18-600x600.jpg"
                                                                                alt="Nokia Steel HR Hybrid  Smartwatch"
                                                                                title="Nokia Steel HR Hybrid  Smartwatch"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('143');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('143');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=143')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=143">Nokia
                                                                                Steel HR Hybrid
                                                                                Smartwatch</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="regular-price"><span
                                                                                    class="price">$116.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $95.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('143');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>
                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-5210"]').trigger("click");
                                $(".tab-container-521").owlCarousel({
                                    items: 7,
                                    loop: false,
                                    margin: 0,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 1000,
                                    autoplayHoverPause: true,
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    lazyLoad: true,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 3
                                        },
                                        992: {
                                            items: 4
                                        },
                                        1200: {
                                            items: 6
                                        },
                                        1600: {
                                            items: 7
                                        }
                                    },
                                    onInitialized: function() {
                                        var count = $(".tab-container-521 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-521 .owl-item").removeClass('first');
                                            $(".tab-container-521 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-521 .owl-item").removeClass('first');
                                            $(".tab-container-521 .owl-item.active:first").addClass('first');
                                        }
                                    },
                                    onTranslated: function() {
                                        var count = $(".tab-container-521 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-521 .owl-item").removeClass('first');
                                            $(".tab-container-521 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-521 .owl-item").removeClass('first');
                                            $(".tab-container-521 .owl-item.active:first").addClass('first');
                                        }
                                    }
                                });


                            });
                        </script>

                        {{-- banner --}}
                        <div class="banner-static static-top-sinrato1">
                            <div class="row">
                                <div class="col col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="index.php?route=product/category&amp;path=124"><img
                                                src="image/catalog/cmsblock/img1-top-sinrato1.jpg"
                                                alt="image"></a>
                                    </div>
                                </div>
                                <div class="col col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="index.php?route=product/category&amp;path=56"><img
                                                src="image/catalog/cmsblock/img2-top-sinrato1.jpg"
                                                alt="image"></a>
                                    </div>
                                </div>
                                <div class="col col-sm-4 col-xs-12">
                                    <div class="image">
                                        <a href="index.php?route=product/category&amp;path=20"><img
                                                src="image/catalog/cmsblock/img3-top-sinrato1.jpg"
                                                alt="image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- banner end --}}
                        {{-- fuature categories  --}}
                        <div class="featured-categories-container module-nav2">
                            <div class="featured-categories-slider module-title">
                                <h2>Featured Categories</h2>
                            </div>
                            <div class="owl-container">
                                <div class="owl-featured-categories owl-carousel owl-theme">
                                    @forelse($Bolimlar as $bolim)
                                        <div class="row_items">
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="fcategory-content">

                                                        <div class="content-thumb">
                                                            <h2 class="name"><a
                                                                    href="">{{ $bolim->name }}</a>
                                                            </h2>
                                                            <p class="total-items">9 products</p>
                                                            <a href="" class="view-more">shop
                                                                now</a>
                                                        </div>
                                                        <div class="image">
                                                            <a href="">
                                                                <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/category%20thumb/f-cate6-150x150.jpg"
                                                                    alt="{{ $bolim->name }}" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $(".owl-featured-categories").owlCarousel({
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    items: 4,
                                    autoplay: false,
                                    nav: true,
                                    dots: false,
                                    autoplayHoverPause: false,
                                    margin: 0,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 1,
                                            nav: false
                                        },
                                        568: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 2
                                        },
                                        992: {
                                            items: 3
                                        },
                                        1200: {
                                            items: 4
                                        },
                                    },
                                    onInitialized: function() {
                                        owlAction();
                                    },
                                    onTranslated: function() {
                                        owlAction();
                                    }
                                });

                                function owlAction() {
                                    $(".owl-featured-categories .owl-item").removeClass('first');
                                    $(".owl-featured-categories .owl-item").removeClass('last');
                                    $(".owl-featured-categories .owl-item").removeClass('before-active');
                                    $(".owl-featured-categories .owl-item.active:first").addClass('first');
                                    $(".owl-featured-categories .owl-item.active:last").addClass('last');
                                    $('.owl-featured-categories .owl-item.active:first').prev().addClass('before-active');
                                }
                            });
                        </script>
                        {{-- fuature categories end --}}
                        {{-- product tab  --}}
                        <div class="tt_tabsproduct_module product-tabs-container-slider"
                            id="product_module818">
                            <div class="module-title">

                                <h2>Product Tabs</h2>
                                <div class="box-tab">
                                    <ul class="tab-heading tabs-categorys">
                                        <li>
                                            <a data-toggle="pill" href="#tab-8180">
                                                <span>Featured Products</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab-8181">
                                                <span>On Sale Products</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="pill" href="#tab-8182">
                                                <span>Best Seller Products</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-818  tab-pane tab-product-container  fade "
                                                id="tab-8180">
                                                <div class="module-not-slider"
                                                    style="grid-template-columns:14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857%;display: grid;">

                                                    <div class="col-image" style="grid-column: 1 / 3;">

                                                        <div class="banner-static">
                                                            <div class="image">
                                                                <a href="#">
                                                                    <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/module-image/img-module1-458x401.jpg"
                                                                        alt="image" />
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Grid -->
                                                    @forelse($tavarlar as $tavar)
                                                        <div class="row_items ">

                                                            <div class="product-layout grid-style ">
                                                                <div class="product-thumb transition">
                                                                    <div class="item">
                                                                        <div class="item-inner">

                                                                            <div
                                                                                class="image images-container">
                                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=57"
                                                                                    class="product-image">
                                                                                    <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/28-600x600.jpg"
                                                                                        alt="Amazon Cloud Cam  Security Camera"
                                                                                        title="Amazon Cloud Cam  Security Camera"
                                                                                        class="img-responsive " />
                                                                                </a>
                                                                                <div class="box-label">

                                                                                </div>

                                                                                <div class="action-links">

                                                                                    <button
                                                                                        class="button btn-wishlist"
                                                                                        type="button"
                                                                                        title="Add to Wish List"><span>Add
                                                                                            to Wish
                                                                                            List</span></button>
                                                                                    <button
                                                                                        class="button btn-compare"
                                                                                        type="button"
                                                                                        title="Compare this Product"><span>Compare
                                                                                            this
                                                                                            Product</span></button>
                                                                                </div>
                                                                                <div class="quickview">
                                                                                    <button
                                                                                        class="button btn-quickview"
                                                                                        type="button"
                                                                                        title="Quick View"><span>Quick
                                                                                            View</span></button>
                                                                                </div>
                                                                            </div><!-- image -->
                                                                            <div class="caption">

                                                                                <p
                                                                                    class="manufacture-product">
                                                                                    <a
                                                                                        href="#">Apple</a>
                                                                                </p>
                                                                                <h4 class="product-name">
                                                                                    <a href="#">
                                                                                        {{ $tavar->name }}</a>
                                                                                </h4>

                                                                                <div class="ratings">
                                                                                    <div
                                                                                        class="rating-box">
                                                                                        <div
                                                                                            class="rating4">
                                                                                            rating</div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="price-box">
                                                                                    <label>Price:</label>
                                                                                    <p
                                                                                        class="regular-price">
                                                                                        <span
                                                                                            class="price">{{ $tavar->shop_price }}</span>
                                                                                    </p>
                                                                                    <p class="price-tax">
                                                                                        <span
                                                                                            class="price">Ex
                                                                                            Tax:
                                                                                            {{ $tavar->shop_price }}</span>
                                                                                    </p>
                                                                                </div>

                                                                                <button
                                                                                    class="button btn-cart"
                                                                                    type="button"
                                                                                    title="Add to Cart"><span>Add
                                                                                        to
                                                                                        Cart</span></button>
                                                                            </div><!-- caption -->
                                                                        </div>
                                                                    </div>
                                                                </div><!-- product-thumb -->
                                                            </div><!-- product-layout -->
                                                        </div>
                                                    @empty
                                                    @endforelse


                                                    <!-- Grid -->


                                                </div>
                                            </div>

                                            <div class="tab-container-818  tab-pane tab-product-container  fade "
                                                id="tab-8181">
                                                <div class="module-not-slider"
                                                    style="grid-template-columns:14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857%;display: grid;">

                                                    <div class="col-image" style="grid-column: 1 / 3;">

                                                        <div class="banner-static">
                                                            <div class="image">
                                                                <a href="#">
                                                                    <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/module-image/img-module1-458x401.jpg"
                                                                        alt="image" />
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Grid -->

                                                    <div class="row_items ">

                                                        <div class="product-layout grid-style ">
                                                            <div class="product-thumb transition">
                                                                <div class="item">
                                                                    <div class="item-inner">

                                                                        <div
                                                                            class="image images-container">
                                                                            <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=52"
                                                                                class="product-image">
                                                                                <img class="img-r"
                                                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/3-600x600.jpg"
                                                                                    alt="Apple iPad with Retina Display" />
                                                                                <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/3-600x600.jpg"
                                                                                    alt="Apple iPad with Retina Display"
                                                                                    title="Apple iPad with Retina Display"
                                                                                    class="img-responsive has-rotator" />
                                                                            </a>
                                                                            <div class="box-label">
                                                                                <div
                                                                                    class="label-product label_sale">
                                                                                    <span>-8% </span>
                                                                                </div>

                                                                            </div>

                                                                            <div class="action-links">

                                                                                <button
                                                                                    class="button btn-wishlist"
                                                                                    type="button"
                                                                                    title="Add to Wish List"
                                                                                    onclick="wishlist.add('52');"><span>Add
                                                                                        to Wish
                                                                                        List</span></button>
                                                                                <button
                                                                                    class="button btn-compare"
                                                                                    type="button"
                                                                                    title="Compare this Product"
                                                                                    onclick="compare.add('52');"><span>Compare
                                                                                        this
                                                                                        Product</span></button>
                                                                            </div>
                                                                            <div class="quickview"><button
                                                                                    class="button btn-quickview"
                                                                                    type="button"
                                                                                    title="Quick View"
                                                                                    onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=52')"><span>Quick
                                                                                        View</span></button>
                                                                            </div>
                                                                        </div><!-- image -->
                                                                        <div class="caption">

                                                                            <p
                                                                                class="manufacture-product">
                                                                                <a
                                                                                    href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">Hewlett-Packard</a>
                                                                            </p>
                                                                            <h4 class="product-name"><a
                                                                                    href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=52">Apple
                                                                                    iPad with Retina
                                                                                    Display</a></h4>

                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating0">
                                                                                        rating</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="price-box">
                                                                                <label>Price:</label>
                                                                                <p class="special-price">
                                                                                    <span
                                                                                        class="price">$68.00</span>
                                                                                </p>
                                                                                <p class="old-price"><span
                                                                                        class="price">$74.00</span>
                                                                                </p>
                                                                                <p class="price-tax"><span
                                                                                        class="price">Ex
                                                                                        Tax: $55.00</span>
                                                                                </p>
                                                                            </div>

                                                                            <button
                                                                                class="button btn-cart"
                                                                                type="button"
                                                                                title="Add to Cart"
                                                                                onclick="cart.add('52');"><span>Add
                                                                                    to Cart</span></button>
                                                                        </div><!-- caption -->
                                                                    </div>
                                                                </div>
                                                            </div><!-- product-thumb -->
                                                        </div><!-- product-layout -->
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="tab-container-818  tab-pane tab-product-container  fade "
                                                id="tab-8182">
                                                <div class="module-not-slider"
                                                    style="grid-template-columns:14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857% 14.2857142857%;display: grid;">

                                                    <div class="col-image" style="grid-column: 1 / 3;">

                                                        <div class="banner-static">
                                                            <div class="image">
                                                                <a href="#">
                                                                    <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/module-image/img-module1-458x401.jpg"
                                                                        alt="image" />
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Grid -->

                                                    <div class="row_items ">

                                                        <div class="product-layout grid-style ">
                                                            <div class="product-thumb transition">
                                                                <div class="item">
                                                                    <div class="item-inner">

                                                                        <div
                                                                            class="image images-container">
                                                                            <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=57"
                                                                                class="product-image">
                                                                                <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/28-600x600.jpg"
                                                                                    alt="Amazon Cloud Cam  Security Camera"
                                                                                    title="Amazon Cloud Cam  Security Camera"
                                                                                    class="img-responsive " />
                                                                            </a>
                                                                            <div class="box-label">

                                                                            </div>

                                                                            <div class="action-links">

                                                                                <button
                                                                                    class="button btn-wishlist"
                                                                                    type="button"
                                                                                    title="Add to Wish List"
                                                                                    onclick="wishlist.add('57');"><span>Add
                                                                                        to Wish
                                                                                        List</span></button>
                                                                                <button
                                                                                    class="button btn-compare"
                                                                                    type="button"
                                                                                    title="Compare this Product"
                                                                                    onclick="compare.add('57');"><span>Compare
                                                                                        this
                                                                                        Product</span></button>
                                                                            </div>
                                                                            <div class="quickview"><button
                                                                                    class="button btn-quickview"
                                                                                    type="button"
                                                                                    title="Quick View"
                                                                                    onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=57')"><span>Quick
                                                                                        View</span></button>
                                                                            </div>
                                                                        </div><!-- image -->
                                                                        <div class="caption">

                                                                            <p
                                                                                class="manufacture-product">
                                                                                <a
                                                                                    href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                            </p>
                                                                            <h4 class="product-name"><a
                                                                                    href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=57">Amazon
                                                                                    Cloud Cam Security
                                                                                    Camera</a></h4>

                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating4">
                                                                                        rating</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="price-box">
                                                                                <label>Price:</label>
                                                                                <p class="regular-price">
                                                                                    <span
                                                                                        class="price">$98.00</span>
                                                                                </p>
                                                                                <p class="price-tax"><span
                                                                                        class="price">Ex
                                                                                        Tax: $80.00</span>
                                                                                </p>
                                                                            </div>

                                                                            <button
                                                                                class="button btn-cart"
                                                                                type="button"
                                                                                title="Add to Cart"
                                                                                onclick="cart.add('57');"><span>Add
                                                                                    to Cart</span></button>
                                                                        </div><!-- caption -->
                                                                    </div>
                                                                </div>
                                                            </div><!-- product-thumb -->
                                                        </div><!-- product-layout -->
                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-8180"]').trigger("click");


                            });
                        </script>
                        {{-- product tab end --}}
                        {{-- loptop and Computers  --}}
                        <div class="banner-static static-middle-sinrato1">
                            <div class="row">
                                <div class="col col-sm-6 col-xs-12">
                                    <div class="image"><a
                                            href="index.php?route=product/category&amp;path=20"><img
                                                src="image/catalog/cmsblock/img1-middle-sinrato1.jpg"
                                                alt="image"></a></div>
                                </div>
                                <div class="col col-sm-6 col-xs-12">
                                    <div class="image"><a
                                            href="index.php?route=product/category&amp;path=56"><img
                                                src="image/catalog/cmsblock/img2-middle-sinrato1.jpg"
                                                alt="image"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tt_tabsproduct_module tabs-category-slider tabs-style2 module-nav2"
                            id="product_module972">
                            <div class="module-title">

                                <h2>Laptop &amp; Computer</h2>
                                <div class="box-tab">
                                    <ul class="tab-heading tabs-categorys">
                                        <li>
                                            <a data-toggle="pill" href="#tab-9720">
                                                <span>Laptop &amp; Computer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-972  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-9720">

                                                <!-- Grid -->
                                                <!-- List -->
                                                <div class="row_items ">
                                                    <div class="product-layout list-style ">
                                                        <div class="product-thumb transition">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="caption">
                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="regular-price"><span
                                                                                    class="price">$104.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $85.00</span></p>
                                                                        </div>



                                                                    </div><!-- caption -->
                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/16-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive" />
                                                                        </a>
                                                                        <div class="box-label">

                                                                        </div>
                                                                    </div><!-- image -->
                                                                </div>
                                                            </div>
                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-9720"]').trigger("click");
                                $(".tab-container-972").owlCarousel({
                                    items: 4,
                                    loop: false,
                                    margin: 0,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 1000,
                                    autoplayHoverPause: true,
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    lazyLoad: true,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 2
                                        },
                                        992: {
                                            items: 3
                                        },
                                        1200: {
                                            items: 3
                                        },
                                        1600: {
                                            items: 4
                                        }
                                    },
                                    onInitialized: function() {
                                        var count = $(".tab-container-972 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-972 .owl-item").removeClass('first');
                                            $(".tab-container-972 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-972 .owl-item").removeClass('first');
                                            $(".tab-container-972 .owl-item.active:first").addClass('first');
                                        }
                                    },
                                    onTranslated: function() {
                                        var count = $(".tab-container-972 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-972 .owl-item").removeClass('first');
                                            $(".tab-container-972 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-972 .owl-item").removeClass('first');
                                            $(".tab-container-972 .owl-item.active:first").addClass('first');
                                        }
                                    }
                                });


                            });
                        </script>
                        {{-- loptop and Computers end --}}
                        {{-- Headphones --}}
                        <div class="tt_tabsproduct_module tabs-category-slider tabs-style2 module-nav2"
                            id="product_module630">
                            <div class="module-title">

                                <h2>Headphones &amp; Accessories</h2>
                                <div class="box-tab">
                                    <ul class="tab-heading tabs-categorys">
                                        <li>
                                            <a data-toggle="pill" href="#tab-6300">
                                                <span>Headphones &amp; Accessories</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-630  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-6300">

                                                <!-- Grid -->
                                                <!-- List -->
                                                <div class="row_items ">
                                                    <div class="product-layout list-style ">
                                                        <div class="product-thumb transition">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="caption">
                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=140">Marshall
                                                                                Portable Bluetooth
                                                                                Speaker</a></h4>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$86.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $65.00</span></p>
                                                                        </div>



                                                                    </div><!-- caption -->
                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=140"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/15-600x600.jpg"
                                                                                alt="Marshall Portable  Bluetooth Speaker"
                                                                                title="Marshall Portable  Bluetooth Speaker"
                                                                                class="img-responsive" />
                                                                        </a>
                                                                        <div class="box-label">

                                                                        </div>
                                                                    </div><!-- image -->
                                                                </div>
                                                            </div>
                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-6300"]').trigger("click");
                                $(".tab-container-630").owlCarousel({
                                    items: 4,
                                    loop: false,
                                    margin: 0,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 1000,
                                    autoplayHoverPause: true,
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    lazyLoad: true,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 2
                                        },
                                        992: {
                                            items: 3
                                        },
                                        1200: {
                                            items: 3
                                        },
                                        1600: {
                                            items: 4
                                        }
                                    },
                                    onInitialized: function() {
                                        var count = $(".tab-container-630 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-630 .owl-item").removeClass('first');
                                            $(".tab-container-630 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-630 .owl-item").removeClass('first');
                                            $(".tab-container-630 .owl-item.active:first").addClass('first');
                                        }
                                    },
                                    onTranslated: function() {
                                        var count = $(".tab-container-630 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-630 .owl-item").removeClass('first');
                                            $(".tab-container-630 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-630 .owl-item").removeClass('first');
                                            $(".tab-container-630 .owl-item.active:first").addClass('first');
                                        }
                                    }
                                });


                            });
                        </script>
                        {{-- Headphones --}}
                        {{-- buisines office --}}
                        <div class="tt_tabsproduct_module tabs-category-slider tabs-style2 module-nav2"
                            id="product_module67">
                            <div class="module-title">

                                <h2>Business &amp; Office</h2>
                                <div class="box-tab">
                                    <ul class="tab-heading tabs-categorys">
                                        <li>
                                            <a data-toggle="pill" href="#tab-670">
                                                <span>Business &amp; Office</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>

                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-67  owl-carousel owl-theme  tab-pane tab-product-container  fade "
                                                id="tab-670">

                                                <!-- Grid -->
                                                <!-- List -->
                                                <div class="row_items ">
                                                    <div class="product-layout list-style ">
                                                        <div class="product-thumb transition">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="caption">
                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">HTC</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=53">Sony
                                                                                KD55X72 55-Inch 4k Ultra
                                                                                HD</a></h4>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating3">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$78.80</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $64.00</span></p>
                                                                        </div>



                                                                    </div><!-- caption -->
                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=53"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/4-600x600.jpg"
                                                                                alt="Sony KD55X72 55-Inch  4k Ultra HD"
                                                                                title="Sony KD55X72 55-Inch  4k Ultra HD"
                                                                                class="img-responsive" />
                                                                        </a>
                                                                        <div class="box-label">

                                                                        </div>
                                                                    </div><!-- image -->
                                                                </div>
                                                            </div>
                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-670"]').trigger("click");
                                $(".tab-container-67").owlCarousel({
                                    items: 4,
                                    loop: false,
                                    margin: 0,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 1000,
                                    autoplayHoverPause: true,
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    lazyLoad: true,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 2
                                        },
                                        992: {
                                            items: 3
                                        },
                                        1200: {
                                            items: 3
                                        },
                                        1600: {
                                            items: 4
                                        }
                                    },
                                    onInitialized: function() {
                                        var count = $(".tab-container-67 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-67 .owl-item").removeClass('first');
                                            $(".tab-container-67 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-67 .owl-item").removeClass('first');
                                            $(".tab-container-67 .owl-item.active:first").addClass('first');
                                        }
                                    },
                                    onTranslated: function() {
                                        var count = $(".tab-container-67 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-67 .owl-item").removeClass('first');
                                            $(".tab-container-67 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-67 .owl-item").removeClass('first');
                                            $(".tab-container-67 .owl-item.active:first").addClass('first');
                                        }
                                    }
                                });


                            });
                        </script>
                        {{-- buisines office --}}
                        {{-- brand sale  --}}
                        <div class="static-bottom-sinrato1 banner-static">
                            <div class="image"><a
                                    href="index.php?route=product/category&amp;path=124"><img
                                        src="image/catalog/cmsblock/img-bottom-sinrato1.jpg"
                                        alt="image"></a></div>
                        </div>

                        <div class="tt_tabsproduct_module tabs-brand-category-slider module-nav2"
                            id="product_module513">
                            <div class="module-title">

                                <h2>Brands Sale</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="box-tab">
                                <ul class="tab-heading tabs-categorys owl-carousel owl-theme">
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5130"
                                            class="a-tabs" title="Brand Product 1">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand1-120x74.png"
                                                    alt="Brand Product 1" /></span>

                                            <span class="tab-name">Brand Product 1</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5131"
                                            class="a-tabs" title="Brand Product 2">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand2-120x74.png"
                                                    alt="Brand Product 2" /></span>

                                            <span class="tab-name">Brand Product 2</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5132"
                                            class="a-tabs" title="Brand Product 3">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand3-120x74.png"
                                                    alt="Brand Product 3" /></span>

                                            <span class="tab-name">Brand Product 3</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5133"
                                            class="a-tabs" title="Brand Product 4">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand4-120x74.png"
                                                    alt="Brand Product 4" /></span>

                                            <span class="tab-name">Brand Product 4</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5134"
                                            class="a-tabs" title="Brand Product 5">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand5-120x74.png"
                                                    alt="Brand Product 5" /></span>

                                            <span class="tab-name">Brand Product 5</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5135"
                                            class="a-tabs" title="Brand Product 6">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand6-120x74.png"
                                                    alt="Brand Product 6" /></span>

                                            <span class="tab-name">Brand Product 6</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5136"
                                            class="a-tabs" title="Brand Product 7">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand7-120x74.png"
                                                    alt="Brand Product 7" /></span>

                                            <span class="tab-name">Brand Product 7</span>
                                        </a>
                                    </li>
                                    <li class="li-tabs">
                                        <a href="javascript:void(0);" data-tab="#tab-5137"
                                            class="a-tabs" title="Brand Product 8">

                                            <span class="wrapper-thumb"><img class="thumb-img"
                                                    src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/brand/brand8-120x74.png"
                                                    alt="Brand Product 8" /></span>

                                            <span class="tab-name">Brand Product 8</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>


                            <div class="box-style">
                                <div class="owl-container">
                                    <div class="tt-product ">
                                        <div class="tab-content">


                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5130">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141"
                                                                            class="product-image">
                                                                            <img class="img-r"
                                                                                src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/6-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker" />
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/16-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive has-rotator" />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('141');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('141');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="regular-price"><span
                                                                                    class="price">$104.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $85.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('141');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5131">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=56"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/7-600x600.jpg"
                                                                                alt="Koss KPH7 Portable Headphone"
                                                                                title="Koss KPH7 Portable Headphone"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_sale">
                                                                                <span>-7% </span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('56');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('56');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=56')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=56">Koss
                                                                                KPH7 Portable Headphone</a>
                                                                        </h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating2">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$86.00</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$92.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $70.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('56');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5132">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/17-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>
                                                                            <div
                                                                                class="label-product label_sale">
                                                                                <span>-2% </span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('142');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('142');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">HTC</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$78.80</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $64.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('142');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5133">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=140"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/15-600x600.jpg"
                                                                                alt="Marshall Portable  Bluetooth Speaker"
                                                                                title="Marshall Portable  Bluetooth Speaker"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_sale">
                                                                                <span>-7% </span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('140');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('140');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=140')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=140">Marshall
                                                                                Portable Bluetooth
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$86.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $65.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('140');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5134">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141"
                                                                            class="product-image">
                                                                            <img class="img-r"
                                                                                src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/6-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker" />
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/16-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive has-rotator" />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('141');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('141');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="regular-price"><span
                                                                                    class="price">$104.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $85.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('141');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5135">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/17-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>
                                                                            <div
                                                                                class="label-product label_sale">
                                                                                <span>-2% </span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('142');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('142');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">HTC</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$78.80</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $64.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('142');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>

                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5136">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142"
                                                                            class="product-image">
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/17-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive " />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>
                                                                            <div
                                                                                class="label-product label_sale">
                                                                                <span>-2% </span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('142');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('142');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">HTC</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=142">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="special-price"><span
                                                                                    class="price">$78.80</span>
                                                                            </p>
                                                                            <p class="old-price"><span
                                                                                    class="price">$80.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $64.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('142');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>

                                            <div class="tab-container-513  owl-carousel owl-theme  tab-pane tab-product-container "
                                                id="tab-5137">

                                                <!-- Grid -->
                                                <!-- other type -->
                                                <div class="row_items ">
                                                    <div
                                                        class="product-layout product-customize grid-style">
                                                        <div class="product-thumb transition ">
                                                            <div class="item">
                                                                <div class="item-inner">

                                                                    <div class="image images-container">
                                                                        <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141"
                                                                            class="product-image">
                                                                            <img class="img-r"
                                                                                src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/6-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker" />
                                                                            <img src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/products/16-600x600.jpg"
                                                                                alt="Sony XB10 Portable  Wireless Speaker"
                                                                                title="Sony XB10 Portable  Wireless Speaker"
                                                                                class="img-responsive has-rotator" />
                                                                        </a>
                                                                        <div class="box-label">
                                                                            <div
                                                                                class="label-product label_new">
                                                                                <span>New</span>
                                                                            </div>

                                                                        </div>

                                                                        <div class="action-links">

                                                                            <button
                                                                                class="button btn-wishlist"
                                                                                type="button"
                                                                                title="Add to Wish List"
                                                                                onclick="wishlist.add('141');"><span>Add
                                                                                    to Wish
                                                                                    List</span></button>
                                                                            <button
                                                                                class="button btn-compare"
                                                                                type="button"
                                                                                title="Compare this Product"
                                                                                onclick="compare.add('141');"><span>Compare
                                                                                    this
                                                                                    Product</span></button>
                                                                        </div>
                                                                        <div class="quickview"><button
                                                                                class="button btn-quickview"
                                                                                type="button"
                                                                                title="Quick View"
                                                                                onclick="ocquickview.ajaxView('http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141')"><span>Quick
                                                                                    View</span></button>
                                                                        </div>
                                                                    </div><!-- image -->
                                                                    <div class="caption">

                                                                        <p class="manufacture-product">
                                                                            <a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                                                        </p>
                                                                        <h4 class="product-name"><a
                                                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/product&amp;product_id=141">Sony
                                                                                XB10 Portable Wireless
                                                                                Speaker</a></h4>

                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating0">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="price-box">
                                                                            <label>Price:</label>
                                                                            <p class="regular-price"><span
                                                                                    class="price">$104.00</span>
                                                                            </p>
                                                                            <p class="price-tax"><span
                                                                                    class="price">Ex Tax:
                                                                                    $85.00</span></p>
                                                                        </div>

                                                                        <button class="button btn-cart"
                                                                            type="button"
                                                                            title="Add to Cart"
                                                                            onclick="cart.add('141');"><span>Add
                                                                                to Cart</span></button>
                                                                    </div><!-- caption -->
                                                                </div>
                                                            </div>

                                                        </div><!-- product-thumb -->
                                                    </div><!-- product-layout -->
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('a[href="#tab-5130"]').trigger("click");
                                $(".tab-container-513").owlCarousel({
                                    items: 8,
                                    loop: false,
                                    margin: 0,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 1000,
                                    autoplayHoverPause: true,
                                    autoplaySpeed: 1000,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    lazyLoad: true,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            nav: false
                                        },
                                        480: {
                                            items: 2,
                                            nav: false
                                        },
                                        768: {
                                            items: 3
                                        },
                                        992: {
                                            items: 4
                                        },
                                        1200: {
                                            items: 6
                                        },
                                        1600: {
                                            items: 8
                                        }
                                    },
                                    onInitialized: function() {
                                        var count = $(".tab-container-513 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-513 .owl-item").removeClass('first');
                                            $(".tab-container-513 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-513 .owl-item").removeClass('first');
                                            $(".tab-container-513 .owl-item.active:first").addClass('first');
                                        }
                                    },
                                    onTranslated: function() {
                                        var count = $(".tab-container-513 .owl-item.active").length;
                                        if (count == 1) {
                                            $(".tab-container-513 .owl-item").removeClass('first');
                                            $(".tab-container-513 .owl-item.active").addClass('first');
                                        } else {
                                            $(".tab-container-513 .owl-item").removeClass('first');
                                            $(".tab-container-513 .owl-item.active:first").addClass('first');
                                        }
                                    }
                                });

                                $("#product_module513 .tabs-categorys").owlCarousel({
                                    nav: false,
                                    dots: false,
                                    margin: 0,
                                    navSpeed: 1000,
                                    dotsSpeed: 1000,
                                    autoplay: false,
                                    loop: false,
                                    responsiveClass: true,
                                    responsive: {
                                        0: {
                                            items: 2
                                        },
                                        480: {
                                            items: 3
                                        },
                                        768: {
                                            items: 4
                                        },
                                        992: {
                                            items: 5
                                        },
                                        1200: {
                                            items: 6
                                        },
                                        1600: {
                                            items: 7
                                        }
                                    }

                                });

                                $('#product_module513 .tabs-categorys .owl-item').first().find('li').addClass('active');
                                $('#product_module513 #tab-5130').show();

                                $('#product_module513 .a-tabs').on('click', function() {
                                    var tab = $(this).data('tab');
                                    $('#product_module513 .tab-product-container').hide();
                                    $(tab).show();

                                    $('#product_module513 .li-tabs').removeClass('active');
                                    $(this).closest('li').addClass('active');
                                });



                            });
                        </script>
                        {{-- brand sale end --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
