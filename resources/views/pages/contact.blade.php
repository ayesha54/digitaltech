@extends('main')

@section('title', '| Contact')

@section('content')
     <!--    <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div> -->
         <div class="main" role="main">
      <div id="content" class="content full">
            <div class="container"> 
                
                <div class="row">
                  <!-- Posts List -->
                   <div class="col-md-2"></div>
                    <div class="col-md-8">
         <article class="page">
                            <div class="post-header">
                                <h2>Contact</h2>
                            </div>
                            <div class="post-entry">
                                <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="{{ url('contact') }}">
                                     {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                            </div>
                                            <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                                        </div>
                                    </div>
                                </form>
                                <div class="clearfix"></div>
                                <div id="message"></div>
                            </div>
                           
                        </article>
                    </div>

 <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>

@endsection