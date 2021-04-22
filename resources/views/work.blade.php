<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet href = "{{ asset('css/style.css') }}">
    <title>Work</title>
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
    <section class="work" id="work">
        <div class="heading">
            <h2>Our Latest Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="workBx">
                <img src="{{  asset('images/product1.jpg')}}" alt="">
            </div>
            <div class="workBx">
                <img src="/images/product2.jpg" alt="">
            </div>
            <div class="workBx">
                <img src="/images/product3.jpg" alt="">
            </div>
            <div class="workBx">
                <img src="/images/product4.jpg" alt="">
            </div>
            
        </div>
        <div class="heading">
            <a href="#" class='btn'>View More</a>
        </div>
    </section>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>