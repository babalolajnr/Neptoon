@extends('layouts.blog')

@section('content')
	<!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            @if ($row1)
            @foreach ($row1 as $row)  

            <!-- row -->
            <div class="row">	
                <!-- post -->
                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img" href="/mag/show/{{ $row->slug }}"><img src="{{ $row->image }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="/mag/show/{{ $row->slug }}">{{ $row->category->name }}</a>
                                <span class="post-date">{{ $row->created_at->format('d M Y') }}</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->slug }}">{{ $row->title }}</a></h3>
                        </div>
                    </div>
                </div>
                
                @endforeach
                <!-- /post -->
           
            @endif
           

            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Recent Posts</h2>
                    </div>
                </div>

                @if ($row2)
                @foreach ($row2 as $row)  
                <!-- post -->
                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ $row->image }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1" href="/mag/show/{{ $row->id }}">{{ $row->category->name }}</a>
                                <span class="post-date">{{ $row->created_at }}</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">{{ $row->title }}</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /post -->
                @endforeach
                @endif
                

           

                <div class="clearfix visible-md visible-lg"></div>

                @if ($row3)
               
                @foreach ($row3 as $row)
                <!-- post -->
                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ $row->image }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="/mag/show/{{ $row->id }}">{{ $row->category->name }}</a>
                                <span class="post-date">{{ $row->created_at }}</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">{{ $row->title }}</a></h3>
                        </div>
                    </div>
                </div>
               
                <!-- /post -->
                @endforeach
                @endif
             
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <!-- post -->
                        @if ($row4)
                            
                        
                        @foreach ($row4 as $row)
                            
                        
                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ $row->image }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="/mag/show/{{ $row->id }}">{{ $row->category }}</a>
                                        <span class="post-date">{{ $row->created_at }}</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">{{ $row->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->

                        @endforeach
                        @endif
                       
                        <div class="clearfix visible-md visible-lg"></div>
                        @if ($row5)
                            
                        
                        @foreach ($row5 as $row)
                            
                        
                        <!-- post -->
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ $row->image }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="/mag/show/{{ $row->id }}">{{ $row->category }}</a>
                                        <span class="post-date">{{ $row->created_at }}</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">{{ $row->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        @endforeach
                        @endif
 
                        <div class="clearfix visible-md visible-lg"></div>
                        @if ($row6)
                            
                        
                        @foreach ($row6 as $row)
                        <!-- post -->
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ $row->image }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="/mag/show/{{ $row->id }}">{{ $row->category }}</a>
                                        <span class="post-date">{{ $row->created_at }}</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">{{ $row->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        @endforeach
                        @endif

                    </div>
                </div>

                {{-- <div class="col-md-4">
                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/widget-1.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/widget-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/widget-3.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/widget-4.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
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
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="/mag/show/{{ $row->id }}">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                            </div>
                        </div>

                        <div class="post post-thumb">
                            <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-1.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="/mag/show/{{ $row->id }}">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post widget -->
                    
                    <!-- ad -->
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="{{ asset('blog/img/ad-1.jpg') }}" alt="">
                        </a>
                    </div>
                    <!-- /ad -->
                </div> --}}
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
                {{-- <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-4.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="/mag/show/{{ $row->id }}">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div> --}}
                <!-- /post -->

                <!-- post -->
                {{-- <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-5.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="/mag/show/{{ $row->id }}">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                        </div>
                    </div>
                </div> --}}
                <!-- /post -->

                <!-- post -->
                {{-- <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-3.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1" href="/mag/show/{{ $row->id }}">Web Design</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                        </div>
                    </div>
                </div> --}}
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
                        {{-- <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-4.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="/mag/show/{{ $row->id }}">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /post -->

                        <!-- post -->
                        {{-- <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-6.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="/mag/show/{{ $row->id }}">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /post -->

                        <!-- post -->
                        {{-- <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-1.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="/mag/show/{{ $row->id }}">Css</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">CSS Float: A Tutorial</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /post -->
                        
                        <!-- post -->
                        {{-- <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="/mag/show/{{ $row->id }}"><img src="{{ asset('blog/img/post-2.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="/mag/show/{{ $row->id }}">Jquery</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="/mag/show/{{ $row->id }}">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div> --}}
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
                            <img class="img-responsive" src="{{ asset('blog/img/ad-1.jpg') }}" alt="">
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