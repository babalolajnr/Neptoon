@extends('layouts.admin')
@section('page-level-links')
<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('content')
<div class="card">

    <div class="card-header">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <span><strong>Success!!😍</strong> {{ session('success') }}</span>
        </div>
        @endif
        <h3 class="card-title">Drafts</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="drafts" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Body</th>
                    <th>Added On</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($drafts as $post)
                <?php

             //Strip the tags from the post body
              $post->body = strip_tags($post->body);
              
              //Return a specific length of posts
              $post->body = Str::substr($post->body, 0, 50) . "...";

              // Remove time frame from datetime
            //    $post->created_at = Str::substr($post->created_at, 0,10);
               

            ?>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td><img src="{{ asset($post->image) }}" width="100" height="50" alt=""></td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->format('d M') }}</td>
                    <td>
                        <a href="{{ url('posts/edit/' .$post->id) }}"><button type="button"
                                class="btn btn-sm btn-outline-warning pr-2">Edit</button>

                            {{-- form for delete button --}}
                            <span>
                                <form action="/posts/delete/{{ $post->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </span>
                            <span>
                                <form action="/posts/publish/{{ $post->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-outline-success">Publish</button>
                                </form>
                            </span>

                    </td>
                </tr>
                @endforeach


            </tbody>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Body</th>
                    <th>Added On</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
@section('other-page-level-links')
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $("#drafts").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection
