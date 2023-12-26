
@extends('backend.master')
@section('content')
<div class="content-wrapper">

  <!-- /.content-header -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create product</li>
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
                            <h3 class="card-title"><a href=""><i class="nav-icon fas fa-arrow-left"></i>  Product list</a></h3>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">From</label>
                                    <input type="" class="form-control" name="" id=""
                                        placeholder="Enter city">
                                </div>
                                <div class="form-group">
                                    <label for="">To</label>
                                    <input type="" class="form-control" name="" id=""
                                        placeholder="Enter city">
                                </div>
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="" class="form-control" name="" id=""
                                        placeholder="Enter date">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary col-md-12">Search Bus</button>
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

<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>




  @endsection
