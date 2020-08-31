@extends('layouts.front-end-nav-footer')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
			<!-- post -->
			@foreach ($featuredPosts as $featuredPost)
			
            <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="{{ url('post/'.$featuredPost->post->slug) }}"><img src="{{ $featuredPost->post->image }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">{{ $featuredPost->post->category->name }}</a>
                            <span class="post-date">{{ $featuredPost->post->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$featuredPost->post->slug) }}">{{ $featuredPost->post->title }}</a></h3>
                    </div>
                </div>
			</div>
			@endforeach
            <!-- /post -->

            <!-- post -->
            {{-- <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-2.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="category.html">Jquery</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                    </div>
                </div>
            </div> --}}
            <!-- /post -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Recent Posts</h2>
                </div>
            </div>

            <!-- post -->
            @foreach ($recentPosts1 as $recentPost1)
                
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ $recentPost1->image }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">{{ $recentPost1->category->name }}</a>
                            <span class="post-date">{{ $recentPost1->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost1->title }}</a></h3>
                    </div>
                </div>
            </div>
            
            @endforeach
            <!-- /post -->

            <!-- post -->
            {{-- <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-4.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Chrome Extension Protects Against
                                JavaScript-Based CPU Side-Channel Attacks</a></h3>
                    </div>
                </div>
            </div> --}}
            <!-- /post -->

            <!-- post -->
            {{-- <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-5.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="category.html">Jquery</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                    </div>
                </div>
            </div> --}}
            <!-- /post -->

            <div class="clearfix visible-md visible-lg"></div>

            <!-- post -->
            @foreach ($recentPosts2 as $recentPost2)
                
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="#"><img src="{{ $recentPost2->image }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">{{ $recentPost2->category->name }}</a>
                            <span class="post-date">{{ $recentPost2->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost2->title }}</a></h3>
                    </div>
                </div>
            </div>
            
            @endforeach
            <!-- /post -->

            <!-- post -->
            {{-- <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-1.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-4" href="category.html">Css</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">CSS Float: A Tutorial</a></h3>
                    </div>
                </div>
            </div> --}}
            <!-- /post -->

            <!-- post -->
            {{-- <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-2.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Tell-A-Tool: Guide To Web Design And Development
                                Tools</a></h3>
                    </div>
                </div>
            </div> --}}
            <!-- /post -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- post -->
                    @foreach ($recentPosts3 as $recentPost3)
                        
                    <div class="col-md-12">
                        <div class="post post-thumb">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ $recentPost3->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="category.html">{{ $recentPost3->category->name }}</a>
                                    <span class="post-date">{{ $recentPost3->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost3->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- /post -->

                    <!-- post -->
                    @foreach ($recentPosts4 as $recentPost4)
                        
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ $recentPost4->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-4" href="category.html">{{ $recentPost4->category->name }}</a>
                                    <span class="post-date">{{ $recentPost4->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost4->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- /post -->

                    <!-- post -->
                    {{-- <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-1" href="category.html">Web Design</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /post -->

                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- post -->
                    @foreach ($recentPosts5 as $recentPost5)
                        
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ $recentPost5->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-4" href="category.html">{{ $recentPost5->category->name }}</a>
                                    <span class="post-date">{{ $recentPost5->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost5->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- /post -->

                    <!-- post -->
                    {{-- <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-5.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="category.html">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use
                                        JQuery?</a></h3>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /post -->

                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- post -->
                    @foreach ($recentPosts6 as $recentPost6)
                        
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ $recentPost6->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-4" href="category.html">{{ $recentPost6->category->name }}</a>
                                    <span class="post-date">{{ $recentPost6->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">{{ $recentPost6->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- /post -->

                    <!-- post -->
                    {{-- <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-4.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Chrome Extension Protects Against
                                        JavaScript-Based CPU Side-Channel Attacks</a></h3>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /post -->
                </div>
            </div>

            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Most Read</h2>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/widget-1.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Tell-A-Tool: Guide To Web Design And
                                    Development Tools</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/widget-2.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Pagedraw UI Builder Turns Your Website
                                    Design Mockup Into Code Automatically</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/widget-3.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Why Node.js Is The Coolest Kid On The
                                    Backend Development Block!</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/widget-4.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Tell-A-Tool: Guide To Web Design And
                                    Development Tools</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /post widget -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-2.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="category.html">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use JQuery?</a>
                            </h3>
                        </div>
                    </div>

                    <div class="post post-thumb">
                        <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-1.jpg') }}"
                                alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="category.html">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Chrome Extension Protects Against
                                    JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /post widget -->

                <!-- ad -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="{{ asset('front-end/./img/ad-1.jpg') }}" alt="">
                    </a>
                </div>
                <!-- /ad -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Featured Posts</h2>
                </div>
            </div>

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-4.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Chrome Extension Protects Against
                                JavaScript-Based CPU Side-Channel Attacks</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-5.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="category.html">Jquery</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img src="{{ asset('front-end/./img/post-3.jpg') }}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Pagedraw UI Builder Turns Your Website Design
                                Mockup Into Code Automatically</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-4.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Chrome Extension Protects Against
                                        JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-6.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Why Node.js Is The Coolest Kid On The
                                        Backend Development Block!</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-1.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-4" href="category.html">Css</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">CSS Float: A Tutorial</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="{{ url('post/'.$recentPost1->slug) }}"><img
                                    src="{{ asset('front-end/./img/post-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="category.html">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('post/'.$recentPost1->slug) }}">Ask HN: Does Anybody Still Use
                                        JQuery?</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <div class="col-md-12">
                        <div class="section-row">
                            <button class="primary-button center-block">Load More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- ad -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="{{ asset('front-end/./img/ad-1.jpg') }}" alt="">
                    </a>
                </div>
                <!-- /ad -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                            <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                            <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                            <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->

                <!-- tags -->
                <div class="aside-widget">
                    <div class="tags-widget">
                        <ul>
                            <li><a href="#">Chrome</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Backend</a></li>
                            <li><a href="#">JQuery</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">Website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /tags -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


@endsection
