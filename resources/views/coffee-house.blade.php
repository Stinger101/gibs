@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container-fluid">
<div class="row">
      <div class="col-md-12 gCofCoffeeHouseSplash">
        <h3 class="text-center text-uppercase">Gibsons Coffee House</h3>
        <h4 class="text-center">Buy Online &amp; Pick up at one of our branches below or We Can Deliver To You For Free!</h4>
      </div>
</div>

    <div class="row">
      <div class="col-md-12 gCofHouseBranches">
        <p>
          <h2  class="text-center">GIBSONS COFFEE HOUSE</h2>
          Gibsons Coffee House is the ultimate venue, located in Nairobi's Central Business District, adjacent to the Nation Media House, the largest independent media house in East and Central Africa.
          <br>
          Our uncompromised quality of food and high level of service, attracts customers and ensure they leave with a memorable experience.
          <br>
        </p>
      </div>
    </div>


    <div class="row gCofHouseBranchesList">
      @if (count($coffeehouses))
      @foreach ($coffeehouses as $coffeehouse)
      @include('coffee-house-item')
      @endforeach
      @endif
    </div>

  </div>


@endsection
@section('footer')
@include('partials.footer')
@endsection
