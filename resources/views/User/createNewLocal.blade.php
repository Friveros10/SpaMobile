@extends('layouts.aps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #000; color: #fff"><h3>Registrar Locales</h3></div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Cadena Local:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Direccion:</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comune" class="col-md-4 col-form-label text-md-right">Comuna:</label>
                            <div class="col-md-6">
                                <input id="comune" type="text" class="form-control" name="comune" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Ruta" class="col-md-4 col-form-label text-md-right">Ruta:</label>
                            <div class="col-md-6">
                                <input id="ruta" type="text" class="form-control" name="ruta" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-default" style="background-color: #000; color:#fff">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')