@extends('main')

@section('title', '| Blog')

@section('content')

 <div class="main" role="main">
      <div id="content" class="content full">
            <div class="container"> 
                
                <div class="row">
                  <!-- Posts List -->
                    <div class="col-md-8">
                      <!-- Post -->
                        @foreach ($posts as $post)
                        <article class="post post-list format-gallery">
                            <div class="post-head">
                                <div class="post-head-left">
                                    <div class="post-date">{{ date('M j, Y', strtotime($post->created_at)) }}</div>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-comment"></i> {{ $post->comments()->count() }}</a>
                                        <a href="#" class="post-cat">{{ $post->category->name }}</a>
                                    </div>
                                    <span class="post-format-icon accent-bg"><i class="icon-multiple-image"></i></span>
                                </div>
                                <div class="post-head-right">
                                    <h2 class="post-title"><a href="{{ url('blog/'.$post->slug) }}">{{ $post->title }}</h2>
                                </div>
                          </div>
                            <div class="post-media">
                                @if(!empty($post->image))
                                                  <img src="{{asset('/images/' . $post->image)}}" />

                                            @endif
                                      </div>
                               
                            
                            <div class="post-entry">
                                <p class="drop-caps">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                            </div>
                            <div class="post-footer">
                               
                                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                            @endforeach

                        
                        <div class="clearfix"></div>
                        <!-- Pagination -->
                        <div class="page-pagination">
                        	<a href="#" class="pull-left">&laquo; Older entries</a>
                        </div>
                    </div>
               

 @include('partials._sidebar')

                </div>
            </div>
        </div>
    </div>

@endsection
