@extends('Admin.app')

@section('content')
<div class="content" style="background-color:#fff;">
    <div class="container" style="background-color:#000;">
        <div class="container " style="background-color:#000; color:#fff; padding: 20px; " ng-controller="homeController ">
            <section class="content-header col-xs-12 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <div class="form-group">
                            <h1 class="no-margin pull-center" style="color:#fff;">Gestión Locales</h1>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br><br><br>
            <br><br><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;" ng-controller="homeController ">
            <a href="/registrarL" class=" pull-right btn btn-success btn-xs" style="background-color: #000; color:#fff">
                Nuevo Usuario <span class="icon-plus"></span>
            </a>
            <br><br>
            <table datatable="" dt-options="dtClient" ng-init="getLocales()" class="table table-hover" width="100%">
                <thead>
                    <tr>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Nombre Cadena<br>Local</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Direccion</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Comuna</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Ruta</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Usuario</th>

                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Estado Local</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Opciones</th>
                    </tr>
                </thead>
                <tbody >
                    <tr ng-repeat="l in locales ">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[l.name]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[l.address]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[l.Comuna]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[l.ruta.name]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="l.id_usuario == 2"> Fgodoy</label>
                            <label ng-if="l.id_usuario == 3"> Jperez</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> <label> Activo</label></td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" style="background-color: #000; color:#fff"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-cog"></span>
                                Opciones</button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="" class="btn btn-default"><span style="color:#000;" class="glyphicon glyphicon-remove-circle"></span> Desactivar usuario</a>
                                    
                                    </li>
                                        <li><a href="" class="btn btn-default"><span style="color:#000;" class="glyphicon glyphicon-pencil"></span>  Modificar</a></li>
                                        <li><a href="" class="btn btn-default"><span style="color:#000;" class="glyphicon glyphicon-remove-circle"></span>  Eliminar</a></li>
        
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection('content')