<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet href ="{{asset('css/style.css')}}">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Portfolio</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu ">
            <li><a href="{{ url(app()->getLocale())}}">{{__('lang.home')}}</a></li>
            <li><a href="{{ url(app()->getLocale() . '/about')}}">{{__('lang.about')}}</a></li>
            <li><a href="{{ url(app()->getLocale() . '/services')}}">{{__('lang.services')}}</a></li>
            <li><a href="{{ url(app()->getLocale() . '/work')}}">{{__('lang.work')}}</a></li>
            <li><a href="{{ url(app()->getLocale() . '/testimonials')}}">{{__('lang.testimonials')}}</a></li>
            <li><a href="{{ url(app()->getLocale() . '/contact')}}">{{__('lang.contact')}}</a></li>
            <li class="nav-item-dropdown">
                <a class="nav-link-dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
                </div>
            </li>
        </ul>
    </header>
    <section class="banner" id='home'>
        <div class="txtBx">
            <h2>{{__('lang.hello')}} <br><span>Zhamshidbek.</span></h2>
            <h3>{{__('lang.student')}}.</h3>
            <a href="about" class="btn">{{__('lang.aboutme')}}</a>
        </div>
    </section> 
    <script src="{{asset('script.js')}}"></script>
</body>
</html>