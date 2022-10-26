<div class="main container hidden-xs hidden-sm">
    <div class="col-main cart_desktop_page cart-page">
    <div class="cart page_cart hidden-xs-down">
        <form action="" method="post" novalidate="">
            <div class="bg-scroll">
                <div class="cart-thead">
                <div style="width: 17%">Ảnh sản phẩm</div>
                <div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
                <div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
                <div style="width: 14%" class="a-center">Số lượng</div>
                <div style="width: 15%" class="a-center">Thành tiền</div>
                <div style="width: 6%">Xoá</div>
                </div>
                <div class="cart-tbody">
                @php
                    $totalPrice = 0;
                @endphp
                @foreach ($cart as $item)
                @php
                    $itemPrice = $item['price'] * $item['quantity'];
                    $totalPrice += $itemPrice;
                @endphp
                <div class="item-cart">
                    <div style="width: 17%" class="image"><a class="product-image" title="{{languageName($item['name'])}}" href=""><img width="75" height="auto" alt="{{languageName($item['name'])}}" src="{{$item['image']}}"></a></div>
                    <div style="width: 33%" class="a-left fix-flex">
                        <h2 class="product-name"> <a href="" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a>&nbsp;<span class="variant-title"></span></h2>
                    </div>
                    <div style="width: 15%" class="a-center"><span class="item-price"> <span class="price pricechange">{{number_format($item['price'],0,'','.')}}₫</span></span></div>
                    <div style="width: 14%" class="a-center">
                        <div class="input_qty_pr">
                            <input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}">
                            <button onclick="btnMinus({{$item['id']}})" class="reduced_pop items-count btn-minus" type="button">–</button>
                            <input type="text" disabled="" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem{{$item['id']}}" id="qtyItem{{$item['id']}}" name="Lines" size="4" value="{{$item['quantity']}}">
                            <button onclick="btnPlus({{$item['id']}})" class="increase_pop items-count btn-plus" type="button">+</button>
                        </div>
                    </div>
                    <div style="width: 15%" class="a-center"><span class="cart-price"> <span class="price">{{number_format($itemPrice,0,'','.')}}₫</span> </span></div>
                    <div style="width: 6%"><a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" onclick="removeItemCart({{$item['id']}})"><span><span>Xóa</span></span></a></div>
                </div>
                @endforeach
                </div>
            </div>
        </form>
        <div class="cart-collaterals cart_submit row">
            <div class="totals col-sm-7 col-md-5 col-xs-12 col-md-offset-7 col-sm-offset-5">
                <div class="totals">
                <div class="inner">
                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <tfoot>
                            <tr>
                            <td colspan="1" class="a-left">
                                <strong>
                                    <h5>Thanh toán</h5>
                                </strong>
                            </td>
                            <td class="a-right"></td>
                            </tr>
                            <tr>
                            <td colspan="1" class="a-left"><strong>Phí vận chuyển</strong></td>
                            <td class="a-right"><strong><span class=" price">Tính lúc thanh toán</span></strong></td>
                            </tr>
                            <tr>
                            <td colspan="1" class="a-left"><strong>Tổng tiền</strong></td>
                            <td class="a-right"><strong><span class="totals_price price">{{number_format($totalPrice,0,'','.')}}₫</span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <ul class="checkout clearfix">
                        <li><button class="button btn-proceed-checkout" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='{{route('checkout')}}'"><span>Tiến hành đặt hàng</span></button></li>
                        <li><button class="btn btn-continue contin" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{route('home')}}'"><span>Tiếp tục mua hàng</span></button></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="cart-mobile hidden-md hidden-lg container">
    <form action="" method="post" novalidate="" class="margin-bottom-0">
    <div class="title_cart_mobile">
    </div>
    <div class="header-cart-content" style="background:#fff;">
        <div class="cart_page_mobile content-product-list">
            @foreach ($cart as $item)
            <div class="item-product item">
                <div class="item-product-cart-mobile"><a href="">	</a><a class="product-images1" href="" title="{{languageName($item['name'])}}"><img width="80" height="150" src="{{$item['image']}}" alt="{{languageName($item['name'])}}"></a></div>
                <div class="title-product-cart-mobile">
                <h3><a href="" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a></h3>
                <p>Giá: <span class="pricechange">{{number_format($item['price'], 0,'','.')}}₫</span></p>
                </div>
                <div class="select-item-qty-mobile">
                <div class="txt_center"><input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}"><button onclick="btnMinus({{$item['id']}})" class="reduced items-count btn-minus" type="button">–</button><input type="text" disabled="" maxlength="12" min="0" class="input-text number-sidebar qtyMobile{{$item['id']}}" id="qtyMobile{{$item['id']}}" name="Lines" size="4" value="{{$item['quantity']}}"><button onclick="btnPlus({{$item['id']}})" class="increase items-count btn-plus" type="button">+</button></div>
                <a class="button remove-item remove-item-cart" href="javascript:;" onclick="removeItemCart({{$item['id']}})">Xoá</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="header-cart-price" style="">
            <div class="title-cart ">
                <h3 class="text-xs-left">Tổng tiền</h3>
                <a class="text-xs-right totals_price_mobile">{{number_format($totalPrice,0,'','.')}}₫</a>
            </div>
            <div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='{{route('checkout')}}'"><span>Tiến hành thanh toán</span></button><button class="btn btn-continue contin" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{route('home')}}'"><span>Tiếp tục mua hàng</span></button></div>
        </div>
    </div>
    </form>
</div>