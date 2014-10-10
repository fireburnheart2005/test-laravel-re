@extends('master')
@section('content')
  <div class="row property">
    <div class="col-xs-10">
      <h1>{{$property->name}}</h1>
      <p>
        <span class="fa fa-map-marker"></span>
        @if ($property->address_number)
          {{$property->address_number.', '}}
        @endif
        @if ($property->address_ward)
          {{$property->address_ward.', '}}
        @endif
        @if ($property->address_district)
          {{$property->address_district.', '}}
        @endif
        @if ($property->address_city)
          {{$property->address_city}}
        @endif
      </p>
      <div class="row">
        <div class="col-xs-6">
          <!-- Carousel -->
          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: -100px;">
            <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li> -->
            <a data-target="#carousel-example-generic" data-slide-to="0" href="#"><img width=50 height= 50 src="http://uploads.videonhadat.com.vn/Property/2974844/S/600x450/9102014102445538.jpg" alt="..."></a>
            <a data-target="#carousel-example-generic" data-slide-to="1" href="#"><img width=50 height= 50 src="http://uploads.videonhadat.com.vn/Property/2974844/S/600x450/9102014102445538.jpg" alt="..."></a>
            <a data-target="#carousel-example-generic" data-slide-to="2" href="#"><img width=50 height= 50 src="http://uploads.videonhadat.com.vn/Property/2974844/S/600x450/9102014102445538.jpg" alt="..."></a>
            <a data-target="#carousel-example-generic" data-slide-to="3" href="#"><img width=50 height= 50 src="http://uploads.videonhadat.com.vn/Property/2974844/S/600x450/9102014102440593.jpg" alt="..."></a>
          </ol>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <?php $i = 0; ?>
              @foreach (explode(',', $property->image_ids) as $image_id)
                @if ($image_id)
                  @if ($i == 0)
                    <div class="item active">
                  @else
                    <div class="item">
                  @endif
                    <img src="{{$_ENV['IMAGE_URL'].'415x310/'.$image_id.'.jpg'}}">
                    <div class="carousel-caption">
                    </div>
                  </div>
                @endif
                <?php $i++; ?>
              @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-2">
    </div>
  </div>
  <link type="text/css" rel="stylesheet" href="css/lightSlider.css">
  <script src="js/jquery.lightSlider.min.js"></script>
@stop