<!-- Content Wrapper. Contains page content -->
@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Bus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Bus</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><a href="{{ route('bus.index') }}"><i
                                            class="nav-icon fas fa-arrow-left"></i> Bus Create</a></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('bus.update',$bus->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="bus_name">Bus Name:</label>
                                        <input type="text" class="form-control" name="bus_name"
                                        value="{{ $bus->bus_name }}">
                                    </div>
                                    <div class="form-group row">
                                        <label for="location_id" class="col-sm-2 col-form-label">Select Location</label>
                                        <div class="col-sm-10">

                                            <select name="location_id" class="form-control">
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}" {{ $bus->location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Condition</label>
                                        <div class="col-sm-10">

                                            <select name="status" class="form-control">

                                                <option value="1" {{$bus->status == 1 ? 'selected' : ''}}> A/C</option>
                                                <option value="0" {{$bus->status == 0 ? 'selected' : ''}}>Non A/C</option>


                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="total_seats">Total seat</label>
                                        <input type="number" class="form-control" name="total_seats" value="{{ $bus->total_seats }}" placeholder="seat">
                                    </div>



                                    <div class="form-group">
                                        <label for="image"> Image</label>
                                        <input type="file" class="form-control" name="bus_image" placeholder="image">
                                    </div>



                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
