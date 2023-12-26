@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bus</li>
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
                <h3 class="card-title"><a href="{{ route('bus.create') }}"><i class="nav-icon fas fa-edit"></i> ticket create</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bus Name</th>
                        <th class="text-center">Location</th>
                        <th>Total Seats</th>
                        <th>Image</th>
                        <th>Condition</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($buses as $bus)
                    <tr>
                        <td>{{ $bus->id }}</td>
                        <td>{{ $bus->bus_name }}</td>
                        <td>{{ $bus->location->name }}</td>
                        <td class="text-center">{{ $bus->total_seats }}</td>
                        <td>
                            <img src="{{asset('images/buses/'.$bus->image)}}" alt="" width="50">
                        </td>

                        <td class="text-center">
                            @if($bus->status)
                                <span class="badge bg-label-primary me-1">A/C</span>
                            @else
                                <span class="badge bg-label-warning me-1">Non A/C</span>
                            @endif
                        </td>
                      <td>
                         <a href="{{ route('bus.show',$bus->id) }}" class="badge bg-warning">Show</a> 
                        <a href="{{ route('bus.edit',$bus->id) }}" class="badge bg-info">Edit</a>
                        <form action="{{ route('bus.destroy',$bus->id) }}" method="POST">
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

@endsection
