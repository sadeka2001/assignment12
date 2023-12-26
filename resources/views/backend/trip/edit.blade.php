<!-- Content Wrapper. Contains page content -->
@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Location</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"></li>
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
                                <h3 class="card-title"><a href="{{ route('trip.index') }}"><i class="nav-icon fas fa-arrow-left"></i>  Product list</a></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('trip.update',$trip->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label for="bus_id" class="col-sm-2 col-form-label">Select Bus</label>
                                    <div class="col-sm-10">
                                      <select name="bus_id" class="form-control">
                                            @foreach ($buses as $bus)

                                            <option value="{{ $bus->id }}">{{ $bus->bus_name }}</option>
                                            @endforeach
                                            
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="location_id" class="col-sm-2 col-form-label">Select Location</label>
                                    <div class="col-sm-10">
                                      <select name="location_id" class="form-control">
                                            @foreach ($locations as $location)

                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                       
                                    </div>
                                </div>
                                    
                                    <div class="form-group">
                                        <label for="from_location">Location </label>
                                        <input type="text" class="form-control" name="from_location" value="Dhaka" id="from_location"
                                            placeholder="location">
                                    </div>

                                    <div class="form-group">
                                        <label for="from_location">Departure </label>
                                        <input type="date" class="form-control" name="departure_date" 
                                            placeholder="departure_date">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
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

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
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
