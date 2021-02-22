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
            <li><a href="home" onclick="toggleMenu();">Home</a></li>
            <li><a href="about" onclick="toggleMenu();">About</a></li>
            <li><a href="services" onclick="toggleMenu();">Services</a></li>
            <li><a href="work" onclick="toggleMenu();">Work</a></li>
            <li><a href="testimonials" onclick="toggleMenu();">Testimonials</a></li>
            <li><a href="contact" onclick="toggleMenu();">Contact</a></li>
        </ul>
    </header>
    <section class="banner" id='home'>
        <div class="txtBx">
            <h2>Hello, I am <br><span>Zhamshidbek.</span></h2>
            <h3>I am 2nd year student of SDU.</h3>
            <a href="about" class="btn">About Me</a>
        </div>
    </section>    
</body>
</html>