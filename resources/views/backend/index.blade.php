@extends('backend.base')

@section('styles')
<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ ('css/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ ('css/dist/css/adminlte.min.css') }}">
@endsection

@section('imgUser')
{{ ('css/dist/img/user1-128x128.jpg') }}
@endsection

@section('imgAvatar')
{{ ('css/dist/img/user8-128x128.jpg') }}
@endsection

@section('imgAvatar2')
{{ ('css/dist/img/user3-128x128.jpg') }}
@endsection

@section('imgLogo')
{{ ('css/dist/img/AdminLTELogo.png') }}
@endsection

@section('imgCircle')
{{ ('css/dist/img/user2-160x160.png') }}
@endsection

@section('titleContent')

@endsection

@section('content')
<!-- Main content -->
    <div class="content">
      <div class="button" style="display: flex; justify-content: center;">
          <a href="{{ url('backend/list') }}"><button style="padding: 30px 50px 30px 50px">SEE TICKETS</button></a>
      </div>
    </div>
    <!-- /.content -->
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{ ('css/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ ('css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('css/dist/js/adminlte.min.js') }}"></script>
@endsection