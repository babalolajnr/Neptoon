@extends('layouts.admin')

@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add New Category <i class="fa fa-plus" aria-hidden="true"></i></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Text Editors</li>
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
            <div class="col-md-12">
             @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>{{ session('message') }}</strong> 
                    </div>
                    <script>
                      $(".alert").alert();
                    </script>
                  @endif
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add New Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('storeCategory') }}" method="POST" >
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Category Name">Category Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Category Name" value="{{old('name')}}">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                   
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
  
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

@endsection