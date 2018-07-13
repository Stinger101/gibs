@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row gCofMission">
      <div class="col-md-3">
        <h4>BACKGROUND</h4>
        <p>
          While Coffee was introduced in Kenya in 1893, the first crop of gibsons coffee was planted in the early 1960s by our father (Gibson) after Kenya attained self governance from the British Government. On a small farm of five acres, our father planted the first Arabica coffee tree variety SL34/SL28 in that virgin land and produced the best quality coffee the world has ever tasted.
          <a href="/about">Learn More</a>
        </p>
      </div>
      <div class="col-md-3">
        <h4>OUR VISION &amp; MISSION</h4>
        <p>
          - To add value to our coffee and coffees from small scale farmers in Kenya, market the coffee as a single origin brand to every part of the world.
          <br>
          - To sell our green beans directly to roasters by bringing the coffee as close as possible to the roasters through organized distribution.
          <a href="/about">Learn More</a>
        </p>
      </div>
      <div class="col-md-3">
        <h4>OUR STRENGTHS</h4>
        <p>
          - Through knowledge and experience in growing and processing coffee.
          <br>
          - Personal attention and proper husbandry given to our coffee by the small scale farmers who own one or two acres of coffee.
          <a href="/about">Learn More</a>
        </p>
      </div>
      <div class="col-md-3">
        <div class="gCofDirectTrade">
          <a href="/about">Learn More About Direct Trade</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row gCofOurBrands">
      <div class="col-md-12">
        <h4 class="text-center">OUR BRANDS</h4>
      </div>

      @if (count($brands))
      @foreach ($brands as $brand)
      @include('landing-brands')
      @endforeach
      @endif

</div>
@endsection
@section('footer')
@include('partials.footer')
@endsection
