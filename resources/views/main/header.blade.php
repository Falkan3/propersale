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
                <a class="navbar-brand" href="{{url('/')}}"><img id="logo" src="{{ URL::asset('images/logo-n-jasne.png') }}"/></a>
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
                            <h2 class="heading">Oferujemy marketing efektywnościowy nowej generacji!</h2>
                            <h2><span class="strong">Efektywnościowy, czyli skuteczny!</span></h2>
                            <p>Reklamujesz się w prasie, radiu czy Internecie, a pieniądze zainwestowane w działania
                                marketingowe nie przynoszą oczekiwanych rezultatów? Skorzystaj z Naszej oferty i płać
                                tylko za <span class="strong underline">zweryfikowane kontakty</span> do
                                zainteresowanych Twoim produktem lub usługą
                                klientów! </p>
                            <?php /*<p><a class="btn" href="#">Test</a></p>*/ ?>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider2.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Gwarantujemy wielokanałowe dotarcie do klienta!</h2>
                            <p>Nie skupiaj się na jednym kanale dotarcia do klienta – to nigdy nie przyniesie Ci
                                oczekiwanych efektów. Najlepsze rezultaty osiągniesz, reklamując się w kilku miejscach
                                jednocześnie!</p>
                            <p>Dzięki wieloletniemu doświadczeniu zdobytemu w pozyskiwaniu klienta dla branży finansowej
                                oraz ubezpieczeniowej, wypracowaliśmy najskuteczniejsze metody i najlepsze stawki w
                                działaniach marketingowych na rynku!</p>
                        </article>
                    </li>
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
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
</header>