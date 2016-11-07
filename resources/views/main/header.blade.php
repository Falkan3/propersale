<header>
    <nav class="navbar navbar-default navbar-fixed-top transparent_nav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img id="logo" src="{{ URL::asset('images/logo-jasne.png') }}"/></a>
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
                            <h2 class="heading">Oferujemy <span class="strong">marketing efektywnościowy</span> nowej
                                generacji!</h2>
                            <p><a class="btn" href="#">Test</a></p>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider2.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading">Lorem ipsum</h2>
                            <p></p>
                            <p><a class="btn" href="#">Lorem ipsum</a></p>
                        </article>
                    </li>
                    <li class="overlay bgded" style="background-image:url('images/demo/backgrounds/slider3.jpg')">
                        <article class="centered flex-content">
                            <h2 class="heading"><span class="strong">Gwarantujemy</span> wielokanałowe <span
                                        class="strong">dotarcie do klienta!</span></h2>
                            <p><span
                                        class="strong">Weryfikujemy dane</span> poprzez Call Center - <span
                                        class="strong">dostarczamy zainteresowanego klienta!</span>
                            </p>
                            <p><a class="btn" href="#">Test</a></p>
                        </article>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
</header>