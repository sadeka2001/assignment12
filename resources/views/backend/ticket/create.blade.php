<!-- Content Wrapper. Contains page content -->
@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Ticket</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Ticket</li>
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
                                <h3 class="card-title"><a href="{{ route('ticket.index') }}"><i class="nav-icon fas fa-arrow-left"></i>  Ticket Create</a></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('ticket.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                   

                                    <div class="form-group row">
                                        <label for="user_id" class="col-sm-2 col-form-label">Select User</label>
                                        <div class="col-sm-10">
                                          
                                            <select name="user_id" class="form-control">
                                                @foreach ($users as $user)

                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                           
                                        </div>
                                    </div>

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
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Condition</label>
                                        <div class="col-sm-10">
                                          
                                            <select name="status" class="form-control">
                                               
                                                <option value="active">A/C</option>
                                                <option value="inactive">Non A/C</option>
                                                
                                                
                                            </select>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="ticket_price">Ticket Price</label>
                                        <input type="number" class="form-control" name="ticket_price"
                                            placeholder="Price">
                                    </div>

                                    

                                    <div class="form-group">
                                        <label for="seat_number">Seat Number</label>
                                        <input type="number" class="form-control" name="seat_number"
                                            placeholder="Price">
                                    </div>

                                    <div class="form-group">
                                        <label for="total_amount">Total Price</label>
                                        <input type="number" class="form-control" name="total_amount"
                                            placeholder="Price">
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
