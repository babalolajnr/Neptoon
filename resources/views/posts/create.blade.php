@extends('layouts.admin')

@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add New Post <i class="fa fa-plus" aria-hidden="true"></i></h1>
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
              @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      <span class="sr-only">Close</span>
                    </button>
                    <strong>Success!!😍</strong> {{ session('success') }}
                  </div>
              @endif
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add New Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Title">Title</label>
                      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Post title" value="{{ old('title') }}">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control @error('category') is-invalid @enderror" name="category">
                  
                      @foreach ($categories as $category)
                          <option>{{$category->name}}</option>
                      @endforeach
  
                      </select>
                      @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Image</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        @error('image')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Content</label>
                      <div class="pad">
                        <div class="mb-3">
                          <textarea name="body" class="textarea @error('body') is-invalid @enderror" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                        
                      </div>
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