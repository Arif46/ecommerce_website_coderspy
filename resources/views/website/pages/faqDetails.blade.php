@extends('website.layouts.master')
@section('title','Faq Details')
@section('content')
<style>

.article-sidebar {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    flex: 1 0 auto;
    margin-bottom: 20px;
    padding: 0;
}
.collapsible-sidebar {
    flex: 1;
    max-height: 45px;
    overflow: hidden;
    padding: 10px 0;
    position: relative;
}

.article {
    flex: 1 0 66%;
    max-width: 66%;
    min-width: 640px;
    padding: 0 30px;
}
.sidenav-item {
    border-radius: 4px;
    color: #333333;
    display: block;
    font-weight: 300;
    margin-bottom: 10px;
    padding: 10px;
}
.collapsible-sidebar-title {
    margin-top: 0;
}

.sidenav-title {
    font-size: 15px;
    position: relative;
}
h3 {
    font-size: 18px;
    font-weight: 600;
}

.article-container {
    flex-direction: row;
}

.article-container {
    display: flex;
    flex-direction: column;
}
.wysiwyg-text-align-justify {
    text-align: justify;
}
.article-votes {
    border-top: 1px solid #ddd;
    padding: 30px 0;
    text-align: center;
}
.article-more-questions {
    margin: 10px 0 20px;
    text-align: center;
}

.article-return-to-top {
    display: none;
}
.article-return-to-top {
    border-top: 1px solid #ddd;
}
.container-divider {
    border-top: 1px solid #ddd;
    margin-bottom: 20px;
}
.sub-nav {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 30px;
    min-height: 50px;
    padding-bottom: 15px;
}
.breadcrumbs {
    margin: 0 0 15px 0;
    padding: 0;
}
.breadcrumbs li {
    color: #666;
    display: inline;
    font-weight: 300;
    font-size: 13px;
    max-width: 450px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.search {
    position: relative;
}

input {
    font-weight: 300;
    max-width: 100%;
    box-sizing: border-box;
    outline: none;
    transition: border .12s ease-in-out;
}
.search input[type="search"] {
    border: 1px solid #ddd;
    border-radius: 30px;
    box-sizing: border-box;
    color: #999;
    height: 40px;
    padding-left: 40px;
    padding-right: 20px;
    -webkit-appearance: none;
    width: 100%;
}
.article-container {
    display: flex;
    flex-direction: row !important;
}

.article-sidebar {
    border: 0;
    flex: 0 0 17%;
    height: auto;
}

.collapsible-sidebar {
    max-height: none;
    padding: 0;
}
.collapsible-sidebar {
    flex: 1;
    max-height: 45px;
    overflow: hidden;
    padding: 10px 0;
    position: relative;
}
.search::before {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: #fff;
    color: #ddd;
    content: "\1F50D";
    font-size: 18px;
    position: absolute;
    left: 15px;
}
a, button {
    color: #8ec73f;
    outline: medium none;
}

.sidenav-item {
    border-radius: 4px;
    color: #333333;
    display: block;
    font-weight: 300;
    margin-bottom: 10px;
    padding: 10px;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.article-sidebar {
    border: 0;
    flex: 0 0 17%;
    height: auto;
}

.article-sidebar {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    flex: 1 0 auto;
    margin-bottom: 20px;
    padding: 0;
}
.checked {
    background: #000000;
    color: #ffffff !important;
}
</style>

    <div class="Subscription_area text-center">
        <span><a href="myblend.html">FAQ </a></span>

    </div>
       <div class="breadcrumb-search">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-xl-6">
                        <div class="faq-breadcrumb">
                            <ul>
                                <li><a href="">MyFragranceMe</a></li>
                                <li><a href="">{{ @$faq->name}}</a></li>
                                <li>{{ @$faq->title}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-search">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="faq-sidebar">
                            <h4>Articles in this section</h4>
                            <ul>
                                @foreach ($faqs as $faq_list)
                                    <li @if ($faq_list->title == $faq->title) class="active" @endif ><a href="{{ route('faqDetails', @$faq_list->id) }}">{{@$faq_list->title}}</a></li>
                                @endforeach

                                {{-- <li><a href="">What is perfume</a></li>
                                <li class="active"><a href="">Are your fragrances authentic?</a></li>
                                <li><a href="">Covid19 Virus Update</a></li>
                                <li><a href="">What is perfume</a></li>
                                <li><a href="">Covid19 Virus Update</a></li>
                                <li><a href="">What is perfume</a></li>
                                <li><a href="">Covid19 Virus Update</a></li>
                                <li><a href="">What is perfume</a></li>
                                <li><a href="">Covid19 Virus Update</a></li>
                                <li><a href="">What is perfume</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-8 col-sm-12">
                        <div class="faq-content">
                            <h2>{{ @$faq->title}}</h2>
                            {{-- <p>Absolutely!</p> --}}
                            <p class="mb-60">{{ @$faq->description}}</p>

                            <div class="vote">
                                <p>Was this article helpful?</p>
                                <a href="{{ url('faq-helpful-yes/'.@$faq->id) }}"  class="btnb mr-10 @if (@$helpful->is_helpful==1) checked @endif"> <i class="fa fa-check"></i> Yes</a>
                                <a href="{{ url('faq-helpful-no/'.@$faq->id) }}"  class="btnb mr-10 @if (@$helpful->is_helpful==0) checked @endif"> <i class="fa fa-times"></i> No</a>
                                <p class="small">{{ @$faq_count_helpful}} out of {{@$faq_count}} found this helpful</p>
                                <p>Have more questions? <a href="">Submit a request</a></p>
                            </div>
                        </div>
                        <div class="recent-article">
                            <div class="row">
                                <div class="col-xl-6 col-sm-12">
                                    <h4>Recently viewed articles</h4>
                                    @if ($related_faqs != null)
                                        @foreach ($recent_views as $recent_view)
                                            <a href="">{{ @$recent_view->title}}</a>
                                        @endforeach
                                    @endif

                                    {{-- <a href="">COVID-19 Virus Update</a>
                                    <a href="">What is Scentbird?</a>
                                    <a href="">How do I cancel my subscription?</a> --}}
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <h4>Related articles</h4>
                                        @foreach ($related_faqs as $related_faq)
                                            <a href="{{ route('faqDetails', @$related_faq->id) }}">{{@$related_faq->title}}</a>
                                        @endforeach

                                    {{-- <a href="">What are my subscription options?</a>
                                    <a href="">How do I choose my fragrance?</a>
                                    <a href="">Can I travel with my Scentbird Fragrance?</a>
                                    <a href="">I just signed up! What do I do next?</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection

@push('css')

@endpush

@push('script')

@endpush
