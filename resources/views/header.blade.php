<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
{{--<div id='cssmenu'>
    <ul>
        <li><a href='#'>Home</a></li>
        <li class='active has-sub'><a href='#'>Products</a>
            <ul>
                <li class='has-sub'><a href='#'>Product 1</a>
                    <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'>Product 2</a>
                    <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href='#'>About</a></li>
        <li><a href='#'>Contact</a></li>
    </ul>--}}
   {{-- <ul>
    @foreach($data as $val)
            <li class='has-sub'><a href="{{ url('submenu') }}/{{$val['id']}}">{{ $val['name'] }}</a></li>

            <ul>
                @if($sub_menu!=null)
                    @foreach($sub_menu as $sub)
                        <li>{{$sub['name']}}</li>
                    @endforeach
                @endif

            </ul>
--}}{{--            <ul>
            @if(is_array($sub_menu))
                @foreach($sub_menu as $val)
                <li><a href='#'>{{ $val['name'] }}</a></li>
                    @endforeach

            @endif
            </ul>--}}{{--

    @endforeach
</div>
--}}
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            @foreach($data as $val)
            <li class="dropdown"><a class="dropdown-toggle" {{--data-toggle="dropdown"--}} href="{{ url('submenu') }}/{{$val['id']}}">{{ $val['name'] }}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                        @if(count($sub_menu)>0)

                        @foreach($sub_menu as $val)
                            <li><a href="#">{{ $val['name'] }}</a></li>
                            {{--{{ $val['name'] }}--}}
                        @endforeach

                            @endif
                </ul>
            </li>
                @endforeach
        </ul>
    </div>
</nav>

<div class="container">
    <h3>Navbar With Dropdown</h3>
    <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
</div>
    @yield('content')
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="{{ asset('/js/script.js') }}"></script>
            <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
