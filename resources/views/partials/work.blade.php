<section id="portfolio" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Место работы</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">

                    </div>
                </div>

            </div>

        </div><!-- .row -->


        <div class="row">

            @foreach($data['work'] as $work)

            <div class="col-xs-12 col-sm-4 col-md-4">

                <a href="{{$work->website}}">
                <div class="grid wow zoomIn">
                    <figure class="effect-bubba">
                        <img src="{{asset('/storage/'.$work->image)}}" alt="img01"/>
                        <figcaption>
                            <h2><span>{{$work->name}}</span></h2>
                            <p>{{$work->desc}}</p>
                        </figcaption>
                    </figure>
                </div>
                </a>
            </div>

            @endforeach


        </div>


    </div><!-- .contaier -->

</section>
