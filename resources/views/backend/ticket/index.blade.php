@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ticket</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket</li>
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
                <h3 class="card-title"><a href="{{ route('ticket.create') }}"><i class="nav-icon fas fa-edit"></i> ticket create</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>User Phone</th>
                      <th>Bus Name</th>
                      <th>Location</th>
                      <th>Ticket Price</th>
                      <th>Total Amount</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($tickets as $ticket)
                    <tr>
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->user->name }}</td>
                                <td>{{ $ticket->user->phone }}</td>
                                <td>{{ $ticket->bus->bus_name }}</td>
                                <td>{{ $ticket->location->name }}</td>
                                <td>{{ $ticket->ticket_price }}</td>
                                <td>{{ $ticket->total_amount }}</td>
                                <td>{{ $ticket->status }}</td>
                      <td>
                         <a href="{{ route('ticket.show',$location->id) }}" class="badge bg-warning">Show</a> 
                        <a href="{{ route('ticket.edit',$ticket->id) }}" class="badge bg-info">Edit</a>
                        <form action="{{ route('ticket.destroy',$ticket->id) }}" method="POST">
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
