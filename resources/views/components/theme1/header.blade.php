<section class="full-container topLink">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="float-left">
                    <div class="tlLeft">
                        <span><i class="fa fa-phone"></i> +060(800) 801-858</span>
                        <span><i class="fa fa-envelope-o"></i> info@sardajistore.com</span>
                    </div>
                    <!-- tl left -->
                </div>
                <!-- col md -->
                <div class="float-right">
                    <div class="tlRight">
                        <ul class="topNavList">
                            <li><i class="fa fa-map-marker"></i><a href="#">Store Locator</a></li>
                            <li><i class="fa fa-truck"></i><a href="#">Track Your Order</a></li>
                            <li><i class="fa fa-dollar"></i><a href="#">{{ getSetting('currency_code')}}
                                    {{ getSetting('currency_symbol') }}</a></li>
                            @guest
                            <li><i class="fa fa-user-o"></i><a href="{{ url('login') }}">Login</a></li>
                            @endguest
                            @auth
                            <li>
                                <i class="fa fa-user-o"></i>
                                <a href="route('logout')" onclick="event.preventDefault();
                                                    document.getElementById('myLogOutForm').submit();">
                                    {{ __('Log out') }}
                                    <form method="POST" id="myLogOutForm" action="{{ route('logout') }}">
                                        @csrf
                                    </form>

                                </a>
                            </li>
                            @endauth


                        </ul>
                    </div>
                    <!-- tl right-->
                </div>
                <!-- col md -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<header class="full-container logoSection">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ LoadAssets('images/logo.png')}}" class="img-fluid" />
                </a>
            </div>
            <!-- col md -->
            <div class="col-md-6">
                <div class="searchBox">
                    <div class="searchForm">
                        <input type="text" class="sBox" placeholder="Search for products" />
                        <button class="sButton"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <!-- col md -->
            <div class="col-md-3">
                <div class="headerNav">
                    <a href="#"><i class="fa fa-heart-o"></i></a>
                    <a href="{{ url('cart')}}" class="lblCart"><span class="cartItem">{{ $cart['total_count'] }}</span>
                        <sup>$</sup>{{ currencyFormat($cart['grand_total'])}}</a>
                </div>
            </div>
            <!-- col md -->
        </div>
        <!-- row -->
    </div>
</header>
<!-- container -->
<nav class="full-container navSection menu-container">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="menu">

                    <ul>
                        @if(!empty($CategoryTree))
                        @foreach($CategoryTree as $category)
                        @if(isset($category->two_layer_category) && !empty($category->two_layer_category))
                        <li class="menu-dropdown-icon">

                            <a href="{{ url('category/'.$category->categories_slug) }}">
                                {{ $category->category_name }}
                                <i class="fa fa-angle-down"></i>
                            </a>


                            <ul>

                                @foreach($category->two_layer_category as $two_layer)
                                <li class="col-md-10 col-sm-12 col-12">
                                    <div class="col-md-3 col-sm-12 col-12">
                                        <a href="{{ url('category/'.$two_layer->categories_slug) }}">
                                            {{ $two_layer->category_name }}
                                        </a>
                                        <ul>
                                            @if(isset($two_layer->three_layer_category) &&
                                            !empty($two_layer->three_layer_category))
                                            @foreach($two_layer->three_layer_category as $three_layer)
                                            <li>
                                                <a href="{{ url('category/'.$three_layer->categories_slug) }}">
                                                    {{ $three_layer->category_name }}
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </li>

                                @endforeach


                                <li class="col-md-2 col-sm-12 col-12 ads">
                                    <a href="javascript:;">
                                        <img class="img-fluid" src="{{ LoadAssets('images/Protein.jpg')}}" />
                                    </a>
                                </li>
                            </ul>

                        </li>
                        @else
                        <li><a href="{{ url('category/'.$category->categories_slug) }}">
                                {{ $category->category_name }} </a></li>
                        @endif
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <!-- col md -->
        </div>
        <!-- row -->
    </div>
</nav>