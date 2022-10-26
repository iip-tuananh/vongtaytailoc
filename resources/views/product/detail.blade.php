@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$imgColor = json_decode($product->size);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/bean-products.scss.css')}}" rel="stylesheet" type="text/css" />
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
                     <span itemprop="name">{{languageName($product->name)}}</span>
                     <meta itemprop="position" content="3" />
                  </strong>
               <li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="product margin-top-30" itemscope itemtype="http://schema.org/Product">
   <div class="container">
      <div class="row details-product padding-bottom-10">
         <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
            <div class="relative product-image-block">
               <div class="slider-big clearfix margin-bottom-10">
                  <div class="slider slider-for">
                     @foreach ($imgs as $img)
                     <div class="item">
                        <img src="{{$img}}" alt="{{languageName($product->name)}}" class="img-responsive center-block">
                     </div>
                     @endforeach
                  </div>
                  {{-- <div id="lightgallery" data-toggle="tooltip" title="Phóng lớn">
                     @foreach ($imgs as $img)
                     <a href='' data-src="{{$img}}" title="{{languageName($product->name)}}">
                     </a>
                     @endforeach
                  </div> --}}
               </div>
               <div class="slider-has clearfix">
                  <div class="slider slider-nav">
                     @foreach ($imgs as $img)
                     <div class="fixs">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="lazy">
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 details-pro">
            <div class="product-top clearfix">
               <h1 class="title-head">{{languageName($product->name)}}</h1>
            </div>
            <div class="product-summary product_description">
               <h3>Thông tin sản phẩm</h3>
               <div class="rte description">
                  <ul>
                     <li><strong>Sản phẩm nhang&nbsp;được làm từ nguyên liệu Trầm Hương có chất lượng tốt&nbsp;và an toàn với sức khỏe</strong></li>
                     <li><strong>Sản phẩm có&nbsp;mùi ngọt ấm dịu nhẹ , không cay mắt , không ngộp khí&nbsp;, lưu hương rất dễ chịu và lâu trong phòng kín</strong></li>
                     <li><b>Mỗi ống nhang có hơn 100 cây nhang</b>&nbsp;,&nbsp;<strong>&nbsp;kích thước 20cm ,cháy từ 20 đến 25 phút trong không gian&nbsp;ít gió</strong></li>
                     <li><b>Sản phẩm được đựng trong&nbsp;hộp gỗ muồng &nbsp;đẹp , giúp nhang được bao quản tốt và không bị ám mùi lạ.</b></li>
                  </ul>
               </div>
            </div>
            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
               <div class="price-box clearfix">
                  <div class="special-price">
                     <span class="price product-price">{{number_format($product->price,0, '','.')}}₫</span>
                  </div>
                  <!-- Giá -->
               </div>
            </div>
            <div class="form-product">
               <form enctype="multipart/form-data" id="add-to-cart-form" action="" method="post" class="clearfix form-inline">
                  <div class="clearfix form-group ">
                     <div class="qty-input clearfix custom-btn-number">
                        <label>Số lượng:</label>
                        <div class="custom custom-btn-numbers form-control">		
                           <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
                           <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" />
                           <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
                        </div>
                     </div>
                     <div class="btn-mua">
                        <input type="hidden" name="variantId" value="{{$product->id}}" />
                        <button type="submit" data-url='{{route('addToCart')}}' class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">
                        <span class="txt-main">Thêm vào giỏ hàng</span>
                        </button>
                        <button class="btn btn-lg btn-buyNow" >
                        <span class="txt-main">Mua ngay</span>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="clearfix"></div>
            <div class="hotline_product">
               <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/telephone.svg?1664112935002" alt="icon-phone">
               Gọi: <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a> <span>để được tư vấn và mua hàng.</span>
            </div>
            {{-- <div class="service-product">
               <ul>
                  <li class="item">
                     <a href="https://huongvancat.vn/doi-tra-va-bao-hanh" title="Bảo hành miễn phí">
                     <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/service_product_1.svg?1664112935002" alt="Bảo hành miễn phí">
                     <span>Bảo hành miễn phí</span>
                     </a>
                  </li>
                  <li class="item">
                     <a href="https://huongvancat.vn/chinh-sach-van-chuyen" title="Giao hàng tận nơi - nhanh chóng">
                     <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/service_product_2.svg?1664112935002" alt="Giao hàng tận nơi - nhanh chóng">
                     <span>Giao hàng tận nơi - nhanh chóng</span>
                     </a>
                  </li>
                  <li class="item">
                     <a href="https://huongvancat.vn/chinh-sach-thanh-toan" title="Thanh Toán dễ dàng">
                     <img src="//bizweb.dktcdn.net/100/436/707/themes/834473/assets/service_product_3.svg?1664112935002" alt="Thanh Toán dễ dàng">
                     <span>Thanh Toán dễ dàng</span>
                     </a>
                  </li>
               </ul>
            </div> --}}
         </div>
         <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 margin-top-30">
            <!-- Tab -->
            <div class="tab_width_full">
               <div class="row xs-margin-top-15">
                  <div id="tab_ord" class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                     <!-- Nav tabs -->
                     <div class="product-tab e-tabs not-dqtab">
                        <span class="border-dashed-tab"></span>
                        <ul class="tabs tabs-title clearfix">
                           <li class="tab-link" data-tab="tab-1">
                              <h3><span>Mô tả sản phẩm</span></h3>
                           </li>
                        </ul>
                        <div class="tab-float">
                           <div id="tab-1" class="tab-content content_extab">
                              <div class="rte">
                                 {!!languageName($product->content)!!}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Endtab -->				
         </div>
      </div>
      @if (count($productlq) > 1)
      <div class="row margin-bottom-10">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="related-product">
               <h2 class="title_module_main a-center">
                  Sản phẩm liên quan
               </h2>
               <div class="product-relate">
                  @foreach ($productlq as $pro)
                     @if ($product->id != $pro->id)
                        <div class="item">
                           @include('layouts.product.item', ['product'=>$pro])
                        </div>
                     @endif
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      @endif
   </div>
</section>
<script>
   $('.product-relate').slick({
      dots: true,
      arrows: true,
      autoplay: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
         {
            breakpoint: 1024,
            settings: {
               slidesToShow: 4,
               slidesToScroll: 4
            }
         },
         {
            breakpoint: 992,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 3
            }
         },
         {
            breakpoint: 768,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 3
            }
         },
         {
            breakpoint: 481,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2
            }
         }
      ]
	});
   $('.slider-nav').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: true,
      centerMode: false,
      infinite: false,
      focusOnSelect: true,
      responsive: [
         {
            breakpoint: 1025,
            settings: {
               slidesToShow: 4,
               slidesToScroll: 1
            }
         },
         {
            breakpoint: 991,
            settings: {
               slidesToShow: 4
            }
         },
         {
            breakpoint: 480,
            settings: {
               slidesToShow: 4
            }
         }
      ]
   });
   $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      infinite: false,
      asNavFor: '.slider-nav',
      adaptiveHeight: true
   });
   $('.slider-big .slider-for a').each(function() {
      $(this).attr('rel','lightbox-demo'); 
   });
   
   jQuery(function($) {
      $('.selector-wrapper').hide();
      
      $('.selector-wrapper').css({
         'text-align':'left',
         'margin-bottom':'15px'
      });
   });
   jQuery('.swatch :radio').change(function() {
      var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
      var optionValue = jQuery(this).val();
      jQuery(this)
         .closest('form')
         .find('.single-option-selector')
         .eq(optionIndex)
         .val(optionValue)
         .trigger('change');
   });
   function scrollToxx() {
      if ($(window).width() > 767) {
         $('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
         $('.tab-content, .product-tab .tab-link').removeClass('current');
         $('#tab-3, .product-tab .tab-link:nth-child(3)').addClass('current');
         return false;
      }else{
         $('html, body').animate({ scrollTop: $('.product-tab.e-tabs #tab-3').offset().top }, 'slow');
         $('.product-tab.e-tabs #tab-3').addClass('active');
      }
   }
   function scrollToxxs() {
      $('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
      return false;
   }
   $('.btn--view-more .less-text').click(function(){
      scrollToxxs();
   })
   $(document).ready(function () {
      $('#lightgallery').lightGallery({
         thumbnail:false,
         share: false,
         autoplayControls:false
      }); 
   });
</script>
@endsection