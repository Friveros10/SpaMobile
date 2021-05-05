@extends('User.app')

@section('content')
<div class="content" style="background-color:#fff;">
    <div class="container" style="background-color:#000;">
        <div class="container " style="background-color:#000; color:#000; padding: 10px; " ng-controller="homeController as hctrl">
            <section class="content-header col-xs-12 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <div class="form-group">
                            <h1 class="no-margin" style="color:#fff;">Mis Registros</h1>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br><br><br>
            <br><br><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;" ng-controller="homeController as hctrl">S
            <button type="button" class="pull-right btn btn-success btn-xs" style="background-color: #000; color:#fff;" >
            Nuevo Registro &nbsp;<span  style="color:#fff" class="glyphicon glyphicon-plus"></span>
            </button><br><br>
            <table datatable=""   class="table table-hover table-responsive" width="100%"  ng-init="getRegistrosAll()">
                <thead>
                    <tr>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Nombre Local<br></th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Tipo Bandeja<br></th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Cantidad</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Tipo Registro</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Usuario</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="u in registros">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">
                            <label ng-if="u.id_local == 1">Unimarc Conchali </label>
                            <label ng-if="u.id_local == 2">Monserrat pza Chacabuco</label>
                            <label ng-if="u.id_local == 3">Unimarc Conchali </label>
                            <label ng-if="u.id_local == 4">Monserrat pza Chacabuco</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">
                            <label ng-if="u.id_tipo_bandeja == 1">Bandeja Grande </label>
                            <label ng-if="u.id_tipo_bandeja == 2">Bandeja Chica</label>
                            <label ng-if="u.id_tipo_bandeja == 3">Dolly </label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">[[u.cantidad]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">
                            <label ng-if="u.id_tipo_registro == 1">Ingreso </label>
                            <label ng-if="u.id_tipo_registro == 2">Salida</label>
                        </u>
                    </td>
                    <td style="padding:5px; background-color:#fff; color:#000;border-right:1px ;">
                        <label ng-if="u.id_usuario == 2">Fgodoy </label>
                        <label ng-if="u.id_usuario == 3">Jperez</label>
                    </td>
                    <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">[[u.created_at]]</td>
                    </tr>
                </tbody>
            </table>
            <br><br><br>
            <br><br><br>
            <br><br><br>
        </div>
    </div>  
</div>  
@endsection('content')
