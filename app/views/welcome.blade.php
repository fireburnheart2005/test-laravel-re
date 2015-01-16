@extends('master')
@section('content')
  <div class="row home">
    <div class="col-xs-12">
      @foreach ($listings as $listing)
        <div class="row listing-wrapper">
          <div class="col-xs-8">
            <div>
              @if (count($listing->images))
                <img class="pull-left" title="{{$listing->name}}" alt="{{$listing->name}}" src="/assets/{{$listing->images[0]->name}}" width=140 height=110>
              @else
                <img class="pull-left" title="{{$listing->name}}" alt="{{$listing->name}}" src="/assets/no-image.png" width=140 height=110>
              @endif
              <div class="listing-brief">
                <h3><a href="/{{$listing->slug}}" class="text-info">{{$listing->title}}</a></h3>
                <p>
                  <span class="text-muted"><span class="fa fa-map-marker"></span> {{$listing->city->name}} | {{$listing->district->name}}</span>
                  <span class="pull-right text-info">Giá: {{$listing->price}} | {{$listing->square}} m<sup>2</sup> {{$listing->area_type}}</span>
                </p>
                <p>{{StringHelper::truncate(trim(preg_replace('/\s\s+/', ' ',$listing->description)), 100, 150)}}</p>
                <p class="text-muted bottom"><span class="fa fa-calendar"></span> ({{date('d/m/Y', strtotime($listing->updated_at))}})</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop