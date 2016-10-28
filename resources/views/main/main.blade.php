@extends('layouts.main')

@section('title', 'Parallax demo')

@section('content')

    <!-- Intro Section -->
    <section id="page1" class="page-section">
        <div class="content">
            <div class="tri-screen-height flex-fit">
                <h1>Jak działamy</h1>
            </div>

            <div class="pri-screen-height flex-fit darkened">
                <p>Tekst</p>
            </div>
        </div>
    </section>

    <section id="page2" class="page-section">
        <div class="content">
            <div class="tri-screen-height flex-fit">
                <h1>Korzyści dla biznesu</h1>
            </div>

            <div class="pri-screen-height flex-fit darkened">
                <p>Tekst</p>
            </div>
        </div>
    </section>

    <section id="page3" class="page-section">
        <div class="content">
            <div class="tri-screen-height flex-fit">
                <h1>Nasi klienci</h1>
                <!-- ################################################################################################ -->
                <div class="wrapper flex-wrapper overlay bgded"
                     style="background-image:url('images/demo/backgrounds/03.png')">
                    <section id="clients" class="flexslider centered">
                        <!-- ################################################################################################ -->
                        <ul class="carousel-items">
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                            <li><a href="#"><img src="images/demo/logo.png" alt=""></a></li>
                        </ul>
                        <!-- ################################################################################################ -->
                    </section>
                    <!-- ################################################################################################ -->
                </div>
            </div>

            <div class="pri-screen-height flex-fit darkened">
                <p>Tekst</p>
            </div>
        </div>
    </section>

    <section id="email_form">
        <div class="container">
            <div id="content_contact" class="content">
                <h1>Chcesz poznać szczegółową ofertę dla Twojej firmy? Zostaw do siebie kontakt</h1>

                <div class="row">
                    <div class="email_form">
                        <h6 class="title">Podaj swój adres E-mail</h6>
                        <form class="btmspace-30" method="post" action="#">
                            <fieldset>
                                <legend>Newsletter:</legend>
                                <div class="col-xs-12 col-sm-10 col-md-10">
                                    <input class="btmspace-15" type="text" value="" placeholder="E-mail">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <button type="submit" value="submit" class="center_mrg">Wyślij</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php /*
        <section id="page1" class="page-section">
            <div class="screen-height">
                <div class="content">
                    <div class="tri-screen-height-percent container">
                        <h1>Jak działamy</h1>
                    </div>

                    <div class="pri-screen-height-percent container">
                        <p>Tekst</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="intro" class="intro-section page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Scrolling Nav</h1>
                        <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>,
                            <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link
                            smooth scroll to another section on the page, give the link the <code>.page-scroll</code>
                            class and set the link target to a corresponding ID on the page.</p>
                        <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                    </div>
                </div>
            </div>
        </section>
        */ ?>

@stop