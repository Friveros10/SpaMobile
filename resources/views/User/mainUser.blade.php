@extends('User.app')

@section('content')
<form method="post" ng-controller="homeController">          </br>
<div class="container" style="border:#000 solid;background-color:#fff; color:#000; padding: 75px;">
        <div class="row">
            <div class="content" ">
                <div class="col-sm-12 text-center">
                    <h1>Registrar Movimientos de Bandejas</h1><br>
                </div>
            </div>
          <div class="container-body" >
            <div class="container-fluid">
               <div class="row">
                
              </div>
                <div class="row" style="margin-left:10px; margin-right:10px;">
                    <div class="col-md-6">
                    <div class="form-group" style="margin-right: 1px;">
                        <label for="courier"><b>Local</b></label>
                        <select name="local" class="form-control required" ng-init="getLocales()" ng-model="register.local" data-placeholder="Seleccione una opción">                    
                            <option value=""></option>
                            <option  ng-repeat="l in locales" value="[[l.id]]">[[l.name]]</option>
                        </select> 
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipoRegistro"><b>Tipo de Registro</b></label>
                        <select  class="form-control required"   name="type_register" ng-model="register.tipoRegistro" placeholder="Seleccione un registro" ">
                            <option value="1">Ingreso</option>
                            <option value="2"> Salida</option>
                        </select>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="tipoRegistro"><b>Bandeja Chica</b></label>
                            <select  class="form-control"   name="type_small" ng-model="register.BandejaChica" placeholder="Seleccione un registro" ">
                                <option value=""></option>
                                <option  value="1">Bandeja Chica</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="num"><b>Cantidad</b></label>
                            <input type="text" name="quantity_small" id="num" class="form-control " placeholder="Numero" ng-model="register.quantityS" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </div> 
                    </div>
           
                    <div class="col-md-6">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="tipoRegistro"><b>Bandeja Grande</b></label>
                            <select  class="form-control"   name="type_big" ng-model="register.BandejaGrande" placeholder="Seleccione un registro" ">
                                <option value=""></option>
                                <option  value="2"> Bandeja Grande</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="num"><b>Cantidad</b></label>
                            <input type="text" name="quantity_big" id="num" class="form-control " placeholder="Numero" ng-model="register.quantityB" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </div> 
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="tipoRegistro"><b>Dolly</b></label>
                            <select  class="form-control"   name="dolly" ng-model="register.Dolly" placeholder="Seleccione un registro" ">
                                <option value=""></option>
                                <option value="3">DOLLY</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" style="margin-right: 1px;">
                            <label for="num"><b>Cantidad</b></label>
                            <input type="text" name="quantity_dolly" id="num" class="form-control " placeholder="Numero" ng-model="register.quantityD" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </div> 
                    </div>
             </div>
             <br><br>
             <div class="footer">
                 <button ng-click="saveRegister(register)"  class="btn btn-primary btn-block" style="background-color: #000; color:#fff;"> GUARDAR </button>
             </div>
            </div> 
          </div>   
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</form>

@endsection('content')