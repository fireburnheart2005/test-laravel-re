@extends('master')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><span class="fa fa-map-marker"></span> {{$listing->city->name}} - {{$listing->district->name}}</p>
        <p class="pull-right">Giá: {{number_format($listing->price, 0, ',', '.')}}</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row listing">
      <div class="col-xs-10">
        <h1 class="text-info">{{$listing->title}}</h1>
        <div>
          @if ($listing->address)
            {{$listing->address.', '}}
          @endif
          @if ($listing->ward)
            {{$listing->ward->name.', '}}
          @endif
          @if ($listing->district)
            {{$listing->district->name.', '}}
          @endif
          @if ($listing->city)
            {{$listing->city->name}}
          @endif
        </div>
        <div class="row">
          <div class="col-xs-6">
            <!-- Carousel -->
            <!-- Indicators -->
            <ol class="carousel-indicators" style="bottom: -100px;">
              <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li> -->
              <a data-target="#carousel-example-generic" data-slide-to="0" href="#"><img width=50 height= 50 src="http://static.lamudi.com.ph/p/no-name-3440-26637-1-product.jpg" alt="..."></a>
              <a data-target="#carousel-example-generic" data-slide-to="1" href="#"><img width=50 height= 50 src="http://static.lamudi.com.ph/p/no-name-3440-26637-1-product.jpg" alt="..."></a>
              <a data-target="#carousel-example-generic" data-slide-to="2" href="#"><img width=50 height= 50 src="http://static.lamudi.com.ph/p/no-name-3440-26637-1-product.jpg" alt="..."></a>
              <a data-target="#carousel-example-generic" data-slide-to="3" href="#"><img width=50 height= 50 src="http://static.lamudi.com.ph/p/no-name-3440-26637-1-product.jpg" alt="..."></a>
            </ol>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php $i = 0; ?>
                @foreach (explode(',', $listing->image_ids) as $image_id)
                  @if ($image_id)
                    @if ($i == 0)
                      <div class="item active">
                    @else
                      <div class="item">
                    @endif
                      <img src="http://static.lamudi.com.ph/p/no-name-3440-26637-1-product.jpg">
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
  </div>
  <link type="text/css" rel="stylesheet" href="css/lightSlider.css">
  <script src="js/jquery.lightSlider.min.js"></script>
@stop