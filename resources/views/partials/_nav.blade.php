
<!-- Site Topbar -->
    <div class="topbar">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-1">
                  <nav class="topmenu ddmenu">
                      <ul role="menu" class="sf-menu">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><h2 style="color: #F26367;">Digital Tech</h2></li>
                          <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                             <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                              <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>

                                <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                  <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-11">
                  <div class="search-header">
                    <form>
                      <input type="text" placeholder="type and enter">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                  <ul class="pull-right">
                      @if (Auth::check())
        
        <li class="dropdown" style="padding: 10px;">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" style ="color:#fff; "role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('tags.index') }}">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li>
        
        @else
     
           <li class="{{ route('login') }} ? "active" : "" }}" style="padding: 10px;" ><a href="/auth/login" style="color: #fff;">Login</a></li>

        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
  
  <!-- Site Header -->
     