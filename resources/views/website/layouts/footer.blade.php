@php
    $setting= App\GeneralSetting::first();
@endphp
<div class="subcribe_area section_padding gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="subscribe_wrap">
                    <h4>{{@$setting->subs_head}}</h4>
                    <p>{{@$setting->subs_middle}}</p>
                    <div class="subscrible_form">
                        <form id="subscription_form" method="post">
                            @csrf
                            <input type="email" id="subscribed_id" name="subscription_email" placeholder="Enter your email address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <p>{{@$setting->subs_bottom}}</p>
                    <div class="social_link">
                        <ul>
                            @if (@$setting->facebook != null)
                                <li>
                                    <a href="{{@$setting->facebook}}" class="fb-icons">
                                        <img src="{{url('public/website/img/icons/green/fb.png')}}" alt="" class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/fb.png')}}" alt="" class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->twitter != null)
                                <li>
                                    <a href="{{@$setting->twitter}}" class="twitter-icons">
                                        <img src="{{url('public/website/img/icons/green/twitter.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/twitter.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->instagram != null)
                                <li>
                                    <a href="{{@$setting->instagram}}" class="instagram-icons">
                                        <img src="{{url('public/website/img/icons/green/instagram.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/instagram.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->linkedin != null)
                                <li>
                                    <a href="{{@$setting->linkedin}}" class="linkedin-icons">
                                        <img src="{{url('public/website/img/icons/green/linkedin.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/linkedin.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->pinterest != null)
                                <li>
                                    <a href="{{@$setting->pinterest}}" class="pinterest-icons">
                                        <img src="{{url('public/website/img/icons/green/pinterest.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/pinterest.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->snapchart != null)
                                <li>
                                    <a href="{{@$setting->snapchart}}" class="snapchart-icons">
                                        <img src="{{url('public/website/img/icons/green/snapchart.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/snapchart.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->tiktok != null)
                                <li>
                                    <a href="{{@$setting->tiktok}}" class="tiktok-icons">
                                        <img src="{{url('public/website/img/icons/green/tiktok.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/tiktok.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                            @if (@$setting->youtube != null)
                                <li>
                                    <a href="{{@$setting->youtube}}" class="youtube-icons">
                                        <img src="{{url('public/website/img/icons/green/youtube.png')}}" alt=""  class="s-icon-2">
                                        <img src="{{url('public/website/img/icons/green_fill/youtube.png')}}" alt=""  class="s-icon-1">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Area-->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer-widget mb-40">
                        <h4>About</h4>
                        <ul>

                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('100_authentication') }}">Counterfeit Education </a></li>
                            <li><a href="{{ url('price-match') }}">Price Match </a></li>
                            <li><a href="{{ route('reward_point') }}">Rewards Points Program</a></li>
                            <li><a href="{{ route('OnlineCommunity') }}">Online Community</a></li>
                            <li><a href="{{ route('ForPress') }}">Newsroom</a></li>
                            <li><a href="{{ route('about') }}#charitytable" id="charitytable">Charitable Giving</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            {{-- // modified by rashed 12 June --}}
                            <li><a href="{{ route('events') }}">Events </a></li>
                            <li><a href="{{ url('careers/working-with-myfrgranceme') }}">Careers  </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer-widget mb-40">
                        <h4>Account</h4>
                        <ul>
                            <?php
                            if(empty(Auth::user())){
                                $myAccount = 'customer-login';
                            }else{
                                $myAccount = 'customer-login';

                            }?>
                            <li><a href="{{url($myAccount)}}">{{__('My Account')}}</a></li>
                            <li><a href="{{url('my-subscription')}}">{{__('My Subscription')}}</a></li>
                            <li><a href="{{url('my-profile')}}">{{__('My Profile')}}</a></li>
                            <li><a href="{{url('my-cart')}}">{{__('My Cart')}}</a></li>
                            <li><a href="{{url('my-orders')}}">{{__('My Orders')}}</a></li>
                            <li><a href="{{url('my-wish-list')}}">{{__('Order Status ')}}</a></li>
                            <li><a href="{{url('my-wish-list')}}">{{__('My Wish List')}}</a></li>
                            <li><a href="{{url('compare-list')}}">{{__('My Compare List')}}</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single-footer-widget mb-40">
                        <h4>Business</h4>
                        <ul>
                            <li><a href="{{url('subscription-agreement')}}">{{__('Subscription Agreement')}}</a></li>
                            <li><a href="{{url('for-business')}}">{{__('For Business')}}</a></li>
                            <li><a href="{{url('blogger-program')}}">{{__('Blogger Program')}}</a></li>
                            <li><a href="{{url('submit-your-idea')}}">{{__('Submit your Idea')}}</a></li>
                            <li><a href="{{url('personal-request')}}">{{__('Personal Request')}}</a></li>
                            <li><a href="{{url('request-fragrance')}}">{{__('Request Fragrance')}}</a></li>
                            <li><a href="{{url('supplier')}}">{{__('Merchant/Brand Sync')}}</a></li>
                            <li><a href="{{url('your-feedback')}}">{{__('Your Feedback')}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-widget mb-40">
                        <h4>Guest Care</h4>
                        <ul>
              
                            <li><a href="{{url('online-shopping')}}">{{__('Online Shopping ')}}</a></li>
                            <li><a href="{{url('terms-and-conditions')}}">{{__('Terms and Conditions ')}}</a></li>
                            <li><a href="{{url('privacy-policy')}}">{{__('Privacy & Cookies Policy')}}</a></li>
                            <li><a href="{{url('return-refund-policy')}}">{{__('Return/Refund Policy ')}}</a></li>
                            <li><a href="{{url('shipping-policy')}}">{{__('Shipping Policy ')}}</a></li>
                            <li><a href="{{url('how-to-shop')}}">{{__('How to Shop ')}}</a></li>
                            <li><a href="{{url('consumer-rights')}}">{{__('Consumer Rights  ')}}</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#Download">{{__('Download the App')}}</a></li>
                            {{-- <li><a href="{{url('Download the App')}}">{{__('Google Assistance (Future) ')}}</a></li> --}}
                            <li><a href="{{url('faq')}}">{{__('FAQ ')}}</a></li>
                            <li><a href="{{url('contact-us')}}">{{__('Contact Us ')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-12">
                    <div class="single-footer-widget mb-40">
                        <h4>Accept Payments :</h4>
                        <img class="mb-20" src="{{url('public/website/img/mastercard.png')}}" alt="">
                        <!-- HDL -->
                        <a href="#">
                            <strong style="color:#fff;">Shipped by :</strong>
                            <img src="{{url('public/website/img/dhl.png')}}" alt="" style="width: 78px;border-radius: 4px;margin-left:5px;">
                        </a>
                        <!-- Google Safe Browse -->
                        <div class="google-safe-browse pt-15">
                            <a href="https://safebrowsing.google.com//" target="_blank">
                                <img src="{{url('public/website/img/icons/green/google_safe_browsing.png')}}" alt="" style="width:116px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright" style="background-color: #8ec73f !importent;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                         <p> &copy; 2020 MyFragranceMe Corporation. All Rights Reserved.  Please Read the Terms of Service & Privacy Policy. </p>
                         <p>Do Not Copy Anything Without Prior Written Permission from MyFragranceMe.</p>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- /Footer Area-->
<!-- Download Modal Start -->
<div class="modal fade cs_modal medium_modal_width" id="Download" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #7BB22E;border: 0;padding: 12px 15px 10px 18px; border-radius: 25px;text-align: center;">
           {{--  <form action="{{route('searchByCode')}}" method="post"> --}}
                @csrf
               {{--  <div class="modal-body"> --}}
                     <div class="play">
                       <a href="#">
                           <img src="{{url('public/')}}/img/app_img/play-1.png" alt="">
                       </a>
                   </div>
                   <div class="play">
                       <a href="#">
                           <img src="{{url('public/')}}/img/app_img/play-2.png" alt="">
                       </a>
                   </div>
              </div>
          </div>
      </div>
<!-- Download Modal End -->

<!-- barcode Modal Start -->
<div class="modal fade cs_modal medium_modal_width" id="addcategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 20px;background:rgba(247,250,252,0.7);">
            <form action="{{route('searchByCode')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="input_wrap" style="border-radius:5px;">
                        <input class="input_form" name="code" placeholder="Enter Barcode" required>
                    </div>
                </div>
                <div class="modal-footer modal_btn">
                   {{--  <button type="button" class="close btnw" data-dismiss="modal" aria-label="Close">Cancel</button> --}}
                    <button type="submit" class="btnw m-0">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- barcode Modal End -->

<!-- click-event -->
<div class="help-box">
    <div class="clik-event">
        <ul>
            <li class="info-bar">
               <div class="contents d-flex align-items-center">
                    <div id="heart">
                        <i class="ti-help"></i>
                    </div>
                    <p class="ml-10">Help</p>
               </div>
            </li>
        </ul>
    </div>
    <!--Star Extra info bar -->
    <div class="extra-inofo-bar-1 " data-background="img/extra_info/banner-2.jpg">
        <div class="message-box">
            <div class="close-icon">
                <button><strong>close</strong></button>
            </div>
            <form action="{{route('ask-question.store')}}" id="question_form" method="post">
                @csrf
                <div class="message-body">
                    <p>Hi there!</p>
                    <p>Type your question below. We'll find the best answers for you.</p>
                    <input type="text" name="question_title" id="question_title" placeholder="Question title" class="form-control question_title" required="">
                    <textarea name="message" id="message" placeholder="What do you need help with?" required></textarea>
                    <button type="submit">Ask Question</button>
                </div>
            </form>
            <div class="message-bottom">
                <p>Powered by myfragrance</p>
            </div>
        </div>
    </div>
</div>

<!-- whats-App -->
<div class="help-box help-box2">
    <div>
        <ul>
            <li>
               <div class="contents d-flex align-items-center">
                   <a href="https://api.whatsapp.com/send?phone=1734446514&text=&source=&data=&app_absent=" target="_blank">
                        <div id="whatsApp" class="d-flex align-items-center">
                            <img src="{{url('public/website/img/whatsApp.jpg')}}" alt="">
                            <p class="ml-10">Whatsapp</p>
                        </div>
                   </a>
               </div>
            </li>
        </ul>
    </div>
</div>

<!-- Get Button -->
<div class="help-box help-box3">
    <div>
        <ul>
            <li>
               <div class="contents d-flex align-items-center">
                   <a href="https://getbutton.io/?utm_campaign=multy_widget&utm_medium=widget&utm_source=demo.ahpretailoperation.com" target="_blank">
                        <div class="get-btn">
                            <p class="ml-10">Leave Message</p>
                        </div>
                   </a>
               </div>
            </li>
        </ul>
    </div>
</div>

