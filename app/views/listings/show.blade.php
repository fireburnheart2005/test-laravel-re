@extends('master')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="pull-left"><span class="fa fa-map-marker"></span> {{$listing->city->name}} - {{$listing->district->name}}</p>
        <p class="pull-right">Giá: {{number_format($listing->price, 0, ',', '.')}}</p>
      </div>
    </div>
  </div>
  <div class="container listing">
    <h1 class="text-info">{{$listing->title}}</h1>
    <h3>
        {{$listing->city->name.', '.$listing->district->name.', '.$listing->ward->name}}
        {{{ $listing->address ? ', '.$listing->address : '' }}}
    </h3>
    <div class="row">
      <div class="col-xs-6">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: -100px;">
            @for ($i = 0; $i < count($images = $listing->images); $i++)
              <a data-target="#carousel-example-generic" data-slide-to="{{$i}}" href="#"><img width="120" height="90" src="/assets/{{$images[$i]->name}}" alt="..."></a>
            @endfor
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            @if (count($images = $listing->images))
              @for ($i = 0; $i < count($images); $i++)
                <div class="item {{{ ($i == 0) ? 'active' : '' }}}">
                  <img src="/assets/{{$images[$i]->name}}">
                  <div class="carousel-caption">
                  </div>
                </div>
              @endfor
            @endif
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
  <link type="text/css" rel="stylesheet" href="css/lightSlider.css">
  <script src="js/jquery.lightSlider.min.js"></script>
@stop