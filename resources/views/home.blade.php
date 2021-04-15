<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet href = "{{ asset('style.css') }}">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Portfolio</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu ">
            <li><a href="{{ route('home')}}" onclick="toggleMenu();">{{__('lang.home')}}</a></li>
            <li><a href="about" onclick="toggleMenu();">{{__('lang.about')}}</a></li>
            <li><a href="services" onclick="toggleMenu();">{{__('lang.services')}}</a></li>
            <li><a href="work" onclick="toggleMenu();">{{__('lang.work')}}</a></li>
            <li><a href="testimonials" onclick="toggleMenu();">{{__('lang.testimonials')}}</a></li>
            <li><a href="contact" onclick="toggleMenu();">{{__('lang.contact')}}</a></li>
        </ul>
    </header>
    <section class="banner" id='home'>
        <div class="txtBx">
            <h2>{{__('lang.hello')}} <br><span>Zhamshidbek.</span></h2>
            <h3>{{__('lang.student')}}.</h3>
            <a href="about" class="btn">{{__('lang.aboutme')}}</a>
        </div>
    </section> 
</body>
</html>