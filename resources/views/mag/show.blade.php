@extends('layouts.blog-post')

@foreach ($blogPost as $item)
@section('header')
    
    <div class="background-img" style="background-image: url({{asset($item->image)  }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="category.html">{{ $item->category }}</a>
                        <span class="post-date">{{ $item->created_at }}</span>
                    </div>
                    <h1>{{ $item->title }}</h1>
                </div>
            </div>
        </div>
        
@endsection

@section('main-post')
    <div class="main-post">
      <img src="{{ $item->image }}" alt=""> 
      {!!$item->body!!}
    </div>
@endsection
@endforeach