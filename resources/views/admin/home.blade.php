@extends('layouts.adminLTE')
@section('content')
<section class="content text-center" >
  <div class="container-fluid">
    <h5 class="mb-2">Marcas que le pertencen al Cliente | KEY</h5>
    <div class="row justify-content-center align-items-center minh-100" >

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <div class="info-box-content">
          <img src="viola.png" alt="" class="img-circle img-fluid" width="300px">
          </div>
          <!-- /.info-box-content -->
        </div>
          <a href="{{ route('pages.graficas') }}" class="btn btn-sm btn-primary small-box-footer"><i class="fas fa-star"></i> Calificacion de Limpieza: <u>10</u></a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <div class="info-box-content">
          <img src="50friend.png" alt="" class="img-circle img-fluid" width="250px">
          </div>
          <!-- /.info-box-content -->
        </div>
          <a href="{{ route('pages.graficas') }}" class="btn btn-sm btn-primary small-box-footer"><i class="fas fa-star"></i> Calificacion de Limpieza: <u>10</u></a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <div class="info-box-content">
          <img src="no20.png" alt="" class="img-circle img-fluid" width="250px">
          </div>
          <!-- /.info-box-content -->
        </div>
          <a href="{{ route('pages.graficas') }}" class="btn btn-sm btn-primary small-box-footer"><i class="fas fa-star"></i> Calificacion de Limpieza: <u>10</u></a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
</section>
@endsection