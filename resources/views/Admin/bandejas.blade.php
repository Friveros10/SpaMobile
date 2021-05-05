@extends('Admin.app')

@section('content')
<div class="content" style="background-color:#fff;" ng-controller="homeController ">
    <div class="container" style="background-color:#000;">
        <div class="container " style="background-color:#000; color:#fff; padding: 20px; " >
            <section class="content-header col-xs-12 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <div class="form-group">
                            <h1 class="no-margin pull-center" style="color:#fff;">Gestión Bandejas</h1>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="raw" ng-if="!register.local"><br>
                    <a href="/pdfAll" class=" pull-left btn btn-success btn-xs" style="background-color: #fff; color:#000">
                    PDF &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </a>
                    <a href="{{ route('Excel') }}" class=" pull-left btn btn-success btn-xs" style="background-color: #fff;  color:#000">
                    EXCEL &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </a>&nbsp;&nbsp;<br><br>
                </div>      
                <div class="raw" ng-if="tipo_registro == 1"><br>
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff;  color:#000">
                    EXCEL &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>&nbsp;&nbsp;
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff; color:#000">
                    PDF &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>
                </div>
                <div class="raw" ng-if="tipo_registro == 2"><br>
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff; color:#000">
                    PDF &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff;  color:#000">
                    EXCEL &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>&nbsp;&nbsp;<br><br>
                </div>
                <div class="raw" ng-if="tipo_registro == 3"><br>
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff; color:#000">
                    PDF &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>
                    <button type="button" class=" pull-left btn btn-success btn-xs" style="background-color: #fff;  color:#000">
                    EXCEL &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </button>&nbsp;&nbsp;<br><br>
                </div>
            </section>
        </div><br>
        <div class="raw" style="background-color: #fff;">
            <div class="col-sm-7 col-md-8 col-lg-3">
                <div class="form-group">
                    <label for="" style="color:#fff;">Tipo Registro</label>
                    <select class="form-control" ng-model="tipo_registro">
                        <option value=""></option>
                        <option value="1">Ingresos</option>
                        <option value="2">Salidas</option>
                        <option value="3">Ambos</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-3">
                <div class="form-group">
                    <label for="" style="color:#fff;">Local</label>
                    <select name="local" class="form-control required" ng-init="getLocales()" ng-model="register.local" data-placeholder="Seleccione una opción">                    
                        <option value=""></option>
                        <option  ng-repeat="l in locales" value="[[l.id]]">[[l.name]]</option>
                    </select> 
                </div>
            </div>
        </div><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;" >
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-9">
                    <div class="form-group">
                        <h1 class="no-margin pull-center" style="color:#000;"> </h1>
                    </div>
                </div>
            </div>
            <button type="button" class=" pull-right btn btn-success btn-xs" style="background-color: #000; color:#fff">
                Nuevo Usuario <span class="icon-plus"></span>
            </button>
            <br><br>
            <table datatable="" dt-options="dtClient"  ng-init="getRegistrosAll()" class="table table-hover" width="100%">
                <thead>
                    <tr>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">ID</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Tipo Bandeja</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Cantidad</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Tipo De Registro</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Local/Ruta</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Usuario</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Opciones</th>
                    </tr>
                </thead>
                <tbody >
                    <tr ng-repeat="u in registros"   ng-if="tipo_registro == 1 && u.id_local == register.local  && u.id_tipo_registro == 1">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.id]]
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_tipo_bandeja == 1"> Bandejas Chica</label>
                            <label ng-if="u.id_tipo_bandeja == 2"> Bandejas Grande</label>
                            <label ng-if="u.id_tipo_bandeja == 3"> Dolly</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.cantidad]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_tipo_registro == 1">Ingreso</label>
                            <label ng-if="u.id_tipo_registro == 2">Salida</label>

                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_local == 1">Unimarc Conchali, ZNorte, RM</label>
                            <label ng-if="u.id_local == 2">Monserrat pza chacabuco, ZNorte, RM</label>
                            <label ng-if="u.id_local == 3">Lider, San bernardo, ZSur, RM</label>
                            <label ng-if="u.id_local == 4">Lider Gabriela, La Pintana, ZSur, RM</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_usuario == 2"> Fgodoy</label>
                            <label ng-if="u.id_usuario == 3"> Jperez</label>
                        </td>
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
                    <tr ng-repeat="u in registros"  ng-if="tipo_registro == 2 && u.id_local == register.local && u.id_tipo_registro == 2">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.id]]
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_tipo_bandeja == 1"> Bandejas Chica</label>
                            <label ng-if="u.id_tipo_bandeja == 2"> Bandejas Grande</label>
                            <label ng-if="u.id_tipo_bandeja == 3"> Dolly</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.cantidad]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_tipo_registro == 1">Ingreso</label>
                            <label ng-if="u.id_tipo_registro == 2">Salida</label>

                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_local == 1">Unimarc Conchali, ZNorte, RM</label>
                            <label ng-if="u.id_local == 2">Monserrat pza chacabuco, ZNorte, RM</label>
                            <label ng-if="u.id_local == 3">Lider, San bernardo, ZSur, RM</label>
                            <label ng-if="u.id_local == 4">Lider Gabriela, La Pintana, ZSur, RM</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_usuario == 2"> Fgodoy</label>
                            <label ng-if="u.id_usuario == 3"> Jperez</label>
                        </td>
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
                    <tr ng-repeat="u in registros"  ng-if="tipo_registro == 3 && u.id_local == register.local">
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.id]]
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_tipo_bandeja == 1"> Bandejas Chica</label>
                            <label ng-if="u.id_tipo_bandeja == 2"> Bandejas Grande</label>
                            <label ng-if="u.id_tipo_bandeja == 3"> Dolly</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.cantidad]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_tipo_registro == 1">Ingreso</label>
                            <label ng-if="u.id_tipo_registro == 2">Salida</label>

                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_local == 1">Unimarc Conchali, ZNorte, RM</label>
                            <label ng-if="u.id_local == 2">Monserrat pza chacabuco, ZNorte, RM</label>
                            <label ng-if="u.id_local == 3">Lider, San bernardo, ZSur, RM</label>
                            <label ng-if="u.id_local == 4">Lider Gabriela, La Pintana, ZSur, RM</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_usuario == 2"> Fgodoy</label>
                            <label ng-if="u.id_usuario == 3"> Jperez</label>
                        </td>
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
                    <tr ng-repeat="u in registros" ng-if="!register.local" >
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.id]]
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_tipo_bandeja == 1"> Bandejas Chica</label>
                            <label ng-if="u.id_tipo_bandeja == 2"> Bandejas Grande</label>
                            <label ng-if="u.id_tipo_bandeja == 3"> Dolly</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">[[u.cantidad]]</td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_tipo_registro == 1">Ingreso</label>
                            <label ng-if="u.id_tipo_registro == 2">Salida</label>

                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;">
                            <label ng-if="u.id_local == 1">Unimarc Conchali, ZNorte, RM</label>
                            <label ng-if="u.id_local == 2">Monserrat pza chacabuco, ZNorte, RM</label>
                            <label ng-if="u.id_local == 3">Lider, San bernardo, ZSur, RM</label>
                            <label ng-if="u.id_local == 4">Lider Gabriela, La Pintana, ZSur, RM</label>
                        </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> 
                            <label ng-if="u.id_usuario == 2"> Fgodoy</label>
                            <label ng-if="u.id_usuario == 3"> Jperez</label>
                        </td>
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
            <br><a href="/balance" class="btn btn-success" style="color:#fff; background-color:#000;">Ver balance</a>
            <br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection('content')