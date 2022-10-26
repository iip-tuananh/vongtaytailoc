@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/bean-collections.scss.css')}}" rel="stylesheet" type="text/css" />
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
                     <span itemprop="name"> {{$title}}</span>
                     <meta itemprop="position" content="2" />
                  </strong>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="container">
   <div class="row">
      <section class="main_container collection col-lg-9 col-md-9 col-sm-12 col-lg-push-3 col-md-push-3">
         <h1 class="title-head margin-top-0">
            <span>{{$title}}</span>
         </h1>
         <div class="category-products products">
            <div class="sortPagiBar hidden-xs hidden-sm">
            </div>
            <section class="products-view products-view-grid collection_reponsive">
               <div class="row">
                  @foreach ($list as $product)
                  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 product-col">
                     <div class="item_product_main">
                        @include('layouts.product.item', ['product'=>$product])
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="text-xs-right xs_padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <nav class="collection-paginate">
                     {{$list->links()}}
                  </nav>
               </div>
            </section>
         </div>
      </section>
      <aside class="dqdt-sidebar sidebar left left-content col-xs-12 col-lg-3 col-md-3 col-sm-12  col-lg-pull-9 col-md-pull-9">
         <aside class="aside-item collection-category">
            <div class="aside-title">
               <h2 class="margin-top-0"><span>Danh mục sản phẩm</span></h2>
            </div>
            <div class="aside-content">
               <nav class="nav-category  navbar-toggleable-md" >
                  <ul class="nav navbar-pills">
                     @foreach ($productBrands as $brand)
                     <li class="nav-item "><a class="nav-link" href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="Vòng theo {{$brand->name}}">Vòng theo {{$brand->name}}</a></li>
                     @endforeach
                     @foreach ($categoryhome as $cate)
                        @foreach ($cate->typeCate as $type)
                           <li class="nav-item "><a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a></li>
                        @endforeach
                     @endforeach
                  </ul>
               </nav>
            </div>
         </aside>
         <div class="aside-filter">
            <div class="aside-hidden-mobile">
               <div class="aside-title">
                  <h2 class="title-head margin-top-0"><span>Bộ Lọc</span></h2>
               </div>
               <div class="filter-container">
                  <div class="filter-containers">
                     <div class="filter-container__selected-filter" style="display: none;">
                        <div class="filter-container__selected-filter-header clearfix">
                           <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                           <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết &#8250;</a>
                        </div>
                        <div class="filter-container__selected-filter-list">
                           <ul></ul>
                        </div>
                     </div>
                  </div>
                  <aside class="aside-item filter-price">
                     <div class="aside-title">
                        <span>Tìm theo mức giá</span>
                     </div>
                     <div class="aside-content filter-group">
                        <ul>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-duoi-3000000d">
                              <input type="checkbox" id="filter-duoi-3000000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 3000000đ" value="(<3000000)" data-operator="OR">
                              <i class="fa"></i>
                              Giá dưới 3000000đ
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-3000000d-10-000-000d">
                              <input type="checkbox" id="filter-3000000d-10-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="3000000đ - 10.000.000đ" value="(>=3000000 AND <=10000000)" data-operator="OR">
                              <i class="fa"></i>
                              3000000đ - 10.000.000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-10-000-000d-30-000-000d">
                              <input type="checkbox" id="filter-10-000-000d-30-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="10.000.000đ - 30.000.000đ" value="(>=10000000 AND <=30000000)" data-operator="OR">
                              <i class="fa"></i>
                              10.000.000đ - 30.000.000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-30-000-000d-50-000-000d">
                              <input type="checkbox" id="filter-30-000-000d-50-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="30.000.000đ - 50.000.000đ" value="(>=30000000 AND <=50000000)" data-operator="OR">
                              <i class="fa"></i>
                              30.000.000đ - 50.000.000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-tren50-000-000d">
                              <input type="checkbox" id="filter-tren50-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 50.000.000đ" value="(>50000000)" data-operator="OR">
                              <i class="fa"></i>
                              Giá trên 50.000.000đ
                              </label>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </aside>
                  {{-- <aside class="aside-item filter-tag-style-1 tag-filtster">
                     <div class="aside-title">
                        <span>Chất hàng</span>
                     </div>
                     <div class="aside-content filter-group">
                        <ul>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-chim">
                              <input type="checkbox" id="filter-chim" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="chìm" value="(chìm)" data-operator="OR">
                              <i class="fa"></i>
                              chìm
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-banh">
                              <input type="checkbox" id="filter-banh" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="banh" value="(banh)" data-operator="OR">
                              <i class="fa"></i>
                              banh
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-tron">
                              <input type="checkbox" id="filter-tron" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="tròn" value="(tròn)" data-operator="OR">
                              <i class="fa"></i>
                              tròn
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-truc">
                              <input type="checkbox" id="filter-truc" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="trúc" value="(trúc)" data-operator="OR">
                              <i class="fa"></i>
                              trúc
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-lu-thong">
                              <input type="checkbox" id="filter-lu-thong" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="lu thống" value="(lu thống)" data-operator="OR">
                              <i class="fa"></i>
                              lu thống
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-tu-nhien">
                              <input type="checkbox" id="filter-tu-nhien" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="tự nhiên" value="(tự nhiên)" data-operator="OR">
                              <i class="fa"></i>
                              tự nhiên
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-108-hat">
                              <input type="checkbox" id="filter-108-hat" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="108 hạt" value="(108 hạt)" data-operator="OR">
                              <i class="fa"></i>
                              108 hạt
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-216-hat">
                              <input type="checkbox" id="filter-216-hat" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="216 hạt" value="(216 hạt)" data-operator="OR">
                              <i class="fa"></i>
                              216 hạt
                              </label>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </aside> --}}
               </div>
            </div>
         </div>
         <div class="aside-item collection-banner">
            @if (count($bannerAds) > 0)
               @foreach ($bannerAds as $item)
                  <a href="{{$item->name}}" title="" class="single_image_effect">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="" class="lazy center-block" />
                  </a>
               @endforeach
            @endif
         </div>
      </aside>
   </div>
</div>
@endsection