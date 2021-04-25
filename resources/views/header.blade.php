<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}

?>


<!DOCTYPE html>
<!--
  ustora by freshdesignweb.com
  Twitter: https://twitter.com/freshdesignweb
  URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essaji store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ asset('css/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/responsive.css') }}>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>



                            @if(Session::has('user'))
                                <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="/cart"><i class="fa fa-user"></i> My Cart</a></li>
                            @endif
                            
                            @if(Session::has('user') && Session::get('user')['is_admin'] == 1)
                                <form method="GET" action="/admin">
                                    {{csrf_field()}}
                                    <input type="hidden" name="admin" value="{{Session::get('user')['id']}}">
                                    <button type="submit"> Admin panel </button>
                                </form>
                            @endif
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            

                            @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
          
        </ul>
      </li>
      @else
        <li>
        <a href="/login">Login</a>
      </li>
      @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                @if(Session::has('user'))
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="/cart">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $total; ?></span></a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="">Shop page</a></li>
                        
                        <li><a href="/cart">Cart</a></li>
                        <!-- <li><a href="checkout.html">Checkout</a></li> -->
                        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
                        
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $cat)
                    <li><a href="/phones">{{$cat->name}}</a></li>
                         </li>
                         @endforeach
                     </ul>
                        
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->