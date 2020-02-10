@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

	<!-- <div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(!empty($post->image))
				<img src="{{asset('/images/' . $post->image)}}" width="800" height="400" />
			@endif
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
			<hr>
			<p>Posted In: {{ $post->category->name }}</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>
 -->
  <div class="main" role="main">
      <div id="content" class="content full">
            <div class="container"> 
                
                <div class="row">
                  <!-- Posts List -->
                  <div class="col-md-2"></div>
                    <div class="col-md-8">
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
                                <p class="drop-caps">{!! $post->body !!}</p>
                            </div>
                              <div class="post-footer">
                          <div class="post-tags">
                                	<h4 class="short">Post Tags: </h4>
                                	@foreach ($post->tags as $tag)
                           			<a href="#" class="post-cat meta-data">{{ $tag->name }}</a>,
 									@endforeach
                                </div></div>
                        </article>
                         <div class="clearfix"></div>
                        <!-- Pagination -->
                        <div class="page-pagination margin-40">
                        	<a href="#" class="pull-left">&laquo; prev post</a>
                        	<a href="#" class="pull-right">next post &raquo; </a>
                        </div>
                       
                        
                        <!-- Post Comments -->
            			<div class="post-comments" id="comments">
              				<h3 class="widgettitle">Comments ( {{ $post->comments()->count() }} )</h3>
              				<ol class="comments">
              					@foreach($post->comments as $comment)
                				<li>
                  					<div class="post-comment-block">
                    						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="img-thumbnail">
                                        <div class="post-comment-content">
                                            
                                            <h4><a href="#">{{ $comment->name }}</a> <em>says</em></h4>
                                            <span class="meta-data">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</span>
                                            <p>{{ $comment->comment }}</p>
                                      	</div>
                  					</div>
                				</li>
                				@endforeach
                            </ol>
                        </div>
                        <!-- Comment Form -->
                        <div class="post-comment-form">
                            <h3 class="widgettitle">Post a comment</h3>
                          {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control input-lg']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control input-lg', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-primary btn-lg', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
                    	</div>
                        <div class="clearfix"></div>
                    </div>

    <div class="col-md-2"></div>

                </div>
            </div>
        </div>
    </div>
@endsection

