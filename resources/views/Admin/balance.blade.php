@extends('Admin.app')

@section('content')
<div class="content" style="background-color:#fff;" ng-controller="homeController ">
    <div class="container" style="background-color:#000;">
        <div class="container " style="background-color:#000; color:#fff; padding: 20px; " >
            <section class="content-header col-xs-12 col-sm-8 col-lg-9">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9">
                        <div class="form-group">
                            <h1 class="no-margin pull-center" style="color:#fff;">Balace Inventario de  Bandejas</h1>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="raw" >
                    <a href="/pdfAll" class=" pull-left btn btn-success btn-xs" style="background-color: #fff; color:#000">
                    PDF &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </a>
                    <a href="{{ route('Excel') }}" class=" pull-left btn btn-success btn-xs" style="background-color: #fff;  color:#000">
                    EXCEL &nbsp;<span class="glyphicon glyphicon-download-alt"></span>
                    </a>&nbsp;&nbsp;<br><br>
                </div>      
            </section>
        </div><br>
        <div class="container " style="background-color:#fff; color:#000; padding:30px;"  >
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-9">
                    <div class="form-group">
                        <h1 class="no-margin pull-center" style="color:#000;"> </h1>
                    </div>
                </div>
            </div>
            <br><br>
            <table datatable=""   class="table table-hover " width="100%">
                <thead>
                    <tr>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Local</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Entrada</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Salida</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Tipo Bandeja</th>
                        <th style="padding:5px; background-color:#000; color:#fff; border:1px;">Balance</th>
                    </tr>
                </thead>
                <tbody ng-init="getBalance()" >
                    <tr ng-repeat="u in balance" >
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.local]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.ingresos]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.Salida]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.tipobandeja]] </td>
                        <td style="padding:5px; background-color:#fff; color:#000;border-right:1px;"> [[u.Balance]] </td>
                    </tr>
                </tbody>
            </table>
            <br><a href="/balance" class="btn btn-success" style="color:#fff; background-color:#000;">Ver balance</a>
            <br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        });
</script>
@endsection('content')