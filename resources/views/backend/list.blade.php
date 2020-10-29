@extends('backend.base')

@section('styles')
<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ ('../css/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ ('../css/dist/css/adminlte.min.css') }}">
@endsection

@section('imgUser')
{{ ('../css/dist/img/user1-128x128.jpg') }}
@endsection

@section('imgAvatar')
{{ ('../css/dist/img/user8-128x128.jpg') }}
@endsection

@section('imgAvatar2')
{{ ('../css/dist/img/user3-128x128.jpg') }}
@endsection

@section('imgLogo')
{{ ('../css/dist/img/AdminLTELogo.png') }}
@endsection

@section('imgCircle')
{{ ('../css/dist/img/user2-160x160.png') }}
@endsection

@section('titleContent')
Tickets
@endsection



@section('content')
<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @foreach ($tickets as $ticket)
            <div class="row">
                <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $ticket['name'] }}</h5><br>
    
                    <p class="card-text">
                      - {{ $ticket['price'] }} €
                    </p>
                    <p class="card-text">
                      - {{ $ticket['date'] }}
                    </p>
                    <p class="card-text">
                      - {{ $ticket['time'] }} h
                    </p>
                    <a href="{{ url('backend/detail/' . $ticket['id']) }}" class="card-link">See ticket</a>
                    <a href="#" class="card-link">Edit ticket</a>
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        @endforeach
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{ ('../css/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ ('../css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('../css/dist/js/adminlte.min.js') }}"></script>
@endsection