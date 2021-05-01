<section id="services" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Технологии с которыми работал или изучал</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        Часть из списка применяю довольно редко так, как больше склоняюсь к разработке бэкенда.
                         </div>
                </div>

            </div>

        </div>

        <div class="row">

            @foreach($data['skills'] as $work)

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba"style="max-height: 200px">
                            <img src="{{asset('/storage/'.$work->image)}}" alt="img01"/>
                            <figcaption>
                                <h2><span>{{$work->name}}</span></h2>
                                <p>{{$work->desc}}</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>

            @endforeach

{{--            <div class="col-sm-3">--}}

{{--                <div class="iconbox wow slideInLeft">--}}
{{--                    <div class="iconbox-icon">--}}
{{--                        <span class="icon-magic-wand"></span>--}}
{{--                    </div>--}}
{{--                    <div class="iconbox-text">--}}
{{--                        <h3 class="iconbox-title">Web Design</h3>--}}
{{--                        <div class="iconbox-desc">--}}
{{--                            Good things come to those who wait, but only the things left by those who hustle--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-sm-3">--}}

{{--                <div class="iconbox wow slideInLeft">--}}
{{--                    <div class="iconbox-icon">--}}
{{--                        <span class="icon-puzzle"></span>--}}
{{--                    </div>--}}
{{--                    <div class="iconbox-text">--}}
{{--                        <h3 class="iconbox-title">Web Programming</h3>--}}
{{--                        <div class="iconbox-desc">--}}
{{--                            Good things come to those who wait, but only the things left by those who hustle--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-sm-3">--}}

{{--                <div class="iconbox wow slideInRight">--}}
{{--                    <div class="iconbox-icon">--}}
{{--                        <span class="icon-badge"></span>--}}
{{--                    </div>--}}
{{--                    <div class="iconbox-text">--}}
{{--                        <h3 class="iconbox-title">Branding</h3>--}}
{{--                        <div class="iconbox-desc">--}}
{{--                            Good things come to those who wait, but only the things left by those who hustle--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-sm-3">--}}

{{--                <div class="iconbox wow slideInRight">--}}
{{--                    <div class="iconbox-icon">--}}
{{--                        <span class="icon-question"></span>--}}
{{--                    </div>--}}
{{--                    <div class="iconbox-text">--}}
{{--                        <h3 class="iconbox-title">Consultation</h3>--}}
{{--                        <div class="iconbox-desc">--}}
{{--                            Good things come to those who wait, but only the things left by those who hustle--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

        </div><!-- .row -->
    </div><!-- .container -->
</section>
