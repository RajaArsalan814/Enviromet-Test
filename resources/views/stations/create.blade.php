@extends('layouts.master')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Stations</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Stations</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <div class="card card-primary">
            <form action="{{route('stations.store')}}" method="POST" >
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" class="form-control"  placeholder="Enter Location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Metro Code</label>
                        <input type="text" class="form-control"  placeholder="Enter metro Code" name="code" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone Number</label>
                        <input type="text" class="form-control"  placeholder="Enter Number" name="number" required>
                    </div>
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control" >
                        <option disabled  selected>Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">DeActive</option>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
        </div>

        </div>
      </div>
    </section>
  @endsection
