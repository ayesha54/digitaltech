  <!-- Site Sidebar -->
                    <aside class="col-md-4 sidebar right-sidebar">
                    	<div class="widget sidebar-widget">
                        	<h3 class="widgettitle">About me</h3>
                            <div class="textwidget">
                            	<div class="text-align-center">
                                	<div class="about-image"><img data-no-retina src="http://placehold.it/400x400&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                    <h3 class="accent-color">Cheryl Mendoza</h3>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                           			<a href="/about" class="btn btn-default">Read more about me <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                       	</div>
                    	<div class="widget sidebar-widget popular-posts-widget">
                        	<h3 class="widgettitle">Popular Posts</h3>
                            <ul>
                             
                            	<li class="most-recent-post">
                                	<div class="widget-post-image">
                                    	
                                          @if(!empty($post->image))
                                          <a href="{{ route('blog.single', $post->slug) }}">
                                                  <img src="{{asset('/images/' . $post->image)}}" />
                                            </a>
                                            @endif   
                                      
                                    </div>
                                	<div class="widget-post-content">
                                    	<span class="meta-data">{{ date('M j, Y', strtotime($post->created_at)) }}</span>
                                    	<h5><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h5>
                                		
                                	</div>
                                </li>
                             @foreach ($posts as $post)
                            	<li>
                                  	<span class="meta-data">{{ date('M j, Y', strtotime($post->created_at)) }}</span>
                                    <h5><a href="#">{{ $post->title }}</a></h5>
                                </li>
                                @endforeach
                            	
                            </ul>
                       	</div>
                    
                    	
                    	<div class="widget sidebar-widget social-widget">
                        	<h3 class="widgettitle">Subscribe &amp; Connect</h3>
                            <ul class="social-icons-colored inversed social-icons">
                            	<li class="facebook"><a href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            	<li class="twitter"><a href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            	<li class="googleplus"><a href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            	<li class="pinterest"><a href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            	<li class="instagram"><a href="#" data-toggle="tooltip" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            	<li class="rss"><a href="#" data-toggle="tooltip" data-original-title="Feed"><i class="fa fa-rss"></i></a></li>
                            </ul>
                       	</div>
                    	<div class="widget sidebar-widget newletter-widget">
                        	<h3 class="widgettitle">Newsletter</h3>
                            <form>
                            	<input type="email" class="form-control" placeholder="Enter your email">
                                <input type="submit" class="btn btn-primary" value="Subscribe now">
                            </form>
                       	</div>
                    	<div class="widget sidebar-widget widget_recent_entries">
                        	<h3 class="widgettitle">Recent Posts</h3>
                            <ul>
                                  @foreach ($posts as $post)
                            	<li>
                                	<div class="widget-post-image">
                                    	 @if(!empty($post->image))
                                          <a href="{{ route('blog.single', $post->slug) }}">
                                                  <img src="{{asset('/images/' . $post->image)}}" />
                                            </a>
                                            @endif  
                                    </div>
                                	<div class="widget-post-content">
                                    	<span class="meta-data">{{ date('M j, Y', strtotime($post->created_at)) }}</span>
                                    	<h5><a href="#">{{ $post->title }}</a></h5>
                                	</div>
                                </li>
                                @endforeach
                            	
                            </ul>
                       	</div>
                    	<div class="widget sidebar-widget tagcloud-widget">
                        	<h3 class="widgettitle">Tags</h3>
                            <div class="tagcloud">
                              @foreach ($post->tags as $tag)
                            	<a href="#">{{ $tag->name }}</a>
                                @endforeach
                            	
                            </div>
                       	</div>
                    </aside>