@extends('website.layouts.master')
@section('title','Faq')
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

</style>

        <div class="Subscription_area text-center">
            <span><a href="myblend.html">FAQ </a></span>
        </div>

        <div class="section_padding">
            <div class="container">
                <section class="section knowledge-base">
                    <section class="categories blocks">
                    <ul class="blocks-list">

                        @foreach ($faq_categories as $faq_category)
                            <li class="blocks-item">
                            <a href="{{url('faq-category/'.$faq_category->id)}}" class="blocks-item-link">
                                    <h4 class="blocks-item-title">{{@$faq_category->name}}</h4>
                                    <p class="blocks-item-description"></p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    </section>
                    <section class="articles" style="margin-top: 25px;">
                        <h3>Most Common Questions</h3>
                        <ul class="article-list promoted-articles">

                            @foreach ($faqs as $faq)
                                <li class="promoted-articles-item">
                                <a href="{{ route('faqDetails', @$faq->id) }}"> {{@$faq->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </section>

                </section>
                    <section class="section activity">
                        <p style="color:#FF458F;">Contact Us 24 Hours Per Day 7 Days A Week! <br> </p>
                    </section>
            </div>
        </div>
    </div>


@endsection

@push('css')

@endpush

@push('script')

@endpush
