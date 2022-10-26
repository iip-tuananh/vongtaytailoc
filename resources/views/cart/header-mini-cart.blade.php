<ul id="cart-sidebar" class="mini-products-list count_li">
    <ul class="list-item-cart">
    @php
        $totalPrice = 0;
    @endphp
    @foreach ($cart as $item)
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