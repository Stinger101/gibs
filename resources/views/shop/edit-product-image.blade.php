@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>

                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('product',['id'=>$id]) }}" >
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">

     <div class="form-group">
  <input type="file" class="custom-file-input" id="image" name="image" >
  <label class="custom-file-label" for="image">Choose file</label>
</div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
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
