@extends('master')
@section('content')
    <div class="row">
        <ol class="breadcrumb">
          <li><a href="/">Trang chủ</a></li>
          <li class="active">Đăng ký tài khoản</li>
        </ol>
        <div class="col-xs-8 form-wrapper">
            {{ Form::open(array('url' => '/users', 'method' => 'post', 'role' => 'form')) }}
                @if (count($errors))
                  <div class='alert alert-warning'>
                    @foreach($errors->all('<p>:message</p>') as $message)
                      {{ $message }}
                    @endforeach
                  </div>
                @endif
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('first_name', 'Họ *') }}
                            {{ Form::text('first_name', null, array(
                                  'class' => 'form-control',
                                  'id' => 'first_name',
                                  'required' => true,
                                  'placeholder' => ''))}}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('last_name', 'Tên *') }}
                            {{ Form::text('last_name', null, array(
                                  'class' => 'form-control',
                                  'id' => 'last_name',
                                  'required' => true,
                                  'placeholder' => ''))}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('email', 'Email *') }}
                            {{ Form::text('email', null, array(
                                  'class' => 'form-control',
                                  'id' => 'email',
                                  'required' => true,
                                  'placeholder' => ''))}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('mobile', 'Di động') }}
                            {{ Form::text('mobile', null, array(
                                  'class' => 'form-control',
                                  'id' => 'mobile',
                                  'placeholder' => ''))}}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('telephone', 'Điện thoại') }}
                            {{ Form::text('telephone', null, array(
                                  'class' => 'form-control',
                                  'id' => 'telephone',
                                  'placeholder' => ''))}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="text-muted text-center">Vui lòng điền ít nhất một số điện thoại liên hệ</p>
                    </div>
                </div>
                <div class="row-gap-small"></div>
                <div class="row-gap-small"></div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {{ Form::label('password', 'Mật khẩu *') }}
                            {{ Form::text('password', null, array(
                                  'class' => 'form-control',
                                  'id' => 'password',
                                  'required' => true,
                                  'placeholder' => '')) }}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <div class="form-group">
                                {{ Form::label('password-confirmation', 'Mật khẩu *') }}
                                {{ Form::text('password-confirmation', null, array(
                                      'class' => 'form-control',
                                      'id' => 'password-confirmation',
                                      'required' => true,
                                      'placeholder' => ''))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="text-muted">* Trường bắt buộc</p>
                    </div>
                </div>
                <div class="row-gap-small"></div>
                <button class="btn btn-primary button">Tạo tài khoản</button>
            {{ Form::close() }}
        </div>
        <div class="col-xs-2"></div>
    </div>
    <style type="text/css">
        .form-wrapper {
            background-color: #f0f1f3;
            padding: 20px 20px;
        }
        label {
            font-weight: 700;
        }
    </style>
@stop