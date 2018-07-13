<div class="row">
      <div class="col-md-12 gCofShopHeader">
        <h4 class="text-center text-uppercase">Welcome To Our Coffee Shop</h4>
        <h5 class="text-center">Local Shop - Buying From Kenya</h5>
        <h6 class="text-center"><a class="btn btn-default" href="/choose-shop">Change where you're buying from</a></h6>
        <br>
      </div>
    </div>
  </div>

  <div class="container-fluid gCofShopMainSection">
    <div class="row">
      <div class="col-md-3 gCofShopMenu">
        <ul class="list-unstyled">
                    <li  class="active" ><a href="http://www.gibscoffee.com/shop"> All Products <i class="fa fa-angle-right pull-right"></i></a></li>

                    @if (count($sh['brands']))
                    @foreach ($sh['brands'] as $brand)
                    <li ><a href="http://www.gibscoffee.com/shop/category/13?count=30">
                    {{$brand->name}}
              <i class="fa fa-angle-right pull-right"></i>
            </a>
          </li>
                    @endforeach
                    @endif


                  </ul>

        <br><br><br>
      </div>
