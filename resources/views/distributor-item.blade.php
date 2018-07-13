<div class="row">
      <div class="col-md-6">
        <div class="gCofAddress">
          <h4 class="text-center">{{$distributor->country}}</h4>
          <p class="text-center">
            {{$distributor->name}} <br>
            {{$distributor->place}}  <br>
            Contact person : {{$distributor->contactperson}} <br>
            {{$distributor->address}} <br>
            Email: <a href="mailto:{{$distributor->email}}">{{$distributor->email}}</a>
          </p>
          <!-- <img src="/img/seahope-logo.jpg" alt="" width="200px" /> -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="gCofMap">

          <iframe src="{{$distributor->mapurl}}" width="80%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
      </div>
    </div>
