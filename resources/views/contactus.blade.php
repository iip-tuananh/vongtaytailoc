@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/bean-pages.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<span class="crumb-border"></span>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 a-left">
			<ul class="breadcrumb" itemtype="https://schema.org/BreadcrumbList">
				<li class="home">
				<a itemprop="item" href="{{route('home')}}" title="Trang chủ">
					<span itemprop="name">Trang chủ</span>
					<meta itemprop="position" content="1" />
				</a>
				<span class="mr_lr">&nbsp;&raquo;&nbsp;</span>
				</li>
				<li itemprop="itemListElement" itemtype="https://schema.org/ListItem">
				<strong>
					<span itemprop="name">Liên hệ</span>
					<meta itemprop="position" content="2" />
				</strong>
				</li>
			</ul>
		</div>
	</div>
	</div>
</section>
<section class="margin-bottom-60 page_contact">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="google-map margin-bottom-20">
				<div class="maps_iframe">
					{!!$setting->iframe_map!!}
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="t_contact">
				<h1 class="title-head">Liên hệ với chúng tôi</h1>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-padding">
				<ul class="contact-info">
					<li><b>{{$setting->company}}</b></li>
					<li><b>Địa chỉ</b>: {{$setting->address1}}</li>
					<li><b>Điện thoại</b>: <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a></li>
					<li><b>Email</b>: <a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></li>
					<li><b>Website</b>: <a href="{{route('home')}}" title="{{route('home')}}">{{route('home')}}</a></li>
				</ul>
				<div class="social-fot margin-bottom-15">
					<h4>Kết nối với chúng tôi</h4>
					<ul class="footer-info">
						<li>
						<a href="{{$setting->facebook}}" target="_blank" class="mc-facebook btn-transition dp-flex" title="FACEBOOK">
						<img src="{{url('frontend/images/social_facebook_icon.svg')}}" alt="facebook">
						</a>
						</li>
						<li>
						<a href="#" target="_blank" class="mc-instagram btn-transition dp-flex" title="INSTAGRAM">
						<img src="{{url('frontend/images/social_instagram_icon.svg')}}" alt="instagram">
						</a>
						</li>
						<li>
						<a href="https://zalo.me/{{$setting->phone1}}" target="_blank" class="mc-zalo btn-transition dp-flex" title="ZALO">
						<img src="{{url('frontend/images/social_zalo_icon.svg')}}" alt="zalo">
						</a>
						</li>
						<li>
						<a href="https://www.youtube.com/" target="_blank" class="mc-youtube btn-transition dp-flex" title="YOUTUBE">
						<img src="{{url('frontend/images/social_youtube_icon.svg')}}" alt="youtube">
						</a>
						</li>
					</ul>
				</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding">
				<form accept-charset="utf-8" action="{{route('postcontact')}}" id="contact" method="post">
					@csrf
					<h3>Gửi thông tin</h3>
					<div class="margin-bottom-10">
						<span><i>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</i></span>
					</div>
					<div class="form-signup clearfix">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-left">
							<fieldset class="form-group">
							<img src="{{url('frontend/images/user.svg')}}" alt="icon">
							<input type="text" placeholder="Họ và tên" class="input-control" required value="" name="name">
							</fieldset>
							<fieldset class="form-group">
							<img src="{{url('frontend/images/envelope.svg')}}" alt="icon">
							<input type="email" placeholder="Email của bạn" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email2" class="input-control" value="" name="email">
							</fieldset>
							<fieldset class="form-group">
							<img src="{{url('frontend/images/telephone.svg')}}" alt="icon">
							<input type="tel" placeholder="Số điện thoại" class="input-control" required onkeypress="preventNonNumericalInput(event)" name="phone">
							</fieldset>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-right">
							<fieldset class="form-group">
							<textarea name="mess" placeholder="Lời nhắn của bạn..." required class="input-control" cols="5" rows="6"></textarea>
							</fieldset>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding form-submit">
							<button type="submit" class="btn btn-primary">Gửi liên hệ</button> 
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
@endsection