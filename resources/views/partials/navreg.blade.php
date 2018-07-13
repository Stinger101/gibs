<div class="gCofQucikLinks">
    <ul class="visible-lg">
      <li><a href="" class="gCofFoodTop"></a></li>
      <li><a href="" class="gCofCakesTop"></a></li>
      <li><a href="" class="gCofCoffeeTop"></a></li>
      <li><a href="" class="gCofDeliveryTop"></a></li>
    </ul>

    <ul class="hidden-lg">
      <li>
        <a href="" class="gCofFoodTopMd">
          <img src="/img/food-banner-md.png" alt="" height="" />
          <span>FOOD</span>
        </a>
      </li>
      <li class="gCofBorderLeftOrange">
        <a href="" class="gCofCakesTopMd">
          <img src="/img/cake-banner-md.png" alt="" height="" />
          <span>CAKES</span>
        </a>
      </li>
      <li class="gCofBorderLeftOrange">
        <a href="" class="gCofCoffeeTopMd">
          <img src="/img/coffee-banner-md.png" alt="" height="" />
          <span>COFFEE</span>
        </a>
      </li>
      <li class="gCofBorderLeftOrange">
        <a href="" class="gCofDeliveryTopMd">
          <img src="/img/delivery-banner-md.png" alt="" height="" />
          <span>DOORSTEP DELIVERY</span>
        </a>
      </li>

    </ul>


</div>

<nav class="navbar navbar-default hidden-lg">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="/img/logo.png" alt="" width="150" class="" />
  </a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li  class="active" ><a href="/">Home</a></li>
<li ><a href="/about">About Us</a></li>
<li ><a href="/shop">Shop</a></li>
<li ><a href="/coffee-house">Coffee House</a></li>
<li ><a href="/distributors">Distributors</a></li>
<li ><a href="/articles">Blog</a></li>
<li ><a href="/contact">Contact</a></li>
<li ><a class="hidden-lg" href="/cart">Cart</a></li>
<li >


<a class="hidden-lg" href="/login">Login</a>


</li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


<div class="container-fluid gCofHideInSmaller">
<div class="row gCofNavigation">
<div class="col-md-4">
  <img src="/img/logo.png" alt="" class="gCofLogo" />
</div>
<div class="col-md-4">
  <img src="/img/100-arabica-coffee.png" class="gCofTag" alt="" />
</div>
<div class="col-md-4">
  <ul class="list-inline pull-right">
    <li class="gCofBrownBtn btn">
      <a href="/cart" class=""> <i class="fa fa-shopping-basket"></i> Cart ~ 2</a></li>

      @if (Route::has('login'))
          <!-- <div class="top-right links"> -->
              @if (Auth::check())
                  <a href="{{ url('/home') }}">Home</a>
              @else
                <li class="gCofBrownBtn btn">
                  <span>
                  <a href="{{ url('/login') }}"><i class="fa fa-user"></i>Login</a>
                <!-- </li>
                  <li class="gCofBrownBtn btn"> -->
                  <!-- <a href="{{ url('/register') }}"></a></span> -->
                </li>
              @endif
          <!-- </div> -->
      @endif
    <!-- <li class="gCofBrownBtn btn">

                  <a href="/login" class=""><i class="fa fa-user"></i> Login / Register</a>



    </li> -->
  </ul>
</div>
</div>
</div>

<nav class="navbar navbar-default gCofHideInSmaller gCof100Width">
<div class="container-fluid">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
    <li  class="active" ><a href="/">Home</a></li>
<li ><a href="/about">About Us</a></li>
<li ><a href="/shop">Shop</a></li>
<li ><a href="/coffee-house">Coffee House</a></li>
<li ><a href="/distributors">Distributors</a></li>
<li ><a href="/articles">Blog</a></li>
<li ><a href="/contact">Contact</a></li>
<li ><a class="hidden-lg" href="/cart">Cart</a></li>
<li >


<a class="hidden-lg" href="/login">Login</a>


</li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
