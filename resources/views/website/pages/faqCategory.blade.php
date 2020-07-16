@extends('website.layouts.master')
@section('title','Faq Categories')
@section('content')
<style>
    .blocks-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    list-style: none;
    padding: 0;
}
    .blocks-item-link {
    color: rgba(7, 7, 7, 1);
    padding: 20px 30px;
}

    .blocks-item {
    border: 1px solid rgb(142, 199, 63);
    border-radius: 4px;
    box-sizing: border-box;
    color: rgba(7, 7, 7, 1);
    display: flex;
    flex: 1 0 340px;
    flex-direction: column;
    justify-content: center;
    margin-right:15px;
    margin-bottom:15px;
    max-width: 100%;
    text-align: center;
}
.promoted-articles {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}
.promoted-articles-item {
    align-self: flex-end;
    flex: 0 0 auto;
    padding-right: 30px;
    width: 33%;
}

.promoted-articles-item a {
    border-bottom: 1px solid #ddd;
    color: #333333;
    display: block;
    padding: 15px 0;
}
.promoted-articles {
    flex-direction: row;
}
.community, .activity {
    border-top: 1px solid #ddd;
    padding: 30px 0;
    text-align: center;
}

a.blocks-item-link:hover {
    background: #8ec73f;
    color: white !important;
}


.article-list-item a {
    color: #333333;
}
.article-list-item {
    border-bottom: 1px solid #ddd;
    font-size: 16px;
    padding: 15px 0;
}
.section_padding {
    padding-top: 0px !important;
}
</style>

        <div class="Subscription_area text-center">
            <span><a href="myblend.html">FAQ </a></span>
        </div>
        <div class="breadcrumb-search">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-breadcrumb">
                            <ul>
                                <li><a href="">MyFragranceMe</a></li>
                                <li><a href="">{{ @$faq_category->name}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-search">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                </div>
              </div>
            </div>





        <div class="section_padding">
            <div class="container"> <div class="section-container">
    <section class="section-content">
      <header class="page-header">
        <h1>{{ @$faq_category->name}}</h1>
        <div class="section-subscribe dropdown" aria-haspopup="true">
  <a class="dropdown-toggle" role="button" data-auth-action="signin" aria-selected="false" title="Opens a sign-in dialog" href="#">Follow</a>
  <span class="dropdown-menu" role="menu" aria-expanded="false">
      <a rel="nofollow" role="menuitem" aria-selected="false" data-method="post" href="/hc/en-us/sections/115001359268-General/subscription.html?subscribe_to_grandchildren=false">New articles</a>
      <a rel="nofollow" role="menuitem" aria-selected="false" data-method="post" href="/hc/en-us/sections/115001359268-General/subscription.html?subscribe_to_grandchildren=true">New articles and comments</a>
  </span>
</div>


      </header>



        <ul class="article-list">

          @foreach ($faqs as $faq)
            <li class="article-list-item ">
            <a href="{{ route('faqDetails', @$faq->id) }}" class="article-list-link">{{@$faq->title}}</a>
            </li>
          @endforeach


            {{-- <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004535428-What-is-Scentbird-" class="article-list-link">What is Scentbird?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004536648-Are-your-fragrances-authentic-" class="article-list-link">Are your fragrances authentic?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004535788-Can-you-please-explain-the-process-from-payment-to-shipment-" class="article-list-link">Can you please explain the process from payment to shipment?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004383347-Will-my-Scentbird-fragrance-subscription-fit-in-my-mailbox-" class="article-list-link">Will my Scentbird fragrance subscription fit in my mailbox?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004536448-Can-I-shop-with-Scentbird-even-if-I-don-t-subscribe-" class="article-list-link">Can I shop with Scentbird even if I don’t subscribe?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004536668-Can-I-travel-with-my-Scentbird-Fragrance-" class="article-list-link">Can I travel with my Scentbird Fragrance?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/360019318114-What-should-I-do-if-I-have-an-allergic-reaction-to-your-products-" class="article-list-link">What should I do if I have an allergic reaction to your products?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004385427-How-do-I-buy-extra-fragrance-cases-" class="article-list-link">How do I buy extra fragrance cases?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004539328-I-want-to-send-Scentbird-as-a-gift-What-s-the-best-way-to-do-that-" class="article-list-link">I want to send Scentbird as a gift. What’s the best way to do that?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004385247-How-do-Gift-Subscriptions-work-" class="article-list-link">How do Gift Subscriptions work?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004539408-How-far-in-advance-can-I-order-a-gift-subscription-" class="article-list-link">How far in advance can I order a gift subscription?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115004385347-How-do-Gift-Sets-work-" class="article-list-link">How do Gift Sets work?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/360003017914-I-am-having-trouble-with-the-website-What-should-I-do-" class="article-list-link">I am having trouble with the website. What should I do?</a>
            </li>

            <li class="article-list-item ">

              <a href="/hc/en-us/articles/115000551974-Is-there-a-phone-number-for-Scentbird-" class="article-list-link">Is there a phone number for Scentbird?</a>
            </li> --}}

        </ul>



    </section>
  </div>

            </div>
        </div>
    </div>


@endsection

@push('css')

@endpush

@push('script')

@endpush
