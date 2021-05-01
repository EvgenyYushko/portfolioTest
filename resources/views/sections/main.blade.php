@extends('layouts.app')
<!-- Preloader -->
@section('content')
<div id="preloader">
    <div id="status"></div>
</div>

<!-- Home start -->


@include('partials.header')
<!-- Navigation end -->

<!-- Services start -->

@include('partials.skills')

<!-- Services end -->

<!-- Portfolio start -->
@include('partials.work')
<!-- Portfolio end -->

<!-- Skills start -->
@include('partials.tech')
ё

<!-- Skills end -->

<!-- CallToAction start -->

<section class="calltoaction">
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-lg-12">
                <h2 class="wow slideInRight" data-wow-delay=".1s">Предложения о работе можете отправить в телеграм</h2>
                <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                   Через чат-бота в форме ниже
                </div>
            </div>

            <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                <a href="#contact" class="btn btn-lg">Написать</a>
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- CallToAction end -->

<!-- Testimonials start -->

{{--<section id="testimonials" class="pfblock pfblock-gray">--}}

{{--    <div class="container">--}}

{{--        <div class="row">--}}

{{--            <div class="col-sm-6 col-sm-offset-3">--}}

{{--                <div class="pfblock-header wow fadeInUp">--}}
{{--                    <h2 class="pfblock-title">What my clients say</h2>--}}
{{--                    <div class="pfblock-line"></div>--}}
{{--                    <div class="pfblock-subtitle">--}}
{{--                        No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div><!-- .row -->--}}

{{--        <div class="row">--}}

{{--            <div id="cbp-qtrotator" class="cbp-qtrotator">--}}
{{--                <div class="cbp-qtcontent">--}}
{{--                    <img src="assets/images/client-1.jpg" alt="client-1" />--}}
{{--                    <blockquote>--}}
{{--                        <p>Work with John was a pleasure. He understood exactly what I wanted and created an awesome site for my company.</p>--}}
{{--                        <footer>Pino Caruso</footer>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}
{{--                <div class="cbp-qtcontent">--}}
{{--                    <img src="assets/images/client-2.jpg" alt="client-2" />--}}
{{--                    <blockquote>--}}
{{--                        <p>I'm really happy with the results. Get 100% satisfaction is difficult but Alex got it without problems.</p>--}}
{{--                        <footer>Jane Doe</footer>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div><!-- .row -->--}}


{{--    </div><!-- .row -->--}}
{{--</section>--}}

<!-- Testimonial end -->


<!-- Contact start -->
@include('partials.telegram')

@endsection
