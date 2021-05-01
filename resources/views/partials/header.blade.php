<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">
        <div class="start">Привет меня зовут {{$data['profile']->surname. ' '.$data['profile']->name}} и я</div>
        <h1>Web Developer</h1>
        <div class="start">Создаю современные и эффективные приложения используя язык Php</div>
    </div>

    <a href="#services">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>

</section>

<!-- Home end -->

<!-- Navigation start -->

<header class="header">

    <nav class="navbar navbar-custom" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{$data['profile']->surname. ' '.$data['profile']->name}}</a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">В начало</a></li>
                    <li><a href="#services">Технологии</a></li>
                    <li><a href="#portfolio">Работа</a></li>
{{--                    <li><a href="#skills">Skills</a></li>--}}
{{--                    <li><a href="#testimonials">Testimonials</a></li>--}}
                    <li><a href="#contact">Форма для связи</a></li>
                </ul>
            </div>

        </div><!-- .container -->

    </nav>

</header>
