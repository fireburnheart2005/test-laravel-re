@extends('master')
@section('content')
  <div class="row home">
    <div class="col-xs-12">
      @foreach ($listings as $listing)
        <div class="row">
          <div class="col-xs-6">
            <div>
              @if (count($listing->images))
                <img class="pull-left" title="{{$listing->name}}" alt="{{$listing->name}}" src="/assets/{{$listing->images[0]->name}}" width=140 height=110>
              @else
                <img class="pull-left" title="{{$listing->name}}" alt="{{$listing->name}}" src="/assets/no-image.png" width=140 height=110>
              @endif
              <div class="listing-brief">
                <h3><a href="/{{$listing->slug}}">{{$listing->name}}</a></h3>
                <p>
                  <span class="text-muted"><span class="fa fa-map-marker"></span> {{$listing->}} | {{$listing->address_city}}</span>
                  <span class="pull-right text-success">{{$listing->price}} {{$listing->currency}} | {{$listing->area}} {{$listing->area_type}}</span>
                </p>
                <p>{{StringHelper::truncate(trim(preg_replace('/\s\s+/', ' ',$listing->description)), 100, 150)}} <span class="text-bold text-em">({{date('d/m/Y', strtotime($listing->updated_at))}})</span></p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop