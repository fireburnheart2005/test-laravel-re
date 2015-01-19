@extends('master')
@section('content')
	<div class="breadcrum">
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Account</li>
		</ol>
	</div>
	<div class="row" id="account-page">
		<div class="col-xs-3">
			<div class="nav-wrapper">
				<h1>Tài Khoản</h1>
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a href="/">Tổng Quan</a></li>
					<li role="presentation"><a href="/account/"><span class="fa fa-user"></span>Thông Tin Cá Nhân</a></li>
					<li role="presentation"><a href="/"><span class="fa fa-edit"></span>BĐS Đã Đăng</a></li>
					<li role="presentation"><a href="/"><span class="fa fa-star-o"></span>BĐS Yêu Thích</a></li>
					<li role="presentation"><a href="/"><span class="fa fa-bell-o"></span>Email</a></li>
				</ul>
			</div>
		</div>
		<div class="col-xs-9 dashboard">
			<div class="row">
				<div class="col-xs-6">
					<h2>Tổng Quan</h2>
					<p>Edit your account data and password settings.</p>
					<a href="/">More</a>
				</div>
				<div class="col-xs-6">
					<h2>Thông Tin Cá Nhân</h2>
					<p>Edit your account data and password settings.</p>
					<a href="/">More</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<h2>BĐS Đã Đăng</h2>
					<p>Edit your account data and password settings.</p>
					<a href="/">More</a>
				</div>
				<div class="col-xs-6">
					<h2>Email</h2>
					<p>Edit your account data and password settings.</p>
					<a href="/">More</a>
				</div>
			</div>
		</div>
	</div>
@stop