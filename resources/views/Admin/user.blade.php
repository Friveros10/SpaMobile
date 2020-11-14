@extends('layouts.apps')

@section('content')
<div class="card-body" style="background-color:#fff; color:#000; padding-left: 10px; padding-right: 10px"ng-controller="clientController">
<section class="content-header">
    <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9">
            <div class="form-group">
                <h3 class="no-margin">Gestionar Usuarios</h3>
            </div>
        </div>
    </div>
</section>
<section class="content ">
    <div class="row card-body" >
        <div class="col-lg-12">
            <div class="box box-solid">
                <div class="box-header">
                    <div class="pull-right">
                        <button type="button" class="btn btn-success btn-xs" style="background-color: #000; color:#fff" ng-click="">
                           Nuevo Usuario <span class="icon-plus"></span>
                        </button>
                    </div>
                </div>
                <div class="box-body" >
                    <!-- Loading (remove the following to stop the loading)-->
                    <div class="overlay-wrapper" ng-if="loading">
                        <div class="overlay">
                            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
                        </div>
                    </div>
                    <!-- end loading -->
                    <div class="animated fadeIn table-responsive" ng-if="">
                        <table datatable="" dt-options="dtClient" class="table table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre usuario<br></th>
                                    <th>Email</th>
                                    <th>Rut</th>
                                    <th>Ruta</th>
                                    <th>Estado usuario</th>
                                    <th>Opciones</th>
                              </tr>
                            </thead>
                            <tbody >
                                <tr ng-repeat="b in clientAll | orderBy: 'id'">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" style="background-color: #000; color:#fff"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="" class="btn btn-default"></span> Desactivar usuario</a></li>
                                                <li><a href="" class="btn btn-default"></span> Modificar</a></li>
                                                <li><a href="" class="btn btn-default"></span> Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>
</div>
@endsection('content')