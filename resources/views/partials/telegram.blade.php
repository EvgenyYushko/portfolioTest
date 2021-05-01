<section id="contact" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header">
                    <h2 class="pfblock-title">Отправте мне сообщение в телеграм</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        Введите контактные данные или пришлите ссылку на вакансию </div>
                </div>

            </div>

        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <form  role="form" method="POST" action="/send_message">
                    @csrf
                    <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp">
                            <label class="sr-only" for="c_name">Name</label>
                            <input type="text" id="c_name" class="form-control" name="text" placeholder="Текст">
                        </div>



                        <button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">отправить сообщение</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>
