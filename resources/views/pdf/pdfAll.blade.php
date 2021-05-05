
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Registros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.11/angular.min.js"></script>

</head>
<body>
<div class="content">
    <div class="raw">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1>Inventario de Bandejas</h1>
        </div>
    </div>
    <div class="raw">
        <div class="col-sm-12 col-md-12 col-lg-12" ng-controller="HomeController">
            <table class="table table-stripped" ng-init="getRegistrosAll()">
                <thead>
                    <tr>
                        <th style="background-color:#000;color:#fff;">Local</th>
                        <th style="background-color:#000;color:#fff;">Entrada</th>
                        <th style="background-color:#000;color:#fff;">Salida</th>
                        <th style="background-color:#000;color:#fff;">Tipo Bandeja</th>
                        <th style="background-color:#000;color:#fff;">Balace</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($registros as $registro)
                        <tr >
                            <td> {{$registro->local}} </td>
                            <td> {{$registro->ingresos}} </td>
                            <td> {{$registro->Salida}} </td>
                            <td> {{$registro->tipobandeja}} </td>
                            <td> {{$registro->Balance}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{asset('/angularController/mainAppAdmin.js?v=3.2.8')}}"></script>
<script src="{{asset('/angularController/homeController.js?v=2.5.1')}}"></script>


</body>
</html>

 