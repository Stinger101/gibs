@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container-fluid gCofContact">
<div class="col-md-8 col-md-offset-2">
          <div class="zcFormArea">
            <form method="POST" action="/contact" accept-charset="UTF-8">
              {{csrf_field()}}
              <h3 class="text-center text-uppercase">Send Us A Message</h3>
            	<div class="form-group">
                <label for="name">NAME</label>
                <input class="form-control" id="name" required name="name" type="text">
            	</div>
            	<div class="form-group">
                <label for="email">EMAIL</label>
                <input class="form-control" id="email" required name="email" type="email">
            	</div>
            	<div class="form-group">
                <label for="phone">PHONE</label>
                <input class="form-control" id="phone" name="phone" type="text">
            	</div>
            	<div class="form-group">
                <label for="subject">SUBJECT</label>
                <input class="form-control" id="subject" required name="subject" type="text">
            	</div>
              <div class="form-group">
                <label for="body">MESSAGE</label>
              <textarea class="form-control" id="body" rows="7" name="body" cols="50"></textarea>
              </div>

              <input type="submit" id="submit"  class="btn btn-primary pull-right" value="Send Message">
            </form>
          </div>
      </div>

    </div>


    <br>
@endsection
@section('footer')
@include('partials.footer')
@endsection
