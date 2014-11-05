@extends('master')
@section('content')
  <div class="row property">
    <div class="col-xs-12">
      {{ Form::open(array('url' => '/properties', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
        @if (count($errors))
          <div class='alert alert-warning'>
            @foreach($errors->all('<p>:message</p>') as $message)
              {{ $message }}
            @endforeach
          </div>
        @endif
        @if (Session::get('message'))
          <div class='alert alert-success'>
            {{ Session::get('message') }}
          </div>
        @endif
        @include('properties._first_panel')
        @include('properties._second_panel')
        @include('properties._third_panel')
        @include('properties._last_panel')
        <button class='btn btn-primary' type="submit">Create</button>
        <a href='/projects/' class='btn btn-warning' type="submit">Back</a>
      {{ Form::close() }}
    </div>
  </div>
@stop