@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/blogs.scss.css')}}" />
<link href="{{asset('frontend/css/blogs.scss.css')}}" rel="stylesheet" type="text/css" />
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
               <li><strong ><span>{{$title_page}}</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="blog-padding margin-bottom-30" itemscope itemtype="http://schema.org/Blog">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-12">
            <h1 class="news-h1 text-center">{{$title_page}}</h1>
         </div>
      </div>
      <section class="section_blogs">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-xs-12">
                     <div class="blog-index">
                        @foreach ($blogs as $blog)
                        <div class="col-md-4">
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
                        </div>
                        @endforeach
                     </div>
               </div>
            </div>
         </div>
         </section>
      <div class="row">
         <div class="paginate">
            {{$blogs->links()}}
         </div>
      </div>
   </div>
</div>
@endsection