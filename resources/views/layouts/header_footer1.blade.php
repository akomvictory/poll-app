<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jenx - Food & Restaurant</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.formstyler.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extralayers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<!-- Page pre loader -->
<!-- <div id="pre-loader">
    <div class="loader-holder">
        <div class="frame">
            <img src="{{ asset('images/Preloader.gif') }}" alt="Laboom" />
        </div>
    </div>
</div>   -->
<div class="wrapper">
    <!-- Start Header -->
    <header>
        <div class="header-part header-reduce sticky">
            <div class="header-top">
                <div class="container">
                    <div class="header-top-inner">
                        <div class="header-top-left">
                            <a href="#" class="top-cell"><img src="{{ asset('/images/fon.png')}}" alt=""> <span>123-81615-44559</span></a>
                            <a href="#" class="top-email"><span>support@jenx.com</span></a>
                            <a href="/login" class="top-email"><span>Login</span></a>
                            <a href="/register" class="top-email"><span>Register</span></a>
                        </div>
                        <div class="header-top-right">
                            <div class="social-top">
                                <ul>
                                @auth
                                <li class="has-child">
                                <a href="#">{{Auth::user()->name}}</a>
                                <ul class="drop-nav">
                                    <li><a href="shop.html">Logout</a></li>
                        
                                   
                                </ul>
                            </li>
                                @endauth
                                <li> <a href="/dashboard/meal" class="btn btn-info">Dashboard</a> </li>
                                @if(count($reservation)==1)
                                <li> <a href="/dashboard/meal" class="btn btn-success"> Order Status</a> </li>
                                 @endif
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                 
                                </ul>
                            </div>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-info">
                        <div class="header-info-inner">
                            <div class="book-table header-collect book-md">
                            
                                <a href="#" data-toggle="modal" data-target="#booktable"><img src="{{ asset('/images/icon-table.png')}}" alt="">Book a Table</a>
                            </div>
                            
                            <?php $total = 0 ?>
 
                             @if(session('cart'))
                            <div class="shop-cart header-collect">
                                <a href="#"><img src="{{ asset('/images/icon-basket.png')}}" alt="">{{count(session('cart'))}} items in cart</a>
                                <div class="cart-wrap">
                                    <div class="cart-blog">

                                    
                                    @foreach(session('cart') as $id => $details)
                        
                                    <?php $total += $details['price'] * $details['quantity'] ?>

                                        <div class="cart-item">
                                            <div class="cart-item-left">
                                                <img src="/storage/photos/{{ $details['photo'] }}" alt="">
                                            </div>
                                            <div class="cart-item-right">
                                                <h6>{{ $details['name'] }}</h6>
                                                <span># {{ $details['price'] }}</span>
                                            </div>
                                            <span class="delete-icon"></span>
                                        </div>

                                        @endforeach


                                        <div class="subtotal">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h6>Subtotal :</h6>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <span># {{$total}}</span>
                                            </div>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="#" class="btn-black view">VIEW ALL</a>
                                            <a href="#" class="btn-main checkout">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class="search-part">
                                <a href="#"></a>
                                <div class="search-box">
                                    <input type="text" name="txt" placeholder="Search">
                                    <input type="submit" name="submit" value=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="book-table header-collect book-sm">
                        <a href="#" data-toggle="modal" data-target="#booktable"><img src="{{ asset('/images/icon-table.png') }}" alt="">Book a Table</a>
                    </div>
                    <div class="menu-main">
                        <ul>
                            <li class="">
                                <a href="/">Home</a>
                               
                            </li>

                            <li class="has-child">
                                <a href="#">Pages</a>
                                <ul class="drop-nav">
                                    
                                   
                                   
                                    <li class="drop-has-child">
                                    <a href="#">Menu</a>
                                    <ul class="drop-nav">
                                    <li><a href="/meals">All</a></li>
                                        <li><a href="/meal/category/vegetarian">Vegetarian</a></li>
                                        <li><a href="/meal/category/chinese">Chinese</a></li>
                                        <li><a href="/meal/category/mexican">Mexican</a></li>
                                        <li><a href="/meal/category/breakfast">Breakfast</a></li>
                                        <li><a href="/meal/category/brunch">Brunch</a></li>
                                        <li><a href="/meal/category/dinner">Dinner</a></li>
                                        <li><a href="/meal/category/lunch">Lunch</a></li>
                                    </ul>
                                </li>
                                  
                                  
                                </ul>
                            </li>
                         
                            
                    </div>
                    <div class="logo">
                        <a href="index-2.html"><img src="{{ asset('/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
    <div class="footer-part wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
    <div class="icon-default icon-dark">
        <img src="images/footer-logo.png" alt="">
    </div>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-info">
                <h3>Jenx Restaurant</h3>
                <p>Central business district, Abuja.</p>
                <p><a href="#">123 8161 544 559</a></p>
                <p><a href="#">support@jenx.com</a></p>
            </div>
        </div>
        <div class="copy-right">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 copyright-before">
                    <span>Copyright © {{date("Y")}} Jenx.io. All rights reserved.</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright-after">
                    <div class="social-round">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-find">
        <a href="#">
            <img src="images/location.png" alt="">
            <span>Find us on Map</span>
        </a>
    </div>
    <div class="location-footer-map">
        <div class="icon-find-location">
            <a href="#">
                <img src="images/location.png" alt="">
                <span>Find us on Map</span>
            </a>
        </div>
        <div class="footer-map-outer">
            <div id="footer-map" style="height: 445px;"></div>
        </div>
    </div>
</div>
    </footer>
    <!-- End Footer -->
    <!-- Start Book Table -->
    <div class="modal fade booktable" id="booktable" tabindex="-1" role="dialog" aria-labelledby="booktable">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="table-title">
                        <h2>Reservation</h2>
                        <h6 class="heade-xs">Plan your next visit to our cafe, and get 30% off using our web platform.</h6>
                    </div>
                    <div class="row">
                        <form action="/dashboard/reservation" method="post">
                        @csrf
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="number_of_persons" placeholder="Number of Persons">
                       </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="time_schedule" placeholder="Pick a Date" class="date-pick">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" name="phone" placeholder="Phone Number">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <textarea name="description" placeholder="short description" id="" cols="15" rows="10"></textarea>
                        </div>
                    
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button name="submit" class="btn-main btn-big">BOOK A TABLE</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Book Table -->
</div>
        <a href="#" class="top-arrow"></a>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script>
    <script src="{{ asset('js/jquery.formstyler.min.js')}}"></script>
    <script src="{{ asset('js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/isotop.js') }}"></script>
    <script src="{{ asset('js/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    
<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>

<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});

			
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        $(".like-course").click(function (e) {
            alert("test");
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "GET",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            } 
        });


	</script>
    </body>

    </html>