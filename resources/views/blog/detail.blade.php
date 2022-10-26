@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/article.scss.css')}}" />
<link href="{{asset('frontend/css/article.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="container">
	<div class="row">
		<div class="col-12 a-left">
			<ul class="breadcrumb" >
				<li class="home">
				<a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
				<span class="mr_lr">&nbsp;/&nbsp;</span>
				</li>
				<li >
				<a  href="{{route('allListBlog')}}"><span >Tin tức</span></a>	
				<span class="mr_lr">&nbsp;/&nbsp;</span>
				</li>
				<li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
			</ul>
		</div>
	</div>
	</div>
</section>
<div class="container article-wraper">
	<article class="article-main" itemscope itemtype="http://schema.org/Article">
	<div class="nd-article margin-bottom-10">
		<h1 class="title-head">{{languageName($blog_detail->title)}}</h1>
		<div class="article_img">
			<img itemprop="image" src="{{$blog_detail->image}}" class="img-responsive" alt="{{languageName($blog_detail->title)}}" title="{{languageName($blog_detail->title)}}">
		</div>
		<div class="article-details nd-toc-content">
			{!!languageName($blog_detail->content)!!}
		</div>
	</div>
	<div class="tag-share">
		<span class="inline">
			<svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
				<path d="M15.3927 7.23665C14.2334 7.23665 13.1998 6.68182 12.5385 5.82448L7.00168 8.93028C7.13148 9.30431 7.2027 9.70774 7.2027 10.1239C7.2027 10.544 7.13148 10.9434 6.99765 11.3215L12.5304 14.423C13.1875 13.5616 14.2253 13.0025 15.3887 13.0025C17.3725 13.0025 18.9919 14.6246 18.9919 16.6207C18.9919 18.6171 17.3766 20.2393 15.3884 20.2393C13.4006 20.2393 11.7852 18.6171 11.7852 16.621C11.7852 16.2008 11.8564 15.7974 11.9903 15.4234L6.46179 12.3216C5.80473 13.1873 4.76686 13.7421 3.6035 13.7421C1.61968 13.7421 0 12.12 0 10.1239C0 8.12772 1.61968 6.5056 3.60753 6.5056C4.77089 6.5056 5.80876 7.06448 6.47012 7.93018L12.0029 4.82465C11.8691 4.44631 11.7935 4.03882 11.7935 3.61838C11.7935 1.62628 13.4089 0.000110626 15.3968 0.000110626C17.3846 0.000110626 19 1.62223 19 3.61838C19.0003 5.61453 17.3806 7.23665 15.3927 7.23665ZM15.3927 19.1005C16.7571 19.1005 17.8662 17.9867 17.8662 16.6167C17.8662 15.2466 16.7571 14.1329 15.3927 14.1329C14.0284 14.1329 12.9193 15.2466 12.9193 16.6167C12.9193 17.9867 14.0327 19.1005 15.3927 19.1005ZM3.60753 7.64009C2.24315 7.64009 1.13407 8.75379 1.13407 10.1239C1.13407 11.4939 2.24315 12.6076 3.60753 12.6076C4.97191 12.6076 6.08099 11.4939 6.08099 10.1239C6.08099 8.75379 4.96761 7.64009 3.60753 7.64009ZM15.3927 1.13865C14.0284 1.13865 12.9193 2.25235 12.9193 3.62243C12.9193 4.9925 14.0284 6.10621 15.3927 6.10621C16.7571 6.10621 17.8662 4.9925 17.8662 3.62243C17.8662 2.25235 16.7571 1.13865 15.3927 1.13865Z" fill="#494949"/>
			</svg>
			Chia sẻ bài viết:
		</span>
		<div class="share_social">
			<div class="addthis_inline_share_toolbox share_add tag">
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4"></script>
			</div>
		</div>
	</div>
	</article>
</div>
<div class="article-lq section_blogs">
	<div class="container">
	<div class="aside-title">Bài viết khác</div>
	<div class="blog-index-slick">
		@foreach ($blogs as $blog)
		@if ($blog->id != $blog_detail->id)
		<div class="item">
			<div class="blog_full blog_index">
				<div class="blog-inner">
						<div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
						<a class="frame" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}"  class="img-responsive lazy" alt="{{languageName($blog->title)}}">
						<div class="box-date">
							<span class="date-day">{{date('d', strtotime($blog->created_at))}}</span>
							<span class="date-month">Tháng {{date('m', strtotime($blog->created_at))}}</span>
						</div>
						</a>
						</div>
						<div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
						<h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}"><span>{{languageName($blog->title)}}</span></a></h3>           
						<div class="blog-description">
						<p class="desc-3line">
							{{languageName($blog->description)}}
						</p>
						</div>
						</div>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
	</div>
</div>
@endsection