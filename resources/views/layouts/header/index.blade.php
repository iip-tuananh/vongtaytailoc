<header class="header">
   <div class="wrap_head">
   <div class="container">
      <div class="row header-main">
         <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 header-mobile">
            <div  class="menu-bar button-menu visible-sm visible-xs">
            <a href="javascript:;" >
               <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                  <g>
                        <g id="Menu">
                        <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03 C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"/>
                        <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03 S379.58,180.455,372.939,180.455z"/>
                        <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909 c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"/>
                        </g>
                  </g>
               </svg>
            </a>
            </div>
            <div class="head-contact-mb visible-sm visible-xs">
            <a href="/lien-he" title="Liên hệ cửa hàng" rel="nofollow">
               <svg viewBox="0 0 512.076 512.076" width="15px">
                  <path d="M245.791,0C153.799,0,78.957,74.841,78.957,166.833c0,36.967,21.764,93.187,68.493,176.926
                        c31.887,57.138,63.627,105.4,64.966,107.433l22.941,34.773c2.313,3.507,6.232,5.617,10.434,5.617s8.121-2.11,10.434-5.617
                        l22.94-34.771c1.326-2.01,32.835-49.855,64.967-107.435c46.729-83.735,68.493-139.955,68.493-176.926
                        C412.625,74.841,337.783,0,245.791,0z M322.302,331.576c-31.685,56.775-62.696,103.869-64.003,105.848l-12.508,18.959
                        l-12.504-18.954c-1.314-1.995-32.563-49.511-64.007-105.853c-43.345-77.676-65.323-133.104-65.323-164.743
                        C103.957,88.626,167.583,25,245.791,25s141.834,63.626,141.834,141.833C387.625,198.476,365.647,253.902,322.302,331.576z"/>
                  <path d="M245.791,73.291c-51.005,0-92.5,41.496-92.5,92.5s41.495,92.5,92.5,92.5s92.5-41.496,92.5-92.5
                        S296.796,73.291,245.791,73.291z M245.791,233.291c-37.22,0-67.5-30.28-67.5-67.5s30.28-67.5,67.5-67.5
                        c37.221,0,67.5,30.28,67.5,67.5S283.012,233.291,245.791,233.291z"/>
               </svg>
            </a>
            </div>
            <div class="logo">
            <a href="{{route('home')}}" class="logo-wrapper" title="Vòng Tay Tài Lộc HG">
            <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$setting->logo}}" alt="Vòng Tay Tài Lộc HG">
            </a>
            </div>
            <div class="content_search_cart visible-sm visible-xs">
            <a href="{{route('listCart')}}" rel="nofollow" class="cart-mb">
               <svg viewBox="0 0 512.076 512.076" width="15px">
                  <g fill="#333">
                        <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
                        c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
                        C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
                        H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
                        c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
                  </g>
               </svg>
               @if (count($cartcontent) > 0)
               <span class="cartCount count_item_pr">{{count($cartcontent)}}</span>
               @else
               <span class="cartCount count_item_pr">0</span>
               @endif
            </a>
            <a href="javascript:void(0);" class="search-mb" rel="nofollow" title="Tìm kiếm">
               <svg viewBox="0 0 512.076 512.076" width="15px">
                  <g fill="#333">
                        <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"/>
                  </g>
               </svg>
            </a>
            </div>
         </div>
         <div class="col-md-5 hidden-sm hidden-xs left-header">
               <div class="header_search search_form">
               <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">
                  @csrf
                  <input type="search" name="keyword" value="" aria-label="Nhập tên sản phẩm bạn cần tìm?" placeholder="Nhập tên sản phẩm bạn cần tìm? " class="input-group-field st-default-search-input search-text search-auto" autocomplete="off">
                  <span class="input-group-btn">
                     <button class="btn icon-fallback-text">
                           <svg viewBox="0 0 512 512">
                           <g fill="#333">
                              <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"/>
                           </g>
                           </svg>
                     </button>
                  </span>
               </form>
               </div>
         </div>
         
         <div class="col-md-4 hidden-sm hidden-xs right-header">
               <ul class="list-inline">
               <li class="hotline-header">
                  <svg viewBox="0 0 512.076 512.076" width="15px">
                     <g fill="#333">
                           <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4
                           c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8
                           c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6
                           c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5
                           c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26
                           c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9
                           c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806
                           C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20
                           c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6
                           c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1
                           c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3
                           c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5
                           c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8
                           c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9
                           l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1
                           C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                           <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2
                           c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11
                           S248.656,111.506,256.056,112.706z"/>
                           <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11
                           c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2
                           c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
                     </g>
                  </svg>
                  <span class="title-hotline">Hỗ trợ &amp; tư vấn</span>
                  <a href="tel:{{$setting->phone1}}" class="title-hotline" title="Hotline tư vấn: {{$setting->phone1}}">
                  {{$setting->phone1}}
                  </a>
               </li>
               <li class="cart-header">
                  <div class="top-cart-contain">
                     <div class="mini-cart text-xs-center">
                           <div class="heading-cart">
                           <a href="{{route('listCart')}}" rel="nofollow" title="Giỏ hàng">
                              <svg viewBox="0 0 512.076 512.076" width="15px">
                                 <g fill="#333">
                                       <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
                                       c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
                                       C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
                                       H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
                                       c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
                                 </g>
                              </svg>
                              <span class="title-cart visible-lg visible-md">Giỏ Hàng</span>
                              <span class="cartCount-dk visible-lg visible-md"> Sản phẩm</span>
                              @if (count($cartcontent) > 0)
                                 <span class="cartCount count_item_pr">{{count($cartcontent)}}</span>
                              @else
                                 <span class="cartCount count_item_pr">0</span>
                              @endif
                           </a>
                           </div>
                           <div class="top-cart-content">
                              @if (count($cartcontent) > 0)
                              <ul id="cart-sidebar" class="mini-products-list count_li">
                                 <ul class="list-item-cart">
                                    @php
                                       $totalPrice = 0;
                                    @endphp
                                    @foreach ($cartcontent as $item)
                                    @php
                                       $totalPrice += $item['price'] * $item['quantity'];
                                    @endphp
                                    <li class="item">
                                       <div class="wrap_item">
                                          <a class="product-image" href="" title="{{languageName($item['name'])}}"><img alt="{{languageName($item['name'])}}" src="{{$item['image']}}" width="80"></a>
                                          <div class="detail-item">
                                             <div class="product-details" data-url="{{route('removeCart')}}">
                                                <a href="javascript:;" onclick="removeItemCart({{$item['id']}})" title="Xóa" class="remove-item-cart">×</a>
                                                <h3 class="product-name text1line"> <a href="" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a></h3>
                                             </div>
                                             <div class="product-details-bottom">
                                                <span class="price">{{number_format($item['price'], 0, '', '.')}}₫</span><span class="hidden quaty item_quanty_count"> x {{$item['quantity']}}</span>
                                                <div class="quantity-select qty_drop_cart" data-url="{{route('updateCart')}}">
                                                   <input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}">
                                                   <button onclick="btnMinus({{$item['id']}})" class="btn_reduced reduced items-count btn-minus" type="button">–</button>
                                                   <input type="text" disabled="" maxlength="12" readonly="" class="input-text number-sidebar qty{{$item['id']}}" id="qty{{$item['id']}}" name="Lines" size="4" value="{{$item['quantity']}}">
                                                   <button onclick="btnPlus({{$item['id']}})" class="btn_increase increase items-count btn-plus" type="button">+</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    @endforeach
                                 </ul>
                                 <div class="wrap_total">
                                    <div class="top-subtotal hidden">Phí vận chuyển: <span class="pricex">Tính khi thanh toán</span></div>
                                    <div class="top-subtotal">Tổng tiền tạm tính: <span class="price">{{number_format($totalPrice, 0, '', '.')}}₫</span></div>
                                 </div>
                                 <div class="wrap_button">
                                    <div class="actions"><a href="{{route('listCart')}}" class="btn btn-gray btn-cart-page pink"><span>Giỏ hàng</span></a> <a href="{{route('checkout')}}" class="btn btn-gray btn-checkout pink"><span>Thanh toán</span></a> </div>
                                 </div>
                              </ul>
                              @else
                                 <ul id="cart-sidebar" class="mini-products-list count_li text-center">
                                    <span class="list-item">Chưa có sản phầm nào.
                                    </span>
                                 </ul>
                              @endif
                           </div>
                     </div>
                  </div>
               </li>
               </ul>
         </div>
         <div class="search-mobile search_form col-xs-12 col-sm-12 hidden-lg hidden-md">
               <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">
                  @csrf
               <input type="search" name="keyword" value="" aria-label="Nhập tên sản phẩm bạn cần tìm?" placeholder="Nhập tên sản phẩm bạn cần tìm? " class="input-group-field st-default-search-input search-text search-auto" autocomplete="off">
               <span class="input-group-btn">
                  <button class="btn icon-fallback-text">
                     <svg viewBox="0 0 512 512">
                           <g fill="#333">
                           <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"/>
                           </g>
                     </svg>
                  </button>
               </span>
               <span class="input-group-btn">
                  <a href="javascript:void(0);" class="btn search-close">
                     <svg viewBox="0 0 512 512">
                           <g fill="#333">
                           <path d="M342.3,132.9c-5.3-5.3-13.8-5.3-19.1,0l-85.6,85.6L152,132.9c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1
                              l85.6,85.6l-85.6,85.6c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.6-85.6l85.6,85.6c2.6,2.6,6.1,4,9.5,4
                              c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.4-85.6l85.6-85.6C347.6,146.7,347.6,138.2,342.3,132.9z"/>
                           </g>
                     </svg>
                  </a>
               </span>
               </form>
         </div>
      </div>
   </div>
   </div>
   <div class="main-nav">
   <div class="container nav-head">
      <div class="row">
         <nav class="hidden-sm hidden-xs col-lg-12 col-md-12 nav-main">
               <div class="menu_hed head_1">
               <ul class="nav nav_1">
                  <li class=" nav-item nav-items active  ">
                     <a itemprop="url" class="nav-link" href="{{route('home')}}" title="Trang chủ">
                     Trang chủ
                     </a>
                  </li>
                  <li class="menu_hover nav-item nav-items ">
                     <a href="{{route('aboutUs')}}" class="nav-link" title="Giới thiệu">
                           Giới thiệu
                     </a>
                  </li>
                  @foreach ($categoryhome as $cate)
                  <li class="menu_hover nav-item nav-items ">
                     <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="nav-link" title="{{languageName($cate->name)}}">
                           {{languageName($cate->name)}}
                           @if (count($cate->typeCate) > 0)
                           <i class="fa" data-toggle="dropdown">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 240.811 240.811">
                              <path d="M220.088,57.667l-99.671,99.695L20.746,57.655c-4.752-4.752-12.439-4.752-17.191,0
                                 c-4.74,4.752-4.74,12.451,0,17.203l108.261,108.297l0,0l0,0c4.74,4.752,12.439,4.752,17.179,0L237.256,74.859
                                 c4.74-4.752,4.74-12.463,0-17.215C232.528,52.915,224.828,52.915,220.088,57.667z"/>
                           </svg>
                           </i>
                           @endif
                     </a>
                     @if (count($cate->typeCate) > 0)
                        <ul class="dropdown-menu border-box">
                           @foreach ($cate->typeCate as $type)
                           <li class="nav-item-lv2">
                           <a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                           </li>
                           @endforeach
                        </ul>
                     @endif
                  </li>
                  @endforeach
                  <li class="menu_hover nav-item nav-items ">
                     <a href="{{route('allProductBrand')}}" class="nav-link" title="Vòng theo mệnh">
                           Vòng theo mệnh
                           <i class="fa" data-toggle="dropdown">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 240.811 240.811">
                              <path d="M220.088,57.667l-99.671,99.695L20.746,57.655c-4.752-4.752-12.439-4.752-17.191,0
                                 c-4.74,4.752-4.74,12.451,0,17.203l108.261,108.297l0,0l0,0c4.74,4.752,12.439,4.752,17.179,0L237.256,74.859
                                 c4.74-4.752,4.74-12.463,0-17.215C232.528,52.915,224.828,52.915,220.088,57.667z"/>
                           </svg>
                           </i>
                     </a>
                     @if (count($productBrands) > 0)
                        <ul class="dropdown-menu border-box">
                           @foreach ($productBrands as $brand)
                           <li class="nav-item-lv2">
                           <a class="nav-link" href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="{{$brand->name}}">{{$brand->name}}</a>
                           </li>
                           @endforeach
                        </ul>
                     @endif
                  </li>
                  <li class=" nav-item nav-items  ">
                     <a itemprop="url" class="nav-link" href="{{route('allListBlog')}}" title="Tin tức">
                     Tin tức
                     </a>
                  </li>
                  <li class=" nav-item nav-items  ">
                     <a itemprop="url" class="nav-link" href="{{route('lienHe')}}" title="Liên hệ">
                     Liên hệ
                     </a>
                  </li>
               </ul>
               </div>
         </nav>
      </div>
   </div>
   </div>
</header>
<div class="mobile-nav-overflow"></div>
<div id="mobile-nav">
   <a href="javascript:void(0);" class="btn nav-close" title="Close">
   <svg viewBox="0 0 512 512">
      <g fill="#333">
         <path d="M342.3,132.9c-5.3-5.3-13.8-5.3-19.1,0l-85.6,85.6L152,132.9c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1
               l85.6,85.6l-85.6,85.6c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.6-85.6l85.6,85.6c2.6,2.6,6.1,4,9.5,4
               c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.4-85.6l85.6-85.6C347.6,146.7,347.6,138.2,342.3,132.9z"/>
      </g>
   </svg>
   </a>
   <div class="mbtop-nav">
   <div class="col-xs-12 f-none">
      <div class="logo a-center">
         <a href="{{route('home')}}" class="logo-wrapper " title="logo ">					
         <img src="{{$setting->logo}}" alt="logo " loading="lazy">					
         </a>
      </div>
   </div>
   </div>
   <div class="mobile-nav-cont">
   <ul class="mb-nav" id="mb-nav">
      <li class="mb-nav-item lv0 "><a class="mb-link" href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
      <li class="mb-nav-item lv0">
         <a href="{{route('aboutUs')}}" class="mb-link" title="Giới thiệu">Giới thiệu</a>
      </li>
      @foreach ($categoryhome as $cate)
      <li class="mb-nav-item lv0">
         <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="mb-link" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
         @if (count($cate->typeCate) > 0)
         <i class="fa">
            <img src="{{url('frontend/images/right-chevron.svg')}}" alt="icon-right" loading="lazy">
         </i>
         <ul class="sub-menu">
            @foreach ($cate->typeCate as $type)
            <li class="mb-nav-item lv1">
            <a class="mb-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
            </li>
            @endforeach
         </ul>
         @endif
      </li>
      @endforeach
      <li class="mb-nav-item lv0">
         <a href="{{route('allProductBrand')}}" class="mb-link" title="Vòng theo mệnh">Vòng theo mệnh</a>
         @if (count($productBrands) > 0)
         <i class="fa">
            <img src="{{url('frontend/images/right-chevron.svg')}}" alt="icon-right" loading="lazy">
         </i>
         <ul class="sub-menu">
            @foreach ($productBrands as $brand)
            <li class="mb-nav-item lv1">
            <a class="mb-link" href="{{route('listProductBrand', ['slug'=>$brand->slug])}}" title="{{$brand->name}}">{{$brand->name}}</a>
            </li>
            @endforeach
         </ul>
         @endif
      </li>
      <li class="mb-nav-item lv0 "><a class="mb-link" href="{{route('allListBlog')}}" title="Tin tức">Tin tức</a></li>
      <li class="mb-nav-item lv0 "><a class="mb-link" href="{{route('lienHe')}}" title="Liên hệ">Liên hệ</a></li>
      <li class="mb-nav-item lv0">
         <a class="mb-link"  href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">
               <svg viewBox="0 0 512.076 512.076" width="15px">
               <g fill="#333">
                  <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4
                     c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8
                     c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6
                     c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5
                     c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26
                     c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9
                     c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806
                     C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20
                     c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6
                     c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1
                     c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3
                     c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5
                     c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8
                     c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9
                     l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1
                     C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                  <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2
                     c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11
                     S248.656,111.506,256.056,112.706z"/>
                  <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11
                     c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2
                     c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
               </g>
               </svg>
               Hotline: <b>{{$setting->phone1}}</b>
         </a>
      </li>
      <li class="mb-nav-item lv0">
         <a href="{{route('lienHe')}}" title="Liên hệ cửa hàng" rel="nofollow">
               <svg viewBox="0 0 512.076 512.076" width="15px">
               <g fill="#333">
                  <path d="M245.791,0C153.799,0,78.957,74.841,78.957,166.833c0,36.967,21.764,93.187,68.493,176.926
                     c31.887,57.138,63.627,105.4,64.966,107.433l22.941,34.773c2.313,3.507,6.232,5.617,10.434,5.617s8.121-2.11,10.434-5.617
                     l22.94-34.771c1.326-2.01,32.835-49.855,64.967-107.435c46.729-83.735,68.493-139.955,68.493-176.926
                     C412.625,74.841,337.783,0,245.791,0z M322.302,331.576c-31.685,56.775-62.696,103.869-64.003,105.848l-12.508,18.959
                     l-12.504-18.954c-1.314-1.995-32.563-49.511-64.007-105.853c-43.345-77.676-65.323-133.104-65.323-164.743
                     C103.957,88.626,167.583,25,245.791,25s141.834,63.626,141.834,141.833C387.625,198.476,365.647,253.902,322.302,331.576z"/>
                  <path d="M245.791,73.291c-51.005,0-92.5,41.496-92.5,92.5s41.495,92.5,92.5,92.5s92.5-41.496,92.5-92.5
                     S296.796,73.291,245.791,73.291z M245.791,233.291c-37.22,0-67.5-30.28-67.5-67.5s30.28-67.5,67.5-67.5
                     c37.221,0,67.5,30.28,67.5,67.5S283.012,233.291,245.791,233.291z"/>
               </g>
               </svg>
               Liên hệ cửa hàng
         </a>
      </li>
   </ul>
   </div>
</div>