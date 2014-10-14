@extends('master')
@section('content')
  <div class="row property">
    <div class="col-xs-12">
      {{ Form::open(array('url' => '/properties', 'method' => 'post', 'role' => 'form')) }}
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

        <div class='form-group'>
          {{ Form::label('title', 'Tiêu đề *:') }}
          {{ Form::text('title', null, array(
                'class' => 'form-control',
                'id' => 'title',
                'required' => true,
                'placeholder' => ''))}}
        </div>

        <div class='form-group'>
          {{ Form::label('description', 'Mô tả *:') }}
          {{ Form::textarea('description', null, array(
                'class' => 'form-control',
                'id' => 'description',
                'required' => true,
                'placeholder' => ''))}}
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('type', 'Loại BĐS *:') }}
              {{ Form::select('type', array(
                      null=>'Chọn', 'home' => 'Nhà', 'apartment' => 'Căn hộ',
                      'land'=> 'Đất', 'com' =>'Mặt bằng', 'office' => 'Văn Phòng',
                      'warehouse' => 'Kho xưởng', 'bus' => 'Cửa hàng/shop'
                    ), null, array(
                    'class' => 'form-control',
                    'id' => 'type',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
            <!-- <div class='form-group'>
              {{ Form::label('subtype', 'Kiểu BĐS:') }}
              {{ Form::select('subtype', array(), null, array(
                    'class' => 'form-control',
                    'id' => 'subtype',
                    'required' => true,
                    'placeholder' => ''))}}
            </div> -->
          </div>
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('type', 'Loại giao dịch *:') }}
              {{ Form::select('type', array(null=>'Chọn', 'sale' => 'Bán', 'rent' => 'Cho thuê'), null, array(
                    'class' => 'form-control',
                    'id' => 'type',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
            <div class='form-group'>
              {{ Form::label('area', 'Diện tích (m2) *:') }}
              {{ Form::text('area', null, array(
                    'class' => 'form-control',
                    'id' => 'area',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
          </div>
        </div>
        <button class='btn btn-primary' type="submit">Create</button>
        <a href='/projects/' class='btn btn-warning' type="submit">Back</a>
      {{ Form::close() }}
    </div>
  </div>
@stop