@extends('layouts.main')

@section('title', 'ProperSALE')

@section('content')

    <!-- Intro Section -->
    <section id="page1" class="">
        <div class="content container">
            <h1>Korzyści dla Twojego biznesu</h1>

            <ul class="animated_list">
                <div class="row padding_medium_ver no_padding_on_mobile">
                    <div class="col-xs-12 col-sm-4 col-md-4 center margin_on_mobile">
                        <li>
                            <img src="{{ URL::asset('images/demo/ikonka1.png') }}" alt="icon"/>
                            <p><span class="strong uppercase">Zwiększasz swoją sprzedaż</span></p>
                            <hr/>
                            <p class="no_margin">Efektywnie reklamujesz się w Internecie, docierając do nowych klientów
                                - koncentrujesz się na Twoim biznesie i obsłudze klientów, a nie na ich pozyskaniu.</p>
                        </li>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 center margin_on_mobile">
                        <li>
                            <img src="{{ URL::asset('images/demo/ikonka2.png') }}" alt="icon"/>
                            <p><span class="strong uppercase">Optymalizujesz koszty marketingowe</span></p>
                            <hr/>
                            <p>Reklamując się w Internecie rozliczasz się tylko za efekt sprzedażowy - a nie za samo
                                miejsce
                                i działania reklamowe bez żadnej gwarancji efektu tych działań.</p>
                        </li>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 center margin_on_mobile">
                        <li>
                            <img src="{{ URL::asset('images/demo/ikonka3.png') }}" alt="icon"/>
                            <p><span class="strong uppercase">Docierasz do klienta wielokanałowo</span></p>
                            <hr/>
                            <p>Skutecznie docierasz do klienta dzięki efektywnej reklamie m.in. w Google, na portalach
                                zasięgowych, w mediach społecznościowych.</p>
                        </li>
                    </div>
                </div>
                <div class="row padding_medium no_padding_on_mobile">
                    <div class="col-xs-12 col-sm-6 col-md-6 center margin_on_mobile">
                        <li class="right_mrg">
                            <img src="{{ URL::asset('images/demo/ikonka4.png') }}" alt="icon"/>
                            <p><span class="strong uppercase">Otrzymujesz zweryfikowane kontakty</span></p>
                            <hr/>
                            <p>Dedykowane Call-Center potwierdza dane kontaktowe i zainteresowanie klienta Twoją usługą
                                lub produktem w celu dodatkowej weryfikacji wartości sprzedażowej klienta.</p>
                        </li>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 center margin_on_mobile">
                        <li>
                            <img src="{{ URL::asset('images/demo/ikonka5.png') }}" alt="icon"/>
                            <p><span class="strong uppercase">Budujesz bazę klientów</span></p>
                            <hr/>
                            <p>Pozyskane dane wykorzystujesz do zbudowania własnej bazy klientów, dzięki której
                                optymalizujesz swoje działania sprzedażowe poprzez np. targetowany mailing do
                                klientów.</p>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </section>

    <section id="page2" class="">
        <div class="content container">
            <h1>Jak działamy</h1>

            <div class="vertical_eq_container">
                <ul class="vertical_eq">
                    <li index-number="0"><h2>Reklama w Google</h2></li>
                    <li index-number="1"><h2>Portale zasięgowe</h2></li>
                    <li index-number="2"><h2>Media społecznościowe</h2></li>
                    <li index-number="3"><h2>Serwisy partnerskie</h2></li>
                    <li index-number="4"><h2>Dedykowane mikro-serwisy</h2></li>
                    <li index-number="5"><h2>Weryfikacja Call-Centre</h2></li>
                </ul>
            </div>
            <div class="tab-gallery_container">
                <ul class="description">
                    <li><h2 class="center">Targetowana kampania reklamowa Google pozycjonowana pod wybrane branżowe
                            słowa kluczowe z wykorzystaniem Google AdWords oraz Google AdSense. Optymalizacja zakresu
                            fraz branżowych i kosztu pozyskania (CPC). </h2></li>
                    <li><h2 class="center">Kampanie reklamowe na horyzontalnych portalach ogólnopolskich poprzez
                            dopasowaną reklamę kontekstową oraz wizerunkowe kampanie typu display – optymalizacja form
                            graficznych i placementów reklamowych.</h2></li>
                    <li><h2 class="center">Kampanie reklamowe w mediach społecznościowych - Facebook, Instagram,
                            Twitter. Przekaz marketingowy dopasowany do indywidualnego profilu użytkownika. Możliwość
                            geotargetowania i definiowania kryteriów socialowych.</h2></li>
                    <li><h2 class="center">Zasięgowe kampanie reklamowe z wykorzystaniem sieci afiliacyjnych - promocja
                            produktów i usług na dedykowanych placementach reklamowych takich jak strony www, blogi
                            tematyczne, fora dyskusyjne, mailingi.</h2></li>
                    <li><h2 class="center">Nowoczesne formy reklamowe dopasowane do kanałów komunikacja i standardów
                            reklamy efektywnościowej – optymalizacja wskaźników zainteresowania ofertą po stronie
                            klienta indywidualnego i konwersji sprzedażowej.</h2></li>
                    <li><h2 class="center">Dedykowane Call-Centre typu in-house w zakresie obsługi wygenerowanych
                            kontaktów sprzedażowych - w celu dodatkowej weryfikacji danych klienta, zainteresowania
                            produktem i wartości sprzedażowej.</h2></li>
                </ul>

                <div class="tab-gallery">
                    <ul class="images">
                        <li>
                            <ul class="subimages">
                                <li><img src="{{ URL::asset('images/demo/tabscreens/asense1.jpg') }}" alt="oferta1"/>
                                </li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/asense2.jpg') }}" alt="oferta2"/>
                                </li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/asense3.jpg') }}" alt="oferta3"/>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="subimages">
                                <li><img src="{{ URL::asset('images/demo/tabscreens/wp.jpg') }}"
                                         alt="oferta1"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/gw.jpg') }}"
                                         alt="oferta2"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/onet.jpg') }}"
                                         alt="oferta3"/></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="subimages">
                                <li><img src="{{ URL::asset('images/demo/tabscreens/portalespolecznosciowe1.jpg') }}"
                                         alt="oferta1"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/fb.jpg') }} "
                                         alt="oferta2"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/instagram.jpg') }}" alt="oferta3"/>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="subimages">
                                <li><img src="{{ URL::asset('images/demo/tabscreens/td.jpg') }}"
                                         alt="oferta1"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/zx.jpg') }}" alt="oferta2"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/ap.jpg') }}" alt="oferta3"/></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="subimages">
                                <li>
                                    <img src="{{ URL::asset('images/demo/tabscreens/dfk.jpg') }}"
                                         alt="oferta1"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/np.jpg') }}" alt="oferta2"/></li>
                                <li><img src="{{ URL::asset('images/demo/tabscreens/np2.jpg') }}" alt="oferta3"/></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="subimages">
                                <li><img src="{{ URL::asset('images/demo/backgrounds/01.png') }}" alt="oferta1"/></li>
                                <li><img src="{{ URL::asset('images/demo/backgrounds/01.png') }}" alt="oferta2"/></li>
                                <li><img src="{{ URL::asset('images/demo/backgrounds/01.png') }}" alt="oferta3"/></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear margin_medium_ver"></div>
        </div>
    </section>

    <section id="page3" class="">

        <div class="wrapper flex-wrapper bgded"
        <?php /*style="background-image:url('images/demo/backgrounds/03.png')"*/?>>

            <div class="content container padding_small_ver">
                <h1>Nasi klienci</h1>
                <h2>Poniżej lista klientów biznesowych, z którymi współpracujemy w modelu e-Marketingu efektywnościowego
                    w zakresie promocji produktów/usług online oraz mobile.</h2>
                <!-- ################################################################################################ -->
            </div>

            <section id="clients" class="flexslider centered">
                <!-- ################################################################################################ -->
                <ul class="bxslider">
                    <li><a href="http://www.aviva.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/aviva.png') }}" alt=""></a></li>
                    <li><a href="https://www.aliorbank.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/alior.png') }}" alt=""></a></li>
                    <li><a href="https://www.getinbank.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/getin.jpg') }}" alt=""></a></li>
                    <li><a href="http://www.grand-dental.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/grand.png') }}" alt=""></a></li>
                    <li><a href="https://www.link4.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/link4.png') }}" alt=""></a></li>
                    <li><a href="https://www.open.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/openfinance.png') }}" alt=""></a></li>
                    <li><a href="https://www.pkobp.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/bankpolski.png') }}" alt=""></a></li>
                    <li><a href="http://www.projektusmiech.pl/en/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/projekt.png') }}" alt=""></a></li>
                    <li><a href="http://www.prudential.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/prudential.png') }}" alt=""></a></li>
                    <li><a href="http://raiffeisenpolbank.com/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/raifeissen.png') }}" alt=""></a></li>
                    <li><a href="https://taktofinanse.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/takto.png') }}" alt=""></a></li>
                    <li><a href="http://www.vivadental.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/vivadental.png') }}" alt=""></a></li>
                    <li><a href="https://www.bzwbk.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/bzwbk.png') }}" alt=""></a></li>
                    <li><a href="http://www.bgzbnpparibas.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/bankbgz.png') }}" alt=""></a></li>
                    <li><a href="http://www.magicsmile.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/magicsmile.png') }}" alt=""></a></li>
                    <li><a href="https://www.mbank.pl/indywidualny/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/mbank.png') }}" alt=""></a></li>
                    <li><a href="https://www.provident.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/provident.png') }}" alt=""></a></li>
                    <li><a href="https://www.kredito24.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/kredito24.png') }}" alt=""></a></li>
                    <li><a href="http://www.citibank.pl/" target="_blank"><img
                                    src="{{ URL::asset('images/demo/clients/citi.png') }}" alt=""></a></li>
                </ul>

                <div class="clear margin_big_ver"></div>
            <?php /*
                <ul class="carousel-items">
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/aviva.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/alior.png') }}" alt=""></a></li>
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
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/bzwbk.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/bankbgz.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/magicsmile.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/mbank.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/provident.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/kredito24.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ URL::asset('images/demo/clients/citi.png') }}" alt=""></a></li>
                </ul>
                */ ?>
            <!-- ################################################################################################ -->
            </section>
            <!-- ################################################################################################ -->
        </div>
    </section>

    <section id="email_form">
        <div class="container" style="padding-bottom: 0;">
            <div id="content_contact" class="content">
                <h1>Kontakt</h1>
                <h3>Skorzystaj z możliwości, które oferujemy Twojej firmie.
                    Wypełnij poniższe dane - a my skontaktujemy się z Tobą.</h3>

                <div class="row" style="margin-top: 60px">
                    <div class="email_form no_margin">
                        <?php /*<h6 class="title">Podaj swój adres E-mail</h6>*/ ?>
                        <form class="btmspace-30" method="post" action="#">
                            <fieldset>
                                <legend>Kontakt:</legend>
                                <div class="col-xs-12 col-sm-4 col-md-3">
                                    <input class="btmspace-15" type="text" value="" placeholder="E-mail">
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <input class="btmspace-15" type="text" value="" placeholder="Nazwa firmy">
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <input class="btmspace-15" type="text" value="" placeholder="Nr telefonu">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-3">
                                    <button type="submit" value="submit" class="center_mrg">Wyślij</button>
                                </div>
                            </fieldset>
                        </form>

                        <p class="margin_small invisible">Dziękujemy za informacje - skontaktujemy się z Tobą w ciągu 24h.</p>
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
