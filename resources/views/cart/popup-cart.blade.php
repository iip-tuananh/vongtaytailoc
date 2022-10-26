<div id="popup-cart-desktop" class="clearfix">
    <div class="title-popup-cart">
    <img src="{{url('frontend/images/ico_check_.png')}}"  alt="Vòng Tay Tài Lộc HG"/> <span class="your_product">Bạn đã thêm vào giỏ hàng thành công ! </span>
    </div>
    <div class="wrap_popup">
    <div class="title-quantity-popup" >
        <span class="cart_status" onclick="window.location.href='{{route('listCart')}}';">Giỏ hàng của bạn có <span class="cart-popup-count">{{count($cart)}}</span> sản phẩm </span>
    </div>
    <div class="content-popup-cart scrolls">
        <div class="thead-popup">
                <div style="width: 53%;" class="text-left">Sản phẩm</div>
                <div style="width: 15%;" class="text-center">Đơn giá</div>
                <div style="width: 15%;" class="text-center">Số lượng</div>
                <div style="width: 17%;" class="text-center">Thành tiền</div>
        </div>
            @php
                $totalPrice = 0;
            @endphp
            @foreach ($cart as $item)
            @php
                $itemPrice = $item['price'] * $item['quantity'];
                $totalPrice += $itemPrice;
            @endphp
                <div class="tbody-popup scrollbar-dynamic">
                    <div style="width: 53%;" class="text-left">{{languageName($item['name'])}}</div>
                    <div style="width: 15%;" class="text-center">{{number_format($item['price'],0,'','.')}}</div>
                    <div style="width: 15%;" class="text-center">{{$item['quantity']}}</div>
                    <div style="width: 17%;" class="text-center">{{number_format($itemPrice, 0, '', '.')}}₫</div>
                </div>
            @endforeach
        <div class="tfoot-popup">
                <div class="tfoot-popup-1 a-right clearfix">
                <span class="total-p popup-total">Tổng tiền thanh toán: <span class="total-price">{{number_format($totalPrice, 0, '', '.')}}₫</span></span>
                </div>
                <div class="tfoot-popup-2 clearfix">
                <a class="button buy_ btn-proceed-checkout" title="tiếp tục mua hàng" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
                <a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán" href="{{route('checkout')}}"><span>Thực hiện thanh toán</span></a>
                </div>
        </div>
    </div>
    <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close"></i></a>
    </div>
</div>