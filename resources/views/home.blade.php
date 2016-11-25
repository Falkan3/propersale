@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kontakt z formularza:</div>

                    <div class="panel-body">
                        <table id="confirmed" class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-xs-12 col-sm-3 col-md-3">E-mail</th>
                                <th class="col-xs-12 col-sm-2 col-md-2">Nazwa firmy</th>
                                <th class="col-xs-12 col-sm-3 col-md-3">Nr telefonu</th>
                                <th class="col-xs-12 col-sm-2 col-md-2">Data</th>
                                <th class="col-xs-12 col-sm-1 col-md-1" style="text-align: center"><i class="fa fa-check-square"
                                                                           aria-hidden="true"></i></th>
                                <th class="col-xs-12 col-sm-1 col-md-1" style="text-align: center"><i class="fa fa-trash" aria-hidden="true"></i>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($contacts as $item) {
                            ?>
                            <tr>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->nazwafirmy}}
                                </td>
                                <td>
                                    {{$item->nrtelefonu}}
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                                <td>
                                    <form class="btmspace-30" method="get"
                                          action="{{url('/contact/invalidate/'.$item->id)}}" enctype="multipart/form-data"
                                          role="form">
                                        <fieldset>
                                            {!! csrf_field() !!}
                                            <button type="submit" value="submit" class="center_mrg"><i
                                                        class="fa fa-check-square" aria-hidden="true"></i></button>
                                        </fieldset>
                                    </form>
                                </td>
                                <td>
                                    <form class="btmspace-30" method="get"
                                          action="{{url('/contact/delete/'.$item->id)}}" enctype="multipart/form-data"
                                          role="form">
                                        <fieldset>
                                            {!! csrf_field() !!}
                                            <button type="submit" value="submit" class="center_mrg"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></button>
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Niepotwierdzony kontakt z formularza:</div>

                    <div class="panel-body">
                        <table id="unconfirmed" class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-xs-12 col-sm-3 col-md-3">E-mail</th>
                                <th class="col-xs-12 col-sm-2 col-md-2">Nazwa firmy</th>
                                <th class="col-xs-12 col-sm-3 col-md-3">Nr telefonu</th>
                                <th class="col-xs-12 col-sm-2 col-md-2">Data</th>
                                <th class="col-xs-12 col-sm-1 col-md-1" style="text-align: center"><i class="fa fa-check-square"
                                                                           aria-hidden="true"></i></th>
                                <th class="col-xs-12 col-sm-1 col-md-1" style="text-align: center"><i class="fa fa-trash" aria-hidden="true"></i>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($xcontacts as $item) {
                            ?>
                            <tr>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->nazwafirmy}}
                                </td>
                                <td>
                                    {{$item->nrtelefonu}}
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                                <td>
                                    <form class="btmspace-30" method="get"
                                          action="{{url('/contact/validate/'.$item->id)}}" enctype="multipart/form-data"
                                          role="form">
                                        <fieldset>
                                            {!! csrf_field() !!}
                                            <button type="submit" value="submit" class="center_mrg"><i
                                                        class="fa fa-check-square" aria-hidden="true"></i></button>
                                        </fieldset>
                                    </form>
                                </td>
                                <td>
                                    <form class="btmspace-30" method="get"
                                          action="{{url('/contact/delete/'.$item->id)}}" enctype="multipart/form-data"
                                          role="form">
                                        <fieldset>
                                            {!! csrf_field() !!}
                                            <button type="submit" value="submit" class="center_mrg"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></button>
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

        form fieldset {
            text-align: center;
        }
    </style>
@endsection
