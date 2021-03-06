@extends('master')
@section('content')
  <div class="row listing">
    <div class="col-xs-12">
      {{ Form::open(array('url' => '/images', 'method' => 'post', 'role' => 'form', 'class' => 'hidden')) }}
        <input type='file' name='image'>
      {{ Form::close() }}
      {{ Form::open(array('url' => '/listings', 'method' => 'post', 'role' => 'form')) }}
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
        @include('listings._tab1', ['cities' => $cities])
        @include('listings._tab2')
        @include('listings._tab3')
        @include('listings._tab4')
        <button class='btn btn-primary' type="submit">Create</button>
        <a href='/projects/' class='btn btn-warning' type="submit">Back</a>
      {{ Form::close() }}
    </div>
  </div>
@stop