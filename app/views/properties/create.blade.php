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
            <div class='form-group'>
              {{ Form::label('price', 'Giá *:') }}
              <div class="row">
                <div class="col-xs-5">
                  {{ Form::text('price', null, array(
                        'class' => 'form-control',
                        'id' => 'price',
                        'required' => true,
                        'placeholder' => ''))}}
                </div>
                <div class="col-xs-3">
                  {{ Form::select('price_type',
                        array(
                          'VND' => 'VND',
                          'SJC' => 'SJC',
                          'USD' => 'USD'
                        ), null, array(
                        'class' => 'form-control',
                        'id' => 'price_type',
                        'required' => true,
                        'placeholder' => ''))}}
                </div>
                <div class="col-xs-4">
                  {{ Form::select('price_type',
                    array(
                      'total' => 'Tổng diện tích',
                      'per square metter' => 'm2',
                      'per month' => 'Tháng'
                    ), null, array(
                    'class' => 'form-control',
                    'id' => 'price_type',
                    'required' => true,
                    'placeholder' => ''))}}
                </div>
              </div>
            </div>
            <div class='form-group'>
              {{ Form::label('bedrooms', 'Phòng ngủ:') }}
              {{ Form::text('bedrooms', null, array(
                    'class' => 'form-control',
                    'id' => 'bedrooms',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
            <div class='form-group'>
              {{ Form::label('area', 'Phòng tắm:') }}
              {{ Form::text('bathrooms', null, array(
                    'class' => 'form-control',
                    'id' => 'bathrooms',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
          </div>
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('transaction_type', 'Loại giao dịch *:') }}
              {{ Form::select('transaction_type', array(null=>'Chọn', 'sale' => 'Bán', 'rent' => 'Cho thuê'), null, array(
                    'class' => 'form-control',
                    'id' => 'transaction_type',
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
            <div class='form-group'>
              {{ Form::label('legal_document', 'Pháp lý:') }}
              {{ Form::select('legal_document', array(
                null=>'Chọn',
                '1' => 'Sổ đỏ/Sổ hồng',
                '2' => 'Giấy tờ hợp lệ',
                '3' => 'GP Xây dựng',
                '4' => 'GP Kinh doanh'), null, array(
                  'class' => 'form-control',
                  'id' => 'legal_document',
                  'required' => true,
                  'placeholder' => ''))}}
            </div>
            <div class='form-group'>
              {{ Form::label('total_floor', 'Số tầng:') }}
              {{ Form::text('total_floor', null, array(
                    'class' => 'form-control',
                    'id' => 'total_floor',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('contact_name', 'Tên liên hệ *:') }}
              {{ Form::text('contact_name', null, array(
                    'class' => 'form-control',
                    'id' => 'contact_name',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
            <div class='form-group'>
              {{ Form::label('contact_tel', 'Điện thoại bàn:') }}
              {{ Form::text('contact_tel', null, array(
                    'class' => 'form-control',
                    'id' => 'contact_tel',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
          </div>
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('contact_mobile', 'Di động *:') }}
              {{ Form::text('contact_mobile', null, array(
                    'class' => 'form-control',
                    'id' => 'contact_mobile',
                    'required' => true,
                    'placeholder' => ''))}}
            </div>
            <div class='form-group'>
              {{ Form::label('contact_email', 'Email:') }}
              {{ Form::text('contact_email', null, array(
                    'class' => 'form-control',
                    'id' => 'contact_email',
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