<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href = "{{ asset('css/style.css') }}">
    <title>About</title>
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
    <section class="about" id="about">
        <div class="heading">
            <h2>{{__('lang.aboutme')}}</h2>
        </div>
        <div class="content">
            <div class="contentBx w50">
                <h3>{{__('lang.student')}}.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum repellat doloremque quidem, quaerat deserunt veritatis est quas eveniet voluptatibus aliquid asperiores quis aliquam optio perspiciatis dolore eius iste vero dolor mollitia illo natus animi. Nemo, dolore veniam delectus iusto voluptate dicta, atque repellendus, natus omnis inventore rerum esse accusantium dolorem. Molestiae perferendis eius, dolores beatae ipsa facilis quos neque dolorem, ipsum cupiditate esse facere earum iste aut! <br>
                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dignissimos dolorem perferendis voluptatibus! Sit quaerat nam nemo, tempore inventore sed voluptas pariatur cupiditate expedita repellendus corrupti id molestias debitis voluptate?
                </p>
            </div>
            <div class="w50">
                <img src="{{asset('./images/img1.jpg')}}" alt="img1" class="img">
            </div>
        </div>
    </section>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>