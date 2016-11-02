@extends('layouts.main')

@section('title', 'ProperMONEY')

@section('content')

    <!-- Intro Section -->
    <section id="page1" class="page-section">
        <div class="content">
            <div class="tri-screen-height flex-fit">
                <h1>Jak działamy</h1>

                <div class="row page-section padding_medium_hor">
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

                <div id="slider_advantages" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slider_advantages" data-slide-to="0" class="active"></li>
                        <li data-target="#slider_advantages" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="fill overlay bgded"
                                 style="background-image:url('{{ URL::asset('images/demo/backgrounds/stock1.jpg') }}');"></div>
                            <div class="carousel-caption">
                                <h3>Tyle wydajesz organizując reklamę samemu</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et lacus
                                    ullamcorper, molestie diam vel, laoreet ex. Aliquam pharetra vestibulum justo, eget
                                    porttitor neque porttitor quis. Quisque in arcu eu augue semper suscipit dapibus at
                                    lectus. Sed venenatis volutpat imperdiet. Duis orci orci, sodales imperdiet ornare
                                    ac, aliquet at nisi. Sed sed aliquet nisl. Integer nec elementum nunc.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="fill overlay bgded"
                                 style="background-image:url('{{ URL::asset('images/demo/backgrounds/stock3.jpg') }}');"></div>
                            <div class="carousel-caption">
                                <h3>Tyle możesz oszczędzić zlecając nam zdobycie zainteresowanie klienta</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et lacus
                                    ullamcorper, molestie diam vel, laoreet ex. Aliquam pharetra vestibulum justo, eget
                                    porttitor neque porttitor quis. Quisque in arcu eu augue semper suscipit dapibus at
                                    lectus. Sed venenatis volutpat imperdiet. Duis orci orci, sodales imperdiet ornare
                                    ac, aliquet at nisi. Sed sed aliquet nisl. Integer nec elementum nunc.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#slider_advantages" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slider_advantages" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
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