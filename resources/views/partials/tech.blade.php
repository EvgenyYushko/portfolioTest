<section class="pfblock pfblock-gray" id="skills">

    <div class="container">

        <div class="row skills">

            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title">Мои скилы</h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">

                            </div>
                    </div>

                </div>

            </div><!-- .row -->

            @foreach($data['tech'] as $tech)

                <div class="col-sm-6 col-md-3 text-center">
						<span data-percent="{{$tech->percent}}" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">{{$tech->percent}}</span>
                        </span>
                    <h3 class="text-center">{{$tech->name}}</h3>
                </div>
            @endforeach



        </div><!--End row -->

    </div>

</section>
