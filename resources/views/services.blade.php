<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <link rel = stylesheet href = "{{ asset('css/style.css') }}">
    <title>Services</title>
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
    <section class="services" id='services'>
        <div class="heading white">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            @foreach($serviceInfo as $service)
            <div class="servicesBx">
                <img src="{{$servicePhoto[$service->id -1]->photo}}" alt="">
                <h2>{{$service->name}}</h2>
                <p>{{$service->info}}</p>
            </div>
            @endforeach
            <!-- <div class="servicesBx">
                <img src="/images/icon2.png" alt="">
                <h2>Wed Development</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maiores incidunt quae laudantium, tempore reprehenderit ducimus odio ratione aliquid?</p>
            </div>
            <div class="servicesBx">
                <img src="/images/icon3.png" alt="">
                <h2></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maiores incidunt quae laudantium, tempore reprehenderit ducimus odio ratione aliquid?</p>
            </div>
            <div class="servicesBx">
                <img src="/images/icon4.png" alt="">
                <h2>Photo Editing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maiores incidunt quae laudantium, tempore reprehenderit ducimus odio ratione aliquid?</p>
            </div>
            <div class="servicesBx">
                <img src="/images/icon5.png" alt="">
                <h2>Copyrighting</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maiores incidunt quae laudantium, tempore reprehenderit ducimus odio ratione aliquid?</p>
            </div>
            <div class="servicesBx">
                <img src="/images/icon6.png" alt="">
                <h2>Film Making</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maiores incidunt quae laudantium, tempore reprehenderit ducimus odio ratione aliquid?</p>
            </div> -->
        </div>
    </section>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>