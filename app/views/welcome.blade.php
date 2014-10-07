@extends('layouts.site')
@section('content')
  <div class="row home">
    <div class="col-xs-12">
      @foreach ($properties as $property)
        <div class="row">
          <div class="col-xs-6">
            <div>
              <img class="pull-left" title="{{$property->name}}" alt={{$property->name}} src={{ $_ENV['IMAGE_URL'].$property->id.'/1_140x110.jpg' }} width=140 height=110>
              <div class="property-brief">
                <h3><a href="/{{$property->slug}}">{{$property->name}}</a></h3>
                <p>
                  <span class="text-muted"><span class="fa fa-map-marker"></span> {{$property->address_district}} | {{$property->address_city}}</span>
                  <span class="pull-right text-success">{{$property->price}} {{$property->currency}} | {{$property->area}} {{$property->area_type}}</span>
                </p>
                <p>{{StringHelper::truncate(trim(preg_replace('/\s\s+/', ' ',$property->description)), 100, 150)}} <span class="text-bold text-em">({{date('d/m/Y', strtotime($property->updated_at))}})</span></p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop