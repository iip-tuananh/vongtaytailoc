@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<section class="awe-section-1">
   <div class="home-slider slick-frame">
      @foreach ($banners as $banner)
         <div class="item">
            <a href="{{$banner->link}}" title="{{$banner->title}}" class="clearfix">
               <picture>
                     <source 
                     media="(min-width: 1200px)"
                     srcset="{{$banner->image}}" loading="lazy">
                     <source 
                     media="(min-width: 992px)"
                     srcset="{{$banner->image}}" loading="lazy">
                     <source 
                     media="(min-width: 569px)"
                     srcset="{{$banner->image}}" loading="lazy">
                     <source 
                     media="(max-width: 480px)"
                     srcset="{{$banner->image}}" loading="lazy">
                     <img 
                     src="{{$banner->image}}" 
                     alt="{{$banner->title}}" class="lazy img-responsive center-block" loading="lazy"/>
               </picture>
            </a>
         </div>
      @endforeach
   </div>
   <script>
   /*Slider index*/
   $('.home-slider').slick({
      infinite: false,
      arrows: false,
      autoplay: true,
      fade: true,
      dots: true,
      autoplaySpeed: 7000,
      speed: 1000,
      adaptiveHeight: true,
      easing: 'ease-in-out',
      pauseOnHover : false,
      pauseOnFocus : false,
      slidesToShow: 1,
      slidesToScroll: 1,
   });
   </script>
</section>
<section class="awe-section-2">
   <section class="section_category_banner container">
   <div class="category-list slick-frame">
      @foreach ($productBrands as $brand)
      <div class="item">
         <a href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="{{$brand->name}}" class="img-thumb">
               <picture>
               <source 
                  media="(min-width: 1200px)"
                  srcset="{{$brand->image}}" loading="lazy">
               <source 
                  media="(min-width: 992px)"
                  srcset="{{$brand->image}}" loading="lazy">
               <source 
                  media="(min-width: 569px)"
                  srcset="{{$brand->image}}" loading="lazy">
               <source 
                  media="(max-width: 480px)"
                  srcset="">
               <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$brand->image}}" alt="Vòng Theo {{$brand->name}}" loading="lazy" />
               </picture>
         </a>
         <div class="cate-contain-wrapper">
               <a title="Vòng Theo {{$brand->name}}" href="{{route('listProductBrand', ['slug'=>$brand->slug])}}">
               <h4>
                  Vòng Theo {{$brand->name}}
                  <i class="count-product">({{count($brand->products)}} sản phẩm)</i>
               </h4>
               </a>
         </div>
      </div>
      @endforeach
   </div>
   </section>
</section>
<section class="awe-section-4">
   <section class="section_product_bestsale">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
               {{-- <h2 class="title_module_main a-center">Sản phẩm bán chạy
               </h2> --}}
               <div class="fs_title">
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <a href="#" title="Sản phẩm bán chạy">
                     <h4>Sản phẩm bán chạy</h4>
                  </a>
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <span class="circle"></span>
               </div>
               <div class="bestsale-slick slick-frame">
                  @foreach ($bestSaleProductHome as $product)
                  <div class="item">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
                  @endforeach
               </div>
               {{-- <div class="show-more">
               <a href="san-pham-moi" title="Xem thêm" class="btn btn-primary">Xem thêm</a>
               </div> --}}
         </div>
      </div>
   </div>
   </section>
</section>
<section class="awe-section-3">
   <section class="section_about lazy" data-src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/bg_about.jpg?1664112935002">
   <div class="container">
      <div class="row">
         <div class="bg-about">
               <div class="col-md-6 col-sm-12 col-xs-12 about-content">
               <div class="bg-white">
                  <span class="title_module_tiny">Về chúng tôi</span>
                  <h2 class="title_module_main">
                     <a href="{{route('aboutUs')}}" title="{{$setting->company}}">{{$setting->company}}</a>
                  </h2>
                  <div class="about-desc">
                     {!!$aboutUs->description!!}
                  </div>
                  <div class="about-link clearfix">
                     <a href="{{route('aboutUs')}}" class="btn btn-primary show-more" title="Xem thêm">Xem thêm</a>
                  </div>
               </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 banner-about">
               <a href="{{route('aboutUs')}}" title="{{$setting->company}}">
               <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$aboutUs->image}}" alt="{{$setting->company}}">
               </a>
               </div>
         </div>
      </div>
   </div>
   </section>
</section>

@foreach ($brandProduct as $brand)
@if (count($brand->products) > 0)
<section class="awe-section-6">
   <div class="section_product_tabs">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
               <div class="pro-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="tab_grid">
               <div class="content">
                  <div class="product-tabs-title clearfix">
                     <div class="fs_title">
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <a href="#" title="{{$brand->name}}">
                           <h4>Vòng theo {{$brand->name}}</h4>
                        </a>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                     </div>
                  </div>
                  <div class="tab-1 tab-content">
                     <div class="products-view-grid grid-tabs">
                           <div class="row">
                              @foreach ($brand->products as $product)
                              <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-col">
                                 <div class="item_product_main">
                                    @include('layouts.product.item', ['product'=>$product])
                                 </div>
                              </div>
                              @endforeach
                           </div>
                     </div>
                     <div class="show-more">
                           <a href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="Xem thêm" class="btn btn-primary">Xem thêm</a>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </div>
   </div>
   </div>
</section>
@endif
@endforeach
<section class="awe-section-7">
   <section class="section_testimonial lazy" data-src="{{url('frontend/images/banner11-2.jpg')}}">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
               <span class="title_module_tiny">Cảm nhận và đánh giá</span>
               <h2 class="title_module_main a-center">
               <span>Khách hàng về Vòng Tay Tài Lộc HG</span>
               </h2>
               <div class="testimonial-slick">
                  @foreach ($reviewCus as $review)
                  <div class="item">
                     <div class="testimonial-box">
                        <div class="image">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$review->avatar}}" alt="{{languageName($review->name)}}" class="img-fix lazy">
                        </div>
                        <div class="info">
                              <h3>{{languageName($review->name)}} _<span>{{languageName($review->position)}}</span></h3>
                              <div class="star-rate">
                              <div class="star-5"></div>
                              </div>
                              <p class="content">
                              {!!languageName($review->content)!!}
                              </p>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
         </div>
      </div>
   </div>
   </section>
</section>
<section class="awe-section-8">
   <section class="section_blogs">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
               <div class="fs_title">
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <a href="{{route('allListBlog')}}" title="Tin tức">
                     <h4>Tin tức</h4>
                  </a>
                  <span class="circle"></span>
                  <span class="circle"></span>
                  <span class="circle"></span>
               </div>
               <div class="blog-index-slick">
                  @foreach ($homeBlog as $blog)
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
                  @endforeach
               </div>
               <div class="show-more">
               <a href="{{route('allListBlog')}}" title="Xem thêm" class="btn btn-primary">Xem thêm</a>
               </div>
         </div>
      </div>
   </div>
   </section>
</section>
{{-- <section class="awe-section-9">
   <section class="section_blogs">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
               <h2 class="title_module_main a-center">
               <a href="videos-tram-huong-va-ky-nam" title="VIDEO TRẦM HƯƠNG - KỲ NAM">VIDEO TRẦM HƯƠNG - KỲ NAM</a>
               </h2>
               <div class="blog-index-slick">
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/tap-14-cach-nhan-biet-ky-nam-va-nhung-nham-lan-lien-quan-den-ky-nam" title="Tập 14  |  Cách nhận biết Kỳ Nam và những nhầm lẫn liên quan đến Kỳ Nam">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-2427cf95-2384-4212-930e-ce837ec9e070.jpg?v=1641609734393"  class="img-responsive lazy" alt="Tập 14  |  Cách nhận biết Kỳ Nam và những nhầm lẫn liên quan đến Kỳ Nam">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=6IHJBrNUOFc" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>Tập 14  |  Cách nhận biết Kỳ Nam và những nhầm lẫn liên quan đến Kỳ Nam</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/tap-13-cach-su-dung-nhang-tram-va-tram-mieng" title="Tập 13  | Cách sử dụng Nhang Trầm và Trầm miếng">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-03204b57-b145-480b-b690-333fa9265896.jpg?v=1641608340623"  class="img-responsive lazy" alt="Tập 13  | Cách sử dụng Nhang Trầm và Trầm miếng">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=6IHJBrNUOFc" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>Tập 13  | Cách sử dụng Nhang Trầm và Trầm miếng</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/cach-mua-tram-huong-tu-nhien-dung-theo-y-muon-tap-12" title="CÁCH MUA TRẦM HƯƠNG TỰ NHIÊN ĐÚNG THEO Ý MUỐN | TẬP 12">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-0c4a78a7-cd68-4291-bf3e-252e367a4ba4.jpg?v=1641608307123"  class="img-responsive lazy" alt="CÁCH MUA TRẦM HƯƠNG TỰ NHIÊN ĐÚNG THEO Ý MUỐN | TẬP 12">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=s_pMKnVpg0M" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>CÁCH MUA TRẦM HƯƠNG TỰ NHIÊN ĐÚNG THEO Ý MUỐN | TẬP 12</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/ky-nam-la-gi-cach-phan-biet-ky-nam-tap-11" title="KỲ NAM LÀ GÌ ? CÁCH PHÂN BIỆT KỲ NAM | TẬP 11">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-3ff5741c-b707-45a8-8d53-6ccfcd50f318.jpg?v=1641608286367"  class="img-responsive lazy" alt="KỲ NAM LÀ GÌ ? CÁCH PHÂN BIỆT KỲ NAM | TẬP 11">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=2rNzuZNfnlE" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>KỲ NAM LÀ GÌ ? CÁCH PHÂN BIỆT KỲ NAM | TẬP 11</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/tap-10-cach-bao-quan-tram-huong" title="TẬP 10 | CÁCH BẢO QUẢN TRẦM HƯƠNG">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-6b2cc1d0-fc29-494b-ba93-7213b1dfdbda.jpg?v=1641608261587"  class="img-responsive lazy" alt="TẬP 10 | CÁCH BẢO QUẢN TRẦM HƯƠNG">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=9Lg1XTfyteU" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>TẬP 10 | CÁCH BẢO QUẢN TRẦM HƯƠNG</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="blog_full blog_index">
                     <div class="blog-inner">
                           <div class="blog-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                           <a class="frame" href="/tap-9-tram-co-the-xac-dinh-duoc-tuoi-so-ngang-la-ky-ho" title="TẬP 9 : TRẦM CÓ THỂ XÁC ĐỊNH ĐƯỢC TUỔI ? SỚ NGANG LÀ KỲ HỔ ?">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/436/707/articles/blog-6ef4be66-e040-44b4-8eeb-d71d3dcf2e2a-83988bf7-df4d-47af-976e-54fed8a8a36c.jpg?v=1641608229653"  class="img-responsive lazy" alt="TẬP 9 : TRẦM CÓ THỂ XÁC ĐỊNH ĐƯỢC TUỔI ? SỚ NGANG LÀ KỲ HỔ ?">
                              <div class="box-date">
                                 <span class="date-day">08</span>
                                 <span class="date-month">Tháng 01</span>
                              </div>
                           </a>
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=44VlCnOf8FY" class="btn-video-popup">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                 <g>
                                       <g id="video-youtube">
                                       <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8    C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5    L357,255L204,369.75z"/>
                                       </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                           </a>
                           </div>
                           <div class="content_blog_full col-lg-12 col-md-712 col-sm-12 col-xs-12 no-padding">
                           <h3><span>TẬP 9 : TRẦM CÓ THỂ XÁC ĐỊNH ĐƯỢC TUỔI ? SỚ NGANG LÀ KỲ HỔ ?</span></h3>
                           <span class="time_post">
                           <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/user-gray.svg?1664112935002" alt="time-icon"> Đăng bởi: huongvancat
                           </span>             
                           <div class="blog-description">
                              <p>
                                 Nội dung bài viết đang cập nhật.
                              </p>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               </div>
               <div class="show-more">
               <a href="videos-tram-huong-va-ky-nam" title="Xem thêm" class="btn btn-primary">Xem thêm</a>
               </div>
         </div>
      </div>
   </div>
   </section>
</section> --}}
@endsection