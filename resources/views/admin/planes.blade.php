@extends('layouts.adminLTE')
@section('content')
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      Planes de Accion
      <div class="row">
        <div class="container-fluid">
          <table class="talbe">
            <tr>
              <th>Camapana Sucia</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
            <tr>
              <th>Area de Cochambre no desinfecatada</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
            <tr>
              <th>Personal no bien uniformado</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
            <tr>
              <th>Desconocimineto del proceso de desinfeccion</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
            <tr>
              <th>Equipos en mal estado</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
            <tr>
              <th>Falta de producto quimico</th>
              <td><input class="form-control" type="text" placeholder="..."></td>
              <td class="pull-right"><button class="btn btn-info"><i class="far fa-save"></i> Guardar</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button class="btn btn-success">Test</button>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
</section>
@endsection