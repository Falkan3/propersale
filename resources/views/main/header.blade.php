<header>
    <nav class="navbar navbar-default navbar-fixed-top transparent_nav">
        <div class="container" style="padding:0;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img id="logo"
                                                                 src="{{ URL::asset('images/logo-n-jasne.png') }}"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#page1" class="page-scroll">Korzyści dla biznesu</a></li>
                    <?php /*<span class="sr-only">(current)</span>*/ ?>
                    <li><a href="#page2" class="page-scroll">Jak działamy</a></li>
                    <li><a href="#page3" class="page-scroll">Nasi klienci</a></li>
                    <li><a href="#email_form" class="page-scroll">Kontakt</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <div class="screen-height">
        <div class="wrapper flex-wrapper">
            <div id="pageintro" class="flexslider clear">
                <!-- ################################################################################################ -->
                <ul class="slides clear">
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider1.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Performance e-Marketing</h2>
                            <p>Efektywnościowy, czyli skuteczny – nowoczesny model e-Marketingu online, gdzie płacisz za
                                efekt, a nie za same wyświetlenia reklamy</p>
                            <?php /*<p><a class="btn" href="#">Test</a></p>*/ ?>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider2.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Multi-kanałowe targetowanie klienta</h2>
                            <p>Skutecznie docierasz do klienta z wykorzystaniem nowoczesnych form reklamowych w wielu
                                kanałach online i mobile jednocześnie</p>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider3.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Sprawdzona platforma e-Marketingu</h2>
                            <p>Wykorzystujesz model sprawdzony dla klientów biznesowych na zaawansowanych rynkach online
                                - USA, UK, Skandynawia</p>
                        </article>
                    </li>
                    <?php /*
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider4.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Stomatologia</h2>
                            <p>Zaufały nam najlepsze kliniki stomatologiczne w Trójmieście! Ich atrakcyjna oferta
                                promocyjna przygotowana w trakcie współpracy z ProperSale spotkała się z
                                zainteresowaniem wielu klientów.</p>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider5.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Nieruchomości</h2>
                            <p>Pomogliśmy znaleźć miejsce na Ziemi wielu klientom deweloperów jak i pośredników w branży
                                nieruchomości.</p>
                        </article>
                    </li>
                    */ ?>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
</header>