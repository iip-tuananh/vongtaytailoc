
@php
$img = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="product-box product-item">
   <div class="product-thumbnail">
         <a class="image_thumb" href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
            @if (count($img) > 1)
               <img class="lazy product-image-front" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
               <img class="lazy product-image-back" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[1]}}" alt="{{languageName($product->name)}}">
            @else
               <img class="lazy product-image-front" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
               <img class="lazy product-image-back" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
            @endif
         </a>
         <div class="product-action clearfix">
         <form action="" method="post" class="variants form-nut-grid" data-id="product-actions-27628924" enctype="multipart/form-data">
            <div class="group_action">
               <input type="hidden" name="variantId" value="{{$product->id}}" />
               <a class="btn-buy btn btn-primary add_to_cart" title="Mua hàng" data-url='{{route('addToCart')}}'>
               <i class="icon-add-cart"></i>
               Mua hàng
               </a>
               <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="Xem chi tiết" class="btn btn-primary btn_view">
               <i class="icon-showmore"></i>Xem chi tiết
               </a>
            </div>
         </form>
         </div>
   </div>
   <div class="product-info product-bottom">
         <h3 class="product-name">
         <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}" class="line-clamp">{{languageName($product->name)}}</a>
         </h3>
         <div class="product-item-price price-box">
         <span class="special-price">
         <span class="price product-price">{{number_format($product->price, 0, '', '.')}}₫</span>
         </span>
         </div>
   </div>
</div>
