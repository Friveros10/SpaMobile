@extends('Admin.app')

@section('content')
<div class="content" style="background-color:#fff;">
    <div class="container" style="background-color:#000;">
        <div class="container " style="background-color:#000; color:#fff; padding: 10px;" ng-controller="homeController as hctrl">
            <div class="raw">
                <section class="content-header col-xs-1 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-sm-3 col-md-6 col-lg-12">
                            <div class="form-group"><br>
                                <h1 class="no-margin pull-center" >Gestión de Usuarios</h1>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <br><br><br>
            <br><br><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;" ng-controller="homeController as hctrl">
            <div class="raw">
                <a href="/registerU" class="pull-right btn btn-success btn-xs" style="background-color: #000; color:#fff;" >
                Nuevo Registro &nbsp;<span  style="color:#fff" class="glyphicon glyphicon-plus"></span>
                </a><br><br>
                <div class="col-xs-1 col-sm-3 col-md-6 col-lg-12">           
                    <table width="100%" class="col-xs-1 col-sm-3 col-md-6 col-lg-12" style="padding:5px;" ng-init="getUsers()">
                        <thead>
                            <tr>
                                <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Nombre usuario<br></th>
                                <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Email</th>
                                <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Rol</th>
                                <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Estado usuario</th>
                                <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="u in usuarios" ng-if="u.id != 1">
                                <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.name]] </td>
                                <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.email]]</td>
                                <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.role.name]]</td>
                                <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">1</td>
                                <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" style="background-color: #000; color:#fff" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>

@endsection('content')