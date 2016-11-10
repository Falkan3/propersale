@extends('layouts.main')

@section('title', 'ProperMONEY')

@section('content')

    <!-- Intro Section -->
    <section id="page1" class="">
        <div class="content container">
            <h1>Korzyści dla Twojego biznesu</h1>

            <ul class="animated_list padding_medium_ver">
                <div class="row padding_medium">
                    <div class="col-xs-4 col-sm-4 col-md-4 center">
                        <li>
                            <img src="{{ URL::asset('images/demo/icon4.png') }}" alt="icon"/>
                            <p><span class="strong">Zwiększasz sprzedaż</span></p>
                            <p>efektywnie reklamujesz się w Internecie</p>
                        </li>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 center">
                        <li>
                            <img src="{{ URL::asset('images/demo/icon2.png') }}" alt="icon"/>
                            <p><span class="strong">Zmniejszasz koszty</span></p>
                            <p>nie martwisz się o cenę reklamy i nie musisz opłacać pracownika</p>
                        </li>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 center">
                        <li>
                            <img src="{{ URL::asset('images/demo/icon3.png') }}" alt="icon"/>
                            <p><span class="strong">Docierasz do klienta</span></p>
                            <p>wielokanałowo</p>
                        </li>
                    </div>
                </div>
                <div class="row padding_medium">
                    <div class="col-xs-6 col-sm-6 col-md-6 center">
                        <li class="right_mrg">
                            <img src="{{ URL::asset('images/demo/icon1.png') }}" alt="icon"/>
                            <p><span class="strong">Zyskujesz zweryfikowane kontakty</span></p>
                        </li>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 center">
                        <li>
                            <img src="{{ URL::asset('images/demo/icon5.png') }}" alt="icon"/>
                            <p><span class="strong">Budujesz bazę klientów</span></p>
                            <p>Którą możesz wykorzystać na przyszłość</p>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </section>

    <section id="page2" class="">
        <div class="content container">
            <h1>Jak działamy</h1>
            <h3 class="center">Najlepiej zorganizowana reklama w Internecie</h3>
        </div>
    </section>

    <section id="page3" class="">
        <div class="content container padding_small_ver">
            <h1>Nasi klienci</h1>
            <!-- ################################################################################################ -->
        </div>

        <div class="wrapper flex-wrapper overlay bgded"
             style="background-image:url('images/demo/backgrounds/03.png')">
            <section id="clients" class="flexslider centered">
                <!-- ################################################################################################ -->
                <ul class="carousel-items">
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/aviva.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/getin.jpg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/grand.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/link4.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/openfinance.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/bankpolski.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/projekt.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/prudential.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/raifeissen.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/takto.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/vivadental.png') }}" alt=""></a></li>
                </ul>
                <!-- ################################################################################################ -->
            </section>
            <!-- ################################################################################################ -->
        </div>
    </section>

    <section id="email_form">
        <div class="container">
            <div id="content_contact" class="content">
                <h1>Chcesz poznać ofertę dla Twojej firmy?</h1>
                <h3>Zostaw dane, a skontaktujemy się z Tobą!</h3>

                <div class="row">
                    <div class="email_form">
                        <?php /*<h6 class="title">Podaj swój adres E-mail</h6>*/ ?>
                        <form class="btmspace-30" method="post" action="#">
                            <fieldset>
                                <legend>Kontakt:</legend>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <input class="btmspace-15" type="text" value="" placeholder="E-mail">
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <input class="btmspace-15" type="text" value="" placeholder="Nazwa firmy">
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <input class="btmspace-15" type="text" value="" placeholder="Nr telefonu">
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


<?php
/*
    <div class="row page-section padding_medium_hor flex-fit-nocol">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-sm-offset-1 col-md-offset-1 padding_small">
                        <div class="third-screen-height flex-fit flex-vcenter">
                            <img src="{{ URL::asset('images/demo/125x125.png') }}" />
                        </div>
                        <div class="third-screen-height flex-fit flex-vcenter">
                            <img src="{{ URL::asset('images/demo/125x125.png') }}" />
                        </div>
                        <div class="third-screen-height flex-fit flex-vcenter">
                            <img src="{{ URL::asset('images/demo/125x125.png') }}" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 padding_small">

                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 padding_small flex-fit flex-vcenter">
                        <p>
                            Call center
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 padding_small">

                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 padding_small flex-fit flex-vcenter">
                            <p>
                                Zweryfikowane kontakty  dla Twojej firmy
                            </p>
                    </div>
                </div>
*/
?>

<?php /*
            <div class="row padding_medium_hor">
                <div class="col-xs-12 col-sm-12 col-md-12 padding_small center">
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small center">
                        <h2>Onet mailing</h2>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small center">
                        <h2>Ad Words</h2>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small center">
                        <h2>Display</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 padding_small center">
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small right">
                        <img src="{{ URL::asset('images/demo/arrow.png') }}" alt="arrow" class="img-arrow-right-down"/>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small center">
                        <img src="{{ URL::asset('images/demo/arrow.png') }}" alt="arrow" class="img-arrow-down"/>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 padding_small left">
                        <img src="{{ URL::asset('images/demo/arrow.png') }}" alt="arrow" class="img-arrow-left-down"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 padding_small center">
                    <h2>Call center</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 padding_small center">
                    <img src="{{ URL::asset('images/demo/arrow.png') }}" alt="arrow" class="img-arrow-down"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 padding_small center">
                    <h2>Zweryfikowane kontakty dla Twojej firmy</h2>
                </div>
            </div>
            */ ?>
