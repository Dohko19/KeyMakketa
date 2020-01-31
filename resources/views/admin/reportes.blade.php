@extends('layouts.adminLTE')
@section('content')
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Reportes Auditorias</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label>Marca</label>
              <select class="form-control" style="width: 100%;">
                <option selected="selected">Cerveceria del barrio</option>
                <option>Pizza Amore</option>
                <option>Shirusi</option>
                <option>Espritu Sano</option>
              </select>
            </div>
            <!-- /.form-group -->
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label>Sucursal</label>
              <select class="form-control" style="width: 100%;">
                <option selected="selected">Condesa</option>
                <option>Santa Fe</option>
                <option>Lomas de Chapultepec</option>
                <option>Palmas</option>
                <option>Coyoacan</option>
                <option>Centro</option>
              </select>
            </div>
            <!-- /.form-group -->
        </div>
      <div class="form-group">
        <label>Rango de Busqueda:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="far fa-calendar-alt"></i>
            </span>
          </div>
          <input type="month" class="form-control float-right" id="">
        </div>
        <!-- /.input group -->
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Tipo de Reporte</label>
          <select id="tipoR" name="tipoR" class="form-control" style="width: 100%;" onchange="ShowSelected();">
            <option selected="selected" disabled>Selecione uno...</option>
            <option value="1">EXCEL</option>
            <option value="2">PDF</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
      <div id="myDIV" style="display: none;">
          <table class="table table-hover">
                <tr>
                    <th colspan="2">RESULTADOS</th>
                </tr>
                <tr>
                    <th >Mes</th>
                    <th >Calificacion</th>
                    <th >Acciones</th>
                </tr>
                <tr>
                    <td >Auditoria Enero</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Febrero</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Marzo</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Abril</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Mayo</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Junio</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Julio</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Agosto</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Septiembre</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Octubre</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Noviembre</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
                <tr>
                    <td >Auditoria Diciembre</td>
                    <td >10</td>
                    <td ><a href="auditoria.xlsx"><i class="fas fa-file-excel"></a></i></td>
                </tr>
          </table>
          </div>
      </div>
      </div>
      <div id="myDIV2" style="display: none;">
          <table class="table table-hover">
              <tr>
                  <th colspan="2" >RESULTADOS</th>
              </tr>
              <tr>
                  <th >Mes</th>
                  <th >Calificacion</th>
                  <th >Acciones</th>
              </tr>
              <tr>
                  <td >Auditoria Enero</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Febrero</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></a></td>
              </tr>
              <tr>
                  <td >Auditoria Marzo</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></td>
              </tr>
              <tr>
                  <td >Auditoria Abril</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Mayo</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Junio</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Julio</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Agosto</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Septiembre</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Octubre</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Noviembre</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
              <tr>
                  <td >Auditoria Diciembre</td>
                  <td >10</td>
                  <td ><a href="2364.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></i></td>
              </tr>
          </table>
      </div>
      </div>
      </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
</section>
@endsection
@push('styles')
    <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet"
      href="{{ asset('adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@push('scripts')

<!-- date-range-picker -->

<script src="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
    $('.select2').select2()
    $('#reservation').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 2000,
      maxYear: parseInt(moment().format('YYYY'),10)
    });


  </script>
  <script>
     function ShowSelected()
    {
        /* Para obtener el valor */
        var cod = document.getElementById("tipoR").value;
        //alert(cod);
        if(cod == 1){
            var x2 = document.getElementById("myDIV2");
            x2.style.display = "none";
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }else{
            var x = document.getElementById("myDIV");
            x.style.display = "none";
            var x2 = document.getElementById("myDIV2");
            if (x2.style.display === "none") {
                x2.style.display = "block";
            }
        }
      }
  </script>
@endpush