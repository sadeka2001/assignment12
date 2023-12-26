@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title"><a href="{{ route('user.create') }}"><i class="nav-icon fas fa-edit"></i> User create</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $key=>$user)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td> {{ $user->name }}</td>
                      <td> {{ $user->email }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>
                        {{-- <a href="{{ route('location.sale',$location->id) }}" class="badge bg-info">Sale</a> --}}
                        <a href="{{ route('user.edit',$user->id) }}" class="badge bg-info">Edit</a>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
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
