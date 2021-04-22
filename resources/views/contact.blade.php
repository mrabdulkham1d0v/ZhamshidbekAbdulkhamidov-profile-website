<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet href = "{{ asset('css/style.css') }}">
    <title>Contacts</title>
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
    <section class="contact" id="contact">
        <div class="heading white">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="contactInfo">
                <h3>Contact Info</h3>
                <div class="contactInfoBx">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text"> <h3>Address</h3>
                            <p>161200 Turkestan oblysy Microrayon,<br>Bazar,AltynOrda,<br>161220</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text"> <h3>Phone</h3>
                            <p>87474747447</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text"> <h3>Email</h3>
                            <p>jamshid.ktl.01@gmail.com</p>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <div class="formBx">
                <form method= "POST" action="{{url('/send')}}" enctype="multipart/form-data">
                    @csrf
                    <h3>Message Me</h3>
                    <input type="text" name="Name" id="" placeholder="Name">
                    <input type="text" name="Surname" id="" placeholder="Surname">
                    <input type="email" name="Email" id="" placeholder="Type You Email">
                    <input type="file" name="File" id="" >
                    <textarea placeholder="Your Message..." name = "Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>Copyright© 2020 Portfolio. All rights Reserved.</p>
    </div>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>