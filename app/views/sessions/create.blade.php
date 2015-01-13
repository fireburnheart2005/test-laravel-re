@extends('master')
@section('content')
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Login</li>
      </ol>
        <div class="col-xs-8 form-wrapper">
            <div class="row">
                <div class="col-xs-6">
                    {{ Form::open(array('url' => '/sessions', 'method' => 'post', 'role' => 'form')) }}
                        <div class="form-group">
                            {{ Form::label('email', 'Email *') }}
                            {{ Form::text('email', null, array(
                                  'class' => 'form-control',
                                  'id' => 'email',
                                  'required' => true,
                                  'placeholder' => ''))}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'Password *') }}
                            {{ Form::password('password', array(
                                  'class' => 'form-control',
                                  'id' => 'password',
                                  'required' => true,
                                  'placeholder' => ''))}}
                        </div>
                        <button class="btn btn-primary button">Login</button>
                    {{ Form::close() }}
                </div>
                <div class="col-xs-6" style="margin: auto auto">
                    <h2>Chưa có tài khoản?</h2>
                    <a href='/signup' class="btn button">Đăng ký tài khoản</a>
                </div>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <style type="text/css">
      .form-wrapper {
        background: #f0f1f3;
        padding: 20px 20px;
      }
    </style>
@stop
