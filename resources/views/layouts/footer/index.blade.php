<footer class="footer">
   <div class="topfoter">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-col">
               <h4>Về chúng tôi</h4>
               <ul class="fot-info">
               <li><b>{{$setting->company}}</b></li>
               <li><b>Địa chỉ</b>: {{$setting->address1}}</li>
               <li><b>Điện thoại</b>: <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a></li>
               <li><b>Email</b>: <a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></li>
               <li><b>Website</b>: <a href="{{route('home')}}" title="{{route('home')}}">{{route('home')}}</a></li>
               </ul>
               <div class="social-fot">
               <h4>Kết nối với chúng tôi</h4>
               <ul class="footer-info">
                  <li>
                     <a href="{{$setting->facebook}}" target="_blank" class="mc-facebook btn-transition dp-flex" title="FACEBOOK">
                     <img src="{{url('frontend/images/social_facebook_icon.svg')}}" alt="facebook">
                     </a>
                  </li>
                  <li>
                     <a href="#" target="_blank" class="mc-instagram btn-transition dp-flex" title="INSTAGRAM">
                     <img src="{{url('frontend/images/social_instagram_icon.svg')}}" alt="instagram">
                     </a>
                  </li>
                  <li>
                     <a href="https://zalo.me/{{$setting->phone1}}" target="_blank" class="mc-zalo btn-transition dp-flex" title="ZALO">
                     <img src="{{url('frontend/images/zalo.png')}}" alt="zalo">
                     </a>
                  </li>
                  <li>
                     <a href="https://www.youtube.com/" target="_blank" class="mc-youtube btn-transition dp-flex" title="YOUTUBE">
                     <img src="{{url('frontend/images/social_youtube_icon.svg')}}" alt="youtube">
                     </a>
                  </li>
               </ul>
               </div>
         </div>
         <div class="clearfix visible-sm"></div>
         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-col">
               <h4>Thông tin</h4>
               <ul>
                  @foreach ($helpCustomer as $item)
                  <li><a href="{{route('helpCus', ['slug'=>$item->slug])}}" rel="nofollow" title="{{$item->title}}">- {{$item->title}}</a></li>
                  @endforeach
               </ul>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
               <h4>Đăng ký nhận tin</h4>
               <div class="form_km">
               <div class="form_km subscribe">
                  <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                  <form id="mc-form" class="newsletter-form" action="{{route('postcontact')}}" method="POST">
                     @csrf
                     <i>
                           <svg viewBox="0 0 512.076 512.076" width="15px">
                           <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
                              v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
                              c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z"/>
                           <path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
                              c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
                              c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
                              c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z"
                              />
                           </svg>
                     </i>
                     <input type="email" value="" placeholder=" Nhập email..." name="email" id="mail" required autocomplete="off">
                     <button class="button_subscribe subscribe" name="subscribe" type="submit" aria-label="Đăng ký nhận tin">ĐĂNG KÝ</button>
                  </form>
                  <div class="mailchimp-alerts ">
                     <div class="mailchimp-submitting"></div>
                     <!-- mailchimp-submitting end -->
                     <div class="mailchimp-success"></div>
                     <!-- mailchimp-success end -->
                     <div class="mailchimp-error"></div>
                     <!-- mailchimp-error end -->
                  </div>
               </div>
               <div class="fot-payment">
                  <h4>Hình thức thanh toán</h4>
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/payment.png')}}" alt="payment" class="lazy">
               </div>
               <div class="bocongthuong">
                  <h4>Chứng nhận</h4>
                  <a href="/" rel="nofollow" class="bct-item" title="Chứng nhận">
                  <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/bocongthuong_1.png')}}" alt="Chứng nhận 1">
                  </a>
                  <a href="/" rel="nofollow" class="bct-item" title="Chứng nhận">
                  <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/bocongthuong_2.png')}}" alt="Chứng nhận 2">
                  </a>
               </div>
               </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-col">
               <h4 style="margin-bottom: 30px;">Fanpage</h4>
               <ul>
               <div style="height: 250px; overflow: hidden; margin-bottom: 15px;">
                  <div class="fb-page" 
                  data-href="{{$setting->facebook}}"
                  data-width="380" 
                  data-hide-cover="false"
                  data-show-facepile="false"></div>
               </div>
               <div id="fb-root"></div>
               <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="FtxIdoSs"></script>
               </ul>
         </div>
      </div>
   </div>
   </div>
   <div class="bottom-footer">
   <div class="container">
      <div class="row">
         <div id="copyright" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fot_copyright a-center">
               <span>© Bản quyền thuộc về <b>Vòng Tay Tài Lộc HG</b> <span class="fixline">|</span> Cung cấp bởi <a href="https://sbtsoftware.vn/" title="SBT" target="_blank" rel="nofollow">SBT</a></span>
         </div>
      </div>
   </div>
   </div>
   <div class="back-to-top" title="Lên đầu trang">
   <img src="{{url('frontend/images/up-arrow.svg')}}" alt="Back to top">
   </div>
</footer>