<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.14/sweetalert2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demand.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">

</head>
<body class="page-header-fixed">
    <div id="app">
<div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  
                  <div class="logo">
                    <a href="/home">
                     <img  src="{{URL::asset('logo4.png')}}" height="50px" >
                     </a>
                  </div>
               </div>
               <div style="margin:0px" class="col-md-5">
                  <div class="">
                    <div class="">
                      <div class="input-group form">
                           <!-- <input type="text" class="form-control" placeholder="Search...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Search</button>
                           </span> -->
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                            @else
                          <li class="nav-item dropdown">
                                <a style="    height: 35px" id="navbarDropdown" style="color: #fff;padding-top: 4px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="width: 145px;" class="dropdown-item btn btn-danger btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>                            
                            </li> 
                            @endguest                           
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class="page-content">
        <div class="row">
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li style="width: 175px;" class="current">
                      <a href="/home"><img align="center" src="{{URL::asset('icon/home.png')}}" > Dashboard</a>
                    </li>
                    <li style="width: 175px;">
                      <a href="/demand"><img align="center" src="{{URL::asset('icon/demand.png')}}"> Demand Letter</a>
                    </li>                    
                    <li style="width: 175px;">
                      <a href="/dealer"><img align="center" src="{{URL::asset('icon/dealer.png')}}"> Dealer</a>
                    </li>                    
                    <li style="width: 175px;">
                      <a href="/product"><img align="center" src="{{URL::asset('icon/products.png')}}"> Products</a>
                    </li>   
                    <li style="width: 175px;">
                      <a href="/deliverychalan"><img align="center" src="{{URL::asset('icon/delivery.png')}}"> Delivery Challan</a></li>                    
                    <li style="width: 175px;">
                      <a href="/inventory"><img align="center" src="{{URL::asset('icon/storage.png')}}"> Inventory</a>
                    </li>                                
                    
                    <li style="width: 175px;">
                      <a href="#"><img align="center" src="{{URL::asset('icon/profile.png')}}"> Profile</a>
                    </li>
                    <li style="width: 175px;" class="submenu">
                         <a href="#">
                            <img align="center" src="{{URL::asset('icon/report.png')}}"> Report
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li style="width: 175px;"><a href="/deliveryreport/report"><img align="center" src="{{URL::asset('icon/delivery.png')}}"> Delivery Report</a></li>
                            <li style="width: 175px;"><a href="/bil/report"><img align="center" src="{{URL::asset('icon/cash.png')}}"> Bill Report</a></li>
                            <li style="width: 175px;"><a href="#">Collection Report</a></li>
                            <li style="width: 175px;"><a href="#">Sales Return Summary</a></li>
                        </ul>
                    </li>
                    <li style="width: 175px;" class="submenu">
                         <a href="#">
                            <img align="center" src="{{URL::asset('icon/settings.png')}}"> Settings
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li style="width: 175px;"><a href="#">User Role</a></li>
                            <li style="width: 175px;"><a href="#">Manage</a></li>
                            <li style="width: 175px;"><a href="#">Invoice Number</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
          </div>
          <div class="col-md-10">
                @yield('content')
          </div>
        </div>
    </div>
     @yield('script')
    </div>  
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>                                  
</body>
</html>
