@extends('layouts.admin')


@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Post <i class="fa fa-plus" aria-hidden="true"></i></h1>
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
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                   
                  <h3 class="card-title">Edit <strong>{{ $post->title }}</strong></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/posts/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="" value="{{ $post->title }}">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control @error('category') is-invalid @enderror" name="category">
                        @foreach($categories as $category)

                          @if ($category->name == $post->category->name)
                          <option selected>{{ $post->category->name }}</option>
                          @endif

                          @if($category->name !== $post->category->name)
                          <option>{{ $category->name }}</option>
                          @endif
                       
                        @endforeach
                        
                      </select>
                      @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="">Current Image</label>
                      <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
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
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
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
