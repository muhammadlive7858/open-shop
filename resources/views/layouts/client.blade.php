<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tradex</title>
    <base href="http://demo.towerthemes.com/tt_sinrato/" />
    <meta name="description" content="Sinrato, Responsive, Opencart Theme, Fashion Theme" />
    <script src="{{ asset('client/catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <link href="{{ asset('client/catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('client/catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css') }}"
        rel="stylesheet" />
    <script src="{{ asset('client/catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/ocmegamenu/menu.js') }}"></script>
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/ocmegamenu/menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/opentheme/css/animate.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('client/catalog/view/javascript/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        media="screen" />
    <script src="{{ asset('client/catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('client/catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/pe-icon-7-stroke/css/helper.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/elegant-font/style.css') }}" rel="stylesheet"
        type="text/css" />
    {{-- <link href="client/catalog/view/javascript/ionicons/css/ionicons.css" rel="stylesheet" type="text/css" />
     --}}
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/bebas_neue/css/bebas_neue.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/simple-line-icons/css/simple-line-icons.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/catalog/view/javascript/linearicons-free/style.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('client/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js') }}"></script>
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/opentheme/ocslideshow/ocslideshow.css') }}"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/stylesheet.css') }}" rel="stylesheet" />
    <script src="{{ asset('client/catalog/view/javascript/cloudzoom/cloud-zoom.1.0.2.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/cloudzoom/zoom.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/ocquickview/ocquickview.js') }}"></script>
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/ocquickview/ocquickview.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/opentheme/ocajaxlogin/css/ocajaxlogin.css') }}"
        type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('client/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css') }}"
        type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('client/catalog/view/theme/tt_sinrato1/stylesheet/opentheme/ocpagebuilder.css') }}"
        type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('client/catalog/view/javascript/opentheme/jquery.bpopup.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/opentheme/jquery.cookie.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/opentheme/ocajaxlogin/ocajaxlogin.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js') }}"></script>
    <script src="{{ asset('client/catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js') }}">
    </script>
    <script src="{{ asset('client/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js') }}">
    </script>
    <script src="{{ asset('client/catalog/view/javascript/common.js') }}"></script>
    <link href="{{ asset('client/image/catalog/cart.png') }}" rel="icon" />
    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="common-home home1">
    <div class="wrapper">
        <nav id="top">
            <div class="container">
                <div class="container-inner">
                    <ul class="box box-left">

                        <p>Welcome to {{ env('APP_NAME') }} Online Shopping Store !
                        </p>


                    </ul>
                    <ul class="box box-right">




                        <li class="setting">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span>My
                                        Account</span> <i class="icon ion-ios-arrow-down"></i></button>
                                <div class="dropdown-menu" id="top-links">
                                    <ul class="ul-account list-unstyled">
                                        <li>
                                            <a id="a-register-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                        <li>
                                            <a id="a-login-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="language">
                            <form
                                action="#"
                                method="post" enctype="multipart/form-data" id="form-language">
                                <div class="btn-group">
                                    <span class="pull-left hidden-xs hidden-sm hidden-md text-ex">Language:</span>
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">

                                        en-gb
                                        <i class="bi bi-arrow-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class="btn btn-link btn-block language-select item-selected"
                                                type="button" name="en-gb"><img
                                                    src="catalog/language/en-gb/en-gb.png" alt="English"
                                                    title="English" /> English</button></li>
                                        <li><button class="btn btn-link btn-block language-select" type="button"
                                                name="de-de"><img src="catalog/language/de-de/de-de.png"
                                                    alt="Germany" title="Germany" /> Germany</button></li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect"
                                    value="#" />
                            </form>
                        </li>
                        <li class="currency">
                            <form
                                action="#"
                                method="post" enctype="multipart/form-data" id="form-currency">
                                <div class="btn-group">
                                    <span class="pull-left hidden-xs hidden-sm hidden-md text-ex">Currency:</span>
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">

                                        USD
                                        <i class="icon ion-ios-arrow-down"></i>

                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                name="EUR">

                                                €

                                                Euro
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                name="GBP">

                                                £

                                                Pound Sterling
                                            </button>
                                        </li>
                                        <li>
                                            <button class="item-selected currency-select btn btn-link btn-block"
                                                type="button" name="USD">

                                                $

                                                US Dollar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect"
                                    value="#" />
                            </form>
                        </li> --}}
                    </ul>

                </div>
            </div>
        </nav>

        <header>
            <div class="header-inner ">
                <div class="container">
                    <div class="container-inner">
                        <div class="inner">
                            <div class="logo-container">
                                <div id="logo">
                                    <a href="#"><img
                                            src="http://demo.towerthemes.com/tt_sinrato/image/catalog/logo/logo-sinrato.png"
                                            title="Sinrato1" alt="Sinrato1" class="img-responsive" /></a>
                                </div>
                            </div>

                            <div class="box-cart">
                                {{-- <div class="compare">
                                    <a href="/"
                                        id="link-compare" title="Product Compare"><span>Product
                                            <span>Compare</span></span></a>
                                </div> --}}
                                <div class="wishlist">
                                    <a href="#" id="wishlist-total" title="Wish list"><span>Wish list <span
                                                class="count">0</span></span></a>
                                </div>
                                <div id="cart" class="btn-group btn-block">
                                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                        class="btn dropdown-toggle"><span id="cart-total"><span
                                                class="txt_number">0</span><span class="txt_items">My Cart</span><span
                                                class="total-price">$0.00</span></span></button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <p class="text-center cart-empty">Your shopping cart is empty!</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="top-search">
                            <div id="search-by-category">
                                <div class="search-container">
                                    <div class="categories-container">
                                        <div class="hover-cate">
                                            <p><span class="cate-selected" data-value="0">All Categories</span><i
                                                    class="fa fa-caret-down"></i></p>
                                            <ul class="cate-items">
                                                <li class="item-cate" data-value="0">All Categories</li>
                                                <li data-value="21" class="item-cate">all products</li>
                                                <li data-value="124" class="item-cate">Audio &amp; Home Theater</li>
                                                <li data-value="305" class="item-cate f1">Home Audio</li>
                                                <li data-value="338" class="item-cate f2">CD Players &amp; Turntables
                                                </li>
                                                <li data-value="335" class="item-cate f2">Home Theater Systems</li>
                                                <li data-value="337" class="item-cate f2">Receivers &amp; Amplifiers
                                                </li>
                                                <li data-value="336" class="item-cate f2">Speakers</li>
                                                <li data-value="339" class="item-cate f2">Stereo Shelf Systems</li>
                                                <li data-value="340" class="item-cate f2">Wireless &amp; Multiroom
                                                    Audio</li>
                                                <li data-value="125" class="item-cate f1">Blu-ray Disc Players</li>
                                                <li data-value="133" class="item-cate f1">Curved TVs</li>
                                                <li data-value="137" class="item-cate f1">Streaming Media Players</li>
                                                <li data-value="347" class="item-cate f2">4K UHD Streaming Media
                                                    Players</li>
                                                <li data-value="341" class="item-cate f2">Apple TV</li>
                                                <li data-value="342" class="item-cate f2">Fire TV Streaming Media
                                                    Devices</li>
                                                <li data-value="343" class="item-cate f2">Google Chromecast</li>
                                                <li data-value="346" class="item-cate f2">NVIDIA Shield</li>
                                                <li data-value="344" class="item-cate f2">Roku</li>
                                                <li data-value="348" class="item-cate f2">Streaming Blu-ray Players
                                                </li>
                                                <li data-value="349" class="item-cate f2">Streaming Media Player
                                                    Accessories</li>
                                                <li data-value="345" class="item-cate f2">TiVo</li>
                                                <li data-value="136" class="item-cate f1">OLED TVs</li>
                                                <li data-value="131" class="item-cate f1">LED &amp; LCD TVs</li>
                                                <li data-value="314" class="item-cate">Brand Product 1</li>
                                                <li data-value="315" class="item-cate">Brand Product 2</li>
                                                <li data-value="316" class="item-cate">Brand Product 3</li>
                                                <li data-value="317" class="item-cate">Brand Product 4</li>
                                                <li data-value="318" class="item-cate">Brand Product 5</li>
                                                <li data-value="319" class="item-cate">Brand Product 6</li>
                                                <li data-value="320" class="item-cate">Brand Product 7</li>
                                                <li data-value="321" class="item-cate">Brand Product 8</li>
                                                <li data-value="309" class="item-cate">Business &amp; Office</li>
                                                <li data-value="376" class="item-cate f1">Calculators</li>
                                                <li data-value="377" class="item-cate f1">Ink &amp; Toner</li>
                                                <li data-value="378" class="item-cate f1">Printers</li>
                                                <li data-value="379" class="item-cate f1">Scanners</li>
                                                <li data-value="56" class="item-cate">Camera, Photo &amp; Video</li>
                                                <li data-value="306" class="item-cate f1">Security Cameras</li>
                                                <li data-value="325" class="item-cate f2">DSLR Cameras</li>
                                                <li data-value="327" class="item-cate f2">Lenses</li>
                                                <li data-value="326" class="item-cate f2">Mirrorless Cameras</li>
                                                <li data-value="323" class="item-cate f2">Point</li>
                                                <li data-value="324" class="item-cate f2">Shoot Digital Cameras</li>
                                                <li data-value="84" class="item-cate f1">Mirrorless Cameras</li>
                                                <li data-value="328" class="item-cate f2">Accessories</li>
                                                <li data-value="329" class="item-cate f2">Bags &amp; Cases</li>
                                                <li data-value="330" class="item-cate f2">Binoculars &amp; Scopes</li>
                                                <li data-value="331" class="item-cate f2">Digital Cameras</li>
                                                <li data-value="332" class="item-cate f2">Film Photography</li>
                                                <li data-value="333" class="item-cate f2">Flashes</li>
                                                <li data-value="334" class="item-cate f2">Lighting &amp; Studio</li>
                                                <li data-value="86" class="item-cate f1">Digital SLRs</li>
                                                <li data-value="396" class="item-cate f2">DSLR Body &amp; Lens</li>
                                                <li data-value="397" class="item-cate f2">DSLR Body Only</li>
                                                <li data-value="399" class="item-cate f2">DSLR Lenses</li>
                                                <li data-value="398" class="item-cate f2">DSLR Package Deals</li>
                                                <li data-value="62" class="item-cate f1">Lenses</li>
                                                <li data-value="401" class="item-cate f2">Camera Lenses</li>
                                                <li data-value="400" class="item-cate f2">DSLR Lenses</li>
                                                <li data-value="402" class="item-cate f2">Lens Accessories</li>
                                                <li data-value="89" class="item-cate f1">Sports &amp; Action Cameras
                                                </li>
                                                <li data-value="403" class="item-cate f2">Activeon</li>
                                                <li data-value="404" class="item-cate f2">Bracketron </li>
                                                <li data-value="405" class="item-cate f2">Discovery Kids</li>
                                                <li data-value="406" class="item-cate f2">GoPro</li>
                                                <li data-value="91" class="item-cate f1">Point-and-Shoots</li>
                                                <li data-value="407" class="item-cate f2">Bower</li>
                                                <li data-value="411" class="item-cate f2">Celestron</li>
                                                <li data-value="412" class="item-cate f2">Flipbac</li>
                                                <li data-value="409" class="item-cate f2">Gary Fong</li>
                                                <li data-value="413" class="item-cate f2">GigaPan</li>
                                                <li data-value="408" class="item-cate f2">Lowepro</li>
                                                <li data-value="410" class="item-cate f2">SanDisk</li>
                                                <li data-value="72" class="item-cate">Cellphones &amp; Accessories
                                                </li>
                                                <li data-value="78" class="item-cate f1">Cell Phones with Service</li>
                                                <li data-value="82" class="item-cate f1">Accessories</li>
                                                <li data-value="121" class="item-cate f1">No-Contract</li>
                                                <li data-value="79" class="item-cate f1">Prepaid Cell Phones</li>
                                                <li data-value="80" class="item-cate f1">Unlocked Cell Phones</li>
                                                <li data-value="310" class="item-cate">Headphones &amp; Accessories
                                                </li>
                                                <li data-value="383" class="item-cate f1">DJ/Professional</li>
                                                <li data-value="381" class="item-cate f1">On-Ear</li>
                                                <li data-value="380" class="item-cate f1">Over-Ear</li>
                                                <li data-value="382" class="item-cate f1">Sports &amp; Fitness</li>
                                                <li data-value="20" class="item-cate">Laptop &amp; Computer</li>
                                                <li data-value="307" class="item-cate f1">Computer Components</li>
                                                <li data-value="415" class="item-cate f2">Fans, Heatsinks &amp;
                                                    Cooling</li>
                                                <li data-value="416" class="item-cate f2">GPUs / Video Graphics Cards
                                                </li>
                                                <li data-value="417" class="item-cate f2">Hard Drives &amp; Storage
                                                </li>
                                                <li data-value="414" class="item-cate f2">Optical Drives</li>
                                                <li data-value="48" class="item-cate f1">Tablets</li>
                                                <li data-value="361" class="item-cate f2">4G LTE Tablets</li>
                                                <li data-value="358" class="item-cate f2">Apple iPad</li>
                                                <li data-value="365" class="item-cate f2">E-Readers &amp; Accessories
                                                </li>
                                                <li data-value="364" class="item-cate f2">iPad &amp; Tablet
                                                    Accessories</li>
                                                <li data-value="362" class="item-cate f2">Kids' Tablets</li>
                                                <li data-value="360" class="item-cate f2">Microsoft Surface Go</li>
                                                <li data-value="359" class="item-cate f2">Microsoft Surface Pro</li>
                                                <li data-value="363" class="item-cate f2">Refurbished Tablets</li>
                                                <li data-value="49" class="item-cate f1">Desktops</li>
                                                <li data-value="366" class="item-cate f2">All-in-One Computers</li>
                                                <li data-value="370" class="item-cate f2">Apple iMac, Mini &amp; Mac
                                                    Pro</li>
                                                <li data-value="369" class="item-cate f2">Desktop Packages</li>
                                                <li data-value="371" class="item-cate f2">Gaming Desktops</li>
                                                <li data-value="368" class="item-cate f2">Refurbished Desktops</li>
                                                <li data-value="367" class="item-cate f2">Towers Only</li>
                                                <li data-value="50" class="item-cate f1">Computer Accessories</li>
                                                <li data-value="418" class="item-cate f2">Cables &amp; Connectors</li>
                                                <li data-value="419" class="item-cate f2">Cleaning Equipment &amp;
                                                    Kits</li>
                                                <li data-value="420" class="item-cate f2">Computer Speakers</li>
                                                <li data-value="421" class="item-cate f2">Graphics Tablets</li>
                                                <li data-value="51" class="item-cate f1">Laptops</li>
                                                <li data-value="353" class="item-cate f2">2-in-1s</li>
                                                <li data-value="357" class="item-cate f2">Business Laptops</li>
                                                <li data-value="352" class="item-cate f2">Chromebooks</li>
                                                <li data-value="354" class="item-cate f2">Gaming Laptops</li>
                                                <li data-value="356" class="item-cate f2">Laptop Packages</li>
                                                <li data-value="351" class="item-cate f2">MacBooks</li>
                                                <li data-value="350" class="item-cate f2">PC Laptops</li>
                                                <li data-value="355" class="item-cate f2">Refurbished Laptops</li>
                                                <li data-value="304" class="item-cate f1">Monitors</li>
                                                <li data-value="423" class="item-cate f2">Computer Cards &amp;
                                                    Components</li>
                                                <li data-value="424" class="item-cate f2">Desktop &amp; All-in-One
                                                    Computers</li>
                                                <li data-value="422" class="item-cate f2">Printers, Ink &amp; Toner
                                                </li>
                                                <li data-value="312" class="item-cate">Network Devices</li>
                                                <li data-value="386" class="item-cate f1">Bridge</li>
                                                <li data-value="385" class="item-cate f1">Hub</li>
                                                <li data-value="384" class="item-cate f1">Repeater</li>
                                                <li data-value="387" class="item-cate f1">Switch</li>
                                                <li data-value="311" class="item-cate">Quadcopters &amp; Accessories
                                                </li>
                                                <li data-value="391" class="item-cate f1">AirDog</li>
                                                <li data-value="388" class="item-cate f1">Autel Robotics</li>
                                                <li data-value="390" class="item-cate f1">Parrot</li>
                                                <li data-value="389" class="item-cate f1">Yuneec</li>
                                                <li data-value="252" class="item-cate">shop</li>
                                                <li data-value="313" class="item-cate">Smart Watches &amp; Accessories
                                                </li>
                                                <li data-value="394" class="item-cate f1">AT&amp;T Smartwatches</li>
                                                <li data-value="395" class="item-cate f1">Smartwatch Accessories</li>
                                                <li data-value="392" class="item-cate f1">Universal Smartwatches</li>
                                                <li data-value="393" class="item-cate f1">Verizon Smartwatches</li>
                                                <li data-value="308" class="item-cate">Video Games Cosoles</li>
                                                <li data-value="373" class="item-cate f1">PlayStation 3</li>
                                                <li data-value="372" class="item-cate f1">PlayStation 4</li>
                                                <li data-value="375" class="item-cate f1">Xbox 360</li>
                                                <li data-value="374" class="item-cate f1">Xbox One</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="text" name="search" id="text-search" value=""
                                        placeholder="Search entire store here ..." class="" />

                                </div>
                                <div id="sp-btn-search" class="">
                                    <button type="button" id="btn-search-category" class="btn btn-default btn-lg">
                                        <span>Search</span>
                                    </button>
                                </div>
                                <div class="search-ajax">
                                    <div class="ajax-loader-container" style="display: none;">
                                        <img src="http://demo.towerthemes.com/tt_sinrato/image/catalog/AjaxLoader.gif"
                                            class="ajax-load-img" width="30" height="30"
                                            alt="plazathemes.com" />
                                    </div>
                                    <div class="ajax-result-container">
                                        <!-- Content of search results -->
                                    </div>
                                </div>
                                <input type="hidden" id="ajax-search-enable" value="1" />
                            </div>

                            <script>
                                $(document).ready(function() {
                                    var flag = false;
                                    var ajax_search_enable = $('#ajax-search-enable').val();

                                    var current_cate_value = $('ul.cate-items li.selected').data('value');
                                    var current_cate_text = $('ul.cate-items li.selected').html();

                                    $('.cate-selected').attr('data-value', current_cate_value);
                                    $('.cate-selected').html(current_cate_text);

                                    $('.hover-cate p').click(function() {
                                        $(".cate-items").toggle("slow");
                                    });

                                    $('.ajax-result-container').hover(
                                        function() {
                                            flag = true;
                                        },
                                        function() {
                                            flag = false;
                                        }
                                    );

                                    $('.hover-cate').hover(
                                        function() {
                                            flag = true;
                                        },
                                        function() {
                                            flag = false;
                                        }
                                    );

                                    $('#search-by-category').focusout(function() {
                                        if (flag == true) {
                                            $('.ajax-result-container').show();
                                        } else {
                                            $('.ajax-result-container').hide();
                                        }
                                    });

                                    $('#search-by-category').focusin(function() {
                                        $('.ajax-result-container').show();
                                    });

                                    $('#btn-search-category').click(function() {
                                        var url = 'http://demo.towerthemes.com/tt_sinrato/index.php?route=product/search';
                                        var text_search = $('#text-search').val();
                                        if (text_search) {
                                            url += '&search=' + encodeURIComponent(text_search);
                                        }

                                        var category_search = $('.cate-selected').attr("data-value");
                                        if (category_search) {
                                            url += '&category_id=' + encodeURIComponent(category_search);
                                        }

                                        location = url;
                                    });

                                    if (ajax_search_enable == '1') {
                                        $('#text-search').keyup(function(e) {
                                            var text_search = $(this).val();
                                            var cate_search = $('.cate-selected').attr("data-value");
                                            if (text_search != null && text_search != '') {
                                                ajaxSearch(text_search, cate_search);
                                            } else {
                                                $('.ajax-result-container').html('');
                                                $('.ajax-loader-container').hide();
                                            }
                                        });

                                        $('ul.cate-items li.item-cate').click(function() {
                                            var cate_search = $(this).data('value');
                                            var text_search = $('#text-search').val();
                                            $('.cate-selected').attr('data-value', cate_search);
                                            $('.cate-selected').html($(this).html());
                                            if (text_search != null && text_search != '') {
                                                ajaxSearch(text_search, cate_search);
                                            } else {
                                                $('.ajax-result-container').html('');
                                                $('.ajax-loader-container').hide();
                                            }
                                            $(".cate-items").hide();
                                            $('#text-search').focus();
                                        });

                                    }

                                    function ajaxSearch(text_search, cate_search) {
                                        $.ajax({
                                            url: 'http://demo.towerthemes.com/tt_sinrato/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
                                            type: 'post',
                                            data: {
                                                text_search: text_search,
                                                cate_search: cate_search
                                            },
                                            beforeSend: function() {
                                                $('.ajax-loader-container').show();
                                            },
                                            success: function(json) {
                                                if (json['success'] == true) {
                                                    $('.ajax-result-container').html(json['result_html']);
                                                    $('.ajax-loader-container').hide();
                                                }
                                            }
                                        });
                                    }

                                });
                            </script>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="top-menu fix">
                <div class="container">
                    <div class="container-inner">
                        <div class="col-ver hidden-md hidden-sm hidden-xs">
                            <style>
                                #oc-menu-919 .oc-menu-bar {
                                    background: #222222;
                                    color: #FFFFFF;
                                    padding: 17px 20px 17px 20px;
                                    position: relative;
                                }

                                #oc-menu-919.oc-menu-bar {
                                    background: #222222;
                                    color: #FFFFFF;
                                }

                                #oc-menu-919 .ul-top-items .li-top-item {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-919 .ul-top-items .li-top-item .a-top-link {
                                    padding: 10px 20px 10px 20px;
                                    color: #222222;
                                    font-size: 14px;
                                    line-height: 25px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-919 .ul-top-items .li-top-item:hover,
                                #oc-menu-919 .ul-top-items .li-top-item.active {
                                    background: #F7F7F7;
                                    color: #FDB819;
                                }

                                #oc-menu-919 .ul-top-items .li-top-item:hover .a-top-link,
                                #oc-menu-919 .ul-top-items .li-top-item.active .a-top-link {
                                    color: #FDB819;
                                    font-weight: 400;
                                }

                                #oc-menu-919 .mega-menu-container {
                                    width: 758px;
                                    background: #F7F7F7;
                                    padding: 25px 30px 23px 30px;

                                }

                                #oc-menu-919 .mega-menu-container .a-mega-second-link,
                                #oc-menu-919 .mega-menu-container .widget-html-title {
                                    color: #222222;
                                }

                                #oc-menu-919 .mega-menu-container .a-mega-third-link {
                                    color: #777777;
                                }

                                #oc-menu-919 .ul-second-items .li-second-items {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-919 .ul-second-items .li-second-items:hover,
                                #oc-menu-919 .ul-second-items .li-second-items.active {
                                    background: #FFFFFF;
                                    color: #FDB819;
                                }

                                #oc-menu-919 .ul-second-items .li-second-items .a-second-link {
                                    color: #222222;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 500;
                                }

                                #oc-menu-919 .ul-second-items .li-second-items:hover .a-second-link,
                                #oc-menu-919 .ul-second-items .li-second-items.active .a-second-link {
                                    color: #FDB819;
                                    font-weight: 500;
                                }

                                #oc-menu-919 .ul-third-items .li-third-items {
                                    background: #FFFFFF;
                                }

                                #oc-menu-919 .ul-third-items .li-third-items:hover,
                                #oc-menu-919 .ul-third-items .li-third-items.active {
                                    background: #FFFFFF;
                                }

                                #oc-menu-919 .ul-third-items .li-third-items .a-third-link {
                                    color: #777777;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-919 .ul-third-items .li-third-items:hover .a-third-link,
                                #oc-menu-919 .ul-third-items .li-third-items.active .a-third-link {
                                    color: #FDB819;
                                    font-weight: 400;
                                }
                            </style>

                            <div class="oc-menu vertical-menu visible-lg visible-md" id="oc-menu-919">
                                <input type="hidden" id="menu-effect-919" class="menu-effect" value="none" />
                                <div class="oc-menu-bar">
                                    <div class="left"><i class="fa fa-align-left"></i> <span>Browse
                                            categories</span></div>
                                    <div class="right"><i class="icon ion-ios-arrow-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <ul class="ul-top-items">
                                    @forelse($parentBolimlar as $parents)
                                        <li class="li-top-item left ">
                                            <a class="a-top-link a-item" href="#">
                                                <span>
                                                    {{ $parents->name }}
                                                </span>
                                                <i class="ion-ios-arrow-right" aria-hidden="true"></i>
                                            </a>
                                            <!-- Mega Menu -->

                                            <!-- Flyout Menu -->

                                            <div class="flyout-menu-container sub-menu-container left">
                                                <ul class="ul-second-items">
                                                    @forelse($Bolimlar as $bolim)
                                                        @if ($bolim->parent_id == $parents->id)
                                                            <li class="li-second-items">
                                                                <a href="#" class="a-second-link a-item">
                                                                    <span
                                                                        class="a-second-title">{{ $bolim->name }}</span>
                                                                    {{-- <i class="fa fa-angle-right" aria-hidden="true"></i> --}}
                                                                </a>
                                                                <div class="flyout-third-items left">

                                                                </div>
                                                            </li>
                                                        @endif
                                                    @empty
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </li>
                                    @empty

                                    @endforelse
                                </ul>
                            </div>



                        </div>
                        <div class="col-hoz ">
                            <style>
                                #oc-menu-7187 .oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #FFFFFF;
                                    padding: 15px 15px 15px 15px;
                                    position: relative;
                                }

                                #oc-menu-7187.oc-menu-bar {
                                    background: #FFFFFF;
                                    color: #FFFFFF;
                                }

                                #oc-menu-7187 .ul-top-items .li-top-item {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-7187 .ul-top-items .li-top-item .a-top-link {
                                    padding: 15px 0 15px 0;
                                    color: #222222;
                                    font-size: 15px;
                                    line-height: 26px;
                                    text-transform: capitalize;
                                    font-weight: 500;
                                }

                                #oc-menu-7187 .ul-top-items .li-top-item:hover,
                                #oc-menu-7187 .ul-top-items .li-top-item.active {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-7187 .ul-top-items .li-top-item:hover .a-top-link,
                                #oc-menu-7187 .ul-top-items .li-top-item.active .a-top-link {
                                    color: #222222;
                                    font-weight: 500;
                                }

                                #oc-menu-7187 .mega-menu-container {
                                    width: 100%;
                                    background: #FFFFFF;
                                    padding: 25px 30px 23px 30px;

                                }

                                #oc-menu-7187 .mega-menu-container .a-mega-second-link,
                                #oc-menu-7187 .mega-menu-container .widget-html-title {
                                    color: #222222;
                                }

                                #oc-menu-7187 .mega-menu-container .a-mega-third-link {
                                    color: #777777;
                                }

                                #oc-menu-7187 .ul-second-items .li-second-items {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-7187 .ul-second-items .li-second-items:hover,
                                #oc-menu-7187 .ul-second-items .li-second-items.active {
                                    background: #FFFFFF;
                                    color: #FDB819;
                                }

                                #oc-menu-7187 .ul-second-items .li-second-items .a-second-link {
                                    color: #222222;
                                    font-size: 16px;
                                    text-transform: capitalize;
                                    font-weight: 500;
                                }

                                #oc-menu-7187 .ul-second-items .li-second-items:hover .a-second-link,
                                #oc-menu-7187 .ul-second-items .li-second-items.active .a-second-link {
                                    color: #FDB819;
                                    font-weight: 500;
                                }

                                #oc-menu-7187 .ul-third-items .li-third-items {
                                    background: #FFFFFF;
                                }

                                #oc-menu-7187 .ul-third-items .li-third-items:hover,
                                #oc-menu-7187 .ul-third-items .li-third-items.active {
                                    background: #FFFFFF;
                                }

                                #oc-menu-7187 .ul-third-items .li-third-items .a-third-link {
                                    color: #777777;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-7187 .ul-third-items .li-third-items:hover .a-third-link,
                                #oc-menu-7187 .ul-third-items .li-third-items.active .a-third-link {
                                    color: #FDB819;
                                    font-weight: 400;
                                }
                            </style>
                            <div class="oc-menu horizontal-menu oc-menu-bar visible-lg" id="oc-menu-7187">

                                <input type="hidden" id="menu-effect-7187" class="menu-effect" value="none" />
                                <ul class="ul-top-items">
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link" href="index.php?route=common/home">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link" href="index.php?route=product/category&amp;path=252">
                                            <span>Shop</span>
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                        </a>
                                        <!-- Mega Menu -->


                                        <div class="mega-menu-container sub-menu-container left  full-width ">
                                            <div class="row">

                                                @forelse($parentBolimlar as $parents)
                                                    <div class="col-md-3 sub-item2-content" data-cols="3">
                                                        <h4><a class="a-mega-second-link"
                                                                href="">{{ $parents->name }}</a></h4>
                                                        <div class="sub_item3-content">
                                                            @forelse($Bolimlar as $bolim)
                                                                @if ($bolim->parent_id == $parents->id)
                                                                    <h5><a class="a-mega-third-link"
                                                                            href="">{{ $bolim->name }}</a>
                                                                    </h5>
                                                                @endif
                                                            @empty
                                                            @endforelse
                                                            @forelse($Bolimlar as $bolim)
                                                            @empty
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                @empty

                                                @endforelse

                                            </div>
                                        </div>

                                        <!-- Flyout Menu -->
                                    </li>
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link"
                                            href="index.php?route=information/information&amp;information_id=4">
                                            <span>About us</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link" href="index.php?route=information/contact">
                                            <span>Contact us</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link" href="index.php?route=product/special">
                                            <span>Specials</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item left" style="float: left">
                                        <a class="a-top-link" href="index.php?route=blog/blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>




                            <style>
                                #oc-menu-6634 .oc-menu-bar {
                                    background: #222222;
                                    color: #FFFFFF;
                                    padding: 17px 20px 17px 20px;
                                    position: relative;
                                }

                                #oc-menu-6634.oc-menu-bar {
                                    background: #222222;
                                    color: #FFFFFF;
                                }

                                #oc-menu-6634 .ul-top-items .li-top-item {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-6634 .ul-top-items .li-top-item .a-top-link {
                                    padding: 5px 20px 5px 20px;
                                    color: #222222;
                                    font-size: 14px;
                                    line-height: 25px;
                                    text-transform: capitalize;
                                    font-weight: 500;
                                }

                                #oc-menu-6634 .ul-top-items .li-top-item:hover,
                                #oc-menu-6634 .ul-top-items .li-top-item.active {
                                    background: #F7F7F7;
                                    color: #FDB819;
                                }

                                #oc-menu-6634 .ul-top-items .li-top-item:hover .a-top-link,
                                #oc-menu-6634 .ul-top-items .li-top-item.active .a-top-link {
                                    color: #FDB819;
                                    font-weight: 500;
                                }

                                #oc-menu-6634 .mega-menu-container {
                                    width: 100%;
                                    background: #FFFFFF;
                                    padding: 30px 30px 30px 30px;

                                }

                                #oc-menu-6634 .mega-menu-container .a-mega-second-link,
                                #oc-menu-6634 .mega-menu-container .widget-html-title {
                                    color: #FFFFFF;
                                }

                                #oc-menu-6634 .mega-menu-container .a-mega-third-link {
                                    color: #FFFFFF;
                                }

                                #oc-menu-6634 .ul-second-items .li-second-items {
                                    background: #FFFFFF;
                                    color: #222222;
                                }

                                #oc-menu-6634 .ul-second-items .li-second-items:hover,
                                #oc-menu-6634 .ul-second-items .li-second-items.active {
                                    background: #FFFFFF;
                                    color: #FDB819;
                                }

                                #oc-menu-6634 .ul-second-items .li-second-items .a-second-link {
                                    color: #222222;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-6634 .ul-second-items .li-second-items:hover .a-second-link,
                                #oc-menu-6634 .ul-second-items .li-second-items.active .a-second-link {
                                    color: #FDB819;
                                    font-weight: 400;
                                }

                                #oc-menu-6634 .ul-third-items .li-third-items {
                                    background: #FFFFFF;
                                }

                                #oc-menu-6634 .ul-third-items .li-third-items:hover,
                                #oc-menu-6634 .ul-third-items .li-third-items.active {
                                    background: #FFFFFF;
                                }

                                #oc-menu-6634 .ul-third-items .li-third-items .a-third-link {
                                    color: #777777;
                                    font-size: 14px;
                                    text-transform: capitalize;
                                    font-weight: 400;
                                }

                                #oc-menu-6634 .ul-third-items .li-third-items:hover .a-third-link,
                                #oc-menu-6634 .ul-third-items .li-third-items.active .a-third-link {
                                    color: #FDB819;
                                    font-weight: 400;
                                }
                            </style>


                            <div class="oc-menu mobile-menu hidden-lg " id="oc-menu-6634">
                                <input type="hidden" id="menu-effect-6634" class="menu-effect" value="none" />
                                <div class="oc-menu-bar">
                                    <div class="left"><i class="lnr lnr-text-align-left"></i> <span>Mobile
                                            Menu</span></div>
                                    <div class="right"><i class="icon ion-ios-arrow-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <ul class="ul-top-items">
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item" href="index.php?route=common/home">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252">
                                            <span>shop</span>
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                        </span>

                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Laptop &amp; Computer</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_307"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Computer
                                                                        Components</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_48"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Tablets</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_49"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Desktops</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_50"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Computer
                                                                        Accessories</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_51"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Laptops</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_20_304"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Monitors</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Audio &amp; Home Theater</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_305"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Home Audio</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_125"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Blu-ray Disc
                                                                        Players</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_133"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Curved TVs</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_137"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Streaming Media
                                                                        Players</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_136"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">OLED TVs</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_124_131"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">LED &amp; LCD
                                                                        TVs</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Camera, Photo &amp; Video</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_306"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Security
                                                                        Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_84"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Mirrorless
                                                                        Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_86"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Digital SLRs</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_62"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Lenses</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_89"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Sports &amp; Action
                                                                        Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_56_91"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Point-and-Shoots</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Cellphones &amp;
                                                            Accessories</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72_78"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Cell Phones with
                                                                        Service</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72_82"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Accessories</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72_121"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">No-Contract</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72_79"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Prepaid Cell
                                                                        Phones</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=252_72_80"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Unlocked Cell
                                                                        Phones</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124">
                                            <span>Audio &amp; Home Theater</span>
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                        </span>

                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Home Audio</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_338"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">CD Players &amp;
                                                                        Turntables</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_335"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Home Theater
                                                                        Systems</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_337"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Receivers &amp;
                                                                        Amplifiers</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_336"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Speakers</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_339"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Stereo Shelf
                                                                        Systems</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_305_340"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Wireless &amp; Multiroom
                                                                        Audio</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_125"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Blu-ray Disc Players</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_133"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Curved TVs</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Streaming Media Players</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_347"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">4K UHD Streaming Media
                                                                        Players</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_341"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Apple TV</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_342"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Fire TV Streaming Media
                                                                        Devices</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_343"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Google
                                                                        Chromecast</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_346"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">NVIDIA Shield</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_344"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Roku</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_348"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Streaming Blu-ray
                                                                        Players</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_349"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Streaming Media Player
                                                                        Accessories</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_137_345"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">TiVo</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_136"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">OLED TVs</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=124_131"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">LED &amp; LCD TVs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56">
                                            <span>Camera, Photo &amp; Video</span>
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                        </span>

                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Security Cameras</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306_325"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306_327"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Lenses</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306_326"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Mirrorless
                                                                        Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306_323"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Point</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_306_324"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Shoot Digital
                                                                        Cameras</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Mirrorless Cameras</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_328"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Accessories</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_329"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Bags &amp;
                                                                        Cases</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_330"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Binoculars &amp;
                                                                        Scopes</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_331"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Digital
                                                                        Cameras</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_332"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Film
                                                                        Photography</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_333"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Flashes</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_84_334"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Lighting &amp;
                                                                        Studio</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_86"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Digital SLRs</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_86_396"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Body &amp;
                                                                        Lens</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_86_397"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Body
                                                                        Only</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_86_399"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Lenses</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_86_398"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Package
                                                                        Deals</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_62"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Lenses</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_62_401"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Camera Lenses</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_62_400"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">DSLR Lenses</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_62_402"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Lens
                                                                        Accessories</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_89"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Sports &amp; Action
                                                            Cameras</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_89_403"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Activeon</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_89_404"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Bracketron </span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_89_405"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Discovery
                                                                        Kids</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_89_406"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">GoPro</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Point-and-Shoots</span>
                                                    </a>
                                                    <span class="second-click-show a-click-show">
                                                        <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                                        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="flyout-third-items">
                                                        <ul class="ul-third-items">
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_407"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Bower</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_411"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Celestron</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_412"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Flipbac</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_409"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Gary Fong</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_413"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">GigaPan</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_408"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">Lowepro</span></a>
                                                            </li>
                                                            <li class="li-third-items">
                                                                <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=56_91_410"
                                                                    class="a-third-link"><span
                                                                        class="a-third-title">SanDisk</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20">
                                            <span>Laptop &amp; Computer</span>
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                        </span>

                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_307"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Computer Components</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_48"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Tablets</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_49"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Desktops</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_50"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Computer Accessories</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_51"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Laptops</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=20_304"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Monitors</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72">
                                            <span>Cellphones &amp; Accessories</span>
                                        </a>
                                        <span class="top-click-show a-click-show">
                                            <i class="ion-ios-arrow-down" aria-hidden="true"></i>
                                            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
                                        </span>

                                        <div class="sub-menu-container">
                                            <ul class="ul-second-items">
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72_78"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Cell Phones with Service</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72_82"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Accessories</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72_121"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">No-Contract</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72_79"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Prepaid Cell Phones</span>
                                                    </a>
                                                </li>
                                                <li class="li-second-items">
                                                    <a href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=72_80"
                                                        class="a-second-link a-item">
                                                        <span class="a-second-title">Unlocked Cell Phones</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=308">
                                            <span>Video Games Consoles</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=309">
                                            <span>Business &amp; Office</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=310">
                                            <span>Headphones &amp; Accessories</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=311">
                                            <span>Quadcopters &amp; Accessories</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=312">
                                            <span>Network Devices</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="http://demo.towerthemes.com/tt_sinrato/index.php?route=product/category&amp;path=313">
                                            <span>Smart Watches &amp; Accessories</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item"
                                            href="index.php?route=information/information&amp;information_id=4">
                                            <span>About us</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item" href="index.php?route=information/contact">
                                            <span>Contact us</span>
                                        </a>
                                    </li>
                                    <li class="li-top-item">
                                        <a class="a-top-link a-item" href="index.php?route=blog/blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                        <div class="header-phone">
                            <p>Phone: <span>+998945967858</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <script>
            $(document).ready(function() {
                (function($) {
                    function injector(t, splitter, klass, after) {
                        var a = t.text().split(splitter),
                            inject = '';
                        if (a.length) {
                            $(a).each(function(i, item) {
                                inject += '<span class="' + klass + (i + 1) + '">' + item + '</span>' +
                                    after;
                            });
                            t.empty().append(inject);
                        }
                    }

                    var methods = {
                        init: function() {

                            return this.each(function() {
                                injector($(this), '', 'char', '');
                            });

                        },

                        words: function() {

                            return this.each(function() {
                                injector($(this), ' ', 'word', ' ');
                            });

                        },

                        lines: function() {

                            return this.each(function() {
                                var r = "eefec303079ad17405c889e092e105b0";
                                // Because it's hard to split a <br/> tag consistently across browsers,
                                // (*ahem* IE *ahem*), we replaces all <br/> instances with an md5 hash
                                // (of the word "split").  If you're trying to use this plugin on that
                                // md5 hash string, it will fail because you're being ridiculous.
                                injector($(this).children("br").replaceWith(r).end(), r, 'line',
                                    '');
                            });

                        }
                    };

                    $.fn.lettering = function(method) {
                        // Method calling logic
                        if (method && methods[method]) {
                            return methods[method].apply(this, [].slice.call(arguments, 1));
                        } else if (method === 'letters' || !method) {
                            return methods.init.apply(this, [].slice.call(arguments,
                                0)); // always pass an array
                        }
                        $.error('Method ' + method + ' does not exist on jQuery.lettering');
                        return this;
                    };

                })(jQuery);
                $(".module-title h2").lettering('words');
                $(".product-tabs-container-slider .tabs-categorys a span").lettering('words');


            });
        </script>
        <div id="content">

            <div class="main-row full-width">
                <div class="container">
                    <div class="row">
                        <div class="main-col col-sm-12 col-md-12">
                            <div class="row sub-row">
                                <div class="sub-col col-sm-12 col-md-12">
                                    <div class="newletter-popup">
                                        <div id="boxes" class="newletter-container">
                                            <div id="dialog" class="window">
                                                <div id="popup2">
                                                    <span class="b-close"><span>Close</span></span>
                                                </div>
                                                <div class="box">
                                                    <div class="newletter-title">
                                                        <h2>Newsletter</h2>
                                                    </div>
                                                    <div class="box-content newleter-content">
                                                        <label>Subscribe to our newsletters now and stay up-to-date with
                                                            new collections, the latest lookbooks and exclusive
                                                            offers.</label>
                                                        <div id="frm_subscribe">
                                                            <form name="subscribe" id="subscribe_popup">
                                                                <div>
                                                                    <!-- <span class="required">*</span><span>Enter you email address here...</span>-->
                                                                    <input type="text" value=""
                                                                        name="subscribe_pemail"
                                                                        id="subscribe_pemail"
                                                                        placeholder="Enter you email address here...">
                                                                    <input type="hidden" value=""
                                                                        name="subscribe_pname"
                                                                        id="subscribe_pname" />
                                                                    <div id="notification"></div>
                                                                    <a class="button"
                                                                        onclick="email_subscribepopup()"><span>Subscribe
                                                                            !</span></a>

                                                                </div>
                                                            </form>
                                                            <div class="subscribe-bottom">
                                                                <input type="checkbox"
                                                                    id="newsletter_popup_dont_show_again">
                                                                <label for="newsletter_popup_dont_show_again">Don't
                                                                    show this popup again</label>
                                                            </div>
                                                        </div><!-- /#frm_subscribe -->
                                                    </div><!-- /.box-content -->
                                                </div>
                                            </div>
                                            <script>
                                                function email_subscribepopup() {
                                                    $.ajax({
                                                        type: 'post',
                                                        url: 'index.php?route=extension/module/newslettersubscribe/subscribepopup',
                                                        dataType: 'html',
                                                        data: $("#subscribe_popup").serialize(),
                                                        success: function(html) {
                                                            // $.cookie('shownewsletter', '1');
                                                            try {
                                                                eval(html);
                                                            } catch (e) {}
                                                        }
                                                    });
                                                }

                                                function email_unsubscribepopup() {
                                                    $.ajax({
                                                        type: 'post',
                                                        url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
                                                        dataType: 'html',
                                                        data: $("#subscribe_popup").serialize(),
                                                        success: function(html) {
                                                            try {
                                                                eval(html);
                                                            } catch (e) {}
                                                        }
                                                    });
                                                    $('html, body').delay(1500).animate({
                                                        scrollTop: 0
                                                    }, 'slow');
                                                }
                                            </script>
                                            <script>
                                                $(document).ready(function() {

                                                    if ($.cookie('shownewsletter') == 1) $('.newletter-popup').hide();
                                                    $('#subscribe_pemail').keypress(function(e) {
                                                        if (e.which == 13) {
                                                            e.preventDefault();
                                                            email_subscribepopup();
                                                        }
                                                        var name = $(this).val();
                                                        $('#subscribe_pname').val(name);
                                                    });
                                                    $('#subscribe_pemail').change(function() {
                                                        var name = $(this).val();
                                                        $('#subscribe_pname').val(name);
                                                    });
                                                    //transition effect
                                                    if ($.cookie("shownewsletter") != 1) {
                                                        $('.newletter-popup').bPopup();
                                                    }
                                                    $('#newsletter_popup_dont_show_again').on('change', function() {
                                                        if ($.cookie("shownewsletter") != 1) {
                                                            $.cookie("shownewsletter", '1')
                                                        } else {
                                                            $.cookie("shownewsletter", '0')
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div><!-- /.box -->
                                    </div>
                                    <div id="ajax-login-block">
                                    </div>
                                    <div id="ajax-loader">
                                        <img src="http://demo.towerthemes.com/tt_sinrato/image/catalog/AjaxLoader.gif"
                                            alt="" />
                                    </div>
                                    <div class="ajax-body-login">
                                        <div class="account-login">
                                            <div class="page-title">
                                                <h1>Login or create an account</h1>
                                                <a href="javascript:void(0);" class="a-close-frm"
                                                    onclick="ocajaxlogin.closeForm();"><span>Close</span></a>
                                            </div>
                                            <div class="ajax-content">
                                                <div class="ajax-container">
                                                    <div class="login-form-content">
                                                        <h2>Returning Customer</h2>
                                                        <p><strong>I am a returning customer</strong></p>
                                                        <form action="{{ route('login') }}" method="post"
                                                            id="ajax-login-form" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="control-label"
                                                                    for="input-email">E-Mail Address</label>
                                                                <input type="text" name="email"
                                                                    value="" placeholder="E-Mail Address"
                                                                    id="input-email" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label"
                                                                    for="input-password">Password</label>
                                                                <input type="password" name="password"
                                                                    value="" placeholder="Password"
                                                                    id="input-password" class="form-control" />
                                                                <a class="forgotten" href="#">Forgotten
                                                                    Password</a>
                                                            </div>
                                                            <button class="button">Login </button>
                                                            {{-- <div class="action">
                                                                <button class="button" type="button"
                                                                    onclick="ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)"><span>Login</span></button>
                                                                <button class="button" type="button"
                                                                    onclick="ocajaxlogin.appendRegisterForm()"><span>Create
                                                                        an account</span></button>
                                                                <img class="ajax-load-img" alt=""
                                                                    src="http://demo.towerthemes.com/tt_sinrato/image/catalog/AjaxLoader.gif"
                                                                    width="30" height="30" />
                                                            </div> --}}
                                                        </form>
                                                    </div>
                                                </div>

                                                <script>
                                                    $(document).ready(function() {
                                                        var keycode = '';

                                                        $('#input-email').keypress(function(e) {
                                                            keycode = (e.keyCode ? e.keyCode : e.which);
                                                            if (keycode == '13') {
                                                                ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email')
                                                                    .value, document.getElementById('input-password').value));
                                                            }
                                                        });

                                                        $('#input-password').keypress(function(e) {
                                                            keycode = (e.keyCode ? e.keyCode : e.which);
                                                            if (keycode == '13') {
                                                                ocajaxlogin.loginAction(ocajaxlogin.loginAction(document.getElementById('input-email')
                                                                    .value, document.getElementById('input-password').value));
                                                            }
                                                        });
                                                    });
                                                </script>


                                            </div>
                                        </div>
                                        <div class="account-register">
                                            <div class="page-title">
                                                <h1>Login or create an account</h1>
                                                <a href="javascript:void(0);" class="a-close-frm"
                                                    onclick="ocajaxlogin.closeForm();"><span>Close</span></a>
                                            </div>
                                            <div class="ajax-content">
                                                <div class="ajax-container">
                                                    <div class="register-form-content">
                                                        <h1>Hisobni ro'yxatdan o'tkazish</h1>
                                                        <p>Sizda avvaldan hisob mavjud bo'lsa
                                                            <a onclick="ocajaxlogin.appendLoginForm()"
                                                                href="javascript:void(0);">login</a>.
                                                        </p>
                                                        <form action="{{ route('register') }}" method="POST"
                                                            id="ajax-register-form" enctype="multipart/form-data"
                                                            class="form-horizontal">
                                                            @csrf
                                                            <fieldset id="account">
                                                                <legend>Shaxsiy ma'lumotlaringiz</legend>
                                                                <div class="form-group required"
                                                                    style="display:  none ;">
                                                                    <label class="col-sm-2 control-label">Customer
                                                                        Group</label>
                                                                    <div class="col-sm-10">
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="customer_group_id"
                                                                                    value="1"
                                                                                    checked="checked" />
                                                                                Default</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-lastname"> Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="name"
                                                                            value="" placeholder="Last Name"
                                                                            id="input-lastname"
                                                                            class="form-control" />
                                                                        <!-- Error Last Name -->
                                                                        <div class="for-error error-lastname"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-register-email">E-Mail</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" name="email"
                                                                            value="" placeholder="E-Mail"
                                                                            id="input-register-email"
                                                                            class="form-control" />
                                                                        <!-- Error Email -->
                                                                        <div class="for-error error-email"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-telephone">Telephone</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="tel" name="phone"
                                                                            value="" placeholder="Telephone"
                                                                            id="input-telephone"
                                                                            class="form-control" />
                                                                        <!-- Error Phone -->
                                                                        <div class="for-error error-telephone"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-telephone">Xizmatingiz</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="role" class="form-control">
                                                                            <option value="client">Haridor</option>
                                                                            <option value="driver">Haydovchi</option>
                                                                            <option value="saller">Sotuvchi</option>

                                                                        </select>
                                                                        <!-- Error Phone -->
                                                                        <div class="for-error error-telephone"></div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <legend>Parol yarating</legend>
                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-register-password">Parol</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" name="password"
                                                                            value="" placeholder="Password"
                                                                            id="input-register-password"
                                                                            class="form-control" />
                                                                        <!-- Error Password -->
                                                                        <div class="for-error error-password"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group required">
                                                                    <label class="col-sm-2 control-label"
                                                                        for="input-confirm">Parolni tekshirish</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" name="confirm"
                                                                            value=""
                                                                            placeholder="Password Confirm"
                                                                            id="input-confirm"
                                                                            class="form-control" />
                                                                        <!-- Error Confirm Password -->
                                                                        <div class="for-error error-confirm"></div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            {{-- <fieldset>
                                                                <legend>Newsletter</legend>
                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-sm-2 control-label">Subscribe</label>
                                                                    <div class="col-sm-10">
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="newsletter"
                                                                                value="1" />
                                                                            Yes</label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="newsletter"
                                                                                value="0" checked="checked" />
                                                                            No</label>
                                                                    </div>
                                                                </div>
                                                            </fieldset> --}}

                                                            <div class="buttons">
                                                                <div class="pull-right">Iltimos foydalanish
                                                                    shartlarini o'qip chiqing
                                                                    <a href="" class="agree"><b>Foydalanish
                                                                            shartlariga roziman</b></a>
                                                                    <input type="checkbox" name="agree"
                                                                        value="1" />
                                                                    &nbsp;
                                                                    {{-- <input type="button" value="Continue" class="btn btn-primary" /> --}}
                                                                    <button class="btn btn-primary">Continue</button>
                                                                    <img class="ajax-load-img" alt=""
                                                                        src="{{ asset('client/image/catalog/AjaxLoader.gif') }}"
                                                                        width="30" height="30" />
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="alert alert-danger for-error error-warning"><i
                                                            class="fa fa-exclamation-circle"></i><span></span></div>
                                                </div>
                                                <script>
                                                    <!--
                                                    // Sort the custom fields
                                                    $('#account .form-group[data-sort]').detach().each(function() {
                                                        if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
                                                            $('#account .form-group').eq($(this).attr('data-sort')).before(this);
                                                        }

                                                        if ($(this).attr('data-sort') > $('#account .form-group').length) {
                                                            $('#account .form-group:last').after(this);
                                                        }

                                                        if ($(this).attr('data-sort') < -$('#account .form-group').length) {
                                                            $('#account .form-group:first').before(this);
                                                        }
                                                    });

                                                    $('#address .form-group[data-sort]').detach().each(function() {
                                                        if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {
                                                            $('#address .form-group').eq($(this).attr('data-sort')).before(this);
                                                        }

                                                        if ($(this).attr('data-sort') > $('#address .form-group').length) {
                                                            $('#address .form-group:last').after(this);
                                                        }

                                                        if ($(this).attr('data-sort') < -$('#address .form-group').length) {
                                                            $('#address .form-group:first').before(this);
                                                        }
                                                    });

                                                    $('input[name=\'customer_group_id\']').on('change', function() {
                                                        $.ajax({
                                                            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
                                                            dataType: 'json',
                                                            success: function(json) {
                                                                $('.custom-field').hide();
                                                                $('.custom-field').removeClass('required');

                                                                for (i = 0; i < json.length; i++) {
                                                                    custom_field = json[i];

                                                                    $('#custom-field' + custom_field['custom_field_id']).show();

                                                                    if (custom_field['required']) {
                                                                        $('#custom-field' + custom_field['custom_field_id']).addClass('required');
                                                                    }
                                                                }


                                                            },
                                                            error: function(xhr, ajaxOptions, thrownError) {
                                                                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                            }
                                                        });
                                                    });

                                                    $('input[name=\'customer_group_id\']:checked').trigger('change');
                                                    //
                                                    -->
                                                </script>
                                                <script>
                                                    <!--
                                                    $('button[id^=\'button-custom-field\']').on('click', function() {
                                                        var element = this;

                                                        $('#form-upload').remove();

                                                        $('body').prepend(
                                                            '<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>'
                                                        );

                                                        $('#form-upload input[name=\'file\']').trigger('click');

                                                        if (typeof timer != 'undefined') {
                                                            clearInterval(timer);
                                                        }

                                                        timer = setInterval(function() {
                                                            if ($('#form-upload input[name=\'file\']').val() != '') {
                                                                clearInterval(timer);

                                                                $.ajax({
                                                                    url: 'index.php?route=tool/upload',
                                                                    type: 'post',
                                                                    dataType: 'json',
                                                                    data: new FormData($('#form-upload')[0]),
                                                                    cache: false,
                                                                    contentType: false,
                                                                    processData: false,
                                                                    beforeSend: function() {
                                                                        $(element).button('loading');
                                                                    },
                                                                    complete: function() {
                                                                        $(element).button('reset');
                                                                    },
                                                                    success: function(json) {
                                                                        $(element).parent().find('.text-danger').remove();

                                                                        if (json['error']) {
                                                                            $(node).parent().find('input').after(
                                                                                '<div class="text-danger">' + json['error'] + '</div>');
                                                                        }

                                                                        if (json['success']) {
                                                                            alert(json['success']);

                                                                            $(element).parent().find('input').val(json['code']);
                                                                        }
                                                                    },
                                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                                                                            .responseText);
                                                                    }
                                                                });
                                                            }
                                                        }, 500);
                                                    });
                                                    //
                                                    -->
                                                </script>
                                                <script>
                                                    <!--
                                                    $('.date').datetimepicker({
                                                        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
                                                        pickTime: false
                                                    });

                                                    $('.time').datetimepicker({
                                                        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
                                                        pickDate: false
                                                    });

                                                    $('.datetime').datetimepicker({
                                                        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
                                                        pickDate: true,
                                                        pickTime: true
                                                    });
                                                    //
                                                    -->
                                                </script>
                                            </div>
                                        </div>
                                        <div class="account-success">
                                            <div class="ajax-content">
                                                <div class="ajax-container">
                                                    <div class="success-content">
                                                        <div class="page-title">
                                                            <h1>Siz ro'yxatdan o'tdingiz</h1>
                                                        </div>
                                                        <p>Bizning xizmatimizdan foydalanganingiz uchun katta rahmat.
                                                        </p>
                                                        </p>
                                                        <div class="buttons">
                                                            <div class="pull-right"><button
                                                                    class="button"><span>Continue</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="logout-success">
                                            <div class="ajax-content">
                                                <div class="ajax-container">
                                                    <div class="success-content">
                                                        <div class="page-title">
                                                            <h1>Hisobdan chiqish.</h1>
                                                        </div>
                                                        <p>
                                                            Siz hisobingizdan chiqdingiz. Endi bu xavfsiz.</p>
                                                        <p>Your shopping cart has been saved, the items inside it will
                                                            be restored whenever you log back into your account.</p>
                                                        <div class="buttons">
                                                            <div class="pull-right"><button
                                                                    class="button"><span>Continue</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="opc-hidden">
                                        <input type="hidden" id="input-opc-status" value="1" />
                                    </div>

                                    <div class="banner7">
                                        <div class="oc-banner7-container">
                                            <div class="flexslider oc-nivoslider">
                                                <div class="oc-loading"></div>
                                                <div id="oc-inivoslider1" class="nivoSlider">

                                                    <img style="display: none;" src="" alt=""
                                                        title="#banner7-caption2" />
                                                    <a href="#">
                                                        <img style="display: none;"
                                                            src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/slider/slider1-sinrato1-1920x630.jpg"
                                                            alt="" title="#banner7-caption3" />
                                                    </a>
                                                    <a href="#">
                                                        <img style="display: none;"
                                                            src="http://demo.towerthemes.com/tt_sinrato/image/cache/catalog/slider/slider2-sinrato1-1920x630.jpg"
                                                            alt="" title="#banner7-caption4" />
                                                    </a>

                                                </div>





                                                <div id="banner7-caption2"
                                                    class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                                                    data-class="slide-movetype1">
                                                    <div class="timeloading"></div>
                                                    <div class=" banner7-content slider-1">
                                                        <div class="container" style="height:100%;">
                                                            <div class="container-inner"
                                                                style="height: 100%;position: relative;">
                                                                <div class="text-content">


                                                                    <div class="banner7-des">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div id="banner7-caption3"
                                                    class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                                                    data-class="slide-movetype2">
                                                    <div class="timeloading"></div>
                                                    <div class=" banner7-content slider-2">
                                                        <div class="container" style="height:100%;">
                                                            <div class="container-inner"
                                                                style="height: 100%;position: relative;">
                                                                <div class="text-content">
                                                                    <h1 class="title1">Samsung EOS600D/Kiss X5</h1>

                                                                    <h2 class="sub-title">New Range Of Samsung Camera
                                                                    </h2>

                                                                    <div class="banner7-des">
                                                                        <p>Save up to<span>50% Off</span></p>

                                                                    </div>
                                                                    <div class="banner7-readmore">
                                                                        <a class="btn" href="#"
                                                                            title="shop now">shop now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div id="banner7-caption4"
                                                    class="banner7-caption nivo-html-caption nivo-caption move-slides-effect"
                                                    data-class="slide-movetype2">
                                                    <div class="timeloading"></div>
                                                    <div class=" banner7-content slider-2">
                                                        <div class="container" style="height:100%;">
                                                            <div class="container-inner"
                                                                style="height: 100%;position: relative;">
                                                                <div class="text-content">
                                                                    <h1 class="title1">Sega Saturn Disc Drive
                                                                        Replacement</h1>

                                                                    <h2 class="sub-title">Game, Consoles &amp; Much
                                                                        More!</h2>

                                                                    <div class="banner7-des">
                                                                        <p>Save up to<span>60% Off</span></p>

                                                                    </div>
                                                                    <div class="banner7-readmore">
                                                                        <a class="btn" href="#"
                                                                            title="shop now">shop now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $(window).load(function() {
                                                        $('#oc-inivoslider1').nivoSlider({
                                                            effect: "random",
                                                            slices: 15,
                                                            boxCols: 8,
                                                            boxRows: 4,
                                                            manualAdvance: false,
                                                            animSpeed: 500,
                                                            pauseTime: 5000,
                                                            startSlide: 0,
                                                            controlNav: true,
                                                            directionNav: false,
                                                            controlNavThumbs: false,
                                                            pauseOnHover: true,
                                                            prevText: '<i class="ion-ios-arrow-thin-left"></i>',
                                                            nextText: '<i class="ion-ios-arrow-thin-right"></i>',
                                                            afterLoad: function() {
                                                                $('.oc-loading').css("display", "none");
                                                                $('.timeloading').css('animation-duration', " 5000ms ");
                                                            },
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @yield('content')



        </div>
        <footer>
            <div class="newsletter-group">
                <div class="container">
                    <div class="newletter-subscribe-container">
                        <div class="container-inner">
                            <div class="newletter-subscribe">
                                <div id="boxes-normal" class="newletter-container">
                                    <div style="" id="dialog-normal" class="window">
                                        <div class="box">
                                            <div class="newletter-title">

                                                <h5>Sign Up For <span>Newsletters</span></h5>
                                                <p>Be the First to Know. Sign up for newsletter today</p>
                                            </div>
                                            <div class="box-content newleter-content">
                                                <div id="frm_subscribe-normal">
                                                    <form name="subscribe" id="subscribe-normal">
                                                        <input type="text" value=""
                                                            name="subscribe_email" id="subscribe_email-normal"
                                                            placeholder="Enter you email address here...">
                                                        <input type="hidden" value="" name="subscribe_name"
                                                            id="subscribe_name" />
                                                        <a class="btn" onclick="email_subscribe()"
                                                            title="Subscribe !"><span>Subscribe !</span></a>

                                                        <div id="notification-normal"></div>
                                                    </form>

                                                </div><!-- /#frm_subscribe -->

                                            </div><!-- /.box-content -->
                                        </div>
                                    </div>
                                    <script>
                                        function email_subscribe() {
                                            $.ajax({
                                                type: 'post',
                                                url: 'index.php?route=extension/module/newslettersubscribe/subscribe',
                                                dataType: 'html',
                                                data: $("#subscribe-normal").serialize(),
                                                success: function(html) {
                                                    try {
                                                        eval(html);
                                                    } catch (e) {}
                                                }
                                            });
                                        }

                                        function email_unsubscribe() {
                                            $.ajax({
                                                type: 'post',
                                                url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
                                                dataType: 'html',
                                                data: $("#subscribe").serialize(),
                                                success: function(html) {
                                                    try {
                                                        eval(html);
                                                    } catch (e) {}
                                                }
                                            });
                                            $('html, body').delay(1500).animate({
                                                scrollTop: 0
                                            }, 'slow');
                                        }
                                    </script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#subscribe_email').keypress(function(e) {
                                                if (e.which == 13) {
                                                    e.preventDefault();
                                                    email_subscribe();
                                                }
                                                var name = $(this).val();
                                                $('#subscribe_name').val(name);
                                            });
                                            $('#subscribe_email').change(function() {
                                                var name = $(this).val();
                                                $('#subscribe_name').val(name);
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="link-follow">
                        <li class="first"><a class="twitter fa fa-twitter" title="Twitter"
                                href="https://twitter.com/plazathemes"><span>twitter</span></a></li>
                        <li><a class="google fa fa-google-plus" title="Google" href="#"><span>google
                                </span></a></li>
                        <li><a class="facebook fa fa-facebook" title="Facebook"
                                href="https://www.facebook.com/plazathemes1"><span>facebook</span></a></li>
                        <li><a class="youtube fa fa-youtube" title="Youtube"
                                href="https://www.youtube.com/user/plazathemes"><span>youtube </span></a></li>
                    </ul>

                </div>
            </div>
            <div class="footer-top ">
                <div class="container">
                    <div class="container-inner">
                        <div class="row">
                            <div class="col1 col-md-4 col-sm-6 col-xs-12 col-footer">

                                <div class="footer-content">
                                    <a href="#" class="logo-footer"><img
                                            src="image/catalog/logo/logo-footer.png" alt="logo-footer"></a>

                                    <p>We are a team of designers and developers that create high quality
                                        Magento, Prestashop, Opencart.</p>
                                    <div class="payment">
                                        <h5>payments</h5>
                                        <img src="image/catalog/cmsblock/payment.png" alt="payment">
                                    </div>

                                </div>


                            </div>
                            <div class="col2 col-md-2 col-sm-6 col-xs-12 col-footer">
                                <div class="footer-title">
                                    <h5>Information</h5>
                                </div>
                                <div class="footer-content">
                                    <ul class="list-unstyled text-content">
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/information&amp;information_id=4">About
                                                Us</a></li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/information&amp;information_id=6">Delivery
                                                Information</a></li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/information&amp;information_id=3">Privacy
                                                Policy</a></li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/information&amp;information_id=5">Terms
                                                &amp; Conditions</a></li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/contact">Contact
                                                Us</a></li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=account/return/add">Returns</a>
                                        </li>
                                        <li><a
                                                href="http://demo.towerthemes.com/tt_sinrato/index.php?route=information/sitemap">Site
                                                Map</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col3  col-md-3 col-sm-6 col-xs-12 col-footer">

                                <div class="footer-contact">
                                    <div class="footer-title">
                                        <h5>Contact Us</h5>
                                    </div>
                                    <div class="footer-content">
                                        <ul class="list-unstyled text-content">
                                            <li><span>Address:</span> 4710-4890 Breckinridge
                                                St,Fayetteville, NC 28311</li>
                                            <li><span>Email:</span> support@plazatheme.com</li>
                                            <li class="phone"><span>Call us:</span> 1-1001-234-5678</li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="col4  col-md-3 col-sm-6 col-xs-12 col-footer">

                                <div class="footer-title">
                                    <h5>Our Twitter Feed</h5>
                                </div>
                                <div id="twitter-feed"></div>
                                <script>
                                    $(document).ready(function() {
                                        var displaylimit = 1;
                                        var screenname = "Our Twitter Feed";
                                        var showdirecttweets = false;
                                        var showretweets = true;
                                        var showtweetlinks = true;

                                        var headerHTML = '';
                                        var loadingHTML = '';
                                        headerHTML += '<div class="tweet-title"><h3>' + screenname + '</h3></div>';
                                        loadingHTML +=
                                            '<div id="loading-container"><img src="http://demo.towerthemes.com/tt_sinrato/twitter/image/ajax-loader.gif" width="32" height="32" alt="tweet loader" /></div>';

                                        $('#twitter-feed').html(headerHTML + loadingHTML);

                                        var twitter_json_url =
                                            'http://demo.towerthemes.com/tt_sinrato/twitter/get-tweets.php?twitteruser=plazathemes&consumerkey=qulMEXc9RpNgvdHniZsKCQ&consumersecret=9Wk7UwrlfkeR8BaKU1Nz7gS6Y3wQ2oMAuRTSPdwSpo&accesstoken=167448460-MuUwtTxWoehX4MKL8KrEbP6pkLnsQf0p3NKuiUGz&accesstokensecret=DKVQipT6cdOpnRELDxlsC3Mf5Rf20TA2IdUU6dzaqg';

                                        $.getJSON(twitter_json_url,
                                            function(feeds) {
                                                //alert(feeds);
                                                var feedHTML = '<div class="tweet-content">';
                                                var displayCounter = 1;
                                                for (var i = 0; i < feeds.length; i++) {
                                                    var tweetscreenname = feeds[i].user.name;
                                                    var tweetusername = feeds[i].user.screen_name;
                                                    var profileimage = feeds[i].user.profile_image_url_https;
                                                    var status = feeds[i].text;
                                                    var isaretweet = false;
                                                    var isdirect = false;
                                                    var tweetid = feeds[i].id_str;

                                                    //If the tweet has been retweeted, get the profile pic of the tweeter
                                                    if (typeof feeds[i].retweeted_status != 'undefined') {
                                                        profileimage = feeds[i].retweeted_status.user.profile_image_url_https;
                                                        tweetscreenname = feeds[i].retweeted_status.user.name;
                                                        tweetusername = feeds[i].retweeted_status.user.screen_name;
                                                        tweetid = feeds[i].retweeted_status.id_str
                                                        isaretweet = true;
                                                    };


                                                    //Check to see if the tweet is a direct message
                                                    if (feeds[i].text.substr(0, 1) == "@") {
                                                        isdirect = true;
                                                    }

                                                    //console.log(feeds[i]);

                                                    if (((showretweets == true) || ((isaretweet == false) && (showretweets == false))) && ((
                                                            showdirecttweets == true) || ((showdirecttweets == false) && (isdirect ==
                                                            false)))) {
                                                        if ((feeds[i].text.length > 1) && (displayCounter <= displaylimit)) {
                                                            if (showtweetlinks == true) {
                                                                status = addlinks(status);
                                                            }

                                                            if (displayCounter == 1) {
                                                                feedHTML += headerHTML;
                                                            }

                                                            feedHTML += '<div class="twitter-article">';
                                                            feedHTML += '<div class="twitter-pic"><a href="https://twitter.com/' +
                                                                tweetusername + '" ><img src="' + profileimage +
                                                                '"images/twitter-feed-icon.png" width="42" height="42" alt="twitter icon" /></a></div>';
                                                            feedHTML +=
                                                                '<div class="twitter-text"><span class="tweetprofilelink"><strong><a href="https://twitter.com/' +
                                                                tweetusername + '" >' + tweetscreenname +
                                                                '</a></strong> <a href="https://twitter.com/' + tweetusername + '" >@' +
                                                                tweetusername + '</a></span><br/>' + status + '<br/>';
                                                            feedHTML += '<span class="tweet-time"><a href="https://twitter.com/' +
                                                                tweetusername + '/status/' + tweetid + '">' + relative_time(feeds[i]
                                                                    .created_at) + '</a></span>';
                                                            feedHTML += '</div></div>';
                                                            displayCounter++;
                                                        }
                                                    }
                                                }
                                                feedHTML += '</div>';
                                                $('#twitter-feed').html(feedHTML);
                                            });

                                        //Function modified from Stack Overflow
                                        function addlinks(data) {
                                            //Add link to all http:// links within tweets
                                            data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
                                                return '<a href="' + url + '" >' + url + '</a>';
                                            });

                                            //Add link to @usernames used within tweets
                                            data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
                                                return '<a href="http://twitter.com/' + reply.substring(1) +
                                                    '" style="font-weight:lighter;" >' + reply.charAt(0) + reply.substring(1) + '</a>';
                                            });
                                            return data;
                                        }


                                        function relative_time(time_value) {
                                            var values = time_value.split(" ");
                                            time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
                                            var parsed_date = Date.parse(time_value);
                                            var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
                                            var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
                                            var shortdate = time_value.substr(4, 2) + " " + time_value.substr(0, 3);
                                            delta = delta + (relative_to.getTimezoneOffset() * 60);

                                            if (delta < 60) {
                                                return '1m';
                                            } else if (delta < 120) {
                                                return '1m';
                                            } else if (delta < (60 * 60)) {
                                                return (parseInt(delta / 60)).toString() + 'm';
                                            } else if (delta < (120 * 60)) {
                                                return '1h';
                                            } else if (delta < (24 * 60 * 60)) {
                                                return (parseInt(delta / 3600)).toString() + 'h';
                                            } else if (delta < (48 * 60 * 60)) {
                                                //return '1 day';
                                                return shortdate;
                                            } else {
                                                return shortdate;
                                            }
                                        }

                                    });
                                </script>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom ">
                <div class="container">
                    <div class="container-inner">
                        <div class="footer-copyright">
                            <p>Copyright &copy; 2018 <a href="http://www.plazathemes.com">PlazaThemes</a>.<span> All
                                    Right Reserved.</span></p>
                        </div>
                        <div class="footer-custom-links">
                            <a href="index.php?route=product/manufacturer">Brands</a>
                            <a href="index.php?route=product/special">Specials</a>
                        </div>

                    </div>
                </div>
            </div>
            <div id="back-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
        <script>
            $(document).ready(function() {
                // hide #back-top first
                $("#back-top").hide();
                // fade in #back-top
                $(function() {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > $('body').height() / 3) {
                            $('#back-top').fadeIn();
                        } else {
                            $('#back-top').fadeOut();
                        }
                    });
                    // scroll body to 0px on click
                    $('#back-top').click(function() {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });
            });
        </script>
        <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
    </div><!-- wrapper -->
</body>

</html>
