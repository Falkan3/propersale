@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Kontakt z formularza:</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-xs-12 col-sm-4 col-md-4">E-mail</th>
                                <th class="col-xs-12 col-sm-4 col-md-4">Nazwa firmy</th>
                                <th class="col-xs-12 col-sm-4 col-md-4">Nr telefonu</th>
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
@endsection
