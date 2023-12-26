@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>location</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">location</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="{{ route('trip.create') }}"><i class="nav-icon fas fa-edit"></i> Product create</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Bus Category</th>
                      <th>From Location</th>
                      <th>To Location</th>
                      <th>Departure Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse  ($trips as $trip)
                    <tr>
                      <td>{{ $trip->id }}</td>
                      <td>{{ $trip->bus->bus_name }}</td>
                      <td>{{ $trip->from_location }}</td>
                      <td>{{ $trip->location->name }}</td>
                      <td>{{ $trip->departure_date }}</td>
                      <td>
                        {{-- <a href="{{ route('location.sale',$location->id) }}" class="badge bg-info">Sale</a> --}}
                        <a href="{{ route('trip.edit',$trip->id) }}" class="badge bg-info">Edit</a>
                        <form action="{{ route('trip.destroy',$trip->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger">Delete</button>
                      </form>

                      </td>
                    </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
              </div>

            </div>

          </div>

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection
