@extends('layouts.master')
@section('navig')
@include('partials.nav')
@endsection
@section('content')
<div class="container-fluid">
<div class="row gCofAboutSplash">

      <div class="col-md-4">
        <h4 class="text-center">About Us Video ~ Part 1</h4>
        <div class="gCofVideoWrap">
          <iframe width="80%" height="200" src="http://www.youtube.com/embed/GM2HsxZYWEE?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="text-center">About Us Video ~ Part 2</h4>
        <div class="gCofVideoWrap">
          <iframe width="80%" height="200" src="http://www.youtube.com/embed/CMXUCGz1feU?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="text-center">About Us Video ~ Part 3</h4>
        <div class="gCofVideoWrap">
          <iframe width="80%" height="200" src="http://www.youtube.com/embed/WCotdNx7Poo?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <br>
    </div>
    <div class="row gCofAboutMidsection">
      <div class="col-md-12">
        <div class="gCofAboutDirectTrade">
          <div class="row">
            <div class="col-md-1"><img src="/img/direct-trade-tick.png" class="gCofDTImg" width="100" /></div>
            <div class="col-md-11"><h3 class="text-center">GIBSONS COFFEE IS A DIRECT TRADE COFFEE OUTFIT</h3></div>
            <div class="col-md-12">
              <p>
                RELATIONSHIPS <br>
                We strive for mutually beneficial and respectful
                relationships with individual producers or cooperatives we partner with.
              </p>
              <p>
                SOURCING <br>
                We buy straight from the growers, cutting out both the traditional middleman buyers and sellers
              </p>
              <p>
                QUALITY ASSUARANCE <br>
                We examine farms to ensure that "healthy environmental practices" are followed.
                Inspections address such issues as use of herbicides and pesticides, disposal of wastewater, among other things.
              </p>
              <p>
                LABOUR STANDARDS <br>
                Gibsons Coffee pays growers fairly by ensuring we are at or above market rates.
              </p>
              <p>
                COFFEE QUALITY <br>
                Gibsons Coffee has Exceptional coffee quality as can be attested by millions of our customers
                who have patronized us for many years.
              </p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-6 gCofDelight">
        <img src="/img/about-us-splash.jpg" width="" class="gCofDelightImg" />
      </div>
      <div class="col-md-6 gCofAboutBackground">
        <h4 class="text-center">Background</h4>
        <p>While Coffee was introduced in Kenya in 1893, the first crop of gibsons coffee was planted in the early 1960s by our father (Gibson) after Kenya attained self governance from the British Government.</p>
        <p>On a small farm of five acres, our father planted the first Arabica coffee tree variety SL34/SL28 in that virgin land  and produced the best quality coffee the world has ever tasted. Now 50 years later, we produce the same quality coffee in hundreds of acres. Our firms are situated  on the slopes of Mt. Kenya just a few metres  from the equator line.</p>
        <p>The rich volcanic soil coupled with the excellent climatic conditions gives our coffee the high needed nutrients. Gibson’s coffee is handpicked, sorted  and processed through  wet processing and sun dried. This well monitored and controlled process ensures  that the resulting cup is extra ordinarily rich in acidity and flavor, deep in aroma, full bodied and leaves one’s mouth full of flora notes. After processing our coffee at the farm level,  the parchment beans are sent to a milling  factory where the husk is removed  and the resulting green bean is mechanically graded into 7 grades according to size, shape and weight.</p> <p>Gibsons coffee limited is licensed by the Kenya Government to grow and market our coffee locally and outside Kenya. We roast and pack our coffee under our brand (Gibsons Coffee) and distribute locally through major supermarkets, mini supermarkets, shops and kiosks. We also export our branded coffee to the outside world through chosen distributors  in different countries.</p>
        <p>Lastly, we also operate coffee houses in our capital city which complete the whole coffee value chain.</p>
        <p>We are calling upon anyone interested in becoming our distributor in their respective countries to get in touch with us for more discussions to this possibility.</p>
      </div>
    </div>

  </div>


@endsection
@section('footer')
@include('partials.footer')
@endsection
