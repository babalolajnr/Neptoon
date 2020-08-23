@extends('layouts.blog-post')

@foreach ($blogPost as $item)
@section('title')
    {{ $item->title }}
@endsection

@section('header')
    
    <div class="background-img" style="background-image: url({{asset($item->image)  }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="category.html">{{ $item->category->name }}</a>
                        <span class="post-date">{{ $item->created_at->format('d M Y') }}</span>
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

@section('author')
<div class="post-author">
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="{{ asset('blog/img/author.png') }}" alt="">
        </div>
        <div class="media-body">
            <div class="media-heading">
                <h3>{{ $item->user->firstName." ".$item->user->lastName }}</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <ul class="author-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
@endforeach