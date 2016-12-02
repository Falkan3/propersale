@extends('layouts.lp')

@section('title', 'ProperSALE')

@section('content')

    <div class="screen-height">
        <div class="wrapper flex-wrapper">
            <!-- ################################################################################################ -->
            <div class="overlay bgded table-layout" style="background-image:url('images/demo/backgrounds/slider2.jpg')">
                <article class="text-center table-layout-cell">
                    <div class="header_margin"></div>
                    <img src="{{ URL::asset('images/logo-n-jasne.png') }}"/>
                    <div class="big-text">
                        <p class="no_margin_vertical">Twoje dodatkowe źródło gotówki</p>
                    </div>

                    <div class="container" style="max-width:100%;">
                        <div class="row" style="margin: 60px 0;">

                            <p class="big-text medium" style="margin-bottom: 15px;">Wypełnij formularz, odezwiemy się do
                                Ciebie</p>

                            <div class="email_form no_margin">
                                <?php /*<h6 class="title">Podaj swój adres E-mail</h6>*/ ?>
                                <form id="email_form" class="btmspace-30" method="post" action="{{url('/mail')}}"
                                      enctype="multipart/form-data" role="form">
                                    <fieldset>
                                        {!! csrf_field() !!}
                                        <legend>Kontakt:</legend>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <input class="btmspace-15" type="text" value=""
                                                       placeholder="E-mail [email@email.com]" name="email"
                                                       maxlength="35">
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <input class="btmspace-15" type="text" value=""
                                                       placeholder="Nr telefonu [000-000-000]" name="nrtelefonu"
                                                       maxlength="14">
                                            </div>
                                        </div>

                                        <input type="hidden" name="nazwafirmy" value=""/>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <button type="submit" value="submit" class="center_mrg">Chcę zarabiać
                                                    więcej
                                                </button>
                                            </div>
                                        </div>


                                    </fieldset>
                                </form>

                                <img id="loading_ajax"
                                     src="{{URL::asset('css/images/ajax-loader.gif')}}" alt="loading..."
                                     class="invisible"/>

                                <div id="email_form_response" class="alert margin_small invisible status center">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <p class="big-text">Zmonetyzuj swoją bazę mailingową</p>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <p class="big-text">Osiągaj wyższe dochody dzięki swojej stronie</p>
                        </div>

                    </div>
                </article>
            </div>
            <!-- ################################################################################################ -->

        </div>
    </div>
@stop
