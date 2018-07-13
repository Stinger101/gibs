@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Coffeehouse</div>

                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/coffee-house" >
                        {{ csrf_field() }}
                        <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="place">
       Place
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="place" name="place" type="text"/>
     </div>


     <div class="form-group">
  <input type="file" class="custom-file-input" id="image1" name="image1">
  <label class="custom-file-label" for="image1">Choose first image</label>
</div>
<div class="form-group">
<input type="file" class="custom-file-input" id="image2" name="image2">
<label class="custom-file-label" for="image2">Choose second image</label>
</div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " type="submit">
        Submit
       </button>
      </div>
     </div>
     @if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
    </form>
   </div>
  </div>
 </div>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@include('partials.footer')
@endsection
