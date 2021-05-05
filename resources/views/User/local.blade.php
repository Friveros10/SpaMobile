@extends('User.app')

@section('content')
<div class="content" style="background-color: #fff;">
    <div class="container" style="background-color: #000;">
        <div class="container " style="background-color:#000; color:#000; padding: 10px; " ng-controller="homeController ">
            <section class="content-header col-xs-12 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <div class="form-group">
                            <h1 class="no-margin" style="color:#fff;">Mis Locales</h1>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br><br><br>
            <br><br><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;" ng-controller="homeController ">


            <button type="button" class="pull-right btn btn-success btn-xs" style="background-color: #000; color:#fff;" >
            Nuevo Registro &nbsp;<span  style="color:#fff" class="glyphicon glyphicon-plus"></span>
            </button><br><br>
            <table datatable="" dt-options="dtClient" class="table table-hover" ng-init="getLocalesUser()" width="100%">
                <thead>
                    <tr>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Nombre Cadena<br>Local</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Direccion</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Comuna</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Ruta</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Estado Local</th>
                        <!-- <th style="padding:5px; background-color:#000; color:#fff; border:1px solid;">Opciones</th> -->
                    </tr>
                </thead>
                <tbody >
                    <tr ng-repeat="loc in localesU" ng-if="loc.id_usuario == 2">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;"> [[loc.name]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">[[loc.address]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;">[[loc.Comuna]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;" ng-id="loc.id_ruta==1">[[loc.ruta.name]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px solid;text-align:center;">1 </td>
                        <!--< td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" style="background-color: #000; color:#fff"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="" class="btn btn-default"></span> Desactivar Local</a></li>
                                    <li><a href="" class="btn btn-default"></span> Modificar</a></li>
                                    <li><a href="" class="btn btn-default"></span> Eliminar</a></li>
                                </ul>
                            </div>
                        </td> -->
                    </tr>
                </tbody>
            </table>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>

                       <!--   -->

@endsection('content')